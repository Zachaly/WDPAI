const registrationForm = document.querySelector('[data-registration-form]');

if (registrationForm instanceof HTMLFormElement) {
    const passwordInput = registrationForm.querySelector('[data-password]');
    const confirmationInput = registrationForm.querySelector('[data-password-confirmation]');
    const passwordToggleButtons = registrationForm.querySelectorAll('[data-password-toggle]');
    const passwordStatus = registrationForm.querySelector('[data-password-status]');
    const strengthMeter = registrationForm.querySelector('[data-password-strength]');
    const strengthSegments = strengthMeter?.querySelectorAll('span');
    const notice = registrationForm.querySelector('[data-registration-notice]');

    if (
        passwordInput instanceof HTMLInputElement
        && confirmationInput instanceof HTMLInputElement
        && passwordStatus instanceof HTMLElement
        && strengthMeter instanceof HTMLElement
        && notice instanceof HTMLElement
        && strengthSegments
    ) {
        const rules = {
            length: (value) => value.length >= 8,
            number: (value) => /\d/.test(value),
            special: (value) => /[^A-Za-z0-9]/.test(value),
            match: (value) => value.length > 0 && value === confirmationInput.value,
        };

        const updatePasswordFeedback = () => {
            const password = passwordInput.value;
            const ruleResults = Object.entries(rules).map(([name, check]) => {
                const isMet = check(password);
                const rule = registrationForm.querySelector(`[data-password-rule="${name}"]`);

                rule?.classList.toggle('is-met', isMet);
                return isMet;
            });
            const strength = ruleResults.filter(Boolean).length;

            strengthSegments.forEach((segment, index) => {
                segment.classList.toggle('is-active', index < strength);
            });
            strengthMeter.setAttribute('aria-valuenow', String(strength));
            passwordStatus.textContent = password.length === 0
                ? 'AWAITING INPUT'
                : strength < 3
                    ? 'BUILDING STRENGTH'
                    : strength === 4
                        ? 'PASSWORDS MATCH'
                        : 'SECURE PASSWORD';

            passwordInput.setCustomValidity(
                password.length > 0 && (!rules.length(password) || !rules.number(password) || !rules.special(password))
                    ? 'Use at least 8 characters, including a number and a special character.'
                    : '',
            );
            confirmationInput.setCustomValidity(
                confirmationInput.value.length > 0 && !rules.match(password)
                    ? 'Passwords do not match.'
                    : '',
            );
        };

        passwordInput.addEventListener('input', updatePasswordFeedback);
        confirmationInput.addEventListener('input', updatePasswordFeedback);

        passwordToggleButtons.forEach((button) => {
            const input = button.parentElement?.querySelector('input');

            if (!(input instanceof HTMLInputElement)) {
                return;
            }

            button.addEventListener('click', () => {
                const showPassword = input.type === 'password';

                input.type = showPassword ? 'text' : 'password';
                button.setAttribute('aria-pressed', String(showPassword));
                button.setAttribute('aria-label', `${showPassword ? 'Hide' : 'Show'} ${input.id === 'confirm-password' ? 'confirm password' : 'password'}`);
                input.focus();
            });
        });

        registrationForm.addEventListener('submit', (event) => {
            event.preventDefault();
            updatePasswordFeedback();

            if (!registrationForm.reportValidity()) {
                return;
            }

            notice.hidden = false;
            notice.textContent = 'This registration preview is a mockup. Account creation is not connected yet.';
        });
    }
}
