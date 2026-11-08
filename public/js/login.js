const loginForm = document.querySelector('[data-login-form]');

if (loginForm instanceof HTMLFormElement) {
    const passwordInput = loginForm.querySelector('#login-password');
    const passwordToggle = loginForm.querySelector('[data-password-toggle]');
    const forgotPasswordButton = loginForm.querySelector('[data-forgot-password]');
    const notice = loginForm.querySelector('[data-login-notice]');

    if (
        passwordInput instanceof HTMLInputElement
        && passwordToggle instanceof HTMLButtonElement
        && forgotPasswordButton instanceof HTMLButtonElement
        && notice instanceof HTMLElement
    ) {
        passwordToggle.addEventListener('click', () => {
            const showPassword = passwordInput.type === 'password';

            passwordInput.type = showPassword ? 'text' : 'password';
            passwordToggle.setAttribute('aria-pressed', String(showPassword));
            passwordToggle.setAttribute('aria-label', `${showPassword ? 'Hide' : 'Show'} password`);
            passwordInput.focus();
        });

        forgotPasswordButton.addEventListener('click', () => {
            notice.hidden = false;
            notice.textContent = 'Password recovery is not connected in this login preview.';
        });

        loginForm.addEventListener('submit', (event) => {
            event.preventDefault();

            if (!loginForm.reportValidity()) {
                return;
            }

            notice.hidden = false;
            notice.textContent = 'This login preview is a mockup. Authentication is not connected yet.';
        });
    }
}
