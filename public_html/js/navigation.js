function toggleSidebar() {
    if (document.getElementById('sidebar').classList.contains('w3-hide')) {
        document.getElementById('sidebar').classList.remove('w3-hide');
    } else {
        document.getElementById('sidebar').classList.add('w3-hide');
    }
}