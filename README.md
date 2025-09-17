# wordpress-ai-theme
Basic theme for WordPress made with Chat GPT.

Here is the prompt used to generate the theme :

_____

Generate a basic WordPress block theme compatible with the Site Editor (Full Site Editing), titled “My Ai Theme”, with the main folder named myaitheme.

## 1. 📁 Standard HTML Templates in /templates/

Include actual WordPress block content in each template:

- **index.html**: list of posts with clickable titles, post excerpts, publication dates, and pagination.

- **single.html**: full view of a single post (title, date, content, author).

- **page.html**: full view of a single page (title + content).

- **archive.html**: list of posts filtered by category, tag, or date, with pagination.

- **404.html**: error message “Page not found” with a search form.

## 2. 📁 Template Parts in /parts/

 - **header.html**: must include:

	- site-logo block

	- site-tagline block

	- navigation block

- **footer.html**: must include:

	- site-logo block

	- a paragraph: 
	© [current year] [site title] – All rights reserved.

## 3. 📁 Static Files in /assets/

- **editor-style.css**: for Gutenberg editor styling

- **script.js**: for custom theme scripts

## 4. 🛠 File: functions.php

Declare:

- Gutenberg support (with add_theme_support( 'editor-styles' ))

- Load:

	- **style.css** → enqueue last in <head>

	- **assets/script.js** → enqueue in the footer

	- **assets/editor-style.css** → editor-only styles using add_editor_style()

## 5. 🧠 File: theme.json

### a) ✍️ Typography

Enable fluid typography  with:

- "fluid": true


- Font families:

	- System: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif

	- Serif: "Times New Roman", "New York", Times, "Noto Serif", serif

	- Monospace: Consolas, Menlo, Monaco, "SF Mono", "DejaVu Sans Mono", "Roboto Mono", "Courier New", Courier, monospace

- Font sizes (with valid fluid object syntax like : 
			   {
    			  "name": "Medium",
    			  "slug": "medium",
    			  "size": "1.125rem",
    			  "fluid": {
    			    "min": "1rem",
    			    "max": "1.25rem"
	    			  }
    			}

	- Small: 0.875rem (fixed)

	- Medium: fluid 1rem–1.25rem

	- Large: fluid 1.125rem–1.5rem

	- XL: fluid 1.75rem–2rem

	- XXL: fluid 2.15rem–3rem


- Element styles:

	- Text: medium size, line height 1.5

	- Headings: line height 1.125

	- Links: underlined

### b) 🎨 Colors

- Disable default palettes:

	- "defaultDuotone": false,
	- "defaultGradients": false,
	- "defaultPalette": false


- Custom color palette:

	- White: #ffffff

	- Black: #333333

	- Dark Gray: #666666

	- Gray: #888888

	- Light Gray: #d3d3d3

	- Very Light Gray: #f4f4f4

	- Transparent

### c) 📐 Layout

- Content width: 620px

- Wide width: 1140px

- Block spacing: 24px

- Default inner spacing (padding/margin)

## 6. ✅ Compatibility

Ensure the theme is:

- Compatible with the latest WordPress version

- Fully supports Full Site Editing (FSE)

- Fully customizable via the Gutenberg Site Editor

## 7. 📦 Export

- Provide all files ready to place in /wp-content/themes/myaitheme

- Generate a .zip archive containing the entire theme
  
__________________________________

This is a basic theme

Feel free to edit it and add your own values, or ask for properties you need on theme.json

You can ask for woocommerce support in the prompt if needed.

You can also simplify it to keep the default values from Gutenberg. 

Once the theme is generated, install it and test to be sure everything is ok (it should be)


