<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="VM Guru — консалтинговое агентство визуальных коммуникаций в фэшн ритейле, специализирующееся на коммерческом визуальном мерчандайзинге, оформлении витрин, дизайне магазинов, а также обучении в данных сегментах.">
    <meta name="keywords" content="vmguru, visual merchandising, курсы визуального мерчандайзинга, курсы визуального мерчендайзинга, образование, витринистика, обучение в москве">
    <title>Курсы визуального мерчандайзинга, курсы витринистики - VM Guru</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="tmpl-trainings">
    <!-- MAIN HEADER -->
    <?php include "header.php"; ?>

    <div class="wrapper">

        <div class="stripped-title">
            <span></span>
            <p>ОБУЧЕНИЕ</p>
        </div>
        <section class="trainings-section1">

            <div class="trainings-section1-title">Мы обучаем специалистов компаний
            <br/>по следующим направлениям:</div>
            <div class="trainings-section1-lists">
                <ul class="left">
                    <li><img src="imgs/ico-hex-nav.png" alt=""> Визуальный мерчандайзинг для магазинов одежды</li>
                    <li><img src="imgs/ico-hex-nav.png" alt=""> Визуальный мерчандайзинг для магазинов обуви и аксессуаров </li>
                </ul>
                <ul class="right">
                    <li><img src="imgs/ico-hex-nav.png" alt=""> Создание эффективного фэшн магазина</li>
                    <li><img src="imgs/ico-hex-nav.png" alt=""> Коммерческая витринистика</li>
                </ul>
            </div>  

            <div class="crossed-box">
                ВМ обучение проходит в двух форматах
            </div>

            <article class="hex-content clearfix">
                <div class="hex-content-left">
                    <p class="hex-content-name">Корпоративное
                    <br/>обучение</p>
                    <div class="hex-content-image">
                        <img src="imgs/trainings-img1.jpg" alt="" />
                    </div>
                </div>
                <div class="hex-content-right">
                    <p class="hex-content-name">Корпоративное
                    <br/>обучение</p>
                    <p class="hex-content-description"><strong>ФОРМАТЫ КОРПОРАТИВНОГО ОБУЧЕНИЯ:</strong></p>
                    <p>Ремерчандайзинг магазина с практическим обучением</p>
                    <ul class="hex-content-list">
                        <li>в основе обучения – ремерчандайзинг магазина клиента экспертом VM Guru </li>
                    </ul>
                    <p>ВМ тренинг или система тренингов под запрос</p>
                    <ul class="hex-content-list">
                        <li>структура обучения разбатывается индивидуально, с учетом запроса заказчика, </li>
                    </ul>
                    <p>Двухдневное и экспресс (1 день) обучение</p>
                    <ul class="hex-content-list">
                        <li>интерактивное обучение прикладным методикам коммерческого ВМ и витринистики с практикумом в магазине заказчика</li>
                        <li>интерактивный тренинг-консалтинг «Создание эффективного Фэшн магазина»</li>
                    </ul>
                </div>
            </article>
            
            <article class="hex-content clearfix">
                <div class="hex-content-left">
                    <p class="hex-content-name">Групповые 
                    <br/>тренинги</p>
                    <div class="hex-content-image">
                        <img src="imgs/trainings-img2.jpg" alt="" />
                    </div>
                </div>
                <div class="hex-content-right">
                    <p class="hex-content-name">Групповые 
                    <br/>тренинги</p>
                    <p class="hex-content-description"></p>
                    <ul class="hex-content-list">
                        <li>Oбучение специалистов в формате интерактивного тренинга-практикума в группе до 14 человек по утвержденной программе с возможностью блиц-консалтинга в нашем офисе и на нашей торговой площадке.</li>
                    </ul>
                </div>
            </article>
        </section>

        <div class="stripped-title">
            <span></span>
            <p>БЛИЖАЙШИЕ ТРЕНИНГИ</p>
        </div>
        <section class="trainings-section2">
        <?php include "_training-events.php"; ?>
        </section>

        <div class="stripped-title">
            <span></span>
            <p>СЕМИНАРЫ НА ВЫСТАВКАХ</p>
        </div>
        <?php include "_training-talks.php"; ?>

        <!-- FOOTER -->
        <?php include "footer.php"; ?>

    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/main.js" type="text/javascript" charset="utf-8"></script>

</html>
