document.addEventListener("DOMContentLoaded", () => {
    initializeMobileSidebar();
    initializePreloader();
    initializeNavbarActions();
    initializeMobileNavbarActions();
    initializeDaftarButton();
    redirectIfLoggedIn();
    bindLogoutButtons();
});

/**
 * Sidebar mobile
 */
function initializeMobileSidebar() {
    const btn = document.getElementById("nav-toggle");
    const sidebar = document.getElementById("mobile-sidebar");
    const overlay = document.getElementById("mobile-overlay");
    const closeBtn = document.getElementById("mobile-close");

    if (!sidebar || !overlay) return;

    const openSidebar = () => {
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    };

    const closeSidebar = () => {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    };

    btn?.addEventListener("click", openSidebar);
    closeBtn?.addEventListener("click", closeSidebar);
    overlay.addEventListener("click", closeSidebar);

    document.addEventListener("keydown", (e) => {
        if (
            e.key === "Escape" &&
            !sidebar.classList.contains("-translate-x-full")
        ) {
            closeSidebar();
        }
    });
}

/**
 * Preloader
 */
function initializePreloader() {
    window.addEventListener("load", () => {
        const preloader = document.getElementById("preloader");
        const content = document.getElementById("content");

        if (!preloader || !content) return;

        preloader.style.opacity = "0";
        preloader.style.transition = "opacity 0.6s ease";

        setTimeout(() => {
            preloader.style.display = "none";
            content.classList.remove("opacity-0");
        }, 600);
    });
}

/**
 * Navbar desktop
 */
function initializeNavbarActions() {
    const guest = document.getElementById("guest-actions");
    const user = document.getElementById("user-actions");
    const userName = document.getElementById("user-name");

    if (!guest || !user || !userName) return;

    const token = localStorage.getItem("auth_token");
    const name = localStorage.getItem("user_name");

    guest.classList.add("hidden");
    user.classList.add("hidden");

    if (token && name) {
        const camelCaseName = toCamelCase(name);
        userName.textContent = camelCaseName;
        user.classList.remove("hidden");
    } else {
        guest.classList.remove("hidden");
        localStorage.removeItem("auth_token");
        localStorage.removeItem("user_name");
    }
}

/**
 * Navbar mobile
 */
function initializeMobileNavbarActions() {
    const guest = document.getElementById("mobile-guest-actions");
    const user = document.getElementById("mobile-user-actions");
    const userName = document.getElementById("mobile-user-name");

    if (!guest || !user || !userName) return;

    const token = localStorage.getItem("auth_token");
    const name = localStorage.getItem("user_name");

    guest.classList.add("hidden");
    user.classList.add("hidden");

    if (token && name) {
        const camelCaseName = toCamelCase(name);
        const texts = [`Halo, ${camelCaseName}`, "Selamat datang di GoEks"];
        let current = 0;

        user.classList.remove("hidden");
        userName.innerHTML =
            '<span id="typed-text"></span><span id="cursor">|</span>';

        const typedText = document.getElementById("typed-text");
        const cursor = document.getElementById("cursor");

        setInterval(() => {
            cursor.style.visibility =
                cursor.style.visibility === "visible" ? "hidden" : "visible";
        }, 500);

        function typeEffect() {
            let i = 0;
            typedText.textContent = "";
            const typing = setInterval(() => {
                typedText.textContent += texts[current].charAt(i);
                i++;
                if (i >= texts[current].length) {
                    clearInterval(typing);
                    setTimeout(backspaceEffect, 1500);
                }
            }, 100);
        }

        function backspaceEffect() {
            let i = typedText.textContent.length;
            const deleting = setInterval(() => {
                typedText.textContent = typedText.textContent.slice(0, i - 1);
                i--;
                if (i <= 0) {
                    clearInterval(deleting);
                    current = (current + 1) % texts.length;
                    setTimeout(typeEffect, 500);
                }
            }, 50);
        }

        typeEffect();
    } else {
        guest.classList.remove("hidden");
        localStorage.removeItem("auth_token");
        localStorage.removeItem("user_name");
    }
}

/**
 * Fungsi logout
 */
async function logout() {
    const { isConfirmed } = await Swal.fire({
        title: "Keluar",
        text: "Apakah Anda yakin ingin keluar?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#FD4E0F",
        confirmButtonText: "Ya, keluar",
        cancelButtonText: "Batal",
        reverseButtons: true,
    });

    if (!isConfirmed) return;

    const token = localStorage.getItem("auth_token");
    if (!token) return;

    try {
        const res = await fetch("/api/keluar", {
            method: "POST",
            headers: {
                Authorization: token,
                "Content-Type": "application/json",
            },
        });

        if (res.ok) {
            localStorage.removeItem("auth_token");
            localStorage.removeItem("user_name");
            Swal.fire({
                title: "Berhasil",
                text: "Anda berhasil keluar",
                icon: "success",
                timer: 1500,
                showConfirmButton: false,
            }).then(() => location.reload());
        } else {
            Swal.fire("Gagal", "Logout gagal", "error");
        }
    } catch (err) {
        console.error(err);
        Swal.fire("Gagal", "Logout gagal", "error");
    }
}

/**
 * Tombol "Daftar Sekarang"
 */
function initializeDaftarButton() {
    const daftarBtn = document.getElementById("daftar-sekarang");
    if (!daftarBtn) return;

    daftarBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const token = localStorage.getItem("auth_token");

        if (!token) {
            toastr.warning(
                "Harap masukkan akun terlebih dahulu",
                "Peringatan",
                {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 2000,
                    positionClass: "toast-top-right",
                    toastClass: "bg-[#FD4E0F] text-white rounded-lg shadow-lg",
                }
            );
            setTimeout(() => (window.location.href = "/masuk"), 1500);
            return;
        }

        window.location.href = "/daftar-eskul";
    });
}

/**
 * Cegah user login mengakses /masuk & /daftar
 */
function redirectIfLoggedIn() {
    const token = localStorage.getItem("auth_token");
    if (!token) return;

    const path = window.location.pathname;
    if (path === "/masuk" || path === "/daftar") {
        window.location.href = "/beranda";
    }
}

/**
 * Bind logout ke tombol
 */
function bindLogoutButtons() {
    document.querySelectorAll("[data-logout]").forEach((btn) => {
        btn.addEventListener("click", logout);
    });
}

/**
 * Utility: ubah nama ke Camel Case
 */
function toCamelCase(text) {
    return text
        .toLowerCase()
        .split(" ")
        .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
        .join(" ");
}
