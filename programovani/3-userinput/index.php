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

        <pre><code class="language-csharp">Console.Write("Zadejte vaše jméno: ");
string jmeno;
jmeno = Console.ReadLine();
Console.Write("Vaše jméno je: ");
Console.WriteLine(jmeno);
Console.ReadLine();</code></pre>

        <p>Výstup by měl vypadat nějak takto:</p>

        <pre class="output">
Zadejte vaše jméno: Filip
Vaše jméno je: Filip
</pre>

        <p>Pokud budeme brát číslo, musíme ho první převést z textu na číslo:</p>

        <pre><code class="language-csharp">Console.Write("Zadejte váš věk: ");
int cislo;
cislo = Convert.ToInt32(Console.ReadLine());
Console.Write("Váš věk je: ");
Console.WriteLine(cislo);
Console.Write("Za dva roky váš věk bude: ");
Console.WriteLine(cislo + 2);
Console.ReadLine();</code></pre>

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
            Použijte internet a zkuste do této kalkulačky přidat mocninu (například 2 na 3 = 8), případně další
            matematické operace.
        </p>

    </div>

</body>

</html>