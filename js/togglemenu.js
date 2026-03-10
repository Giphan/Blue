const searchBtn = document.getElementById('searchBtn');
const searchBox = document.getElementById('searchBox');
const searchInput = document.getElementById('searchInput');
const closeSearch = document.getElementById('closeSearch');
const navBtn = document.getElementById('navBtn');
const sideMenu = document.getElementById('sideMenu');

// Toggle Search
searchBtn.addEventListener('click', () => {
    searchBox.classList.toggle('active');
    if (searchBox.classList.contains('active')) {
        searchInput.focus(); // Focus input immediately
        sideMenu.classList.remove('active'); // Close menu if search is open
    }
});

// Toggle Side Menu
navBtn.addEventListener('click', () => {
    sideMenu.classList.toggle('active');
    searchBox.classList.remove('active'); // Close search if menu is open
});

// Close Search on 'X'
closeSearch.addEventListener('click', () => {
    searchBox.classList.remove('active');
});
