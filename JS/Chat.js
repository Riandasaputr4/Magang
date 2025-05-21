 function growUp(textarea) {
    textarea.style.height = "auto"; // reset height
    textarea.style.height = textarea.scrollHeight + "px";
  }

  // Fungsi untuk menambahkan pesan ke dalam chat

function addMessage(text, role = 'user') {
  const chatBox = document.querySelector('.chat-messages');

  // Buat elemen pesan
  const msg = document.createElement('div');
  msg.className = role === 'assistant' ? 'message' : 'message2';
  
  const msgText = document.createElement('div');
  msgText.className = 'message-text';
  msgText.textContent = text;

  msg.appendChild(msgText);
  chatBox.appendChild(msg);

  // Scroll ke bawah setiap kali ada pesan baru
  chatBox.scrollTop = chatBox.scrollHeight;
}

/* ====== Demo pemakaian ====== */
const textarea = document.getElementById('composer');
const sendBtn  = document.querySelector('.chat-input button');

sendBtn.addEventListener('click', () => {
  const text = textarea.value.trim();
  if (!text) return;
  
  addMessage(text, 'user');      // tampilkan pesan user
  textarea.value = '';

  // Contoh balasan otomatis (mock)
  setTimeout(() => {
    addMessage('Ini jawaban otomatis dari asisten 😊', 'assistant');
  }, 600);
});


/* Opsional: kirim dengan Enter (tanpa Shift) */
textarea.addEventListener('keydown', e => {
  if (e.key === 'Enter' && !e.shiftKey) {
    e.preventDefault();
    sendBtn.click();
  }
});

// Tampilkan pesan dari asisten saat pertama kali masuk halaman
document.addEventListener('DOMContentLoaded', () => {
  addMessage('Hi 👋 Ada yang bisa saya bantu?', 'assistant');
});


