/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,blade.php}"],
  theme: {
    extend: {
      colors: {
        'navbar-color': '#30607e',
        'input-border-color': '#30607e',
        'input-focus-color': '#00609C',
        'label-color': '#30607e',
        'sidebar-color': '#30607e',
        'jv-primary': '#30607e',
        'jv-cyan': '#40e9df',
        'jv-blue': '#00609C'
      }
    },
  },
  plugins: [],
}
