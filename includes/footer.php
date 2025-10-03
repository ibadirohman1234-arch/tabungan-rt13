    </div> <!-- Tutup #content -->
</div> <!-- Tutup .wrapper -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    const collapseBtn = document.getElementById('sidebarCollapse');

    if (collapseBtn) {
        collapseBtn.addEventListener('click', function () {
            sidebar.classList.toggle('active');
            content.classList.toggle('sidebar-active');
        });
    }

    // Tutup sidebar saat klik di luar (opsional)
    document.addEventListener('click', function (e) {
        if (window.innerWidth < 768 && 
            sidebar.classList.contains('active') && 
            !sidebar.contains(e.target) && 
            e.target !== collapseBtn) {
            sidebar.classList.remove('active');
            content.classList.remove('sidebar-active');
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>