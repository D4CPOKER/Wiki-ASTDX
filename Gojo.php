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

<div class="gojo-wrapper">

  <!-- LADO ESQUERDO -->
  <div class="gojo-left">
    <h1 class="gojo-title">GOJO <span>(Mythical)</span></h1>
    <p class="gojo-desc">
      Gojo é um personagem <span class="rare">Mythical</span> obtido por evento. Com ataques em área massivos e buffs poderosos, é um dos personagens mais dominantes do jogo.
    </p>

    <div class="gojo-block">
      <h2>ESTATÍSTICAS</h2>
      <ul>
        <li><strong>Deploy Cost:</strong> 100.000¥</li>
        <li><strong>Tipo:</strong> Ground (AoE Circle)</li>
        <li><strong>Dano:</strong> 32.000</li>
        <li><strong>Range:</strong> 35</li>
        <li><strong>SPA:</strong> 5.0</li>
        <li><strong>DPS:</strong> 6.400</li>
        <li><strong>Tipo de Dano:</strong> Magic, Light</li>
        <li><strong>Level Máximo:</strong> 100</li>
      </ul>
    </div>

    <!-- Abas -->
    <div class="gojo-tabs">
      <button class="tab-btn active" data-tab="up1">Upgrade 1</button>
      <button class="tab-btn" data-tab="up2">Upgrade 2</button>
      <button class="tab-btn" data-tab="up3">Upgrade 3</button>
    </div>

    <!-- Conteúdo das abas -->
    <div class="gojo-tab-content active" id="up1">
      <h3>Upgrade 1 – 5.000¥</h3>
      <ul>
        <li>Dano: 36.000</li>
        <li>Range: 36</li>
        <li>SPA: 5.0</li>
        <li>DPS: 7.200</li>
        <li>+ Hollow Flash</li>
      </ul>
    </div>

    <div class="gojo-tab-content" id="up2">
      <h3>Upgrade 2 – 9.500¥</h3>
      <ul>
        <li>Dano: 40.000</li>
        <li>Range: 38</li>
        <li>SPA: 4.5</li>
        <li>DPS: 8.888</li>
        <li>+ Six Eyes Boost</li>
      </ul>
    </div>

    <div class="gojo-tab-content" id="up3">
      <h3>Upgrade 3 – 15.000¥</h3>
      <ul>
        <li>Dano: 50.000</li>
        <li>Range: 40</li>
        <li>SPA: 4.5</li>
        <li>DPS: 11.111</li>
        <li>+ Domain Expansion</li>
      </ul>
    </div>
  </div>

  <!-- LADO DIREITO -->
  <div class="gojo-right">
    <div class="gojo-right">
  <div class="gojo-card">
    <img src="img/gojo.png" alt="Gojo">
    <p>"Limitless means... no limits."</p>

    <div class="gojo-table">
      <div class="row"><span>Deployment Cost:</span> 100,000¥</div>
      <div class="row"><span>Total Cost:</span> 293,500¥</div>
      <div class="row"><span>Upgrade Levels:</span> 3</div>
      <div class="row"><span>Spawn Cap:</span> 3</div>
      <div class="row"><span>Tower Type:</span> Ground</div>
      <div class="row"><span>Damage Type:</span> Magic</div>
      <div class="row"><span>Secondary Damage Type:</span> Light</div>

      <div class="divider">Attack Stats</div>

      <div class="row"><span>Attack Type:</span><br> AoE (Circle) → Line → Cone</div>
      <div class="row"><span>Damage:</span> 32,000 → 50,000</div>
      <div class="row"><span>Attack Rate:</span> 5.0 → 4.5</div>
      <div class="row"><span>Range:</span> 35 → 40</div>
    </div>
  </div>
</div>

   

  </div>

</div>

<script>
  const tabs = document.querySelectorAll(".tab-btn");
  const contents = document.querySelectorAll(".gojo-tab-content");
  tabs.forEach(btn => {
    btn.addEventListener("click", () => {
      tabs.forEach(b => b.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));
      btn.classList.add("active");
      document.getElementById(btn.dataset.tab).classList.add("active");
    });
  });
</script>

<?php include __DIR__ . '/php/inc/footer.inc'; ?>
