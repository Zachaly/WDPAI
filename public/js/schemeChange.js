const themeStorageKey = 'ironpulse-theme';
const themeRoot = document.documentElement;
const storedTheme = localStorage.getItem(themeStorageKey);
const systemTheme = window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';

themeRoot.dataset.theme = storedTheme === 'light' || storedTheme === 'dark' ? storedTheme : systemTheme;

const themeToggles = document.querySelectorAll('[data-theme-toggle]');
const updateThemeToggles = () => {
    const isLightTheme = themeRoot.dataset.theme === 'light';
    const nextTheme = isLightTheme ? 'dark' : 'light';

    themeToggles.forEach((toggle) => {
        toggle.setAttribute('aria-label', `Switch to ${nextTheme} theme`);
        toggle.setAttribute('title', `Switch to ${nextTheme} theme`);
        toggle.setAttribute('aria-pressed', String(isLightTheme));
        toggle.querySelector('[data-theme-toggle-label]').textContent = nextTheme === 'light' ? 'Light' : 'Dark';
    });
};

themeToggles.forEach((toggle) => {
    toggle.addEventListener('click', () => {
        themeRoot.dataset.theme = themeRoot.dataset.theme === 'light' ? 'dark' : 'light';
        localStorage.setItem(themeStorageKey, themeRoot.dataset.theme);
        updateThemeToggles();
    });
});

updateThemeToggles();