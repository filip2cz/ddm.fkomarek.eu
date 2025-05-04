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

        <p class="test-link">ERROR: načtení souboru link.html bylo neúspěšné</p>

        <h1 class="nadpis">Vlastnosti prvků</h1>

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
            Jak jste si již mohli všimnout, prvky grafického rozhraní, které můžeme přetahovat do našeho programu, mají
            různé vlastnosti. Tuto hodinu se na ně zaměříme.
        </p>

        <p>
            Nyní si přetáhněme do našeho grafického rozhraní <code>Label</code>. Měli bychom mít zobrazené okénko
            <code>Vlastnosti</code>.
        </p>

        <img src="./1.png" style="width: 400px">

        <p>
            Zde je, jak se můžeme v tomto rozhraní pro nastavení vlastností orientovat:
        <ol>
            <li>
                Název prvku, který nastavujeme
            </li>
            <li>
                Název vlastnosti
            </li>
            <li>
                Aktuální nastavení vlastností
            </li>
            <li>
                Popis právě vybranné vlastnosti
            </li>
        </ol>
        </p>

        <p>
            Zde v tomto okně můžeme nastavit všechny vlastnosti prvku, od polohy a obsahu až po barvičky.
        </p>

        <h3>
            Úprava vlastností v kódu
        </h3>

        <p>
            Tyto vlastnosti můžeme a budeme upravovat taky v kódu, a to ve formátu:
        </p>

        <pre><code class="language-csharp" id="allowCopy">nazevPrvku.Vlastnost = nastavení;</code></pre>

        <p>
            Pokud bychom například chtěli změnit text našeho <b>Label</b>u, tak víme, že se jedná o text, neboli o
            string. Můžeme ho tak nastavit buď přímo, nebo do něj můžeme uložit nějakej string.
        </p>

        <pre><code class="language-csharp" id="allowCopy">label1.Text = "text";

string mujText = "Toto je text";
label1.Text = mujText;</code></pre>

        <p>
            Každá ta vlastnost je v zásadě nějaká proměnná, a tím pádem s ní můžeme pracovat, jako s proměnnou, pokud
            známe její typ. Např. můžeme porovnávat barvu textu:
        </p>

        <pre><code class="language-csharp" id="allowCopy">if (label1.ForeColor == Color.Red)
{
    label1.Text = "Toto je červený text";
}
else
{
    label1.Text = "Toto není červený text";
}</code></pre>

        <h2>
            Zadání
        </h2>

        <p>
            Pokračujte v zadání z minulé hodiny, protože ho většina z nás nedodělala (minimálně ne druhou část).
        </p>

    </div>

</body>

</html>