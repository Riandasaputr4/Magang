const popup = document.getElementById('popup');
    const openBtn = document.getElementById('createApiKeyBtn');
    const closeBtn = document.querySelector('.close-btn');
    const createForm = document.getElementById('createForm');

    openBtn.onclick = () => popup.classList.remove('hidden');
    closeBtn.onclick = () => popup.classList.add('hidden');

    window.onclick = (e) => {
      if (e.target === popup) {
        popup.classList.add('hidden');
      }
    };

    createForm.onsubmit = (e) => {
      e.preventDefault();
      const name = document.getElementById('apiKeyName').value.trim();
      const desc = document.getElementById('description').value.trim();

      if (name === '') {
        alert('Please enter a name for the API key.');
        return;
      }

      alert('API Key "${name}" created!');
      popup.classList.add('hidden');
      createForm.reset();
    };
