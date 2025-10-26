const form = document.getElementById("registerForm");

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const password = form.password.value.trim();
    const password_confirmation = form.confirm.value.trim();

    if (!name || !email || !password || !password_confirmation) {
        Swal.fire({
            icon: "warning",
            title: "Oops!",
            text: "Semua kolom wajib diisi",
            confirmButtonColor: "#FD4E0F",
        });
        return;
    }

    // Tampilkan loading SweetAlert
    Swal.fire({
        title: "Membuat akun...",
        text: "Mohon tunggu sebentar",
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        },
    });

    try {
        const res = await fetch("/api/daftar", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
            },
            body: JSON.stringify({
                name,
                email,
                password,
                password_confirmation,
            }),
        });

        const data = await res.json();

        if (res.ok) {
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                text: "Akun berhasil dibuat. Silakan login.",
                confirmButtonColor: "#FD4E0F",
                timer: 2500,
                timerProgressBar: true,
                showConfirmButton: true,
            }).then(() => {
                window.location.href = "/masuk";
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Gagal",
                text: data.message || "Terjadi kesalahan, coba lagi.",
                confirmButtonColor: "#FD4E0F",
            });
        }
    } catch (err) {
        console.error(err);
        Swal.fire({
            icon: "error",
            title: "Gagal",
            text: "Gagal terhubung ke server.",
            confirmButtonColor: "#FD4E0F",
        });
    }
});
