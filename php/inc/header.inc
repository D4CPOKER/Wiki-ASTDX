<head>
  <link rel="stylesheet" href="css/header.css">
  <!--FONTEEEEEEE-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<!---->
</head>

<header>
  <button id="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <a href="index.php">
    <img src="img/logo.png" alt="ASTDX Wiki Logo">
  </a>
 <form id="search-form" class="search-form" autocomplete="off">
  <input type="text" id="search-input" name="q" placeholder="Pesquisar..." />
  <button type="submit">🔍</button>
</form>
<div id="suggestions"></div>



</header>


<aside class="side-nav">
  <a href="index.php">Home</a>
  <a href="units.php">Units</a>
  <a href="tierlist.php">Tier List</a>
  <a href="codes.php">Codes</a>
</aside>
<script>
  const menuToggle = document.getElementById('menu-toggle');
  const sideNav = document.querySelector('.side-nav');

  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    sideNav.classList.toggle('open');
  });
</script>
<?php include "php/inc/search.inc"?>

