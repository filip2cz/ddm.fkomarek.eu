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

        <h1 class="nadpis">Třídy a funkce</h1>

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
            Jak jste si nejspíše všimli, v předchozích lekcích jsme používali třídy a funkce.
            V programování si můžeme tvořit vlastní funkce a třídy.
        </p>

        <h2>Co to jsou funkce?</h2>

        <p>
            Funkce je nějaký blok kódu, který dělá nějakou konkrétní věc. Můžeme si ji kdykoliv zavolat.
        </p>

        <h3>Příklad funkce</h3>

        <p>
            V minulosti jsme použili například funkci <code>Console.WriteLine()</code>, která nám umožňuje něco vypsat do konzole.
            Tato funkce nám přijímá nějaké informace, které té funkci přesně říkají, co se má do konzole vypsat.
            Tyto informace se nazývají <b>parametry</b>.
        </p>

        <p>
            Toto je příklad funkce, do které hodíme číslo a ona nám do konzole vypíše text
            "Číslo je: " a za něj to číslo, které jsme do funkce hodili, ale o jedno větší.
        </p>

        <pre><code class="language-csharp">using System;
class projekt {
    static void Main() {
        VypisCislo(7);
    }
    static void VypisCislo(int cislo)
    {
        Console.WriteLine("Číslo je: " + (cislo + 1));
    }
}</code></pre>

        <p>
            Když tento kód spustíme, do konzole nám vypíše "Číslo je: 8", protože jsme do funkce
            <code>VypisCislo()</code> vložili číslo 7 a ta funkce nám vypíše to číslo o jedno větší.
        </p>

        <h2>Třídy</h2>

        <p>
            Třída je něco podobného jako funkce, ale vrací nám nějakou hodnotu, kterou můžeme použít v našem programu.
        </p>

        <h3>Příklad třídy</h3>

        <p>
            V minulosti jsme využili například třídu <code>Convert</code>,
            která nám umožňuje převádět různé proměnné na jiné typy proměnných.
        </p>

        <p>
            Toto je příklad třídy, do které vložíme dvě čísla a ona nám vrátí jejich součet.
        </p>

        <pre><code class="language-csharp">using System;
class projekt {
    static void Main() {
        int soucet = SectiCisla(5, 7);
        Console.WriteLine(soucet);
    }
    static int SectiCisla(int cislo1, int cislo2)
    {
        return cislo1 + cislo2;
    }
}</code></pre>

        <h2>K čemu nám funkce a třídy slouží?</h2>

        <p>
            Když píšeme nějaký rozsáhlý program, je dobré si ho rozdělit do menších částí, které dělají nějakou konkrétní věc.
            Když máme nějakou část kódu, která dělá nějakou konkrétní věc,
            můžeme ji dát do funkce nebo třídy a tu funkci nebo třídu pak kdykoliv zavolat, když tu konkrétní věc potřebujeme udělat.
        </p>

        <p>
            Zároveň, když více programátorů dělá na jednom programu, tak každý programátor dělá nějakou konkrétní část.
            Například u kalkulačky by mohl být jeden programátor, který dělá funkce pro sčítání,
            druhý programátor dělá funkce pro odčítání, třetí programátor dělá funkce pro násobení a čtvrtý programátor dělá 
            unkce pro dělení.
            Tímto způsobem se programátoři navzájem neruší a každý může pracovat na své části programu, aniž by musel řešit,
            co dělají ostatní programátoři.
        </p>

        <p>
            Příklad kalkulačky, která využívá třídy pro sčítání, odčítání, násobení a dělení:
        </p>

        <pre><code class="language-csharp">using System;
class projekt {
    static void Main() {
        Console.WriteLine("Zadej první číslo:");
        double cislo1 = Convert.ToDouble(Console.ReadLine());
        Console.WriteLine("Zadej druhé číslo:");
        double cislo2 = Convert.ToDouble(Console.ReadLine());
        Console.WriteLine("Zadej operaci (+, -, *, /):");
        string operace = Console.ReadLine();
        double vysledek = 0;
        if (operace == "+")
        {
            vysledek = SectiCisla(cislo1, cislo2);
        }
        else if (operace == "-")
        {
            vysledek = OdecistCisla(cislo1, cislo2);
        }
        else if (operace == "*")
        {
            vysledek = NasobitCisla(cislo1, cislo2);
        }
        else if (operace == "/")
        {
            vysledek = DelitCisla(cislo1, cislo2);
        }
        Console.WriteLine("Výsledek: " + vysledek);
    }
    static double SectiCisla(double cislo1, double cislo2)
    {
        return cislo1 + cislo2;
    }
    static double OdecistCisla(double cislo1, double cislo2)
    {
        return cislo1 - cislo2;
    }
    static double NasobitCisla(double cislo1, double cislo2)
    {
        return cislo1 * cislo2;
    }
    static double DelitCisla(double cislo1, double cislo2)
    {
        return cislo1 / cislo2;
    }
}</code></pre>

    </div>

</body>

</html>