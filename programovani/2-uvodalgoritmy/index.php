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

        <p class="test-link
        ">ERROR: načtení souboru link.html bylo neúspěšné</p>

        <h1 class="nadpis">Úvod do algoritmů</h1>

        <!--

        <p>
            Mauris elementum mauris vitae tortor. Nullam rhoncus aliquam metus. Nullam dapibus fermentum ipsum.
        </p>

        https://www.freeformatter.com/html-escape.html

        <pre><code class="language-csharp">C# kód</code></pre>

        <pre><code class="language-arduino">Arduino kód</code></pre>

        <p class="output">Výstup z konzole</p>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni1">řešení</button>
        <div id="reseni1" class="collapse mt-3">
            <pre>řešení</pre>
        </div>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis1">Podrobný popis kódu</button>
        <div id="popis1" class="collapse mt-3">
            <ul>
                <li>
                    Nějaký popis
                </li>

                <br>
                <h5>První část:</h5>

                <li>
                    Popis první části
                </li>

                <br>
                <h5>Druhá část:</h5>

                <li>
                    Popis druhé části
                </li>
            </ul>
        </div>

        -->

        <p>
            V dnešní hodině si představíme více teoretickou, ale neméně důležitou část programování. Jedná se o
            algoritmy. Algoritmus je znázornění nějakého postupu, který nás dovede k nějakému výsledku.
        </p>

        <p>
            Na příkladu níže si ukážeme algoritmus pro ověření plnoletosti uživatele:
        </p>

        <img src="./plnoletost.png" style="max-width: 70%">

        <p>
            Tento algoritmus po spuštění získá věk uživatele a poté na základě tohoto věku vypíše, zda uživatel je, nebo
            není plnoletý.
        </p>

        <p>
            Druhý příklad, který si ukážeme, je algoritmus na ověření hesla. Všimněte si, že tento algoritmus se, na
            rozdíl od toho předchozího, zeptá uživatele znovu, pokud uživatel zadal špatné heslo.
        </p>

        <img src="./heslo.png" style="max-width: 100%">

        <h2>Další příklady algoritmů</h2>

        <p>
            Vstupní turniket na kartičku s červeným/zeleným světlem.
        </p>

        <p>
            Algoritmus pro automat na čaj včetně ohřívání vody.
        </p>

        <p>
            Algoritmus pro výtah, jenž pojede dolu nebo nahoru podle toho, v jakém jsme patře a které patro bylo
            zvoleno.
        </p>

        <p>
            Algoritmus pro bankomat. Bankomat bude fungovat tak, že uživateli dá peníze v co nejvyšších
            bankovkách a mincích. Pokud tedy uživatel zadá částku 8321 Kč, bankomatu mu vydá:<br>
            200<br>
            100<br>
            50<br>
            20<br>
            1<br>
        </p>

        <h2>Zadání</h2>

        <p>
            Vytvořte algoritmus, který se bude starat o zálévání kytek. Pokud je kytka suchá, tak ji zalije.
        </p>

        <h2>Příliš snadné?</h2>

        <p>
            Dostanete 5 náhodných čísel od 0 do 9. Vytvořte algoritmus, který tato čísla seřadí od nejmenšího po
            největší.
        </p>

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

        <br><br><br><br><br><br><br><br><br>

        <h3>BONUS: Sheldon Cooper aplikující svůj "Algoritmus na tvorbu přátelství":</h3>

        <img
            src="https://images2.fanpop.com/images/photos/3700000/The-Friendship-Algorithm-the-big-bang-theory-3760339-1280-720.jpg">

    </div>

</body>

</html>