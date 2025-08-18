document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.header-menu-item');

    menuItems.forEach(item => {
        const submenu = item.querySelector('.menu-submenu');
        if (!submenu) return;

        submenu.style.display = 'none';

        const link = item.querySelector('a.header-menu__text');
        if (!link) return;

        link.addEventListener('click', function(e) {
            e.preventDefault();
            if (submenu.style.display === 'none') {
                submenu.style.display = 'flex';
            } else {
                submenu.style.display = 'none';
            }
        });
    });
});



