import type { Config } from 'tailwindcss'

export default {
  mode: 'jit',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.ts',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#CC3333',
        'secondary': '#ffdb06',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  darkMode: 'class'
} satisfies Config
