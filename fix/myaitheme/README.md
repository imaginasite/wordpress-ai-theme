# My Ai Theme

My Ai Theme is a production-ready WordPress Block Theme built for Full Site Editing, Gutenberg, WordPress 6.9+, and WooCommerce.

## Installation

1. Upload the `myaitheme` folder to `/wp-content/themes/` or install `myaitheme.zip` from **Appearance → Themes → Add New → Upload Theme**.
2. Activate **My Ai Theme**.
3. Open **Appearance → Editor** to customize templates, template parts, styles, and patterns.

## Theme structure

- `style.css` — Theme header and lightweight fallback styles.
- `functions.php` — Theme setup, supports, WooCommerce support, and asset loading.
- `theme.json` — Global settings, presets, typography, spacing, layout, colors, and WordPress 6.9 form element styles.
- `templates/` — Full Site Editing block templates.
- `parts/` — Header and footer template parts.
- `patterns/` — Reusable hero, features, call-to-action, and latest posts patterns.
- `styles/` — Light and dark style variations.
- `assets/` — Editor CSS and minimal JavaScript.

## Customization

Use the Site Editor to customize colors, typography, spacing, navigation, header/footer layouts, and page templates. The theme uses an 8px spacing system and fluid type presets for consistent responsive design.

## WooCommerce support

The theme declares WooCommerce support and includes fallback styling for WooCommerce buttons, checkout/account fields, and form rows. WooCommerce Blocks inherit theme.json colors, typography, spacing, and button styles.

## Development notes

- Text domain: `myaitheme`.
- Minimum WordPress version: 6.9.
- Minimum PHP version: 7.4.
- Functions are prefixed with `myaitheme_`.
- No external front-end dependencies are required.
