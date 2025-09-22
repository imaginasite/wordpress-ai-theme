# wordpress-ai-theme
Basic theme for WordPress made with Chat GPT.

Here is the prompt used to generate the theme :

_____


Generate a WordPress Block Theme compatible with Full Site Editing (FSE), titled **"My Ai Theme"**, using the folder name `myaitheme`.

1.  TEMPLATES (in `/templates/` folder)
    

Each template must include valid WordPress block content and embed the header and footer template parts using the `template-part` block:

-   `index.html`: Displays a list of posts with clickable titles, dates, excerpts, and pagination.
    
-   `single.html`: Displays a single post (title, date, content, author).
    
-   `page.html`: Displays a static page (title and content).
    
-   `archive.html`: Displays a list of posts by category, tag, or date with pagination.
    
-   `404.html`: Displays a "Page not found" message and a search block.
    

Each template must begin with:

    <!-- wp:template-part {"slug":"header","theme":"myaitheme","tagName":"header"} /-->

And end with:

    <!-- wp:template-part {"slug":"footer","theme":"myaitheme","tagName":"footer"} /-->

2. TEMPLATE PARTS (in `/parts/` folder)

-   `header.html`: Must contain a site logo (`site-logo`), site tagline (`site-tagline`), and navigation block.
    
-   `footer.html`: Must contain the site logo and a paragraph:
    
    (C) [current year] [site title] - All rights reserved.
    

3.  ASSETS (in `/assets/` folder)
    

-   `editor-style.css`: Custom CSS for block editor.
    
-   `script.js`: JavaScript file (can be empty or used for theme interactions).
    

4.  FUNCTIONS.PHP
    

This file must:

-   Add theme support for:
    
    -   `editor-styles`
        
    -   `wp-block-styles`
        
    -   `appearance-tools`
        
    -   `woocommerce`
        
-   Enqueue:
    
    -   `style.css` last in `<head>`
        
    -   `assets/script.js` in the footer
        
    -   `assets/editor-style.css` in the block editor
        

5.  THEME.JSON CONFIGURATION
    

Typography:

-   Enable fluid typography:  
    "fluid": true
    
-   Font families:
    
    -   System
        
    -   Serif
        
    -   Monospace
        
-   Font sizes (with correct fluid structure), including:
    
    -   Small (fixed): 0.875rem
        
    -   Medium (fluid): min 1rem - max 1.25rem
        
    -   Large (fluid): min 1.125rem - max 1.5rem
        
    -   XL (fluid): min 1.75rem - max 2rem
        
    -   XXL (fluid): min 2.15rem - max 3rem
        

Elements:

-   Text: font size medium, line height 1.5
    
-   Headings: line height 1.125
    
-   Links: underline, with hover color
    
-   Buttons: background color and text color on hover
    

Color:

-   Disable default palettes:
    
    -   defaultDuotone: false
        
    -   defaultGradients: false
        
    -   defaultPalette: false
        
-   Custom palette:
    
    -   White: #ffffff
        
    -   Black: #333333
        
    -   Dark Gray: #666666
        
    -   Gray: #888888
        
    -   Light Gray: #d3d3d3
        
    -   Very Light Gray: #f4f4f4
        
    -   Transparent
        

Layout:

-   contentSize: 620px
    
-   wideSize: 1140px
    
-   blockGap: 24px
    
-   Use default padding/margin
    

Hover Styles:

-   Links:  
    textDecoration: underline  
    :hover -> color: #666666
    
-   Buttons:  
    :hover -> backgroundColor: #888888, color: #ffffff
    

6.  WOOCOMMERCE SUPPORT
    

-   Add `add_theme_support('woocommerce')` in `functions.php`
    
-   Ensure theme supports WooCommerce blocks
    
-   No need to manually add WooCommerce templates unless for advanced customization
    

7.  COMPATIBILITY
    

-   Must support WordPress 6.5+
    
-   Fully compatible with Full Site Editing (FSE)
    
-   Supports live site customization via Gutenberg Site Editor
    
-   Compatible with WooCommerce
    

8.  EXPORT
    

-   Output all files ready to be placed in `/wp-content/themes/myaitheme`
    
-   If possible, generate a ZIP archive of the full theme folder

__________________________________

This is a basic theme with woocommerce support (without specific templates, it's not needed in FSE )

Feel free to edit it and add your own values, or specify other properties on theme.json

Once the theme is generated, install it and test to be sure everything is ok (it should be)


