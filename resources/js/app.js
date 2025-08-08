import Alpine from 'alpinejs'

window.Alpine = Alpine

// Alpine.js Data Components for Violet's Website
Alpine.data('navigation', () => ({
    open: false,
    
    toggle() {
        this.open = !this.open
    },
    
    close() {
        this.open = false
        
        // Close on outside click
        this.$nextTick(() => {
            document.addEventListener('click', this.close.bind(this))
        })
    }
}))

Alpine.data('hero', () => ({
    currentSlide: 0,
    
    init() {
        // Auto-rotate hero content every 5 seconds
        setInterval(() => {
            this.nextSlide()
        }, 5000)
        
        // Smooth scroll for CTA buttons
        this.$refs.ctaButton?.addEventListener('click', (e) => {
            if (e.target.getAttribute('href')?.startsWith('#')) {
                e.preventDefault()
                const target = document.querySelector(e.target.getAttribute('href'))
                if (target) {
                    target.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    })
                }
            }
        })
    },
    
    nextSlide() {
        const totalSlides = 3 // Adjust based on hero content
        this.currentSlide = (this.currentSlide + 1) % totalSlides
    }
}))

Alpine.data('contactForm', () => ({
    loading: false,
    success: false,
    errors: {},
    formData: {
        name: '',
        email: '',
        company: '',
        subject: '',
        message: '',
        inquiry_type: 'speaking'
    },
    
    async submitForm() {
        this.loading = true
        this.errors = {}
        this.success = false
        
        try {
            const response = await fetch('/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(this.formData)
            })
            
            const data = await response.json()
            
            if (response.ok) {
                this.success = true
                this.resetForm()
                
                // Auto-hide success message after 5 seconds
                setTimeout(() => {
                    this.success = false
                }, 5000)
            } else {
                this.errors = data.errors || { general: 'Something went wrong. Please try again.' }
            }
        } catch (error) {
            this.errors = { general: 'Network error. Please check your connection and try again.' }
        } finally {
            this.loading = false
        }
    },
    
    resetForm() {
        this.formData = {
            name: '',
            email: '',
            company: '',
            subject: '',
            message: '',
            inquiry_type: 'speaking'
        }
    }
}))

Alpine.data('newsletter', () => ({
    email: '',
    loading: false,
    success: false,
    error: '',
    
    async subscribe() {
        if (!this.email) {
            this.error = 'Please enter your email address'
            return
        }
        
        this.loading = true
        this.error = ''
        
        try {
            const response = await fetch('/newsletter/subscribe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ email: this.email })
            })
            
            if (response.ok) {
                this.success = true
                this.email = ''
                
                setTimeout(() => {
                    this.success = false
                }, 5000)
            } else {
                const data = await response.json()
                this.error = data.message || 'Subscription failed. Please try again.'
            }
        } catch (error) {
            this.error = 'Network error. Please try again.'
        } finally {
            this.loading = false
        }
    }
}))

Alpine.data('podcastPlayer', () => ({
    currentEpisode: null,
    playing: false,
    
    playEpisode(episodeData) {
        this.currentEpisode = episodeData
        this.playing = true
        
        // You can integrate with actual podcast player here
        console.log('Playing episode:', episodeData.title)
    },
    
    pauseEpisode() {
        this.playing = false
    },
    
    stopEpisode() {
        this.playing = false
        this.currentEpisode = null
    }
}))

Alpine.data('testimonialCarousel', () => ({
    currentIndex: 0,
    testimonials: [],
    
    init() {
        // Auto-rotate testimonials every 6 seconds
        setInterval(() => {
            this.next()
        }, 6000)
    },
    
    next() {
        if (this.testimonials.length > 0) {
            this.currentIndex = (this.currentIndex + 1) % this.testimonials.length
        }
    },
    
    previous() {
        if (this.testimonials.length > 0) {
            this.currentIndex = this.currentIndex === 0 
                ? this.testimonials.length - 1 
                : this.currentIndex - 1
        }
    },
    
    goTo(index) {
        this.currentIndex = index
    }
}))

Alpine.data('scrollAnimations', () => ({
    init() {
        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view')
                    entry.target.classList.remove('animate-on-scroll')
                }
            })
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        })
        
        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el)
        })
    }
}))

// Initialize Alpine
Alpine.start()

// Additional utility functions
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault()
            const targetId = this.getAttribute('href')
            const targetElement = document.querySelector(targetId)
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
            }
        })
    })
    
    // Add active class to navigation based on scroll position
    const sections = document.querySelectorAll('section[id]')
    const navLinks = document.querySelectorAll('.nav-link')
    
    function updateActiveNav() {
        let current = ''
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop
            const sectionHeight = section.clientHeight
            
            if (window.pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id')
            }
        })
        
        navLinks.forEach(link => {
            link.classList.remove('nav-link-active')
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('nav-link-active')
            }
        })
    }
    
    window.addEventListener('scroll', updateActiveNav)
    
    // Preload critical images
    const criticalImages = document.querySelectorAll('img[data-preload]')
    criticalImages.forEach(img => {
        const imageUrl = img.getAttribute('data-src') || img.src
        const preloadImage = new Image()
        preloadImage.src = imageUrl
    })
})