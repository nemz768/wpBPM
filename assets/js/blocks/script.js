document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    // Открываем первый элемент по умолчанию
    accordionItems[0].classList.add('active');
    accordionItems[0].querySelector('.accordion-content').style.maxHeight = accordionItems[0].querySelector('.accordion-content').scrollHeight + 'px';
    
    // Добавляем обработчики клика
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');
        
        header.addEventListener('click', () => {
            // Закрываем все элементы
            accordionItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.accordion-content').style.maxHeight = null;
                }
            });
            
            // Переключаем текущий элемент
            item.classList.toggle('active');
            
            if (item.classList.contains('active')) {
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = null;
            }
        });
    });
});