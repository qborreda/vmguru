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
  <meta name="description"
    content="VM Guru — консалтинговое агентство визуальных коммуникаций в фэшн ритейле, специализирующееся на коммерческом визуальном мерчандайзинге, оформлении витрин, дизайне магазинов, а также обучении в данных сегментах.">
  <meta name="keywords"
    content="vmguru, visual merchandising, визуальный мерчандайзинг обучение, образование, витринистика, визуальный мерчендайзинг, курсы визуального мерчандайзинга москва, курсы визуального мерчендайзинга">
  <title>Визуальный мерчандайзинг обучение, Витринистика - консалтинг и тренинги в VM Guru</title>

  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="tmpl-consulting">
  <!-- MAIN HEADER -->
  <?php include "header.php"; ?>

  <div class="short_wrapper">

    <section class="new-section">
      <div class="section-title">Стратегический мерчандайзинг</div>
    </section>
    <section class="new-section">
      <div class="consulting-bullet">
        <div class="consulting-bullet-picture">
          <img src="imgs/consulting-bullet-block2.png" alt="-" class="lazy">
        </div>
        <div class="consulting-bullet-info">
          <div class="text">
            <p class="highlighted">Мерчандайзинг-бук
              <br />Разработка стандартов ВМ бренда</p>
            <ul>
              <li>Аудит существующих ВМ правил торговой марки</li>
              <li>Разработка стандартов визуального мерчандайзинга «под бренд»</li>
              <li>Оформление стандартов в виде <strong>Мерчандайзинг-бук</strong> (книга правил)</li>
            </ul>
            <p class="highlighted">Аудит и оптимизация стандартов ВМ</p>
            <ul>
              <li>Аудит системы ВМ бренда и ВМ документов </li>
              <li>Ремерчандайзинг типового магазина Заказчика; замер эффективности</li>
              <li>Обучение команды ВМ Заказчика (теория и практика в торговом зале)</li>
              <li>ВМ рекомендации – отчетный документ</li>
            </ul>
          </div>
          <div class="text" style="margin-top: 30px;">
            <a class="hex-project-link no-border" href="/projects/project-incanto.php">
              <div class="project-link">
                показать проект ›
              </div>
            </a>
            <a class="hex-project-link no-border" href="/projects/project-unichel.php">
              <div class="project-link alternative">
                показать проект ›
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FORM SECTION -->
    <section class="new-section">
      <div class="section-title">Оставить заявку</div>

      <form id="event-form" class="event-info" action="send-event-form.php" method="post" lang="ru"
        accept-charset="UTF-8">

        <?php include "_education-form.php"; ?>

        <input type="hidden" name="interest" value="ВИЗУАЛЬНЫЙ МЕРЧАНДАЙЗИНГ ДЛЯ МАГАЗИНОВ ОБУВИ И АКСЕССУАРОВ">
        <div class="form-buttons">
          <button class="form-submit js-event-submit" type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
        </div>
        <div class="form-disclaimer">
          Отправляя заявку, вы соглашаетесь на обработку <a href="/pdfs/agreement.pdf" target="_blank">персональных
            данных</a>
        </div>
      </form>
    </section>

    <!-- FOOTER -->
    <?php include "footer.php"; ?>

  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript" charset="utf-8">
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="/js/main.js?random=<?php echo filemtime('js/main.js'); ?>" type="text/javascript" charset="utf-8"></script>

</html>