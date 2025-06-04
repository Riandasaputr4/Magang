//  function growUp(textarea) {
//     textarea.style.height = "auto"; // reset height
//     textarea.style.height = textarea.scrollHeight + "px";
//   }

//   // Fungsi untuk menambahkan pesan ke dalam chat

// function addMessage(text, role = 'user') {
//   const chatBox = document.querySelector('.chat-messages');

//   // Buat elemen pesan
//   const msg = document.createElement('div');
//   msg.className = role === 'assistant' ? 'message' : 'message2';
  
//   const msgText = document.createElement('div');
//   msgText.className = 'message-text';
//   msgText.textContent = text;

//   msg.appendChild(msgText);
//   chatBox.appendChild(msg);

//   // Scroll ke bawah setiap kali ada pesan baru
//   chatBox.scrollTop = chatBox.scrollHeight;
// }

// /* ====== Demo pemakaian ====== */
// const textarea = document.getElementById('composer');
// const sendBtn  = document.querySelector('.chat-input button');

// sendBtn.addEventListener('click', () => {
//   const text = textarea.value.trim();
//   if (!text) return;
  
//   addMessage(text, 'user');      // tampilkan pesan user
//   textarea.value = '';

//   // Contoh balasan otomatis (mock)
//   setTimeout(() => {
//     addMessage('Ini jawaban otomatis dari asisten 😊', 'assistant');
//   }, 600);
// });


// /* Opsional: kirim dengan Enter (tanpa Shift) */
// textarea.addEventListener('keydown', e => {
//   if (e.key === 'Enter' && !e.shiftKey) {
//     e.preventDefault();
//     sendBtn.click();
//   }
// });

// // Tampilkan pesan dari asisten saat pertama kali masuk halaman
// document.addEventListener('DOMContentLoaded', () => {
//   addMessage('Hi 👋 Ada yang bisa saya bantu?', 'assistant');
// });
    
 

    // Fungsi autosize textarea
    function growUp(textarea) {
        textarea.style.height = 'auto';
        textarea.style.height = textarea.scrollHeight + 'px';
    }

    // Mendapatkan CSRF token dari cookie
    function getCSRFToken() {
        let cookieValue = null;
        const name = 'csrftoken';
        if (document.cookie && document.cookie !== '') {
            const cookies = document.cookie.split(';');
            for (let cookie of cookies) {
                cookie = cookie.trim();
                if (cookie.startsWith(name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }

    async function sendMessage() {
        const input = document.getElementById("userInput");
        const message = input.value.trim();

        if (!message) return;

        const chatBox = document.getElementById("chatBox");
        chatBox.innerHTML += `<div class='message user'><strong>Anda:</strong> ${message}</div>`;
        input.value = "";
        growUp(input);
        chatBox.scrollTop = chatBox.scrollHeight;

        try {
            const response = await fetch(chatApiUrl, {  // Gunakan variabel URL
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "X-CSRFToken": getCSRFToken()
                },
                body: `message=${encodeURIComponent(message)}`
            });

            const text = await response.text();

            let data;
            try {
                data = JSON.parse(text);
            } catch (e) {
                console.error("Response bukan JSON:", text);
                chatBox.innerHTML += `<div class='message bot'><strong>Bot:</strong> Terjadi kesalahan: respons tidak valid.</div>`;
                return;
            }

            if (!response.ok) {
                console.error("Server error:", data);
                chatBox.innerHTML += `<div class='message bot'><strong>Bot:</strong> Terjadi kesalahan saat memproses permintaan.</div>`;
                return;
            }

            chatBox.innerHTML += `<div class='message bot'><strong>Bot:</strong> ${data.response}</div>`;
            chatBox.scrollTop = chatBox.scrollHeight;
        } catch (error) {
            console.error("Fetch error:", error);
            chatBox.innerHTML += `<div class='message bot'><strong>Bot:</strong> Gagal menghubungi server.</div>`;
        }
    }

