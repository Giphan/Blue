<script>
function toggleMenu() {
    const menu = document.getElementById('navMenu');
    // Toggle between hidden and visible
    if(menu.style.display === 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
        menu.style.flexDirection = 'column';
    }
}

// Optional: Close menu when clicking outside
document.addEventListener('click', function(event) {
    const menu = document.getElementById('navMenu');
    const icon = document.querySelector('.nav-icon');
    if(!menu.contains(event.target) && !icon.contains(event.target)) {
        menu.style.display = 'none';
    }
});
</script>
