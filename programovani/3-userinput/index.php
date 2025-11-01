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

        <h1 class="nadpis">Vstup od uživatele</h1>

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
            Minule jsme si ukázali, jak pracovat s proměnnými a jak je vypisovat do konzole.
            Dále se nám bude hodit brát výstup od
            uživatele a zapisovat ho do proměnné, můžeme si to ukázat na tomto kódu:
        </p>

        <pre><code class="language-csharp">// Vyps&aacute;n&iacute; textu &quot;Zadejte va&scaron;e jm&eacute;no: &quot; do konzole
Console.Write(&quot;Zadejte va&scaron;e jm&eacute;no: &quot;);

// Vytvořen&iacute; proměnn&eacute; typu string jm&eacute;nem jmeno
string jmeno;
// Uložen&iacute; vstupu od uživatele pro proměnn&eacute; jmeno
jmeno = Console.ReadLine();

// Vyps&aacute;n&iacute; textu &quot;Va&scaron;e jm&eacute;no je: &quot; do konzole bez odř&aacute;dkov&aacute;n&iacute;
Console.Write(&quot;Va&scaron;e jm&eacute;no je: &quot;);
// Vyps&aacute;n&iacute; obsahu proměnn&eacute; jmeno do konzole s odř&aacute;dkov&aacute;n&iacute;m
Console.WriteLine(jmeno);

// Vyčk&aacute;n&iacute; na vstup od uživatele, aby se n&aacute;m program okamžitě neukončil
Console.ReadLine();</code></pre>

        <p>Výstup by měl vypadat nějak takto:</p>

        <pre class="output">
Zadejte vaše jméno: Filip
Vaše jméno je: Filip
</pre>

        <p>Pokud budeme brát číslo, musíme ho první převést z textu na číslo:</p>

        <pre><code class="language-csharp">// Vyps&aacute;n&iacute; textu &quot;Zadejte v&aacute;&scaron; věk: &quot; do konzole
Console.Write(&quot;Zadejte v&aacute;&scaron; věk: &quot;);

// Vytvořen&iacute; proměnn&eacute; vstup typu string
string vstup;
// Uložen&iacute; vstupu od uživatele do proměnn&eacute; vstup
vstup = Console.ReadLine();

// Vytvořen&iacute; proměnn&eacute; cislo typu int
int cislo;
// Převeden&iacute; proměnn&eacute; vstup na č&iacute;slo a uložen&iacute; do proměnn&eacute; č&iacute;slo
cislo = Convert.ToInt32(vstup);

// Vyps&aacute;n&iacute; textu &quot;V&aacute;&scaron; věk je: &quot; do konzole
Console.Write(&quot;V&aacute;&scaron; věk je: &quot;);
// Vyps&aacute;n&iacute; proměnn&eacute; cislo do konzole
Console.WriteLine(cislo);

// Vyps&aacute;n&iacute; textu &quot;Za dva roky v&aacute;&scaron; věk bude: &quot; do konzole
Console.Write(&quot;Za dva roky v&aacute;&scaron; věk bude: &quot;);
// Vyps&aacute;n&iacute; součtu proměnn&eacute; cislo a č&iacute;sla 2 do konzole
Console.WriteLine(cislo + 2);

// Vyčk&aacute;n&iacute; na vstup od uživatele, aby se n&aacute;m program okamžitě neukončil
Console.ReadLine();</code></pre></code></pre>

        <p>Výstup bude vypadat takto:</p>

        <pre class="output">
Zadejte váš věk: 16
Váš věk je: 16
Za dva roky váš věk bude: 18
</pre>

        <h2>Zadání</h2>

        <p>
            Minule jsme si na konci vytvořili kalkulačku. Přidejte do této kalkulačky možnost vstupu od uživatele, aby
            se uživatel nemusel "hrabat" v kódu.
        </p>

        <h2>Příliš snadné?</h2>

        <p>
            Vytvořte geometrickou kalkulačku např. na čtverec nebo obdélník atd., která uživateli spočítá obvod a obsah tvaru.
        </p>

        <h2>Nezapomeňte odevzdat váš kód do Google Učebny: <a href="https://classroom.google.com/c/ODA4MjE5ODMxODM0/a/ODExMDYzOTI0MTY4/details" target="_blank">https://classroom.google.com/c/ODA4MjE5ODMxODM0/a/ODExMDYzOTI0MTY4/details</a></h2>

    </div>

</body>

</html>