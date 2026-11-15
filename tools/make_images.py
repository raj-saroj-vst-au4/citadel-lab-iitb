#!/usr/bin/env python3
"""Build the optimised images in assets/img/ from the originals in assets/images/.

    python3 tools/make_images.py [EXTRA_SOURCE_DIR]

The site never serves the originals: several are 4-34 MB. This script writes
small WebP derivatives (square portrait crops, resized photographs) plus the
JPEG used for social-share previews.

Five originals are owned by `apache` (mode 700) on the production host and
cannot be pulled by rsync: sudeep.jpg, Varsha.png, ashish2.jpg,
iitbcitadel.png, SKPH7801.JPG. They are publicly served, so fetch them over
HTTP into a folder and pass that folder as EXTRA_SOURCE_DIR:

    for f in sudeep.jpg Varsha.png ashish2.jpg iitbcitadel.png; do
      curl -sO https://www.som.iitb.ac.in/citadel/assets/images/$f
    done

Adding a person: drop the original into assets/images/, add a line to PEOPLE
below, run the script, then add the person to content/people.php.

Needs Pillow (`pip install pillow`). Not part of the deployed site.
"""
import os
import sys

from PIL import Image, ImageOps

Image.MAX_IMAGE_PIXELS = None  # iitbcitadel.png is 6715 x 3565

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
SRC = os.path.join(ROOT, "assets", "images")
OUT = os.path.join(ROOT, "assets", "img")
EXTRA = sys.argv[1] if len(sys.argv) > 1 else None

# slug: (source file, centre x, centre y, side)
# centre is a fraction of the image width/height; side is a fraction of the
# shorter edge. The square is clamped to stay inside the image.
PEOPLE = {
    "sudeep-bapat":            ("sudeep.jpg",             0.50, 0.46, 0.90),
    "svd-nageswara-rao":       ("svdnr-profile.jpeg",     0.44, 0.46, 0.92),
    "ankur-kulkarni":          ("ankurkulkarni.jpeg",     0.50, 0.42, 0.92),
    "avishek-ghosh":           ("avishekg.jpg",           0.47, 0.50, 0.84),
    "ayan-bhattacharya":       ("ayan_bhattacharya.jpg",  0.50, 0.44, 1.00),
    "harsha-hutridurga":       ("harshah.jpg",            0.50, 0.36, 1.00),
    "k-suresh-kumar":          ("ksuresh.jpg",            0.50, 0.36, 1.00),
    "ks-mallikarjuna-rao":     ("ksmallikarjuna.jpg",     0.50, 0.46, 1.00),
    "n-hemachandra":           ("nhemachandra.jpg",       0.50, 0.46, 1.00),
    "parthe-pandit":           ("parthepandit.jpeg",      0.50, 0.50, 1.00),
    "piyush-pandey":           ("profpiyush.jpg",         0.665, 0.52, 0.66),
    "puja-padhi":              ("pujapadhi.jpg",          0.50, 0.42, 0.84),
    "radhendushka-srivastava": ("radhendushka.jpg",       0.50, 0.46, 1.00),
    "ramesh-kuruva":           ("rameshkuruva.jpg",       0.52, 0.50, 1.00),
    "rohan-chinchwadkar":      ("rohanchinchwadkar.jpeg", 0.48, 0.46, 0.96),
    "s-baskar":                ("sbaskar-recent.jpg",     0.50, 0.46, 1.00),
    "anshul-pawaskar":         ("anshul.jpg",             0.50, 0.50, 1.00),
    "aryan-bhambu":            ("aryan.jpg",              0.50, 0.46, 0.92),
    "ashish-kela":             ("ashish2.jpg",            0.50, 0.25, 0.46),
    "salam-rabindrajit-luwang": ("salam.jpg",             0.50, 0.50, 1.00),
    "sayar-ahmad-shah":        ("sayar.jpg",              0.54, 0.50, 0.94),
    "varsha-reddy-manne":      ("Varsha.png",             0.50, 0.40, 0.78),
    "salman-shaikh":           ("salman.jpeg",            0.62, 0.42, 0.78),
}

# output name: (source file, list of target widths)
PHOTOS = {
    "mou-group":    ("iitbcitadel.png", [1600, 900]),
    "mou-exchange": ("mission.JPG",     [1600, 900]),
    "symposium-1":  ("symposium-1.jpeg", [1100]),
    "symposium-2":  ("symposium-2.jpeg", [1100]),
    "symposium-3":  ("symposium-3.jpeg", [1100]),
    "symposium-4":  ("symposium-4.jpeg", [760]),
    "symposium-5":  ("symposium-5.jpeg", [760]),
    "symposium-6":  ("symposium-6.jpeg", [760]),
    "symposium-7":  ("symposium-7.jpeg", [760]),
}

# output name: source file. Research-area and project artwork, 900 px wide.
ARTWORK = {
    "areas/quantitative-finance": "quantfin.jpeg",
    "areas/algorithmic-trading":  "alogtrading.png",
    "areas/financial-technology": "fintech.jpeg",
    "areas/risk-analytics":       "riskanalytics.jpeg",
    "projects/project-1":         "project1.png",
    "projects/project-2":         "project2.png",
    "projects/project-3":         "project3.png",
    "projects/project-4":         "project4.png",
    "projects/project-5":         "project5.png",
    "projects/project-6":         "project6.png",
}


# output name: source file. Logos with transparency, 600 px wide.
LOGOS = {
    "events/qrd-logo":       "qrd-logo.png",
    "events/qrd-logo-white": "qrd-logo-white.png",
}


def find(name):
    for folder in (SRC, EXTRA):
        if folder:
            path = os.path.join(folder, name)
            if os.path.isfile(path) and os.access(path, os.R_OK):
                return path
    return None


def load(name):
    path = find(name)
    if not path:
        print(f"  skipped {name}: not found locally (see the docstring)")
        return None
    return ImageOps.exif_transpose(Image.open(path)).convert("RGB")


def square(im, cx, cy, side_frac):
    w, h = im.size
    side = int(min(w, h) * side_frac)
    left = min(max(int(cx * w - side / 2), 0), w - side)
    top = min(max(int(cy * h - side / 2), 0), h - side)
    return im.crop((left, top, left + side, top + side))


def save(im, rel, **kw):
    path = os.path.join(OUT, rel)
    os.makedirs(os.path.dirname(path), exist_ok=True)
    im.save(path, **kw)
    print(f"  {rel:44s} {im.width}x{im.height}  {os.path.getsize(path) / 1024:6.1f} KB")


def main():
    print("People")
    for slug, (name, cx, cy, side) in PEOPLE.items():
        im = load(name)
        if im is None:
            continue
        crop = square(im, cx, cy, side)
        # 640 px is plenty for the largest portrait on the site. A few originals
        # are tiny (120-200 px); those are enlarged to 400 px here, with better
        # resampling than a browser would use, so the cards do not look blocky.
        size = max(min(crop.width, 640), 400)
        crop = crop.resize((size, size), Image.LANCZOS)
        save(crop, f"people/{slug}.webp", format="WEBP", quality=82, method=6)

    print("Photographs")
    for out, (name, widths) in PHOTOS.items():
        im = load(name)
        if im is None:
            continue
        for width in widths:
            width = min(width, im.width)
            resized = im.resize((width, round(im.height * width / im.width)), Image.LANCZOS)
            save(resized, f"photos/{out}-{width}.webp", format="WEBP", quality=80, method=6)

    print("Artwork")
    for out, name in ARTWORK.items():
        im = load(name)
        if im is None:
            continue
        width = min(900, im.width)
        resized = im.resize((width, round(im.height * width / im.width)), Image.LANCZOS)
        save(resized, f"{out}.webp", format="WEBP", quality=80, method=6)

    print("Logos")
    # Transparent logos keep their alpha channel. qrd-logo*.png come from
    # https://qrdconference.com/assets/images/logos/ (logo-trans.png, logo-white-trans.png).
    for out, name in LOGOS.items():
        path = find(name)
        if not path:
            print(f"  skipped {name}: not found locally")
            continue
        im = Image.open(path).convert("RGBA")
        width = min(600, im.width)
        resized = im.resize((width, round(im.height * width / im.width)), Image.LANCZOS)
        save(resized, f"{out}.webp", format="WEBP", quality=90, method=6)

    print("Social share image")
    im = load("iitbcitadel.png")
    if im is not None:
        # 1200 x 630, cropped around the people and the screen behind them.
        w, h = im.size
        target = 1200 / 630
        crop_h = int(h * 0.80)
        crop_w = int(crop_h * target)
        left = (w - crop_w) // 2
        top = int(h * 0.04)
        og = im.crop((left, top, left + crop_w, top + crop_h)).resize((1200, 630), Image.LANCZOS)
        save(og, "og.jpg", format="JPEG", quality=84, optimize=True, progressive=True)


if __name__ == "__main__":
    main()
