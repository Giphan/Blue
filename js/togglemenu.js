const navBtn = document.getElementById('navBtn');
const sideMenu = document.getElementById('sideMenu');
const searchBtn = document.getElementById('searchBtn');
const searchBox = document.getElementById('searchBox');

// Toggle side menu
navBtn.addEventListener('click', () => {
    sideMenu.classList.toggle('active');
});

// Toggle search box
searchBtn.addEventListener('click', () => {
    searchBox.classList.toggle('active');
});

// Close side menu or search if clicked outside
document.addEventListener('click', (e) => {
    if(!sideMenu.contains(e.target) && !navBtn.contains(e.target)) {
        sideMenu.classList.remove('active');
    }
    if(!searchBox.contains(e.target) && !searchBtn.contains(e.target)) {
        searchBox.classList.remove('active');
    }
});
