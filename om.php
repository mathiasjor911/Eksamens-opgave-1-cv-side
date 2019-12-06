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
        <div class="img-shadow">
          <img src="img/mathias.jpg">
        </div>
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
                <p> Noget af min fritid bruger jeg på at tage billeder, hvilke jeg så deler på min <a class="text-link" rel="nofollow" href="https://www.instagram.com/mathias.jor/">instagram</a>. Udover dette kan jeg også godt lide at bruge tid på små kodeprojekter.</p>
                <!-- <a class="text-link" href="#">Hent CV</a> -->
                <br>
                <h2>Kompetencer</h2>
                <div class="kompetencer">
                <p>
                  HTML
                </p>
                <p>
                  CSS
                </p>
                <p>
                  Jquery
                </p>
                <p>
                  Wordpress
                </p>
                <p>
                  Adobe-pakken
                </p>
                </div>
      </div>   
  </section>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/footer.php';
  include_once($path);
  ?>