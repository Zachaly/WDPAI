const profilePage = document.querySelector('.profile-page');

if (profilePage) {
    const notice = profilePage.querySelector('[data-profile-notice]');
    const showNotice = (message) => {
        notice.hidden = false;
        notice.textContent = message;
    };

    profilePage.querySelector('[data-profile-follow]').addEventListener('click', (event) => {
        const button = event.currentTarget;
        const following = button.getAttribute('aria-pressed') !== 'true';
        button.setAttribute('aria-pressed', String(following));
        button.innerHTML = following
            ? '<svg class="icon"><use href="#forum-check"></use></svg> FOLLOWING'
            : '<svg class="icon"><use href="#forum-plus"></use></svg> FOLLOW LIFTER';
        showNotice('Preview only — follow preferences are not saved.');
    });

    profilePage.querySelector('[data-profile-share]').addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(window.location.href);
            showNotice('Profile link copied.');
        } catch {
            showNotice('Copy is unavailable in this browser session.');
        }
    });

    const tabs = profilePage.querySelectorAll('[data-profile-tab]');
    const panels = profilePage.querySelectorAll('[data-profile-panel]');

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const selectedTab = tab.dataset.profileTab;
            tabs.forEach((item) => {
                const isSelected = item === tab;
                item.classList.toggle('is-active', isSelected);
                item.setAttribute('aria-pressed', String(isSelected));
            });
            panels.forEach((panel) => {
                panel.hidden = panel.dataset.profilePanel !== selectedTab;
            });
        });
    });
}
