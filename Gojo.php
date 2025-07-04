<?php include __DIR__ . '/php/inc/header.inc'; ?>
<?php include __DIR__ . '/php/inc/nav.inc'; ?>

<head>
<link rel="stylesheet" href="css/Gojo.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASTDX Wiki</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/home.css" />
  <!--FONTEEEEEEE-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>

<div class="gojo-page container">

  <!-- Introdução -->
  <section class="gojo-overview">
    <h1>Gojo (Mythical)</h1>
    <p>Gojo é um personagem <span class="rarity">Mythical</span> obtido via evento limitado. Com ataques em área massivos e buffs de suporte, é um dos mais poderosos do jogo. Seu visual é inspirado em animes de domínio e energia amaldiçoada.</p>
  </section>

  <!-- Painel principal com imagem e dados -->
  <div class="gojo-main">
    
    <!-- Esquerda: stats -->
    <div class="gojo-stats">
      <h2>Estatísticas</h2>
      <ul>
        <li><strong>Tipo de Torre:</strong> Ground (AoE - Circle)</li>
        <li><strong>Deploy Cost:</strong> 100.000¥</li>
        <li><strong>Dano Base:</strong> 32.000</li>
        <li><strong>Range:</strong> 35</li>
        <li><strong>SPA:</strong> 5.0</li>
        <li><strong>DPS:</strong> 6.400</li>
        <li><strong>Tipos de Dano:</strong> Magic, Light</li>
        <li><strong>Level Máximo:</strong> 100</li>
      </ul>
    </div>

    <!-- Direita: imagem e fala -->
    <div class="gojo-card">
      <img src="img/gojo.png" alt="Gojo">
      <p class="gojo-quote">"Limitless means... no limits."</p>
    </div>

  </div>

  <!-- Abas de upgrades -->
  <div class="gojo-tabs">
    <button class="tab-btn active" data-tab="upgrade1">Upgrade 1</button>
    <button class="tab-btn" data-tab="upgrade2">Upgrade 2</button>
    <button class="tab-btn" data-tab="upgrade3">Upgrade 3</button>
  </div>

  <div class="gojo-tab-content active" id="upgrade1">
    <h3>Upgrade 1 - 5.000¥</h3>
    <ul>
      <li>Dano: 36.000</li>
      <li>Range: 36</li>
      <li>SPA: 5.0</li>
      <li>DPS: 7.200</li>
      <li>+ Hollow Flash</li>
    </ul>
  </div>

  <div class="gojo-tab-content" id="upgrade2">
    <h3>Upgrade 2 - 9.500¥</h3>
    <ul>
      <li>Dano: 40.000</li>
      <li>Range: 38</li>
      <li>SPA: 4.5</li>
      <li>DPS: 8.888</li>
      <li>+ Six Eyes Boost</li>
    </ul>
  </div>

  <div class="gojo-tab-content" id="upgrade3">
    <h3>Upgrade 3 - 15.000¥</h3>
    <ul>
      <li>Dano: 50.000</li>
      <li>Range: 40</li>
      <li>SPA: 4.5</li>
      <li>DPS: 11.111</li>
      <li>+ Domain Expansion</li>
    </ul>
  </div>

</div>

<script>
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".gojo-tab-content");

  tabButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      tabButtons.forEach(b => b.classList.remove("active"));
      tabContents.forEach(tc => tc.classList.remove("active"));
      btn.classList.add("active");
      document.getElementById(btn.dataset.tab).classList.add("active");
    });
  });
</script>

<?php include __DIR__ . '/php/inc/footer.inc'; ?>
