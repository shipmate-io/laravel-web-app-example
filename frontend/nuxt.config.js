export default {
    // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
    ssr: true,

    // Target: https://go.nuxtjs.dev/config-target
    target: 'server',

    // Global page headers: https://go.nuxtjs.dev/config-head
    head: {
        title: 'Shipmate Demo Application',
        htmlAttrs: {
            lang: 'en',
        },
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { hid: 'description', name: 'description', content: '' },
            { name: 'format-detection', content: 'telephone=no' }
        ],
        link: [
            { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
        ],
    },

    // Global CSS: https://go.nuxtjs.dev/config-css
    css: [
    ],

    // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
    plugins: [
        { src: '~/plugins/axios.js' },
    ],

    googleFonts: {
        families: {
            Inter: {
                wght: [400, 500, 600, 700],
            },
        },
        display: 'swap',
    },

    tailwindcss: {
        config: {
            theme: {
                colors: {
                    primary: '#ffffff',
                    secondary: '#C4C5C9',
                    base: '#2B2C48',
                    accent: '#8856c2',
                },
                fontFamily: {
                    sans: [
                        'Inter',
                        '-apple-system',
                        'BlinkMacSystemFont',
                        '"Segoe UI"',
                        'Roboto',
                        '"Helvetica Neue"',
                        'Arial',
                        '"Noto Sans"',
                        'sans-serif',
                        '"Apple Color Emoji"',
                        '"Segoe UI Emoji"',
                        '"Segoe UI Symbol"',
                        '"Noto Color Emoji"',
                    ],
                },
            },
        },
    },

    // Auto import components: https://go.nuxtjs.dev/config-components
    components: true,

    // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
    buildModules: [
        '@nuxt/typescript-build',
        '@nuxtjs/google-fonts',
        '@nuxtjs/tailwindcss'
    ],

    // Modules: https://go.nuxtjs.dev/config-modules
    modules: [
        '@nuxtjs/axios',
    ],

    // Axios module configuration: https://go.nuxtjs.dev/config-axios
    axios: {
        baseURL: process.env.BACKEND_BASE_URL,
    },

    // Build Configuration: https://go.nuxtjs.dev/config-build
    build: {
    },

    publicRuntimeConfig: {
        axios: {
            browserBaseURL: process.env.BACKEND_BASE_URL
        }
    },
}
