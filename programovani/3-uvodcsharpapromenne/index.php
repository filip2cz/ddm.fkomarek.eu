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

        <h1 class="nadpis">Úvod do C# a proměnné</h1>

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

        <p>V této lekci se seznámíme s proměnnými a s tím jak je využívat.</p>

        <p>První si musíme ovšem vytvořit projekt. Otevřeme si Visual Studio a klikneme na tlačítko Vytvořit nový
            projekt:</p>

        <img src="1.png" style="max-width: 50%;">

        <p>Poté si vybereme, jaký typ projektu budeme dělat. Zatím začneme v klasické Konzolové aplikaci typu .NET
            Framework:</p>

        <img src="2.png" style="max-width: 50%;">

        <p>
            Pozor, aby tam bylo to <code>.NET Framework</code>. Verze bez .NET Frameworku bude fungovat podobně, ale
            některé věci nemusí fungovat stejně.
        </p>

        <p>Poté se nám spustí grafické rozhraní, kde vidíme kód. Výchozí kód by měl vypadat nějak takto:</p>

        <pre><code class="language-csharp">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace playground_dotnet_framework
{
    internal class Program
    {
        static void Main(string[] args)
        {
        }
    }
}</code></pre>

        <p>
            Vidíme zde již nějaký předepsaný kód. Náš kód budeme psát do funkce Main. První kód, co přidáme bude
            <code>Console.WriteLine("Hello World!");</code>.
        </p>

        <p>Náš kód by měl vypadat nějak takto:</p>

        <pre><code class="language-csharp">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace playground_dotnet_framework
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }
    }
}</code></pre>

        <p>Tento kód můžeme spustit pomocí tlačítka nahoře:</p>

        <img src="3.png">

        <p>
            Všimněte si, že když to spustíme, problikne nám okno, ale nic moc nevidíme. Kód totiž vykonal příkaz
            <code>Console.WriteLine("Hello World!");</code>, jenž vypíše do konzole text "Hello World!" a po té se
            ukončil. Abychom něco viděli, musíme do kódu přidat <code>Console.ReadLine();</code>, čímž programu řekneme,
            že má vyčkat na vstup od uživatele.
        </p>

        <pre><code class="language-csharp">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace playground_dotnet_framework
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Console.ReadLine();
        }
    }
}</code></pre>

        <p>
            Poté se nám spustí okno s naším programem, kde můžeme vidět nápis "Hello World!". Když pak dáme ENTER,
            program se ukončí.
        </p>

        <pre class="output">
Hello, World!
        </pre>

        <p><b>Další kód už sem budu psát bez ostatního kódu kolem, neboli pouze vnitřek funkce Main.</b></p>

        <p>
            V tomto kódu můžeme upravit, co se má do konzole vypsat. Aby to ovšem zůstalo jako text, musí to zůstat v
            uvozovkách, například:
        </p>

        <pre><code class="language-csharp">Console.WriteLine("Ahoj, Světe!");
Console.ReadLine();</code></pre>

        <p>
            Do tohoto kódu můžeme také napsat matematický příklad, je ovšem potřeba odstranit uvozovky, jinak to bude
            program brát jako text:
        </p>

        <pre><code class="language-csharp">Console.WriteLine(1+2);
Console.ReadLine();</code></pre>

        <p>
            Zapisování čísel do kódu tímto způsobem je ovšem docela těžkopádné, proto využíváme tzv. proměnné.
        </p>

        <h1>Proměnné</h1>

        <p>
            Proměnná je věc, do které můžeme uložit nějakou hodnotu a poté s ní pracovat.
            Existuje spoustu typů proměnných, ukážeme si některé z nich:
        </p>

        <p>
            <code>int</code> je číslo (bez desetiných míst)<br>
            <code>string</code> je text<br>
            Existuje jich mnohem více, ale ukážeme si je později.
        </p>

        <p>
            První je třeba proměnnou vytvořit, uděláme to pomocí kódu <code>int/string [název];</code>
            a poté ho nastavíme na nějaké číslo pomocí <code>[název] = [hodnota];</code>.
            Zkusíme si to na následujícím kódu:
        </p>

        <pre><code class="language-csharp">int prvniCislo;
int druheCislo;
prvniCislo = 5;
druheCislo = 4;

string text;
text = "Součet dvou čísel je: ";

Console.Write(text);
Console.WriteLine(prvniCislo + druheCislo);

Console.ReadLine();</code></pre>

        <p>Tento kód můžeme trochu zkrátit tím, že výpis obou proměnných dáme na jeden řádek.</p>

        <pre><code class="language-csharp">Console.WriteLine($"{text}{prvniCislo + druheCislo}");</code></pre>

        <p>
            Console.WriteLine se znakem $ výše funguje tak, že funguje jako text, ovšem to co je uvnitř {} se spustí
            jako kód.
        </p>

        <p>
            Dále můžeme brát výstup od uživatele a zapisovat ho do proměnné, můžeme si to ukázat na tomto kódu:
        </p>

        <pre><code class="language-csharp">Console.Write("Zadejte vaše jméno: ");
string jmeno = Console.ReadLine();
Console.WriteLine($"Vaše jméno je: {jmeno}");
Console.ReadLine();</code></pre>

        <p>Výstup by měl vypadat nějak takto:</p>

        <pre class="output">
Zadejte vaše jméno: Filip
Vaše jméno je: Filip
</pre>

        <p>Pokud budeme brát číslo, musíme ho první převést z textu na číslo:</p>

        <pre><code class="language-csharp">Console.Write("Zadejte váš věk: ");
int cislo = Convert.ToInt32(Console.ReadLine());
Console.WriteLine($"Váš věk je: {cislo}");
Console.WriteLine($"Za dva roky váš věk bude: {cislo + 2}");
Console.ReadLine();</code></pre>

        <p>Výstup bude vypadat takto:</p>

        <pre class="output">
Zadejte váš věk: 16
Váš věk je: 16
Za dva roky váš věk bude: 18
</pre>

        <h2>Zadání</h2>

        <p>
            Vytvořte kalkulačku, do které uživatel napíše dvě hodnoty a program mu vypíše součet (+), rozdíl(-),
            násobek(*) a podíl(/) těchto čísel.
        </p>

        <h2>Příliš snadné?</h2>

        <p>
            Použijte internet a zkuste do této kalkulačky přidat mocninu (například 2 na 3 = 8).
        </p>

        <h2>Nezapomeňte odevzdat váš kód do Google Učebny: <a href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzE5NDk2MjcyNjU4/details" target="_blank">https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzE5NDk2MjcyNjU4/details</a></h2>

    </div>

</body>

</html>