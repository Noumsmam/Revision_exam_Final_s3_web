function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const main = document.getElementById("main-content");
    const btn = document.querySelector(".toggle-btn");

    sidebar.classList.toggle("collapsed");
    main.classList.toggle("expanded");

    btn.textContent = sidebar.classList.contains("collapsed")
        ? "☰ Afficher le menu"
        : "☰ Masquer le menu";
}