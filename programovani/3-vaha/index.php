<!DOCTYPE html>
<html lang='cs' data-bs-theme="dark">

<head>
    <title>DDM - Filip Komárek</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <meta charset='utf-8'>
</head>

<body>
    <?php include("../../src/link.html"); ?>

    <div class="container">

        <a href="../"><button class="btn btn-primary" type="button">Zpět</button></a>

        <h1 class="nadpis">Váha na planetách</h1>

        <p>
            Vytvořte program, do kterého uživatel napíše svoji váhu a vybere planetu. Program mu poté vypíše jeho váhu
            na jím zvolené planetě. Údaje ohledně výpočtu váhy můžete zjistit například zde:<br>
            <a href="https://www.exploratorium.edu/explore/solar-system/weight"
                target="_blank">https://www.exploratorium.edu/explore/solar-system/weight</a><br>
            <a href="https://www.astrovm.cz/cz/pro-navstevniky/aktuality-ak/kolik-bychom-vazili-na-jinych-planetach.html"
                target="_blank">https://www.astrovm.cz/cz/pro-navstevniky/aktuality-ak/kolik-bychom-vazili-na-jinych-planetach.html</a>
        </p>

        <?php
        $filename = './odevzdani.txt';
        if (file_exists($filename)) {
            echo "<h3>Nezapomeňte odevzdat váš kód na Google učebnu:<br>" . '<a href="';
            include($filename);
            echo '"target="_blank">';
            include($filename);
            echo '</a></h3>';
        }
        ?>

    </div>

</body>

</html>