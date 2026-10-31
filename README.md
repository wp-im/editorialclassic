# Editorial Classic

A text-only WordPress Classic Theme for article-led publications. Its long home arranges posts in nine editorial sections: a lead and cross-category rail, department shelves, essay dossier, reviews, dated dispatches, short notes, paired reading, a guided route, and an archive index.

This edition uses monochrome editorial typography. The original Home Editorial, Home Mosaic, and Home Stream templates remain available.

## Local Studio site

- Site: http://localhost:8896/
- Active theme directory: `editorialclassic`
- The local sample publication has 26 posts across Essays, Reviews, Dispatches, and Notes.
- Classic keeps the original Editorial front page and shows the long home at `/showcase/`; Plus uses the long home as its front page.

## Public demonstration

- Site: https://wordpress.im/editorialclassic/
- Nine-section reading index: https://wordpress.im/editorialclassic/showcase/
- The site content and Customizer settings are maintained in WordPress, outside this theme repository.

## Install

Upload `build/editorialclassic-1.4.0.zip` through WordPress Network Admin, enable it for the intended site, then activate it there. Choose a static front page using the **Long Editorial Home** or **Home Editorial** page template. Posts, page content, menus, and Customizer settings belong to the WordPress site and are separate from the theme package.

The theme uses system fonts, produces no automatic featured images, and does not request external font files. It provides Classic Editor starter HTML in `starter-html/`. See `docs/user-manual-zh.md` for page and template usage.

## Source and validation

The theme source is in this directory. `site-content/` contains local import files and is excluded from Git. The 1.4.0 source was checked with PHP syntax validation, Stylelint, JavaScript syntax checking, WordPress Studio runtime pages, and desktop/mobile overflow checks. Historical development notes under `docs/` describe earlier versions and should not be read as current release acceptance.
