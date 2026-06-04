/* Navbar scroll effect and frontend interactivity */
document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.getElementById('navbar');
    var hamburger = document.getElementById('hamburger');
    var navMenu = document.getElementById('navMenu');
    var navLinks = document.querySelectorAll('.nav-menu a');
    var contactForm = document.getElementById('contactForm');
    /* Sticky navbar with requestAnimationFrame and passive scroll */
    var ticking = false;
    if (navbar) {
        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }
    /* Hamburger toggle */
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            var isOpen = navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
            hamburger.setAttribute('aria-expanded', isOpen);
        });
    }
    /* Close menu on link click (non-toggle links only) */
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            /* Don't close if it's a dropdown toggle on mobile */
            if (link.classList.contains('dropdown-toggle') && navMenu.classList.contains('active')) {
                return;
            }
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
        });
    });

    /* Mobile dropdown toggle */
    document.addEventListener('click', function (e) {
        var toggle = e.target.closest('.dropdown-toggle');
        if (toggle && navMenu && navMenu.classList.contains('active')) {
            e.preventDefault();
            var parentLi = toggle.closest('.dropdown');
            if (parentLi) {
                parentLi.classList.toggle('open');
            }
            return;
        }
        /* Close dropdown if clicking outside on desktop */
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown.open').forEach(function (d) {
                d.classList.remove('open');
            });
        }
    });
    /* Contact form submit */
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you! We will get back to you shortly.');
            contactForm.reset();
        });
    }
    /* Gallery Tabs */
    var galleryTabs = document.querySelectorAll('.gallery-tab');
    var galleryPanels = document.querySelectorAll('.gallery-panel');
    galleryTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            galleryTabs.forEach(function (t) { t.classList.remove('active'); });
            galleryPanels.forEach(function (p) { p.classList.remove('active'); });
            this.classList.add('active');
            var panel = document.getElementById('gallery-' + this.dataset.tab);
            if (panel) panel.classList.add('active');
        });
    });
});
/* Owl Carousel - Hero & Gallery (waits for jQuery + Owl to load) */
window.addEventListener('load', function () {
    if (typeof jQuery === 'undefined' || typeof jQuery.fn.owlCarousel === 'undefined') return;
    /* Hero carousel */
    var $heroCarousel = $('.hero-carousel');
    if ($heroCarousel.length) {
        $heroCarousel.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            nav: true,
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 800,
            navText: [
                '<svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>',
                '<svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>'
            ]
        });
    }
    /* Gallery carousel */
    var $galleryGrid = $('.gallery-grid');
    if ($galleryGrid.length) {
        $galleryGrid.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navText: [
                '<svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>',
                '<svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    }
});