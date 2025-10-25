const loginForm = document.getElementById("loginForm");
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

            Swal.fire({
                icon: "success",
                title: "Berhasil masuk",
                text: `Selamat Datang, ${data.user_name}!`,
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
