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

    <!-- CONSULTING -->
    <section class="new-section">
      <div class="section-title">Наши услуги</div>
      <div class="section-intro-text">
        <p>Мы готовы помочь на любом этапе создания вашего бренда: от разработки стандартов визуального мерчандайзинга
          до обучения персонала. Нам вы можете доверить всё!</p>
        <p>Мы создаем «магазины под ключ» и гарантируем максимальную коммерческую привлекательность своим проектам.</p>
      </div>
      <?php include "_consulting-elements.php"; ?>
    </section>

    <section class="new-section">
      <div class="section-title">Клиенты</div>
    </section>
    <section class="consulting-section2">
      <?php include "_client-grid.php"; ?>
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