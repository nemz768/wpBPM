<style>
    .component {
        width: 100%;
        height: 100%;
    }

    .sub-block {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
    }

    .component button {
        background-color: unset; 
        border: unset;
        width: 20px;
    }

    .sub-block-hide {
        /* background-color: red; */
        flex: 1 1;
        /* min-height: 250px; */
        /* border: 1px solid black; */
        height: 150px; 
        overflow: hidden;
        transition: height 0.3s ease-in-out;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }



    .sub-block:nth-child(1) {
        border: 2px solid rgba(255, 255, 255, 0.2);
        padding: 10px;
        border-left: unset;
    }

    .sub-block:nth-child(2) {
        border: 2px solid rgba(255, 255, 255, 0.2);
        padding: 10px;
        border-right: unset;
    }

    .sub-block:nth-child(3) {
        border: 2px solid rgba(255, 255, 255, 0.2);
        padding: 10px;
        border-left: unset;
    }

    .sub-block-show {
        /* background-color: blue; */
        border: 1px solid black;
        box-sizing: border-box;
        flex: 1 1;
        /* min-height: 250px; */
    }
    .component {
        padding:20px;
        box-sizing: border-box;
    }

    .sub-block button {
        height: 20px;
    }

    
    .sub-block-head {
        flex: 1 1;

    }

    .sub-block-head h2 {
        font-family: 'Halvar Breitschrift', sans-serif;
        color: white;
        size: 20px;
        margin-left: 20px;
    }

    .sub-block-head img {
        margin-top: 10px;
        margin-left: 20px;
    }

    .sub-block-body {
        flex: 3 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .sub-block-body h2 {
        font-family: 'Halvar Breitschrift', sans-serif;
        font-weight: 800;
        color: white;
        size: 50px;
        width: 100%;
        margin-left: 45px;
    }

    .sub-block-chek {
        border: 1px solid rgba(255, 255, 255, 0.2);
        margin-left: 45px;
        height: 115px;
        opacity: 1;
        left: 660px;
        border-width: 1px;
        border-radius: 10px;
        padding: 15px;
        gap: 10px;
        background-color: #ffffff2d;
    }

    .sub-block-text1 {
        font-family: Share Tech Mono;
        font-weight: 400px;
        font-style: Regular;
        font-size: 18px;
        line-height: 100%;
        letter-spacing: 0%;
        vertical-align: middle;
        color: white;
        margin-bottom: 5px;
    }

    .sub-block-text2 {
        font-family: Share Tech Mono;
        font-weight: 400;
        font-style: Regular;
        font-size: 14px;
        line-height: 120%;
        letter-spacing: -4%;
        vertical-align: middle;
        color: white;
        margin-bottom: 5px;
    }

</style>

<script>
    function toogleButton(id) {
        const block = document.getElementById(id);
        const blocks = document.querySelectorAll(".sub-block-hide")
        if (blocks) {
            blocks.forEach(xx => xx.style.height = "100px")
        }

        if (block) {
            const heightChek = parseInt(block.style.height)

            if (block.style.height == "500px") {
                block.style.height = "100px"
            } else {
                block.style.height = "560px"
            }
        } else {
            console.error("Блок не найден")
        }
    }
</script>

<div class="component">
    <div class="sub-block">
        <div id="block-1" class="sub-block-hide">
            <div class="sub-block-head">
                <h2>Планирование</h2>
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\blocks\планирование.png" style="width: 50px;">
            </div>
            <div class="sub-block-body">
                <h2>Планируете автоматизировать процессы с помощью Low-code платформы?</h2>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">НУЖНА CRM</div>
                    <div class="sub-block-text2">Отлично! Практически у всех low-code платформ есть стандартные решения для CRM. 
                        Адаптируем его под ваши процессы и научим выполнять доработки самостоятельно.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">HR-процессы</div>
                    <div class="sub-block-text2">На базе систем можно создавать решения для работы с сотрудниками, а также корпоративные порталы. 
                        В ряде платформ предусмотрены стандартные решения для службы HR.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Надо автоматизировать работу службы поддержки</div>
                    <div class="sub-block-text2">Платформы позволяют создавать окна для взаимодействия с внешними пользователями 
                        и поддерживают омниканальность. Организовать коммуникацию не составит труда.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Хотим внедрить документооборот</div>
                    <div class="sub-block-text2">Легко. В большинстве платформ предусмотрено создание бизнес-процессов. 
                        Можно автоматизировать любую логику согласования.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Любые процессы компании</div>
                    <div class="sub-block-text2">Low-code платформа гибкий инструмент с помощью которого можно автоматизировать любые процессы компании.</div>
                </div>
            </div>
        </div>
        <button style="background-color: unset; border: unset;" onclick="toogleButton('block-1')">
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\blocks\открыть.png" style="width: 20px;">
        </button>
    </div>
    <div class="sub-block">
        <div id="block-2" class="sub-block-hide">
            <div class="sub-block-head">
                <h2>Самостоятельная настройка</h2>
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\blocks\самостоятельная настройка.png" style="width: 50px;">
            </div>
            <div class="sub-block-body">
                <h2>Самостоятельно настраиваете Low-code платформу</h2>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">НУЖНА CRM</div>
                    <div class="sub-block-text2">Отлично! Практически у всех low-code платформ есть стандартные решения для CRM. 
                        Адаптируем его под ваши процессы и научим выполнять доработки самостоятельно.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">HR-процессы</div>
                    <div class="sub-block-text2">На базе систем можно создавать решения для работы с сотрудниками, а также корпоративные порталы. 
                        В ряде платформ предусмотрены стандартные решения для службы HR.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Надо автоматизировать работу службы поддержки</div>
                    <div class="sub-block-text2">Платформы позволяют создавать окна для взаимодействия с внешними пользователями 
                        и поддерживают омниканальность. Организовать коммуникацию не составит труда.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Хотим внедрить документооборот</div>
                    <div class="sub-block-text2">Легко. В большинстве платформ предусмотрено создание бизнес-процессов. 
                        Можно автоматизировать любую логику согласования.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Любые процессы компании</div>
                    <div class="sub-block-text2">Low-code платформа гибкий инструмент с помощью которого можно автоматизировать любые процессы компании.</div>
                </div>
            </div>
        </div>
        <button onclick="toogleButton('block-2')">
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\blocks\открыть.png" style="width: 20px;">
        </button>
    </div>
    <div class="sub-block">

        <div id="block-3" class="sub-block-hide">
            <div class="sub-block-head">
                <h2>Уже внедрена платформа</h2>
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\blocks\уже внедрена.png" style="width: 50px;">
            </div>
            <div class="sub-block-body">
                <h2>Уже внедрена Low-code платформа</h2>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">НУЖНА CRM</div>
                    <div class="sub-block-text2">Отлично! Практически у всех low-code платформ есть стандартные решения для CRM. 
                        Адаптируем его под ваши процессы и научим выполнять доработки самостоятельно.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">HR-процессы</div>
                    <div class="sub-block-text2">На базе систем можно создавать решения для работы с сотрудниками, а также корпоративные порталы. 
                        В ряде платформ предусмотрены стандартные решения для службы HR.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Надо автоматизировать работу службы поддержки</div>
                    <div class="sub-block-text2">Платформы позволяют создавать окна для взаимодействия с внешними пользователями 
                        и поддерживают омниканальность. Организовать коммуникацию не составит труда.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Хотим внедрить документооборот</div>
                    <div class="sub-block-text2">Легко. В большинстве платформ предусмотрено создание бизнес-процессов. 
                        Можно автоматизировать любую логику согласования.</div>
                </div>
                <div class="sub-block-chek">
                    <div class="sub-block-text1">Любые процессы компании</div>
                    <div class="sub-block-text2">Low-code платформа гибкий инструмент с помощью которого можно автоматизировать любые процессы компании.</div>
                </div>
            </div>
        </div>
        <button onclick="toogleButton('block-3')">
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\blocks\открыть.png" style="width: 20px;">
        </button>
    </div>
</div>