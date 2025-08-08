/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        // Violet's Brand Colors - Deep Red, Black, Brown/Amber
        'brand': {
          'red': {
            50: '#fef2f2',
            100: '#fee2e2',
            200: '#fecaca',
            300: '#fca5a5', 
            400: '#f87171',
            500: '#ef4444',
            600: '#dc2626',
            700: '#b91c1c',
            800: '#991b1b',
            900: '#8B0000', // Deep red - Violet's primary
            950: '#7f1d1d',
          },
          'amber': {
            50: '#fffbeb',
            100: '#fef3c7',
            200: '#fde68a',
            300: '#fcd34d',
            400: '#fbbf24',
            500: '#f59e0b',
            600: '#d97706',
            700: '#b45309',
            800: '#92400e',
            900: '#D2691E', // Chocolate brown - Violet's secondary
            950: '#78350f',
          },
          'black': '#000000',
          'charcoal': '#1a1a1a',
          'gold': '#FFD700',
        },
        // Additional brand palette
        'accent': {
          'cream': '#F5F5DC',
          'warm-white': '#FAFAFA',
        }
      },
      fontFamily: {
        // Brand Typography
        'display': ['Playfair Display', 'serif'], // For headers
        'body': ['Inter', 'sans-serif'], // For body text
        'sans': ['Inter', 'sans-serif'],
        'serif': ['Playfair Display', 'serif'],
      },
      fontSize: {
        // Custom font sizes for brand consistency
        'hero': ['4rem', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
        'display': ['3rem', { lineHeight: '1.2', letterSpacing: '-0.02em' }],
        'headline': ['2.5rem', { lineHeight: '1.3', letterSpacing: '-0.01em' }],
        'subhead': ['1.5rem', { lineHeight: '1.4' }],
      },
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
        '128': '32rem',
      },
      animation: {
        // Custom animations for interactivity
        'fade-in': 'fadeIn 0.6s ease-out',
        'slide-up': 'slideUp 0.8s ease-out',
        'slide-in-left': 'slideInLeft 0.7s ease-out',
        'slide-in-right': 'slideInRight 0.7s ease-out',
        'bounce-soft': 'bounceSoft 2s infinite',
        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
        'gradient': 'gradient 6s ease infinite',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        slideUp: {
          '0%': { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        slideInLeft: {
          '0%': { opacity: '0', transform: 'translateX(-30px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        slideInRight: {
          '0%': { opacity: '0', transform: 'translateX(30px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        bounceSoft: {
          '0%, 100%': { transform: 'translateY(-3px)' },
          '50%': { transform: 'translateY(3px)' },
        },
        gradient: {
          '0%, 100%': { backgroundPosition: '0% 50%' },
          '50%': { backgroundPosition: '100% 50%' },
        },
      },
      backgroundImage: {
        // Brand gradients
        'brand-gradient': 'linear-gradient(135deg, #8B0000 0%, #D2691E 100%)',
        'brand-gradient-soft': 'linear-gradient(135deg, #8B0000 0%, #b91c1c 50%, #D2691E 100%)',
        'hero-gradient': 'linear-gradient(135deg, #000000 0%, #8B0000 50%, #D2691E 100%)',
        'accent-gradient': 'linear-gradient(45deg, #FFD700, #D2691E)',
      },
      backdropBlur: {
        xs: '2px',
      },
      boxShadow: {
        'brand': '0 10px 25px -5px rgba(139, 0, 0, 0.3), 0 10px 10px -5px rgba(139, 0, 0, 0.04)',
        'brand-lg': '0 20px 25px -5px rgba(139, 0, 0, 0.3), 0 10px 10px -5px rgba(139, 0, 0, 0.04)',
        'glow': '0 0 20px rgba(139, 0, 0, 0.3)',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}