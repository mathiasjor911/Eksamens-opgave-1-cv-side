<title>Om - Mathias Jørgensen</title>
<meta name="description" content="" />

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/header.php';
  include_once($path);
  ?>


<div class="wrapper">
  <section class="info-box">
      <div class="info-img">
        <img src="img/mathias.jpg">
      </div>
      <div class="info-tekst">
        <h1>Om mig</h1>
        <p>Jeg er <?php 
            $dateOfBirth = "11-09-1998";
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            echo $diff->format('%y');
                ?>  år gammel, og i øjeblikket studerer jeg multimediedesign. Jeg brænder for, at løse opgaver med en design og kommunikations orienteret vinkel. 
                </p>
                <p> Ved siden af mit studie, udvikler jeg hjemmesider til små og mellemstore virksomheder. Her får jeg mulighed for at videreudvikle mine kompetencer, på måder jeg måske ikke ville på mit studie.</p>

                <strong>Lytter i øjeblikket til</strong>
      </div>
   
  </section>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/footer.php';
  include_once($path);
  ?>