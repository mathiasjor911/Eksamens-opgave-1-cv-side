<title>Projekter - Mathias Jørgensen</title>
<meta name="description" content="" />

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/header.php';
  include_once($path);
  ?>


<div class="wrapper">
  <section class="subintro-section">
    <h1>Portfolio</h1>
    <p>Her er nogle af de projekter jeg har arbejdet på, dette er bl.a
    skoleprojekter og freelance arbejde.</p>
    <p>Og der er flere på vej.</p>
  </section>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/projekt-grid.php';
  include_once($path);
  ?>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/footer.php';
  include_once($path);
  ?>