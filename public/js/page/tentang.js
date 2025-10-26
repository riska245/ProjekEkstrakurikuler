document.getElementById("contactForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const token = localStorage.getItem("auth_token");

    // Cek login dulu
    if (!token) {
        const loginConfirm = await Swal.fire({
            icon: "warning",
            title: "Belum Login",
            text: "Kamu perlu login untuk mengirim pesan.",
            showCancelButton: true,
            confirmButtonText: "Masuk Sekarang",
            cancelButtonText: "Nanti Saja",
            confirmButtonColor: "#FD4E0F",
            cancelButtonColor: "#6c757d",
        });

        if (loginConfirm.isConfirmed) {
            window.location.href = "/masuk";
        }
        return;
    }

    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData.entries());

    // Konfirmasi sebelum kirim
    const confirm = await Swal.fire({
        title: "Kirim Pesan?",
        text: "Pastikan data yang kamu isi sudah benar.",
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Ya, kirim",
        cancelButtonText: "Batal",
        confirmButtonColor: "#FD4E0F",
        cancelButtonColor: "#6c757d",
    });

    if (!confirm.isConfirmed) return;

    Swal.fire({
        title: "Mengirim pesan...",
        text: "Mohon tunggu sebentar",
        allowOutsideClick: false,
        didOpen: () => Swal.showLoading(),
    });

    const res = await fetch("/kontak", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
            "Content-Type": "application/json",
            Authorization: token,
        },
        body: JSON.stringify(data),
    });

    const result = await res.json();

    if (result.success) {
        Swal.fire({
            icon: "success",
            title: "Berhasil!",
            text: result.message,
            confirmButtonColor: "#FD4E0F",
        });
        e.target.reset();
    } else {
        Swal.fire({
            icon: "error",
            title: "Gagal",
            text: "Pesan gagal dikirim.",
            confirmButtonColor: "#FD4E0F",
        });
    }
});
