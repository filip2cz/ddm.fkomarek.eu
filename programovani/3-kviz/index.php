<!DOCTYPE html>
<html lang='cs' data-bs-theme="dark">

<head>
    <title>DDM - Filip Komárek</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <meta charset='utf-8'>
</head>

<body>
    <?php include ("../../src/link.html"); ?>

    <div class="container">

        <a href="../"><button class="btn btn-primary" type="button">Zpět</button></a>

        <h1 class="nadpis">Kvíz</h1>

        <p>
            Vytvořte kvíz na libovolné téma o alespoň 4 otázkách. Měla by v něm být alespoň jedna otázka ABC a alespoň
            jedna otázka s volnou odpovědí. Program dá také uživateli známku (jako ve škole) na základě toho, jak si v
            testu vedl.
        </p>

        <p>
            Příklad, jak může program vypadat:
        </p>

        <pre class="output">Jaká je nejblížší planeta ke slunci?
a) Merkur
b) Venuše
c) Země
d) Mars
A
Správně!

Jak se jmenuje syn Homera Simpsona ze seriálu Simpsonovi?
Bert
Špatně! Správná odpověď je Bart.

Kolik má planeta Země kontinentů?
a) 8
b) 4
c) 6
d) 2
B
Špatně! Správná odpověď je C.

Kolik minut má jedna hodina?
60
Správně!

Vaše známka: 3 (správně máte 2 ze 4 otázek)
        </pre>

        <?php
        $filename = './odevzdani.txt';
        if (file_exists($filename)) {
            echo "<h3>Nezapomeňte odevzdat váš nákres na Google učebnu: " . '<a href="';
            include($filename);
            echo '"target="_blank">';
            include($filename);
            echo '</a></h3>';
        }
        ?>

    </div>

</body>

</html>