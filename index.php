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

    <section class="home_wrapper">

      <section class="home_hero">
          <div class="hero_image">
            <div class="hero_contents">
              <div class="hero_title">VM GURU</div>
              <div class="hero_subtitle">Агентство по визуальному мерчандайзингу
                <br />и дизайну магазинов</div>
              <p class="hero_text">Ваш проводник к успеху</p>
              <div class="hero_arrow js-trigger-toggle js-dont-hide" data-target=".hero_expanded">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" viewBox="0 0 111 32" enable-background="new 0 0 111 32" xml:space="preserve">
                   <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="0.729,1.342 52.597,30.157 110.229,1.342"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="hero_expanded js-toggle-content">
            <div class="wand">
              <img src="/imgs/ico-home-wand.svg" width="80" />
            </div>
            <div class="text">
                <p>Знаете, в чем секрет успеха фэшн брендов?</p>
                <p>Почему проходя по торговому центру, один магазин вы не замечаете, а в другой будто манит невидимая рука, и вы уже стоите в примерочной?</p>
                <p>Это все — чудеса визуального мерчендайзинга, науки презентации товара в торговом зале и на витринах.</p>
                <p>Любой бренд может стать успешным, привлечь своих покупателей и заметно увеличить выручку. Практика показывает, что грамотный коммерческий ВМ способен увеличить продажи в магазине на 50 - 80%, а то и в несколько раз. Мы научим этому ваш бренд!</p>
            </div>
          </div>
      </section>

      <!-- CONSULTING -->

      <section class="home-section">

        <div class="home-consulting-title">Наши услуги</div>
        <div class="home-consulting-text">
          <p>Мы проанализируем ваш бизнес и создадим эффективную систему ВМ бренда, уникальный дизайн магазина и фирменный стиль, опираясь на вкусы вашей целевой аудитории, ваш ассортимент и конкурентное окружение бренда.</p>
          <p>Мы создаем «магазины под ключ» и гарантируем максимальную коммерческую привлекательность своим проектам!</p>
        </div>

        <?php include "_consulting-elements.php"; ?>
      </section>

      <section class="home-section">
          <div class="home-consulting-title">Ближайшие тренинги</div>

          <?php include "_training-events.php"; ?>
      </section>

      <!-- FOOTER -->
      <?php include "footer.php"; ?>

    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="/js/main.js" type="text/javascript" charset="utf-8"></script>

</html>
