<?php
/**
 * Title: FAQ Section
 * Slug: myaitheme/faq
 * Categories: text, query
 * Description: A frequently asked questions section with an accordion.
 * Keywords: faq, questions, answers, accordion
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:heading {"textAlign":"center","level":2} -->
    <h2 class="wp-block-heading has-text-align-center">Frequently Asked Questions</h2>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"30px"} -->
    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
    <div class="wp-block-group">
        <!-- wp:details {"summary":"How do I get started?"} -->
        <details class="wp-block-details"><summary>How do I get started?</summary>
        <!-- wp:paragraph -->
        <p>Simply click the "Get Started" button in the hero section or visit our contact page to reach out. We'll set up a quick discovery call to understand your needs.</p>
        <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"summary":"Do you offer ongoing support?"} -->
        <details class="wp-block-details"><summary>Do you offer ongoing support?</summary>
        <!-- wp:paragraph -->
        <p>Yes, we offer comprehensive support and maintenance plans to ensure your site stays up-to-date, secure, and running smoothly long after the initial launch.</p>
        <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"summary":"What is the typical timeline for a project?"} -->
        <details class="wp-block-details"><summary>What is the typical timeline for a project?</summary>
        <!-- wp:paragraph -->
        <p>Timelines vary depending on project complexity. A standard corporate site usually takes 4-6 weeks, while more complex e-commerce or custom applications can take 8-12 weeks.</p>
        <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
