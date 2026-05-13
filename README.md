# wordpress-ai-theme
Basic theme for WordPress made with Chat GPT & Gemini

Here is the prompt used to generate the theme (edit 13/05/2026)

Feel free to edit it, ask modification to any ai, and test the result

IMPORTANT NOTICE : Due to complexity of the prompt, use it step by step (use "continue" after each step) to avoid errors and bad output

_____

``` # My Ai Theme — Enterprise WordPress FSE Theme Generation Prompt

# ROLE

You are an Expert WordPress Developer specialized in:
- Full Site Editing (FSE)
- Gutenberg Block Themes
- WordPress 6.9+
- WooCommerce
- theme.json Version 3 architecture
- Accessibility (WCAG)
- Performance optimization
- Production-ready WordPress engineering

Your task is to generate a complete production-ready WordPress Block Theme named:

- Theme Name: My Ai Theme
- Folder Name: myaitheme

The theme MUST be fully installable directly inside:

/wp-content/themes/myaitheme

Generate ALL required files with valid syntax and production-quality code.

If possible, also generate a valid installable ZIP archive:
myaitheme.zip

The final theme MUST be:
- modern
- minimalist
- SaaS-style
- responsive
- accessible
- lightweight
- Gutenberg-native
- WooCommerce compatible
- entirely free of Block Recovery errors

---

# CRITICAL REQUIREMENTS (ANTI-BLOCK-RECOVERY)

IMPORTANT:
The generated theme MUST NOT produce ANY:
- Block Recovery errors
- Invalid block warnings
- Template parsing errors
- Unsupported block warnings

STRICT RULES:

1. Use ONLY officially supported WordPress core blocks.

NEVER use:
- core/main
- core/container
- core/section
- experimental blocks
- plugin-dependent blocks
- custom blocks unless explicitly registered

2. Every block comment MUST contain valid JSON.

3. Opening and closing blocks MUST perfectly match.

4. Every block attribute MUST generate the correct WordPress CSS classes.

Example:

backgroundColor:"black"

MUST generate:
class="has-black-background-color"

5. Avoid arbitrary raw HTML whenever possible.

Prefer native WordPress blocks.

6. Validate all generated templates against Gutenberg parser rules.

Ensure:
- valid block nesting
- no orphaned blocks
- no malformed comments
- no unsupported attributes
- valid HTML5 structure
- semantic markup

7. All templates MUST begin with:

<!-- wp:template-part {"slug":"header","theme":"myaitheme","tagName":"header"} /-->

And MUST end with:

<!-- wp:template-part {"slug":"footer","theme":"myaitheme","tagName":"footer"} /-->

---

# REQUIRED FILE STRUCTURE

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
│   ├── hero-section.php
│   ├── benefits-section.php
│   ├── features-grid.php
│   ├── testimonials.php
│   ├── pricing-table.php
│   ├── team-members.php
│   ├── faq.php
│   ├── newsletter.php
│   ├── call-to-action.php
│   └── latest-posts.php
│
└── styles/
    ├── light.json
    └── dark.json

---

# STYLE.CSS REQUIREMENTS

Create a fully valid WordPress theme header.

Required fields:
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

Include minimal production-ready CSS for:
- body
- headings
- paragraphs
- links
- buttons
- forms
- images
- WooCommerce consistency
- accessibility focus states

Must include:
- responsive styles
- mobile-first design
- lightweight CSS
- no unnecessary code

Include fallback CSS for:
- input:focus
- textarea:focus
- select:focus
- button:hover
- WooCommerce form fields
- search block input
- comment form fields

---

# FUNCTIONS.PHP REQUIREMENTS

Use ONLY prefixed functions:

myaitheme_

Theme supports:
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

Ensure WooCommerce Blocks compatibility.

Register custom block styles:
- list/checkmark
- list/arrow
- list/no-bullets
- button/fill
- button/outline
- button/ghost
- button/pill

Enqueue:
- style.css
- assets/script.js
- assets/editor-style.css

Load translations:
load_theme_textdomain('myaitheme');

Requirements:
- no PHP notices
- no warnings
- WordPress Coding Standards
- escaped outputs
- secure code
- production-ready

---

# THEME.JSON REQUIREMENTS

Use:
- Version 3
- valid $schema
- WordPress 6.9+ standards

Enable:
- fluid typography
- appearance tools
- root padding aware alignments

contentSize:
620px

wideSize:
1140px

---

# TYPOGRAPHY SYSTEM

Enable:
"fluid": true

Font Families:
- System
- Serif
- Monospace

Font Sizes:
- Small: 0.875rem
- Medium: fluid min 1rem max 1.125rem
- Large: fluid min 1.5rem max 1.75rem
- XL: fluid min 2rem max 2.5rem
- XXL: fluid min 3rem max 3.75rem
- Display: fluid min 4rem max 5rem

Line Heights:
- Body: 1.5
- Headings: 1.125

---

# COLOR SYSTEM

Disable defaults:
- defaultPalette: false
- defaultGradients: false
- defaultDuotone: false

Custom palette:
- primary
- secondary
- foreground
- background
- contrast

Suggested colors:
- White: #ffffff
- Black: #333333
- Dark Gray: #666666
- Gray: #888888
- Light Gray: #d3d3d3
- Very Light Gray: #f4f4f4
- Transparent

---

# SPACING SYSTEM (STRICT 8PX GRID)

Use ONLY spacing values aligned to:
- 4px → 0.25rem
- 8px → 0.5rem
- 16px → 1rem
- 24px → 1.5rem
- 32px → 2rem
- 48px → 3rem
- 64px → 4rem
- 96px → 6rem
- 128px → 8rem

Maintain:
- consistent vertical rhythm
- spacing consistency
- no arbitrary values

---

# RESPONSIVE LAYOUT

Container Padding:
- Desktop: 2rem
- Tablet: 1.5rem
- Mobile: 1rem

Requirements:
- fully responsive
- mobile-first
- clean tablet layouts
- optimized mobile navigation
- fluid spacing
- fluid typography

---

# WORDPRESS 6.9 FORM ELEMENTS

Inside:
styles.elements

Define styles for:
- form
- label
- input
- textarea
- select
- button

Include:
- typography
- colors
- border
- border radius
- padding
- spacing
- focus styles
- hover styles

Inputs / Textareas / Selects:
- background: #ffffff
- text color: #333333
- border: 1px solid #d3d3d3
- border radius: 0.5rem
- padding: 0.75rem 1rem
- line height: 1.5

Labels:
- font size: small
- font weight: 600
- color: #333333
- margin bottom: 0.5rem

Focus States:
- visible outline
- outline color: #666666
- outline width: 2px
- outline offset: 2px
- border color: #666666

Buttons:
- background: #333333
- text: #ffffff
- border radius: 0.5rem
- padding: 0.75rem 1.5rem
- hover background: #888888
- hover text: #ffffff

---

# TEMPLATE REQUIREMENTS

Use ONLY valid core blocks such as:
- core/group
- core/query
- core/post-template
- core/post-title
- core/post-featured-image
- core/post-content
- core/navigation
- core/site-title
- core/site-logo
- core/site-tagline
- core/search
- core/buttons
- core/button
- core/query-pagination
- core/comments

---

# REQUIRED TEMPLATE CONTENT

## index.html

Must display:
- Query Loop
- featured image
- clickable title
- author
- date
- excerpt
- pagination

## single.html

Must display:
- featured image
- title
- categories
- date
- author
- post content
- comments block
- post navigation

## page.html

Must display:
- title
- featured image
- page content

## archive.html

Must display:
- archive title
- archive description
- Query Loop
- pagination

## home.html

Optimized latest posts layout.

## front-page.html

Must use patterns:
- hero
- features
- CTA
- latest posts

## search.html

Must display:
- search title
- search form
- results list

## category.html / tag.html / author.html

Custom archive layouts using responsive post grids.

## 404.html

Must include:
- “Page Not Found”
- search block
- button back to homepage

---

# TEMPLATE PARTS

## header.html

Must include:
- site logo
- site title
- site tagline
- responsive navigation
- semantic HTML5
- mobile-friendly layout

## footer.html

Must include:
- site logo
- navigation
- social links
- copyright text:

© [current year] [site title] – Powered by WordPress

---

# BLOCK PATTERNS

Create reusable patterns:
- hero-section.php
- benefits-section.php
- features-grid.php
- testimonials.php
- pricing-table.php
- team-members.php
- faq.php
- newsletter.php
- call-to-action.php
- latest-posts.php

Requirements:
- translation-ready
- clean block markup
- valid block JSON
- accessible
- responsive

---

# DESIGN REQUIREMENTS

Style:
- modern SaaS aesthetic
- minimalist
- clean whitespace
- subtle shadows
- rounded corners
- excellent readability

Accessibility:
- WCAG compliant
- keyboard focus visible
- proper heading hierarchy
- sufficient color contrast
- semantic landmarks

---

# PERFORMANCE REQUIREMENTS

Optimize for:
- lightweight CSS
- minimal JS
- fast loading
- clean markup
- no unnecessary dependencies
- minimal DOM complexity

---

# WOOCOMMERCE REQUIREMENTS

Ensure compatibility with:
- Shop page
- Product archive
- Single product
- Cart Block
- Checkout Block
- Product Grid Block
- Mini Cart Block
- WooCommerce forms
- WooCommerce Blocks

Do NOT heavily override WooCommerce core styles.

---

# README.MD REQUIREMENTS

Include:
- installation instructions
- theme structure
- customization guide
- WooCommerce support
- development notes
- style variations usage
- child theme recommendations

---

# FINAL VALIDATION REQUIREMENTS

Before delivering:

1. Validate:
- theme.json
- style variations JSON
- PHP syntax
- block markup
- template syntax

2. Ensure:
- no invalid blocks
- no unsupported blocks
- no malformed comments
- no missing files
- no placeholder content
- no syntax errors

3. Ensure every template:
- starts with header template-part
- ends with footer template-part

4. Ensure:
- installable ZIP
- production-ready structure
- immediate activation without errors

5. Run final audit for:
- Gutenberg Block Recovery risks
- invalid CSS classes
- invalid JSON
- invalid block attributes
- malformed nesting
- accessibility issues
- responsive issues

Deliver complete code for ALL files with their relative paths.
```


