<?php // index.php ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASTDX Wiki</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/home.css" />
  <!--FONTEEEEEEE-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<!---->
</head>

<body>
  <?php include __DIR__ . '/php/inc/header.inc'; ?>
<section class="codes fade-in-delay">
  <main class="home">
  
    <section class="hero">
      <h1>Wiki All Star Tower X</h1>
      <p>Data de lançamento!</p>
      <div id="countdown">
        <div><span id="days">00</span><small>Dias</small></div>
        <div><span id="hours">00</span><small>Horas</small></div>
        <div><span id="minutes">00</span><small>Minutos</small></div>
        <div><span id="seconds">00</span><small>Segundos</small></div>
      </div>

	</section>

  </main>
  </section>

  <?php include __DIR__ . '/php/inc/footer.inc'; ?>

    <script>
    // Data de lançamento: sábado, 5 de julho de 2025, à meia-noite
    const releaseDate = new Date(2025, 6, 5, 11, 0, 0); 

    function updateCountdown() {
      const now = new Date();
      const diff = releaseDate - now;
      if (diff <= 0) {
        document.getElementById('countdown').innerHTML = '<span class="launched">Já lançado! 🎉</span>';
        clearInterval(timerInterval);
        return;
      }
      const days    = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours   = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);
      document.getElementById('days').textContent    = String(days).padStart(2, '0');
      document.getElementById('hours').textContent   = String(hours).padStart(2, '0');
      document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
      document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    }

    const timerInterval = setInterval(updateCountdown, 1000);
    updateCountdown();
  </script>


</body>
</html>
