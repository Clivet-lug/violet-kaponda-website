// Wait for Alpine.js to be available
document.addEventListener("alpine:init", () => {
    // Navigation Component
    Alpine.data("navigation", () => ({
        open: false,

        toggle() {
            this.open = !this.open;
        },

        close() {
            this.open = false;
        },
    }));

    // Hero Section Component
    Alpine.data("hero", () => ({
        currentSlide: 0,

        init() {
            // Auto-rotate hero content every 5 seconds
            setInterval(() => {
                this.nextSlide();
            }, 5000);

            // Smooth scroll for CTA buttons
            this.$nextTick(() => {
                const ctaButtons = document.querySelectorAll('a[href^="#"]');
                ctaButtons.forEach((button) => {
                    button.addEventListener("click", (e) => {
                        e.preventDefault();
                        const target = document.querySelector(
                            e.target.getAttribute("href")
                        );
                        if (target) {
                            target.scrollIntoView({
                                behavior: "smooth",
                                block: "start",
                            });
                        }
                    });
                });
            });
        },

        nextSlide() {
            const totalSlides = 3; // Adjust based on hero content
            this.currentSlide = (this.currentSlide + 1) % totalSlides;
        },
    }));

    // Contact Form Component
    Alpine.data("contactForm", () => ({
        loading: false,
        success: false,
        errors: {},
        formData: {
            name: "",
            email: "",
            company: "",
            subject: "",
            message: "",
            inquiry_type: "speaking",
        },

        async submitForm() {
            this.loading = true;
            this.errors = {};
            this.success = false;

            try {
                const response = await fetch("/contact", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify(this.formData),
                });

                const data = await response.json();

                if (response.ok) {
                    this.success = true;
                    this.resetForm();

                    // Auto-hide success message after 5 seconds
                    setTimeout(() => {
                        this.success = false;
                    }, 5000);
                } else {
                    this.errors = data.errors || {
                        general: "Something went wrong. Please try again.",
                    };
                }
            } catch (error) {
                this.errors = {
                    general:
                        "Network error. Please check your connection and try again.",
                };
            } finally {
                this.loading = false;
            }
        },

        resetForm() {
            this.formData = {
                name: "",
                email: "",
                company: "",
                subject: "",
                message: "",
                inquiry_type: "speaking",
            };
        },
    }));

    // Newsletter Component
    Alpine.data("newsletter", () => ({
        email: "",
        loading: false,
        success: false,
        error: "",

        async subscribe() {
            if (!this.email) {
                this.error = "Please enter your email address";
                return;
            }

            this.loading = true;
            this.error = "";

            try {
                const response = await fetch("/newsletter/subscribe", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({ email: this.email }),
                });

                if (response.ok) {
                    this.success = true;
                    this.email = "";

                    setTimeout(() => {
                        this.success = false;
                    }, 5000);
                } else {
                    const data = await response.json();
                    this.error =
                        data.message ||
                        "Subscription failed. Please try again.";
                }
            } catch (error) {
                this.error = "Network error. Please try again.";
            } finally {
                this.loading = false;
            }
        },
    }));

    // Podcast Player Component
    Alpine.data("podcastPlayer", () => ({
        currentEpisode: null,
        playing: false,

        playEpisode(episodeData) {
            this.currentEpisode = episodeData;
            this.playing = true;

            // You can integrate with actual podcast player here
            console.log("Playing episode:", episodeData.title);
        },

        pauseEpisode() {
            this.playing = false;
        },

        stopEpisode() {
            this.playing = false;
            this.currentEpisode = null;
        },
    }));

    // Testimonial Carousel Component
    Alpine.data("testimonialCarousel", () => ({
        currentIndex: 0,
        testimonials: [],

        init() {
            // Auto-rotate testimonials every 6 seconds
            setInterval(() => {
                this.next();
            }, 6000);
        },

        next() {
            if (this.testimonials.length > 0) {
                this.currentIndex =
                    (this.currentIndex + 1) % this.testimonials.length;
            }
        },

        previous() {
            if (this.testimonials.length > 0) {
                this.currentIndex =
                    this.currentIndex === 0
                        ? this.testimonials.length - 1
                        : this.currentIndex - 1;
            }
        },

        goTo(index) {
            this.currentIndex = index;
        },
    }));

    // Scroll Animations Component
    Alpine.data("scrollAnimations", () => ({
        init() {
            this.$nextTick(() => {
                this.setupScrollAnimations();
            });
        },

        setupScrollAnimations() {
            // Intersection Observer for scroll animations
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("in-view");
                            entry.target.classList.remove("animate-on-scroll");
                        }
                    });
                },
                {
                    threshold: 0.1,
                    rootMargin: "0px 0px -50px 0px",
                }
            );

            // Observe all elements with animate-on-scroll class
            const animatedElements =
                document.querySelectorAll(".animate-on-scroll");
            animatedElements.forEach((el) => {
                observer.observe(el);
            });
        },
    }));
});

// Additional utility functions that run when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
    // Smooth scrolling for all anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });

    // Add active class to navigation based on scroll position
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    function updateActiveNav() {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.pageYOffset >= sectionTop - 200) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("nav-link-active");
            if (link.getAttribute("href") === `#${current}`) {
                link.classList.add("nav-link-active");
            }
        });
    }

    // Update navigation on scroll
    window.addEventListener("scroll", updateActiveNav);

    // Preload critical images
    const criticalImages = document.querySelectorAll("img[data-preload]");
    criticalImages.forEach((img) => {
        const imageUrl = img.getAttribute("data-src") || img.src;
        const preloadImage = new Image();
        preloadImage.src = imageUrl;
    });

    // Mobile menu close on outside click
    document.addEventListener("click", function (event) {
        const mobileMenu = document.querySelector('[x-data="navigation"]');
        const menuButton = document.querySelector(
            '[x-data="navigation"] button'
        );

        if (
            mobileMenu &&
            !mobileMenu.contains(event.target) &&
            !menuButton.contains(event.target)
        ) {
            // Close mobile menu if clicking outside
            const navComponent = Alpine.$data(mobileMenu);
            if (navComponent && navComponent.open) {
                navComponent.close();
            }
        }
    });

    // Form validation helpers
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePhone(phone) {
        const re = /^[\+]?[1-9][\d]{0,15}$/;
        return re.test(phone.replace(/[\s\-\(\)]/g, ""));
    }

    // Add these validation functions to window for global access
    window.validateEmail = validateEmail;
    window.validatePhone = validatePhone;

    // Dynamic year for copyright
    const currentYear = new Date().getFullYear();
    const yearElements = document.querySelectorAll(".current-year");
    yearElements.forEach((el) => {
        el.textContent = currentYear;
    });

    // Lazy loading for images
    const lazyImages = document.querySelectorAll("img[data-src]");
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove("lazy");
                imageObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach((img) => {
        imageObserver.observe(img);
    });

    // Performance monitoring
    window.addEventListener("load", function () {
        // Log page load time for performance monitoring
        const loadTime =
            performance.timing.loadEventEnd -
            performance.timing.navigationStart;
        console.log(`Page loaded in ${loadTime}ms`);

        // Initialize any third-party widgets after page load
        initializeWidgets();
    });

    function initializeWidgets() {
        // YouTube player initialization (if needed)
        if (window.YT && window.YT.Player) {
            console.log("YouTube API ready");
        }

        // Any other widget initialization can go here
    }

    // Keyboard navigation improvements
    document.addEventListener("keydown", function (event) {
        // ESC key closes mobile menu
        if (event.key === "Escape") {
            const mobileMenus = document.querySelectorAll(
                '[x-data="navigation"]'
            );
            mobileMenus.forEach((menu) => {
                const navComponent = Alpine.$data(menu);
                if (navComponent && navComponent.open) {
                    navComponent.close();
                }
            });
        }

        // Tab navigation improvements
        if (event.key === "Tab") {
            document.body.classList.add("keyboard-navigation");
        }
    });

    // Remove keyboard navigation class on mouse use
    document.addEventListener("mousedown", function () {
        document.body.classList.remove("keyboard-navigation");
    });

    // Handle reduced motion preferences
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    );

    if (prefersReducedMotion.matches) {
        // Disable animations for users who prefer reduced motion
        const style = document.createElement("style");
        style.textContent = `
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        `;
        document.head.appendChild(style);
    }

    // Service Worker registration (for future PWA features)
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
            // Uncomment when you have a service worker
            // navigator.serviceWorker.register('/sw.js')
            //     .then(registration => console.log('SW registered'))
            //     .catch(error => console.log('SW registration failed'))
        });
    }

    // Error handling for missing images
    document.addEventListener(
        "error",
        function (event) {
            if (event.target.tagName === "IMG") {
                event.target.style.display = "none";
                console.warn("Image failed to load:", event.target.src);
            }
        },
        true
    );

    // Console welcome message
    console.log(
        "%c👋 Welcome to Violet Kaponda's Website!",
        "color: #8B0000; font-size: 16px; font-weight: bold;"
    );
    console.log(
        "%cBuilt with Laravel, Alpine.js, and lots of ❤️",
        "color: #D2691E; font-size: 12px;"
    );
    console.log(
        "%cInterested in the code? Check out: https://github.com/Clivet-lug/violet-kaponda-website",
        "color: #666; font-size: 10px;"
    );
});
