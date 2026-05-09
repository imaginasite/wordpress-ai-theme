# wordpress-ai-theme
Basic theme for WordPress made with Chat GPT.

Here is the prompt used to generate the theme (edit 05/2026)

_____

```
Generate a production-ready WordPress Block Theme fully compatible with Full Site Editing (FSE), named “My Ai Theme”, using the folder name myaitheme.

The theme must be modern, clean, responsive, accessible, optimized for Gutenberg, and compatible with WordPress 6.9+ and WooCommerce.

The final output must contain all files ready to be installed directly inside:

/wp-content/themes/myaitheme

If possible, also generate a valid ZIP archive of the full theme.

==================================================
REQUIRED FILE STRUCTURE
==================================================

myaitheme/
│
├── style.css
├── functions.php
├── theme.json
├── screenshot.png
├── README.md
│
├── assets/
│   ├── editor-style.css
│   └── script.js
│
├── templates/
│   ├── index.html
│   ├── single.html
│   ├── page.html
│   ├── archive.html
│   ├── home.html
│   ├── front-page.html
│   ├── search.html
│   ├── category.html
│   ├── tag.html
│   ├── author.html
│   └── 404.html
│
├── parts/
│   ├── header.html
│   └── footer.html
│
├── patterns/
│   ├── hero.php
│   ├── features.php
│   ├── call-to-action.php
│   └── latest-posts.php
│
└── styles/
    ├── light.json
    └── dark.json

==================================================
STYLE.CSS
==================================================

Create a fully valid WordPress theme header:

- Theme Name: My Ai Theme
- Theme URI
- Author
- Author URI
- Description
- Version
- Requires at least: 6.9
- Tested up to: 6.9
- Requires PHP: 7.4
- Text Domain: myaitheme
- License: GPL v2 or later
- License URI
- Tags

Also include minimal base styles for:
- body
- headings
- links
- buttons
- forms
- images
- accessibility focus states

The stylesheet must:
- be responsive
- follow modern CSS practices
- avoid unnecessary code
- support WooCommerce styling consistency

Include fallback CSS for:
- input:focus
- textarea:focus
- select:focus
- button:hover
- WooCommerce form fields
- search block input
- comment form fields

==================================================
TEMPLATE REQUIREMENTS
==================================================

All templates inside /templates/ must contain valid WordPress block markup.

Every template MUST begin with:

<!-- wp:template-part {"slug":"header","theme":"myaitheme","tagName":"header"} /-->

And MUST end with:

<!-- wp:template-part {"slug":"footer","theme":"myaitheme","tagName":"footer"} /-->

==================================================
REQUIRED TEMPLATES
==================================================

index.html
Displays:
- post list
- featured image
- clickable title
- date
- author
- excerpt
- pagination

single.html
Displays:
- featured image
- title
- date
- categories
- author
- post content
- comments block
- post navigation

page.html
Displays:
- page title
- featured image
- page content

archive.html
Displays:
- archive title
- archive description
- post loop
- pagination

home.html
Blog homepage optimized for latest posts.

front-page.html
Modern homepage layout using patterns:
- hero section
- features
- CTA
- latest posts

search.html
Displays search results and search form.

category.html / tag.html / author.html
Custom archive layouts with titles and post grids.

404.html
Must include:
- “Page not found” message
- search block
- button back to homepage

==================================================
TEMPLATE PARTS
==================================================

header.html

Must include:
- site logo
- site title
- site tagline
- responsive navigation block
- mobile-friendly layout

Use semantic HTML and proper spacing.

footer.html

Must include:
- site logo
- navigation
- copyright text:
© [current year] [site title] – Powered by WordPress
- social links block

==================================================
PATTERNS
==================================================

Create reusable block patterns:

hero.php
Large hero section with:
- heading
- paragraph
- CTA button
- image or cover block

features.php
3-column features section.

call-to-action.php
Centered CTA section with button.

latest-posts.php
Latest posts grid.

Patterns must:
- be registered properly
- support translation
- use clean block markup

==================================================
FUNCTIONS.PHP
==================================================

The file must:

Theme Supports:
- editor-styles
- wp-block-styles
- appearance-tools
- responsive-embeds
- custom-line-height
- custom-spacing
- custom-units
- link-color
- border
- typography
- align-wide
- automatic-feed-links
- title-tag
- post-thumbnails
- html5
- woocommerce

WooCommerce:
add_theme_support('woocommerce');

Ensure compatibility with WooCommerce blocks.

Enqueue:
- style.css in frontend
- assets/script.js in footer
- assets/editor-style.css in block editor

Internationalization:
load_theme_textdomain('myaitheme');

Security & Standards:
- Prefix all functions with myaitheme_
- Escape outputs properly
- Follow WordPress Coding Standards
- No PHP warnings/notices

==================================================
THEME.JSON
==================================================

Use:
- version: 3
- proper $schema
- WordPress 6.9+ standards
- WordPress 6.9 form element styling support

==================================================
TYPOGRAPHY
==================================================

Enable fluid typography:
"fluid": true

Font Families:
- System
- Serif
- Monospace

Font Sizes:
- Small: 0.875rem
- Medium: fluid min 1rem max 1.25rem
- Large: fluid min 1.125rem max 1.5rem
- XL: fluid min 1.75rem max 2rem
- XXL: fluid min 2.15rem max 3rem

==================================================
ELEMENTS
==================================================

Text:
- medium font size
- line height 1.5

Headings:
- line height 1.125

Links:
- underline
- hover color

Buttons:
- background color
- text color
- hover styles

==================================================
WORDPRESS 6.9 FORM ELEMENTS
==================================================

Inside styles.elements, define global styles for:

- form
- label
- input
- textarea
- select
- button

Form elements must include:
- typography
- color
- background color
- border color
- border width
- border radius
- padding
- spacing
- focus styles
- hover styles where supported

Inputs / Textareas / Selects:
- background: #ffffff
- text color: #333333
- border: 1px solid #d3d3d3
- border radius: 0.5rem
- padding: 0.75rem 1rem
- font size: medium
- line height: 1.5

Labels:
- font size: small
- font weight: 600
- color: #333333
- margin bottom: 0.5rem

Focus state:
- visible outline
- outline color: #666666
- outline width: 2px
- outline offset: 2px
- border color: #666666

Buttons:
- background color: #333333
- text color: #ffffff
- border radius: 0.5rem
- padding: 0.75rem 1.5rem
- hover background: #888888
- hover text color: #ffffff

==================================================
COLOR SYSTEM
==================================================

Disable defaults:
- defaultPalette: false
- defaultGradients: false
- defaultDuotone: false

Custom palette:
- White: #ffffff
- Black: #333333
- Dark Gray: #666666
- Gray: #888888
- Light Gray: #d3d3d3
- Very Light Gray: #f4f4f4
- Transparent

==================================================
LAYOUT
==================================================

contentSize: 620px
wideSize: 1140px

Enable:
"useRootPaddingAwareAlignments": true

==================================================
SPACING SYSTEM
==================================================

Create a consistent spacing scale based on an 8px grid system.

All spacing values throughout the theme must follow this spacing scale:

- 4px → 0.25rem
- 8px → 0.5rem
- 16px → 1rem
- 24px → 1.5rem
- 32px → 2rem
- 48px → 3rem
- 64px → 4rem
- 96px → 6rem
- 128px → 8rem

theme.json spacing presets:

"spacing": {
  "units": ["px", "rem", "%", "vw"],
  "blockGap": "24px",
  "spacingSizes": [
    {
      "name": "XS",
      "slug": "xs",
      "size": "0.5rem"
    },
    {
      "name": "SM",
      "slug": "sm",
      "size": "1rem"
    },
    {
      "name": "MD",
      "slug": "md",
      "size": "1.5rem"
    },
    {
      "name": "LG",
      "slug": "lg",
      "size": "2rem"
    },
    {
      "name": "XL",
      "slug": "xl",
      "size": "3rem"
    },
    {
      "name": "2XL",
      "slug": "2xl",
      "size": "4rem"
    },
    {
      "name": "3XL",
      "slug": "3xl",
      "size": "6rem"
    }
  ]
}

==================================================
GRID & RHYTHM
==================================================

Use an 8px vertical rhythm and layout grid system:
- all margins and paddings must align to the spacing scale
- avoid arbitrary spacing values
- maintain visual consistency across all templates and patterns

==================================================
RESPONSIVE SPACING
==================================================

Spacing should scale naturally on mobile and desktop while preserving the 8px rhythm.

Prefer:
- 16px / 24px spacing on mobile
- 32px / 48px spacing on desktop sections

Global block gap:
"blockGap": "24px"

Container Padding:

Desktop:
- left/right: 2rem

Tablet:
- left/right: 1.5rem

Mobile:
- left/right: 1rem

Use fluid spacing whenever appropriate while preserving spacing scale consistency.

==================================================
HOVER STYLES
==================================================

Links:
- underline
- hover color #666666

Buttons:
- hover background #888888
- hover text #ffffff

==================================================
RESPONSIVE DESIGN
==================================================

Theme must:
- be fully responsive
- support mobile/tablet/desktop
- include mobile navigation behavior
- use fluid spacing and typography
- keep layouts clean on small screens

==================================================
ACCESSIBILITY
==================================================

Follow WCAG best practices:
- visible keyboard focus
- sufficient color contrast
- semantic landmarks
- accessible navigation
- proper heading hierarchy
- accessible buttons and forms

==================================================
PERFORMANCE
==================================================

Optimize for:
- lightweight CSS
- minimal JavaScript
- fast loading
- clean markup
- no unnecessary dependencies

==================================================
COMPATIBILITY
==================================================

Must support:
- WordPress 6.9+
- theme.json version 3
- WordPress 6.9 form element styling via styles.elements
- Gutenberg Site Editor
- WooCommerce
- WooCommerce Blocks
- latest PHP versions

==================================================
README.MD
==================================================

Include:
- installation instructions
- theme structure
- customization instructions
- WooCommerce support notes
- development notes

==================================================
EXPORT REQUIREMENTS
==================================================

The final generated theme must:
- be installable directly as a ZIP
- contain no placeholder files
- contain no missing templates
- contain valid syntax
- follow WordPress standards
- be production-ready
- work immediately after activation without errors
```
__________________________________

This is a starter theme with woocommerce support 
Edit it : add your own values and specify other properties you need
Once the theme is generated, install it and test it to be sure everything is ok. It should be but sometimes, the content generated is not fully compatible with WordPress default Gutenberg tags.


