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

        <p class="test-link">ERROR: načtení souboru link.html bylo neúspěšné</p>

        <h1 class="nadpis">Závěrečný projekt</h1>

        <!--

        <p>
            Mauris elementum mauris vitae tortor. Nullam rhoncus aliquam metus. Nullam dapibus fermentum ipsum.
        </p>

        https://www.freeformatter.com/html-escape.html

        <pre><code class="language-csharp">C# kód</code></pre>

        <pre><code class="language-csharp" id="allowCopy">C# kód</code></pre>

        <pre><code class="language-arduino">Arduino kód</code></pre>

        <p class="output">Výstup z konzole</p>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni1">řešení</button>
        <div id="reseni1" class="collapse mt-3">
            <pre>řešení</pre>
        </div>

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

        -->

        <p>
            Úspěšně jsme došli na konec kurzu programování a je čas na závěrečný projekt.
            V rámci tohoto projektu si můžete vybrat jakékoli téma, které vás zajímá, a vytvořit vlastní program.
            Zkuste si vymyslet něco vlastního, ale pokud vás nic nenapadne, můžete se inspirovat některými z následujících nápadů:
        </p>

        <p>
            <ul>
                <li> Nějaká specifická kalkulačka</li>
                <li> Klikací hra ve stylu "Cookie Clicker"</li>
                <li> Hra "kámen, nůžky, papír"</li>
                <li> Hra "Hádej číslo</li>
                <li> Obrázkový kvíz</li>
            </ul>
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

        <h1>Děkuji za vaši účast a užijte si prázdniny!</h1>

    </div>

</body>

</html>