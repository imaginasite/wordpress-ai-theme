/**
 * My Ai Theme JavaScript
 * Theme interactions and enhancements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add loading state to buttons
    const buttons = document.querySelectorAll('.wp-block-button__link');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            this.classList.add('is-loading');
            setTimeout(() => {
                this.classList.remove('is-loading');
            }, 2000);
        });
    });
});