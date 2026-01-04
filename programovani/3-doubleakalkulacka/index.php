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

        <h1>Proměnná double</h1>

        <p>
            Int, který jsme si zatím ukázali, umí pouze celá čísla. Pokud chceme pracovat i s desetinnými čísly, musíme použít <code>double</code>.
        </p>

        <p>
            Zde je menší příklad funkčnosti:
        </p>

        <pre><code class="language-csharp">int x = 51;
int y = 7;
Console.WriteLine(x/y);

double z = 51;
double w = 7;
Console.WriteLine(z/w);</code></pre>

        <p>
            Výstup by měl vypadat nějak takto:
        </p>

        <pre class="output">
7
7.28571428571429
        </pre>

        <p>
            Pokud chceme číst vstup od uživatele a ukládat ho do double, musíme ho podobně jako u <code>int</code> konvertovat ze stringu do double. To se dělá následujícím způsobem:
        </p>

        <pre><code class="language-csharp">double x;
x = Convert.ToDouble(Console.ReadLine());</code></pre>

        <h1 class="nadpis">Zadání: Kalkulačka</h1>

        <p>
            Vytvořte kalkulačku, která si od uživatele vezme 2 čísla a provede s nimi operaci, kterou si uživatel vybere. Nezapomeňte ošetřit, aby uživatel nemohl dělit nulou.
        </p>

        <p>
            Příklady výstupu:
        </p>

        <pre class="output">
Zadejte první číslo: 45
Zadejte druhé číslo: 51
Zadejte operaci (+,-,*,/): +
Výsledek: 91
        </pre>

        <pre class="output">
Zadejte první číslo: 31
Zadejte druhé číslo: 17
Zadejte operaci (+,-,*,/): -
Výsledek: 14
        </pre>

        <pre class="output">
Zadejte první číslo: 35
Zadejte druhé číslo: 4
Zadejte operaci (+,-,*,/): *
Výsledek: 140
        </pre>

        <pre class="output">
Zadejte první číslo: 51
Zadejte druhé číslo: 7
Zadejte operaci (+,-,*,/): /
Výsledek: 7,28571428571429
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

        <!--

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'kalkulacka.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('kalkulacka').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#resenikalkulacka">řešení</button>
        <div id="resenikalkulacka" class="collapse mt-3">
            <pre class="vs-code" id="kalkulacka">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
            </pre>
        </div>

        -->

    </div>

</body>

</html>