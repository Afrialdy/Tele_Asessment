document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault(); // mencegah pengiriman formulir default
    document.getElementById('signupAlert').classList.remove('d-none'); // menampilkan alert
    setTimeout(function() {
        this.submit(); // mengirim formulir secara manual
    }, 2000); // menunda selama 2 detik
});