<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <title>Projekt</title>
    </head>
    <body>
        <?php
        if (isset($_POST["gumb"])) {
            $xml= new DOMDocument("1.0","UTF-8");
            $xml ->load("podaci.xml");

            $Root= $xml->getElementsByTagName("dostave")->item(0);
            $Elem=$xml->createElement("dostava");

            $ime=$xml->createElement("ime",$_POST["ime"]);
            $prezime=$xml->createElement("prezime",$_POST["prezime"]);
            $adresa=$xml->createElement("adresa",$_POST["adresa"]);
            $tel=$xml->createElement("telefon",$_POST["tel"]);
            $nar=$xml->createElement("narudzba",$_POST["nar"]);

            $Elem->appendChild($ime);
            $Elem->appendChild($prezime);
            $Elem->appendChild($adresa);
            $Elem->appendChild($tel);
            $Elem->appendChild($nar);

            $Root->appendChild($Elem);

            $xml->save("podaci.xml");
        }
    ?>
        <div class="center">
            <header>
                <h1>Restoran</h1> 
                <nav>
                    <ul>
                        <li><a href="index.html">POČETNA</a></li>
                        <li><a href="meni.php">PONUDA</a></li>
                        <li><a href="kontakt.html">KONTAKT</a></li>
                        <li><a href="dostava.php">DOSTAVA</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>DOSTAVA</h1>
                <div class="dostava">
                    <form method="POST">
                        <label for="ime">Ime:</label><br>
                        <input type="text" name="ime" id="ime"/><br>
                        <label for="prezime">Prezime:</label><br>
                        <input type="text" name="prezime" id="prezime"/><br>
                        <label for="adresa">Adresa:</label><br>
                        <input type="text" name="adresa" id="adresa"/><br>
                        <label for="ime">Telefon:</label><br>
                        <input type="number" name="tel" id="tel"/><br>
                        <label for="narudzba">Narudžba:</label><br>
                        <textarea name="nar"></textarea><br>
                        <a href="meni.php" target="_blank">MENI POGLEDAJTE OVDJE</a><br>
                        <input type="submit" class="gumb" name="gumb" value="NARUČI"/><br><br>

                    </form>
                </div>
                <img src="images/delivery.jpg" alt="" class="dost"/>
            </main>
            <div class="clear">
                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>    
            <footer>
                <p>© ANDREA PERIĆ aperic@tvz.hr 2021</p>
            </footer>
        </div>
    </body>
</html>