/* IITB–Citadel Securities Quantitative Research Lab
   Plain JavaScript, no libraries. Four small jobs: the mobile menu, the
   eligibility tabs on the Academic Programs page, the photo carousel on the
   Events page, and the contact form.
   Each one looks for its own markup and does nothing if it is not on the
   page, so no page can break another. */

(function () {
  'use strict';

  const doc = document;
  const $ = (selector, root) => (root || doc).querySelector(selector);
  const $$ = (selector, root) => Array.from((root || doc).querySelectorAll(selector));

  /* ------------------------------------------------------ mobile menu -- */

  function initMenu() {
    const toggle = $('.nav-toggle');
    const menu = $('#mobile-nav');
    if (!toggle || !menu) return;

    const isOpen = () => toggle.getAttribute('aria-expanded') === 'true';
    const setOpen = (open) => {
      toggle.setAttribute('aria-expanded', String(open));
      toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
      menu.hidden = !open;
      doc.documentElement.classList.toggle('menu-open', open);
    };

    toggle.addEventListener('click', () => setOpen(!isOpen()));
    doc.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && isOpen()) {
        setOpen(false);
        toggle.focus();
      }
    });
    // The desktop menu takes over at this width (see .nav in site.css).
    window.matchMedia('(min-width: 70rem)').addEventListener('change', (event) => {
      if (event.matches) setOpen(false);
    });
  }

  /* -------------------------------------------------------------- tabs --
     Without JavaScript every panel is simply shown, one after another. */

  function initTabs() {
    $$('[data-tabs]').forEach((root) => {
      const list = $('[role="tablist"]', root);
      if (!list) return;
      const tabs = $$('[role="tab"]', list);
      const panels = tabs.map((tab) => doc.getElementById(tab.getAttribute('aria-controls')));
      if (!tabs.length) return;

      const select = (index, focus) => {
        tabs.forEach((tab, i) => {
          const on = i === index;
          tab.setAttribute('aria-selected', String(on));
          tab.tabIndex = on ? 0 : -1;
          if (panels[i]) panels[i].hidden = !on;
        });
        if (focus) tabs[index].focus();
      };

      tabs.forEach((tab, i) => tab.addEventListener('click', () => select(i, false)));
      list.addEventListener('keydown', (event) => {
        const current = tabs.indexOf(doc.activeElement);
        if (current < 0) return;
        let next = null;
        if (event.key === 'ArrowRight' || event.key === 'ArrowDown') next = (current + 1) % tabs.length;
        else if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') next = (current - 1 + tabs.length) % tabs.length;
        else if (event.key === 'Home') next = 0;
        else if (event.key === 'End') next = tabs.length - 1;
        if (next === null) return;
        event.preventDefault();
        select(next, true);
      });

      const preset = tabs.findIndex((tab) => tab.getAttribute('aria-selected') === 'true');
      select(preset < 0 ? 0 : preset, false);
    });
  }

  /* ---------------------------------------------------------- carousel --
     Cross-fades between photographs every few seconds. It waits while the
     pointer or keyboard focus is on it and while the tab is in the
     background, has a pause button, and does not start by itself for people
     who have asked their device for reduced motion. */

  function initCarousels() {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    $$('[data-carousel]').forEach((root) => {
      const slides = $$('[data-carousel-slide]', root);
      if (slides.length < 2) return;
      const dots = $$('[data-carousel-dot]', root);
      const prev = $('[data-carousel-prev]', root);
      const next = $('[data-carousel-next]', root);
      const toggle = $('[data-carousel-toggle]', root);
      const count = $('[data-carousel-count]', root);
      const interval = Number(root.getAttribute('data-interval')) || 5000;

      let current = Math.max(slides.findIndex((slide) => slide.classList.contains('is-active')), 0);
      let playing = !reduceMotion.matches; // what the visitor chose with the pause button
      let waiting = false;                 // hovered, focused, or tab in the background
      let timer = 0;

      const show = (index) => {
        current = (index + slides.length) % slides.length;
        slides.forEach((slide, i) => {
          slide.classList.toggle('is-active', i === current);
          slide.setAttribute('aria-hidden', String(i !== current));
        });
        dots.forEach((dot, i) => {
          if (i === current) dot.setAttribute('aria-current', 'true');
          else dot.removeAttribute('aria-current');
        });
        if (count) count.textContent = (current + 1) + ' / ' + slides.length;
      };

      const schedule = () => {
        window.clearInterval(timer);
        timer = playing && !waiting ? window.setInterval(() => show(current + 1), interval) : 0;
      };

      const setPlaying = (on) => {
        playing = on;
        root.classList.toggle('is-paused', !on);
        if (toggle) toggle.setAttribute('aria-label', on ? 'Pause the slideshow' : 'Play the slideshow');
        schedule();
      };

      const wait = (on) => {
        waiting = on;
        schedule();
      };

      const go = (index) => {
        show(index);
        schedule(); // restart the clock so the chosen photo gets its full time
      };

      if (prev) prev.addEventListener('click', () => go(current - 1));
      if (next) next.addEventListener('click', () => go(current + 1));
      dots.forEach((dot, i) => dot.addEventListener('click', () => go(i)));
      if (toggle) toggle.addEventListener('click', () => setPlaying(!playing));

      root.addEventListener('mouseenter', () => wait(true));
      root.addEventListener('mouseleave', () => wait(false));
      root.addEventListener('focusin', () => wait(true));
      root.addEventListener('focusout', (event) => {
        if (!root.contains(event.relatedTarget)) wait(false);
      });
      doc.addEventListener('visibilitychange', () => wait(doc.hidden));

      root.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') go(current - 1);
        else if (event.key === 'ArrowRight') go(current + 1);
      });

      // Swipe on touch screens.
      let touchX = null;
      root.addEventListener('touchstart', (event) => {
        touchX = event.touches[0].clientX;
      }, { passive: true });
      root.addEventListener('touchend', (event) => {
        if (touchX === null) return;
        const moved = event.changedTouches[0].clientX - touchX;
        touchX = null;
        if (Math.abs(moved) > 40) go(current + (moved < 0 ? 1 : -1));
      }, { passive: true });

      show(current);
      setPlaying(playing);
    });
  }

  /* ------------------------------------------------------ contact form --
     Posts to assets/php/contact-handler.php, which answers with JSON:
     { success, message, errors: [] }. */

  function initContactForm() {
    const form = $('#contact-form');
    if (!form || !window.fetch || !window.FormData) return;
    const status = $('[data-form-status]', form);
    const button = $('button[type="submit"]', form);
    if (!status || !button) return;
    const idle = button.textContent;
    const fallback = form.getAttribute('data-fallback-email') || '';
    const orEmail = fallback ? ' You can also email ' + fallback + '.' : '';

    const show = (kind, title, items) => {
      status.replaceChildren();
      status.dataset.kind = kind;
      const heading = doc.createElement('p');
      heading.textContent = title;
      status.appendChild(heading);
      if (items && items.length) {
        const list = doc.createElement('ul');
        items.forEach((text) => {
          const item = doc.createElement('li');
          item.textContent = text;
          list.appendChild(item);
        });
        status.appendChild(list);
      }
      status.hidden = false;
      status.focus();
    };

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      status.hidden = true;
      button.disabled = true;
      button.textContent = 'Sending…';

      fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } })
        .then((response) => response.json().catch(() => null))
        .then((data) => {
          if (data && data.success) {
            form.reset();
            show('ok', 'Thank you for your message! We’ll get back to you shortly.');
          } else if (data && Array.isArray(data.errors) && data.errors.length) {
            show('error', 'Please fix the following and submit again:', data.errors);
          } else {
            show('error', ((data && data.message) || 'The message was not sent because the server reported a problem.') + orEmail);
          }
        })
        .catch(() => {
          show('error', 'The message was not sent because the connection failed. Check your connection and submit again.' + orEmail);
        })
        .then(() => {
          button.disabled = false;
          button.textContent = idle;
        });
    });
  }

  [initMenu, initTabs, initCarousels, initContactForm].forEach((init) => {
    try {
      init();
    } catch (error) {
      if (window.console) console.error(error);
    }
  });
})();
