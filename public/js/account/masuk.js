const loginForm = document.getElementById("loginForm");
/**
 * Initialize preloader transition
 */

function initializePreloader() {
    window.addEventListener("load", () => {
        const preloader = document.getElementById("preloader");
        const content = document.getElementById("content");

        if (!preloader || !content) {
            console.warn("Preloader elements not found");
            return;
        }

        preloader.style.opacity = "0";
        preloader.style.transition = "opacity 0.6s ease";

        setTimeout(() => {
            preloader.style.display = "none";
            content.classList.remove("opacity-0");
        }, 600);
    });
}

loginForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const email = loginForm.email.value.trim();
    const password = loginForm.password.value.trim();

    if (!email || !password) {
        Swal.fire({
            icon: "warning",
            title: "Oops!",
            text: "Email dan password wajib diisi",
        });
        return;
    }

    // Tampilkan loading SweetAlert
    Swal.fire({
        title: "Memproses...",
        text: "Mohon tunggu sebentar",
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        },
    });

    try {
        const res = await fetch("/api/masuk", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
            },
            body: JSON.stringify({ email, password }),
        });

        const data = await res.json();
        console.log("Login response:", data);

        if (res.ok && data.access_token) {
            localStorage.setItem("auth_token", `Bearer ${data.access_token}`);
            if (data.user_name) {
                localStorage.setItem("user_name", data.user_name);
            }

            // Ganti loading jadi pesan sukses
            Swal.fire({
                icon: "success",
                title: "Berhasil masuk",
                text: `Selamat datang, ${data.user_name}!`,
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                window.location.href = "/";
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Login gagal",
                text: data.message || "Email atau password salah",
            });
        }
    } catch (err) {
        console.error(err);
        Swal.fire({
            icon: "error",
            title: "Gagal terhubung",
            text: "Tidak dapat menghubungi server",
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const token = localStorage.getItem("auth_token");

    // Cek apakah user sudah login
    if (token) {
        // Pastikan cuma redirect kalau user sekarang di halaman login/daftar
        const currentPath = window.location.pathname;
        if (currentPath === "/masuk" || currentPath === "/daftar") {
            window.location.replace("/beranda");
        }
    }
});

initializePreloader();
