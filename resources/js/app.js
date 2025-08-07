import Alpine from 'alpinejs'

window.Alpine = Alpine

// Alpine.js Components
Alpine.data('navigation', () => ({
    open: false,
    toggle() {
        this.open = !this.open
    },
    close() {
        this.open = false
    }
}))

Alpine.data('hero', () => ({
    init() {
        // Smooth scroll for CTAs
        this.$refs.cta?.addEventListener('click', (e) => {
            e.preventDefault()
            const target = document.querySelector(e.target.getAttribute('href'))
            target?.scrollIntoView({ behavior: 'smooth' })
        })
    }
}))

Alpine.data('contactForm', () => ({
    loading: false,
    success: false,
    errors: {},
    
    async submit() {
        this.loading = true
        this.errors = {}
        
        const formData = new FormData(this.$refs.form)
        
        try {
            const response = await fetch('/contact', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            
            if (response.ok) {
                this.success = true
                this.$refs.form.reset()
            } else {
                const data = await response.json()
                this.errors = data.errors || {}
            }
        } catch (error) {
            console.error('Contact form error:', error)
        } finally {
            this.loading = false
        }
    }
}))

Alpine.start()

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[href^="#"]')
    
    links.forEach(link => {
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
})

// Intersection Observer for animations
const observeElements = () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in')
            }
        })
    })
    
    document.querySelectorAll('.observe').forEach(el => {
        observer.observe(el)
    })
}

document.addEventListener('DOMContentLoaded', observeElements)