<style>
    .content-description {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .description-header {
        font-family: 'Halvar Breitschrift', sans-serif;
        color: #fff;
        font-size: 25px; /* Исправлено: было size: 25px; */
        font-weight: 800;
        line-height: 100%;
        text-transform: uppercase;
        margin-left: 50px;
        flex: 1 1;
        vertical-align: middle;
        width: 400px;
        align-self: baseline;
        padding-top: 0.4em;
    }

    .description-body {
        flex: 2 2;
        align-items: flex-start;
        margin-bottom: 30px;
        max-width: 1112px;
        margin: 0 auto; /* Центрируем контейнер на странице */
        padding: 0 20px; /* Добавляем отступы по бокам */
    }

    .description-after-photo {
        flex: 1 2;
        width: 600px;
        height: 76px;
        font-family: "Share Tech Mono", monospace;
        font-weight: 400;
        font-style: normal; /* Исправлено: было Regular */
        font-size: 16px;
        line-height: 120%;
        letter-spacing: -0.04em; /* Исправлено: было -4% */
        vertical-align: middle;
        color: rgba(255, 255, 255, 1); 
        max-width: 800px; /* Ограничение ширины текста */
        margin-bottom: 20px; /* Отступ перед кнопкой */
        text-align: left; /* Текст по левому краю */
    }

    .description-photo img {
        width: 599px; /* Добавлено px */
        height: 348px; /* Добавлено px */
        border-radius: 10px;
    }

    .content-description p {
        font-family: "Share Tech Mono", monospace;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        font-style: normal; /* Исправлено: было Regular */
        font-size: 16px;
        line-height: 120%;
        letter-spacing: -0.04em; /* Исправлено: было -4% */
        vertical-align: middle;
    }

    .content-description h2 {
        font-family: 'Halvar Breitschrift', sans-serif;
        width: 1112px;
        height: 150px;
        color: #ffffff; 
        font-weight: 800;
        font-style: normal; /* Исправлено: было ExtraBold */
        font-size: 50px;
        line-height: 100%;
        text-transform: uppercase;
        align-self: baseline;
    }

    .description-body p {
        width: 600px;
        height: 38px;
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: -0.04em; /* Исправлено: было -4% */
        vertical-align: middle;
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
        flex-direction: column; /* Вертикальное расположение */
        align-items: center; /* Центрирование по горизонтали */
        text-align: center; /* Центрирование текста */
        margin-top: 30px;
    }

    .description-header,
    .description-body,
    .description-body-photo,
    .description-bottom-section {
        width: 100%; /* Заставляем все блоки занимать всю ширину контейнера */
        text-align: left; /* Выравниваем текст по левому краю */
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

    <div class="description-body-photo">
        <div class="description-photo">
            <marquee behavior="" direction="">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blocks/description-1.png" alt="1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blocks/description-2.png" alt="2">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blocks/description-3.png" alt="3">
            </marquee>
            
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