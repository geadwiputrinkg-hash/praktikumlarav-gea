// Mengubah warna judul saat diklik
document.querySelector("h1").addEventListener("click", function () {
    this.style.color = "#8b5a2b";
});

// Efek tombol about
document.querySelector("a").addEventListener("mouseover", function () {
    this.innerHTML = "Klik untuk lanjut 👀";
});

document.querySelector("a").addEventListener("mouseout", function () {
    this.innerHTML = "Ke Halaman About";
});