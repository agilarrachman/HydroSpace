function sendMessage() {
    const messageInput = document.getElementById('question'); // Ganti dengan ID input yang benar
    const messageText = messageInput.value;

    // Cek jika pesan kosong
    if (messageText.trim() === '') {
        return;
    }

    // Tampilkan pesan user di chat window
    addMessageToChatWindow(messageText, 'user');

    // Hapus input setelah dikirim
    messageInput.value = '';

    // Kirim pesan ke server
    fetch('/hydrobot/send', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ message: messageText })
    })
    .then(response => response.json())
    .then(data => {
        if (data && data.response) {
            // Tampilkan respon bot di chat window
            addMessageToChatWindow(data.response, 'bot');
        } else {
            // Tampilkan error jika ada
            addMessageToChatWindow("Terjadi kesalahan, silakan coba lagi.", 'bot');
        }
    })
    .catch(error => {
        console.error("Error:", error);
        addMessageToChatWindow("Terjadi kesalahan, silakan coba lagi.", 'bot');
    });
}
