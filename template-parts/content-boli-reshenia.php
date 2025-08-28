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
    <div class="component-boli-header">
        БОЛИ И РЕШЕНИЯ
    </div>
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