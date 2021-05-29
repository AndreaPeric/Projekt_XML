<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>Projekt</title>
    </head>
    <body>
        <div class="center">
          <header>
              <h1>Restoran</h1>
              <nav>
                  <ul>
                      <li><a href="index.html">POČETNA</a></li>
                      <li><a href="meni.html">PONUDA</a></li>
                      <li><a href="kontakt.html">KONTAKT</a></li>
                      <li><a href="dostava.php">DOSTAVA</a></li>
                  </ul>
              </nav>
          </header>
          <main class="ponude">
            <h1>PONUDA</h1>
            <div class="meni">

                <?php
                    $jsondata= file_get_contents("Baza.json");
                    $json=json_decode($jsondata,true);
                    foreach($json['Jela'] as $jelo) {
                        $js="<div class='jelo'>";
                        $js .="<div class='jelo-tekst'>";
                        $js .="<h3 class='jelo-zaglavlje'>";
                        $js .="<span class='naziv'>".$jelo['Jelo']."</span>";
                        $js .="<span class='cijena'>".$jelo['Cijena']."</span>";
                        $js .="</h3>";
                        $js .="<p class='opis'>".$jelo['Opis']."</p>";
                        $js .="</div>";
                        $js.="</div>";
                        echo $js;
                    }
                ?>
               
            </div> 
          </main>
          <footer>
            <p>© ANDREA PERIĆ aperic@tvz.hr 2021</p>
          </footer>
        </div>
    </body>
</html>
