<div class="content-description">
    <div class="description-header">
        ОПИСАНИЕ УСЛУГИ
    </div>

    <div class="description-body">
        <h2>Реализуем решение на low-code платформе и сформируем центр компетенций</h2>
        <p>Спроектируем и реализуем систему на платформе, объединив ваши знания процессов с нашей экспертизой в автоматизации.</p>
    </div>

    <div class="carousel-container">
        <div class="carousel" id="imageCarousel">
            <div class="carousel-item side">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blocks/description-4.png" alt="4">
            </div>
            <div class="carousel-item side">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blocks/description-3.png" alt="3">
            </div>
            <div class="carousel-item center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blocks/description-1.png" alt="1">
            </div>
            <div class="carousel-item side">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blocks/description-2.png" alt="2">
            </div>
            <div class="carousel-item side">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blocks/description-5.png" alt="5">
            </div>
        </div>

        <div class="carousel-controls">
            <button class="carousel-btn" onclick="moveCarousel(-1)">❮</button>
            <button class="carousel-btn" onclick="moveCarousel(1)">❯</button>
        </div>
    </div>

    <div class="description-bottom-section">
        <div class="description-after-photo">
            <p>
            Мы адаптируем пользователей к платформе, обучим их работе в системе и передадим опыт, 
            чтобы ваша команда могла самостоятельно развивать решение. 
            Для вас мы подберем оптимальный формат внедрения, обеспечим поддержку и контроль качества на всех этапах.
            </p>
        </div>
        <div class="description-button">    
            <button> ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ </button>
        </div>
    </div>
</div>

<script>
    let currentIndex = 2; // Начинаем с центрального изображения
    const carousel = document.getElementById('imageCarousel');
    const items = carousel.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    function updateCarousel() {
        items.forEach((item, index) => {
            // Вычисляем позицию относительно центра
            const position = index - currentIndex;
            
            // Удаляем все классы
            item.className = 'carousel-item';
            
            // Добавляем соответствующие классы в зависимости от позиции
            if (position === 0) {
                item.classList.add('center');
            } else if (Math.abs(position) === 1) {
                item.classList.add('side');
            } else if (Math.abs(position) === 2) {
                item.classList.add('side');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    function moveCarousel(direction) {
        currentIndex += direction;
        
        // Зацикливаем карусель
        if (currentIndex < 0) {
            currentIndex = totalItems - 1;
        } else if (currentIndex >= totalItems) {
            currentIndex = 0;
        }
        
        updateCarousel();
    }

    // Инициализация карусели
    updateCarousel();

    // Автопрокрутка (опционально)
    setInterval(() => moveCarousel(1), 5000);
</script>