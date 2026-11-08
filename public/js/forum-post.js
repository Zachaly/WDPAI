const postForm = document.querySelector('[data-post-form]');

if (postForm) {
    const titleInput = postForm.querySelector('[data-title-input]');
    const titleCount = postForm.querySelector('[data-title-count]');
    const bodyInput = postForm.querySelector('[data-post-body]');
    const bodyPreview = postForm.querySelector('[data-body-preview]');
    const notice = postForm.querySelector('[data-post-notice]');
    const tagList = postForm.querySelector('[data-tag-list]');
    const tagInput = postForm.querySelector('[data-tag-input]');
    const editorTabs = postForm.querySelectorAll('[data-editor-tab]');

    const updateTitleCount = () => {
        titleCount.textContent = String(titleInput.value.length);
    };

    const showNotice = (message, type = 'success') => {
        notice.hidden = false;
        notice.className = `fp-notice fp-notice-${type}`;
        notice.textContent = message;
        notice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    };

    const addTag = (rawTag) => {
        const tag = rawTag.trim().replace(/^#+/, '').slice(0, 24);
        if (!tag || [...tagList.querySelectorAll('[data-tag-value]')].some((input) => input.value.toLowerCase() === tag.toLowerCase())) {
            return;
        }

        const chip = document.createElement('span');
        chip.className = 'fp-tag';
        const prefix = document.createElement('i');
        prefix.textContent = '#';
        const label = document.createTextNode(tag);
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'tags[]';
        hiddenInput.value = tag;
        hiddenInput.dataset.tagValue = '';
        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.dataset.removeTag = '';
        removeButton.setAttribute('aria-label', `Remove ${tag} tag`);
        removeButton.textContent = '×';
        chip.append(prefix, label, hiddenInput, removeButton);
        tagList.insertBefore(chip, tagInput.parentElement);
    };

    updateTitleCount();

    titleInput.addEventListener('input', updateTitleCount);

    tagList.addEventListener('click', (event) => {
        const button = event.target.closest('[data-remove-tag]');
        if (button) {
            button.closest('.fp-tag').remove();
        }
    });

    tagInput.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.key === ',') {
            event.preventDefault();
            addTag(tagInput.value);
            tagInput.value = '';
        }
    });

    editorTabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const isPreview = tab.dataset.editorTab === 'preview';
            editorTabs.forEach((item) => {
                const isActive = item === tab;
                item.classList.toggle('is-active', isActive);
                item.setAttribute('aria-selected', String(isActive));
            });
            bodyInput.hidden = isPreview;
            bodyPreview.hidden = !isPreview;
            bodyPreview.textContent = bodyInput.value;
        });
    });

    postForm.querySelectorAll('[data-format]').forEach((button) => {
        button.addEventListener('click', () => {
            const start = bodyInput.selectionStart;
            const end = bodyInput.selectionEnd;
            const selected = bodyInput.value.slice(start, end);
            const formats = {
                bold: [`**${selected || 'text'}**`, 2, 2],
                italic: [`_${selected || 'text'}_`, 1, 1],
                list: [`- ${selected || 'list item'}`, 0, 0],
                quote: [`> ${selected || 'quoted telemetry'}`, 0, 0],
                link: [`[${selected || 'link text'}](https://)`, 1, 1],
            };
            const [replacement, selectionStart, selectionEnd] = formats[button.dataset.format];
            bodyInput.setRangeText(replacement, start, end, 'select');
            bodyInput.setSelectionRange(
                start + selectionStart,
                start + replacement.length - selectionEnd,
            );
            bodyInput.focus();
            bodyPreview.textContent = bodyInput.value;
        });
    });

    postForm.querySelectorAll('[data-evidence-input]').forEach((input) => {
        input.addEventListener('change', () => {
            const file = input.files[0];
            if (!file) {
                return;
            }

            const slot = input.closest('.fp-attachment');
            const fileName = slot.querySelector('[data-evidence-name]');
            fileName.textContent = file.name;
            slot.classList.remove('is-empty');
            if (input.dataset.evidenceInput === 'photo' && file.type.startsWith('image/')) {
                const image = slot.querySelector('[data-evidence-image]');
                const previousUrl = image.dataset.objectUrl;
                if (previousUrl) {
                    URL.revokeObjectURL(previousUrl);
                }
                const objectUrl = URL.createObjectURL(file);
                image.src = objectUrl;
                image.dataset.objectUrl = objectUrl;
                image.hidden = false;
            }
        });
    });

    postForm.querySelectorAll('[data-remove-evidence]').forEach((button) => {
        button.addEventListener('click', () => {
            const slot = button.closest('.fp-attachment');
            const input = slot.querySelector('[data-evidence-input]');
            input.value = '';
            slot.classList.add('is-empty');
            slot.querySelector('[data-evidence-name]').textContent = 'Select evidence file';
            if (input.dataset.evidenceInput === 'photo') {
                const image = slot.querySelector('[data-evidence-image]');
                if (image.dataset.objectUrl) {
                    URL.revokeObjectURL(image.dataset.objectUrl);
                    delete image.dataset.objectUrl;
                }
                image.hidden = true;
            }
        });
    });

    postForm.addEventListener('submit', (event) => {
        const intent = event.submitter?.value;
        const isPublish = intent === 'publish';
        const title = titleInput.value.trim();
        const body = bodyInput.value.trim();

        if (isPublish && (!title || !body)) {
            event.preventDefault();
            showNotice('Add a title of 150 characters or fewer and post details before publishing.', 'error');
            (!title ? titleInput : bodyInput).focus();
            return;
        }

        event.preventDefault();
        const message = isPublish
            ? 'Preview only — this post was not published. Posting is not connected yet.'
            : 'Draft preview only — nothing was saved. Draft storage is not connected yet.';
        showNotice(message);
    });

    const channelInputs = postForm.querySelectorAll('input[name="channel"]');
    channelInputs.forEach((input) => {
        input.addEventListener('change', () => {
            channelInputs.forEach((option) => {
                option.closest('.fp-channel-option').classList.toggle('is-selected', option.checked);
            });
        });
    });
}
