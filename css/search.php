<?php // search.php ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Pesquisa - ASTDX Wiki</title>
  <link rel="stylesheet" href="css/header.css" />
</head>
<body>
<?php include __DIR__ . '/php/inc/header.inc'; ?>

<main class="home">
  <section class="search-results">
    <h2>Resultados da pesquisa</h2>
    <?php
      $query = isset($_GET['q']) ? trim($_GET['q']) : '';
      if ($query === '') {
        echo "<p>Digite algo para pesquisar.</p>";
      } else {
        echo "<p>Você pesquisou por: <strong>" . htmlspecialchars($query) . "</strong></p>";

        // Aqui você poderia buscar em banco de dados, ou array
        // Exemplo estático:
        $dados = ['Goku X', 'Naruto Beast', 'Luffy Gear 5', 'Killua Godspeed'];
        $resultados = [];

        foreach ($dados as $item) {
          if (stripos($item, $query) !== false) {
            $resultados[] = $item;
          }
        }

        if (count($resultados) > 0) {
          echo "<ul>";
          foreach ($resultados as $r) {
            echo "<li>" . htmlspecialchars($r) . "</li>";
          }
          echo "</ul>";
        } else {
          echo "<p>Nenhum resultado encontrado.</p>";
        }
      }
    ?>
  </section>
</main>

<?php include __DIR__ . '/php/inc/footer.inc'; ?>
</body>
</html>
