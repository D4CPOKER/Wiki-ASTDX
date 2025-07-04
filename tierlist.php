<!-- tierlist.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<!-- === HEAD === -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tier List - ASTDX Wiki</title>
  <link rel="stylesheet" href="css/tierlist.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!--FONTEEEEEEE-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<!---->
</head>

<!-- === MAIN === -->
<body>

  <!-- === HEADER === -->
  <?php
  include "php/inc/header.inc"
  ?> 

<!-- === CONTEÚDO PRINCIPAL DA PÁGINA === --> 
<section class="codes fade-in-delay">
  <main>
  
    <h2>Tier List</h2>

<!-- === MENUS === -->
    <div id="menus">
      <span class="menu active" onclick="showTab('infinite-mode', event)">Infinite Mode</span>
      <span class="menu" onclick="showTab('story', event)">Progressive Modes</span>
    </div>

<!-- === TIER LIST INFINITE === -->
    <div id="infinite-mode" class="tierlist-container active">
<!-- === META META ALL === -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(165, 78, 78);">META ALL</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3> 
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <div class="raid-tag">Meta Raid</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>

          <!-- Adicione mais personagens aqui -->
          <div class="character">
            <img src="img/Menace_29_29.webp" alt="Ashborn (Decay)">
            <div class="tooltip detailed-tooltip">
              <h3>Ashborn (Decay)</h3>
              <p>
                <span class="raridade mythical">Mythical</span>
                <span class="tipo-ataque magico">Magic</span>
                <span class="tipo dark">Dark</span>
              </p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Full AoE. Deals damage over 18 ticks and doubles with Griffin support.</p>
              <div class="stats">
                DPS: <span class="highlight">21,868</span><br>
                TDPS: <span class="highlight">65,605</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>

              <div class="adicionais">
                <strong>Recommended Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥 ⚡
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- === META SUPPORT === -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(221, 135, 78);">META SUPPORT</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3>
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>

          <!-- Adicione mais personagens aqui -->
          <div class="character">
            <img src="img/Menace_29_29.webp" alt="Ashborn (Decay)">
            <div class="tooltip detailed-tooltip">
              <h3>Ashborn (Decay)</h3>
              <p>
                <span class="raridade mythical">Mythical</span>
                <span class="tipo-ataque magico">Magic</span>
                <span class="tipo dark">Dark</span>
              </p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Full AoE. Deals damage over 18 ticks and doubles with Griffin support.</p>
              <div class="stats">
                DPS: <span class="highlight">21,868</span><br>
                TDPS: <span class="highlight">65,605</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>

              <div class="adicionais">
                <strong>Recommended Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥 ⚡
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- === META DPS === -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(221, 135, 78);">META DPS</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3>
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>

          <!-- Adicione mais personagens aqui -->
          <div class="character">
            <img src="img/Menace_29_29.webp" alt="Ashborn (Decay)">
            <div class="tooltip detailed-tooltip">
              <h3>Ashborn (Decay)</h3>
              <p>
                <span class="raridade mythical">Mythical</span>
                <span class="tipo-ataque magico">Magic</span>
                <span class="tipo dark">Dark</span>
              </p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Full AoE. Deals damage over 18 ticks and doubles with Griffin support.</p>
              <div class="stats">
                DPS: <span class="highlight">21,868</span><br>
                TDPS: <span class="highlight">65,605</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>

              <div class="adicionais">
                <strong>Recommended Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥 ⚡
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- === META DoT === -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(221, 135, 78);">META DoT</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3>
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>

          <!-- Adicione mais personagens aqui -->
          <div class="character">
            <img src="img/Menace_29_29.webp" alt="Ashborn (Decay)">
            <div class="tooltip detailed-tooltip">
              <h3>Ashborn (Decay)</h3>
              <p>
                <span class="raridade mythical">Mythical</span>
                <span class="tipo-ataque magico">Magic</span>
                <span class="tipo dark">Dark</span>
              </p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Full AoE. Deals damage over 18 ticks and doubles with Griffin support.</p>
              <div class="stats">
                DPS: <span class="highlight">21,868</span><br>
                TDPS: <span class="highlight">65,605</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>

              <div class="adicionais">
                <strong>Recommended Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥 ⚡
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- === GOOD=== -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(109, 243, 99);">GOOD</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3>
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>

          <!-- Adicione mais personagens aqui -->
          <div class="character">
            <img src="img/Menace_29_29.webp" alt="Ashborn (Decay)">
            <div class="tooltip detailed-tooltip">
              <h3>Ashborn (Decay)</h3>
              <p>
                <span class="raridade mythical">Mythical</span>
                <span class="tipo-ataque magico">Magic</span>
                <span class="tipo dark">Dark</span>
              </p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Full AoE. Deals damage over 18 ticks and doubles with Griffin support.</p>
              <div class="stats">
                DPS: <span class="highlight">21,868</span><br>
                TDPS: <span class="highlight">65,605</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>

              <div class="recs">
                <strong>Recommended Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥 ⚡
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- === MEDIUM === -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(138, 141, 46);">MEDIUM</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3>
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>

          <!-- Adicione mais personagens aqui -->
          <div class="character">
            <img src="img/Menace_29_29.webp" alt="Ashborn (Decay)">
            <div class="tooltip detailed-tooltip">
              <h3>Ashborn (Decay)</h3>
              <p>
                <span class="raridade mythical">Mythical</span>
                <span class="tipo-ataque magico">Magic</span>
                <span class="tipo dark">Dark</span>
              </p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Full AoE. Deals damage over 18 ticks and doubles with Griffin support.</p>
              <div class="stats">
                DPS: <span class="highlight">21,868</span><br>
                TDPS: <span class="highlight">65,605</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>
              <div class="adicionais">
                <strong>Recommended Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥 ⚡
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>

<!-- === TIER LIST STORY MODE === -->

<!-- === META === -->
    <div id="story" class="tierlist-container">
      <div class="categoria">
        <div class="categoria-label" style="background-color: #b3e5fc;">STORY</div>
        <div class="categoria-content">
          <div class="character">
            <img src="imagens/naruto.png" alt="Naruto">
            <div class="tooltip detailed-tooltip">
              <h3>Naruto</h3>
              <p><span class="raridade lendario">Legendary</span> <span class="tipo wind">Wind</span></p>
              <div class="starter-tag">Starter Unit</div>
              <p class="desc">Balanced unit for early stages and raids.</p>
              <div class="stats">
                DPS: <span class="highlight">10,200</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Placements: 3
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> None<br>
                <strong>Traits:</strong> ⚔️ 💨
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- === STARTERS === -->
      <div class="categoria">
        <div class="categoria-label" style="background-color:rgb(41, 197, 38);">STARTER</div>
        <div class="categoria-content">
          <div class="character">
            <img src="img/Supreme_Being_29_29.webp" alt="Supreme Being">
            <div class="tooltip detailed-tooltip">
              <h3>Supreme Being (Sovereign)</h3>
              <p><span class="raridade secret">Secret</span> <span class="tipo-ataque magico">Magic</span> <span class="tipo dark">Dark</span></p>
              <div class="meta-tag">Meta Unit</div>
              <p class="desc">High DPS, Summons, Full AoE. Powerful hybrid unit.</p>
              <div class="stats">
                DPS: <span class="highlight">34,515</span><br>
                DPS w/Ability: <span class="highlight">48,896</span><br>
                Place-Cost: <span class="cost">10K¥ </span> Cost : <span class="cost"> 10k -> 305K¥</span><br>
                Hybrid Cost: <span class="cost">130K¥</span>
              </div>
              <div class="adicionais">
                <strong>Relic:</strong> Miracle Timepiece<br>
                <strong>Traits:</strong> 👑 🔥
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
  </main>
 

<!-- === RODAPÉ === -->
  <?php
  include "php/inc/footer.inc"
  ?>
</section>
<!-- === JAVA SCRIPT PARA TRANSIÇÃO DE MODOS/MENUS === -->
  <script>
    function showTab(tabId, event) {
      document.querySelectorAll('.tierlist-container').forEach(el => el.classList.remove('active'));
      document.getElementById(tabId).classList.add('active');
      document.querySelectorAll('.menu').forEach(el => el.classList.remove('active'));
      event.target.classList.add('active');
    }
  </script>
  
</body>

</html>