document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.header-menu-item');

    menuItems.forEach(item => {
        const submenu = item.querySelector('.menu-submenu');
        const menuSvg = item.querySelector('.header-menu-item-svg');
        if (!submenu) return;

        submenu.style.display = 'none';
        menuSvg.style.transform = 'rotate(0)';

        const link = item.querySelector('a.header-menu__text');
        if (!link) return;

        link.addEventListener('click', function(e) {
            e.preventDefault();
            if (submenu.style.display === 'none') {
                submenu.style.display = 'flex';
                menuSvg.style.transform = 'rotate(180deg)';
            } else {
                submenu.style.display = 'none';
                menuSvg.style.transform = 'rotate(0)';
            }
        });
    });
});



