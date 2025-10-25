const form = document.getElementById("registerForm");

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const name = form.name.value;
    const email = form.email.value;
    const password = form.password.value;
    const password_confirmation = form.confirm.value;

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
