const navBtn = document.getElementById('navBtn');
const sideMenu = document.getElementById('sideMenu');
const searchBtn = document.getElementById('searchBtn');
const searchBox = document.getElementById('searchBox');

// Toggle side menu
navBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // prevent click from bubbling
    sideMenu.classList.toggle('active');
});

// Toggle search box
searchBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    searchBox.classList.toggle('active');
});

// Close side menu or search if clicking outside
document.addEventListener('click', () => {
    sideMenu.classList.remove('active');
    searchBox.classList.remove('active');
});
});
