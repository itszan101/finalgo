import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {

    const toggle = document.getElementById("themeToggle")
    const icon = document.getElementById("themeIcon")
    const html = document.documentElement

    if (!toggle) return

    function applyTheme(theme) {

        if (theme === "dark") {
            html.classList.add("dark")
        } else {
            html.classList.remove("dark")
        }

        updateIcon()
    }

    function updateIcon() {

        if (html.classList.contains("dark")) {
            icon.textContent = "light_mode"
        } else {
            icon.textContent = "dark_mode"
        }

    }

    /*
    LOAD INITIAL THEME
    */

    const savedTheme = localStorage.getItem("theme")

    if (savedTheme) {

        applyTheme(savedTheme)

    } else {

        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches
        applyTheme(prefersDark ? "dark" : "light")

    }

    /*
    TOGGLE
    */

    toggle.addEventListener("click", () => {

        const isDark = html.classList.toggle("dark")

        localStorage.setItem("theme", isDark ? "dark" : "light")

        updateIcon()

    })

})
window.addEventListener("load", () => {
    document.body.classList.add("theme-transition")
})

document.addEventListener("DOMContentLoaded", () => {

    const password = document.getElementById("password")
    const toggle = document.getElementById("togglePassword")
    const icon = document.getElementById("eyeIcon")

    toggle.addEventListener("click", () => {

        if (password.type === "password") {

            password.type = "text"
            icon.textContent = "visibility_off"

        } else {

            password.type = "password"
            icon.textContent = "visibility"

        }

    })

})