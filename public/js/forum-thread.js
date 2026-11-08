const threadPage = document.querySelector('.forum-thread-page');

if (threadPage) {
    const actionNotice = threadPage.querySelector('[data-action-notice]');
    const replyNotice = threadPage.querySelector('[data-reply-notice]');
    const replyForm = threadPage.querySelector('[data-reply-form]');
    const replyInput = threadPage.querySelector('[data-reply-input]');

    const showNotice = (element, message) => {
        element.hidden = false;
        element.textContent = message;
    };

    threadPage.querySelector('[data-bookmark]').addEventListener('click', (event) => {
        const button = event.currentTarget;
        const saved = button.getAttribute('aria-pressed') !== 'true';
        button.setAttribute('aria-pressed', String(saved));
        button.setAttribute('aria-label', saved ? 'Remove saved post' : 'Save post');
        showNotice(actionNotice, saved
            ? 'Preview only — this post was not saved.'
            : 'Preview only — this post was removed from saved items.');
    });

    threadPage.querySelector('[data-vote]').addEventListener('click', (event) => {
        const button = event.currentTarget;
        const voted = button.getAttribute('aria-pressed') !== 'true';
        const count = button.querySelector('[data-vote-count]');
        const numericCount = Number(count.textContent.replaceAll(',', ''));
        button.setAttribute('aria-pressed', String(voted));
        count.textContent = new Intl.NumberFormat('en-US').format(numericCount + (voted ? 1 : -1));
        showNotice(actionNotice, 'Vote preview only — your vote was not recorded.');
    });

    threadPage.querySelector('[data-video-preview]').addEventListener('click', (event) => {
        const button = event.currentTarget;
        const playing = button.getAttribute('aria-pressed') !== 'true';
        button.setAttribute('aria-pressed', String(playing));
        showNotice(actionNotice, playing
            ? 'Video preview — playback is not connected.'
            : 'Video preview paused.');
    });

    threadPage.querySelector('[data-copy-link]').addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(window.location.href);
            showNotice(actionNotice, 'Post link copied.');
        } catch {
            showNotice(actionNotice, 'Copy is unavailable in this browser session.');
        }
    });

    threadPage.querySelector('[data-share]').addEventListener('click', async () => {
        if (typeof navigator.share !== 'function') {
            showNotice(actionNotice, 'Sharing is not available in this browser session.');
            return;
        }

        try {
            await navigator.share({
                title: document.title,
                url: window.location.href,
            });
        } catch (error) {
            if (error instanceof Error && error.name !== 'AbortError') {
                showNotice(actionNotice, 'This post could not be shared from the current browser session.');
            }
        }
    });

    threadPage.querySelector('[data-report]').addEventListener('click', () => {
        showNotice(actionNotice, 'Report preview only — no report was submitted.');
    });

    threadPage.querySelector('[data-follow]').addEventListener('click', (event) => {
        const button = event.currentTarget;
        const following = button.getAttribute('aria-pressed') !== 'true';
        button.setAttribute('aria-pressed', String(following));
        button.textContent = following ? 'FOLLOWING' : 'FOLLOW';
        showNotice(actionNotice, 'Preview only — follow preferences are not saved.');
    });

    threadPage.querySelectorAll('[data-comment-like]').forEach((button) => {
        button.addEventListener('click', () => {
            const count = button.querySelector('span');
            const numericCount = Number(count.textContent);
            const liked = button.getAttribute('aria-pressed') !== 'true';
            button.setAttribute('aria-pressed', String(liked));
            count.textContent = String(numericCount + (liked ? 1 : -1));
            showNotice(replyNotice, 'Reaction preview only — your reaction was not recorded.');
        });
    });

    threadPage.querySelectorAll('[data-reply-to]').forEach((button) => {
        button.addEventListener('click', () => {
            const author = button.closest('.ft-comment').querySelector('.ft-comment-heading > strong').textContent;
            replyInput.value = `${author} ${replyInput.value}`;
            replyInput.focus();
            replyInput.setSelectionRange(replyInput.value.length, replyInput.value.length);
        });
    });

    replyForm.addEventListener('submit', (event) => {
        event.preventDefault();
        showNotice(replyNotice, replyInput.value.trim()
            ? 'Reply preview only — your reply was not posted or saved.'
            : 'Write a reply before previewing it.');
        if (!replyInput.value.trim()) {
            replyInput.focus();
        }
    });

    threadPage.querySelector('[data-load-replies]').addEventListener('click', () => {
        showNotice(replyNotice, 'This mockup shows sample replies. Loading more replies is not connected.');
    });
}
