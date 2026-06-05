// Popup saat website dibuka
window.onload = function () {
    alert("Selamat datang di website syaila ✨");
};

// Ambil elemen
const judul = document.querySelector("h1");
const tombol = document.querySelector("a");
const container = document.querySelector(".container");

// Efek klik judul
judul.addEventListener("click", function () {
    judul.innerHTML = "Semangat Belajar Laravel 🚀";
});

// Efek hover tombol
tombol.addEventListener("mouseover", function () {
    tombol.style.backgroundColor = "#4b2e2e";
    tombol.innerHTML = "Klik Aku 👀";
});

tombol.addEventListener("mouseout", function () {
    tombol.style.backgroundColor = "#6b4226";
    tombol.innerHTML = "Ke Halaman About";
});

// Efek klik container
container.addEventListener("click", function () {
    container.style.transform = "scale(1.03)";
    container.style.transition = "0.3s";

    setTimeout(() => {
        container.style.transform = "scale(1)";
    }, 300);
});