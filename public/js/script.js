document.addEventListener("DOMContentLoaded", function () {

    console.log("Website TechInfo berhasil dimuat.");

    // Tombol kembali ke atas
    const button = document.getElementById("topButton");

    if (button) {
        button.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    // Form kontak
    const form = document.getElementById("contactForm");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            alert("Pesan berhasil dikirim!");

            form.reset();
        });
    }

});