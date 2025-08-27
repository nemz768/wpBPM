<style>
    .content-description {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .description-header {
        font-family: 'Halvar Breitschrift', sans-serif;
        color: #fff;
        font-size: 25px;
        font-weight: 800;
        line-height: 100%;
        text-transform: uppercase;
        margin-left: 50px;
        flex: 1 1;
        vertical-align: middle;
        width: 200px;
        max-width: 200px;
        align-self: baseline;
        padding-top: 0.4em;
        margin-top: 60px;
    }

    .description-body {
        flex: 2 2;
        align-items: flex-start;
        margin-bottom: 30px;
        max-width: 1112px;
        margin: 0 auto;
        padding: 0 20px;
        margin-top: 60px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .description-after-photo {
        flex: 1 2;
        width: 600px;
        height: 76px;
        font-family: "Share Tech Mono", monospace;
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: -0.04em;
        vertical-align: middle;
        color: rgba(255, 255, 255, 1); 
        max-width: 800px;
        margin-bottom: 20px;
        text-align: left;
    }

    .content-description p {
        font-family: "Share Tech Mono", monospace;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: -0.04em;
        vertical-align: middle;
    }

    .content-description h2 {
        font-family: 'Halvar Breitschrift', sans-serif;
        width: 100%;
        height: 150px;
        color: #ffffff; 
        font-weight: 800;
        font-style: normal;
        font-size: 50px;
        line-height: 100%;
        text-transform: uppercase;
        align-self: baseline;
        margin: unset;
        margin-bottom: 30px;
    }

    .description-body p {
        width: 600px;
        height: 38px;
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: -0.04em;
        vertical-align: middle;
        margin-bottom: 30px;
    }

    .description-button button {
        background-color: #1F2CBE;
        font-family: "Share Tech Mono", monospace;
        width: 600px;
        height: 56px;
        border-radius: 10px;
        padding: 20px;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        display: block;
        margin: 0 auto;
        box-sizing: border-box; /* Добавлено для правильного расчета размеров */
    }

    .description-button {
        flex-shrink: 0; /* Кнопка не сжимается */
        margin-top: 10px; /* Дополнительный отступ если нужно */
    }

    .description-bottom-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
    }

    .carousel-container {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: 10px auto;
        padding: 25px;
        overflow: hidden;
        height: 340px;

    }

    .carousel {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 20px;
        padding: 20px 0;
    }

    .carousel-item {
        flex: 0 0 auto;
        transition: all 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Центральное изображение - большое */
    .carousel-item.center {
        width: 400px;
        height: 250px;
        transform: scale(1.1);
        z-index: 2;
    }

    /* Боковые изображения - поменьше */
    .carousel-item.side {
        width: 300px;
        height: 200px;
        opacity: 0.7;
        filter: brightness(0.8);
    }

    /* Крайние изображения - скрыты */
    .carousel-item.hidden {
        width: 0;
        height: 0;
        opacity: 0;
    }

    .carousel-controls {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        z-index: 3;
    }

    .carousel-btn {
        background: rgba(255, 255, 255, 0.3);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 24px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease;
        margin: 0 20px;
    }

    .carousel-btn:hover {
        background: rgba(255, 255, 255, 0.5);
    }
</style>

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