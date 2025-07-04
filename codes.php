<?php // codes.php ?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASTDX Wiki</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/codes.css" />
  <!--FONTEEEEEEE-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<!---->
</head>

<body>
  <?php include __DIR__ . '/php/inc/header.inc'; ?>
<main class="container">

  <!-- OVERVIEW -->
  <section class="overview fade-in">
    <h2>Como funciona o sistema de códigos?</h2>
    <p>
      No ASTDX, você pode resgatar códigos para ganhar recompensas como gemas, unidades aleatórias e boosts.
      Os códigos são disponibilizados em eventos, atualizações ou metas nas redes sociais.
    </p>
    <p>
      Para resgatar: <strong>Menu do Jogo → Códigos → Cole o código → Confirme</strong>.
    </p>
  </section>

  <!-- CÓDIGOS ATIVOS -->
  <section class="codes fade-in-delay">
    <h2>Códigos Ativos</h2>
    <table class="codes-table">
      <thead>
        <tr>
          <th>Código</th>
          <th>Recompensa</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id="code1">LAUNCH2025</td>
          <td>500 Gemas</td>
          <td><button class="copy-btn" onclick="copyCode('code1', this)">Copiar</button></td>
        </tr>
        <tr>
          <td id="code2">FREEUNIT</td>
          <td>1 Unidade Aleatória</td>
          <td><button class="copy-btn" onclick="copyCode('code2', this)">Copiar</button></td>
        </tr>
        <tr>
          <td id="code3">UPDATE1</td>
          <td>300 Gemas</td>
          <td><button class="copy-btn" onclick="copyCode('code3', this)">Copiar</button></td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- CÓDIGOS EXPIRADOS -->
  <section class="codes fade-in-delay">
    <h2>Códigos Expirados</h2>
    <p class="expired-info">Esses códigos não funcionam mais, mas ficaram marcados como parte do histórico de eventos do jogo.</p>
    <table class="codes-table">
      <thead>
        <tr>
          <th>Código</th>
          <th>Recompensa</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>WINTER2024</td>
          <td>250 Gemas</td>
          <td class="expired-status">Expirado</td>
        </tr>
        <tr>
          <td>HALLOWEEN2023</td>
          <td>1 Skin Exclusiva</td>
          <td class="expired-status">Expirado</td>
        </tr>
        <tr>
          <td>THANKS2023</td>
          <td>400 Gemas</td>
          <td class="expired-status">Expirado</td>
        </tr>
      </tbody>
    </table>
  </section>

</main>

<?php include __DIR__ . '/php/inc/footer.inc'; ?>

<script>
  function copyCode(id, btn) {
    const code = document.getElementById(id).innerText;
    navigator.clipboard.writeText(code).then(() => {
      btn.innerText = "Copiado!";
      btn.classList.add("copied");
      setTimeout(() => {
        btn.innerText = "Copiar";
        btn.classList.remove("copied");
      }, 2000);
    });
  }
</script>
</body>
