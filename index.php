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
    <meta name="keywords" content="vmguru, visual merchandising, визуальный мерчандайзинг, витринистика, визуальный мерчандайзинг обучение, консалтинг по визуальному мерчандайзингу, обучение мерчендайзингу, курсы для мерчендайзеров, мерчандайзинг образование">
    <title>Визуальный мерчандайзинг и Витринистика - консалтинг и курсы в VM Guru</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="tmlp-home">
    <!-- MAIN HEADER -->
    <?php include "header.php"; ?>

    <!-- WRAPPER -->
    <div class="wrapper">
        <section class="home-section1">
            <div class="home-section1-image"></div>
            <div class="home-section1-arrow"></div>
            <div class="home-section1-footer">
                <div class="home-section1-footer-text">
                    <span>ВИЗУАЛЬНЫЙ МЕРЧАНДАЙЗИНГ
                    <br/>способен увеличить
                    <br/>продажи до 80%</span>
                </div>
            </div>
        </section>
        <section class="home-section2">
            <div class="home-section2-texts">
                <div class="left">
                    А вы знаете почему иногда, проходя по торговому центру с неизвестными для вас брендами, один магазин вы не замечаете, а в другой будто тянет невидимая рука? И вы уже хотите все потрогать и примерить!
                </div>
                <div class="wand-detail">
                    <img src="imgs/ico-detail-wand-cyan.png" alt="">
                </div>
                <div class="right">
                    Это все — чудеса визуального мерчендайзинга, науки презентации товара в торговом зале и на витринах. Мы готовы доказать вам, что грамотный коммерческий ВМ способен увеличить продажи в магазине до 80%!
                </div>
            </div>
            <div class="crossed-box">
                этому можно научиться раз и навсегда
            </div>
        </section>
        <div class="stripped-title">
            <span></span>
            <p>БЛИЖАЙШИЕ ТРЕНИНГИ</p>
        </div>
        <section class="home-section3">
        <?php include "_training-events.php"; ?>
        </section>

<!--         <div class="stripped-title">
            <span></span>
            <p>ПРОЕКТЫ</p>
        </div>
        <section class="home-section4">
        </section> -->

        <!-- <section class="home-section4">
            <div class="crossed-box">
                страница в разработке
            </div>
        </section> -->

        <div class="stripped-title">
            <span></span>
            <p>СЕМИНАРЫ НА ВЫСТАВКАХ</p>
        </div>
        <?php include "_training-talks.php"; ?>

        <!-- <div class="stripped-title">
            <span></span>
            <p>РАССЫЛКА VM GURU</p>
        </div> -->

        <!-- <section class="home-newsletter">

            <form method="POST" action="https://cp.unisender.com/en/subscribe?hash=6uwxffjitwihhyppuem87rp4rjzia9ju5bdk4y5637zj81ui4ooby" name="subscribtion_form">
                <div class="subscribe-form-item subscribe-form-item--input-email">
                    <input class="subscribe-form-item__control subscribe-form-item__control--input-email" type="text" name="email" value="" placeholder="EMAIL">
                </div>
                <div class="subscribe-form-item subscribe-form-item--btn-submit">
                    <input class="subscribe-form-item__btn subscribe-form-item__btn--btn-submit form-submit" type="submit" value="Подписаться">
                    <button class="form-submit" type="submit" value="Подписаться">Подписаться</button>
                </div>
                <input type="hidden" name="charset" value="UTF-8">
                <input type="hidden" name="default_list_id" value="8929775">
                <input type="hidden" name="overwrite" value="2">
                <input type="hidden" name="is_v5" value="1">
            </form>

        </section> -->

        <!-- FOOTER -->
        <?php include "footer.php"; ?>

    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/main.js" type="text/javascript" charset="utf-8"></script>

</html>
