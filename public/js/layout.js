document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("nav-toggle");
    const sidebar = document.getElementById("mobile-sidebar");
    const overlay = document.getElementById("mobile-overlay");
    const closeBtn = document.getElementById("mobile-close");

    function openSidebar() {
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    }

    function closeSidebar() {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }

    btn && btn.addEventListener("click", openSidebar);
    closeBtn && closeBtn.addEventListener("click", closeSidebar);
    overlay && overlay.addEventListener("click", closeSidebar);

    // optional: close on Escape
    document.addEventListener("keydown", function (e) {
        if (
            e.key === "Escape" &&
            !sidebar.classList.contains("-translate-x-full")
        ) {
            closeSidebar();
        }
    });
});
