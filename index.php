<title>Forside - Mathias Jørgensen</title>
<meta name="description" content="" />

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/header.php';
  include_once($path);
  ?>
<div class="wrapper">
    <section class="intro-section">
        <!-- <i data-feather="more-horizontal"></i> -->
        <p>Studerer i øjeblikket Multimediedesign på <a class="text-link" href="https://www.zealand.dk/" rel="nofollow">Zealand</a> i Slagelse</p>
        <p>Laver freelance webudvikling i min fritid. Udover dette har jeg <br>stor interesse for <a class="text-link" href="foto.php">fotografi</a> og musik.</p>
    </section>
    <section class="latest-section">
    <h2>Seneste projekter</h2>
    
    <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/projekt-grid.php';
  include_once($path);
  ?>

    </section>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/footer.php';
  include_once($path);
  ?>