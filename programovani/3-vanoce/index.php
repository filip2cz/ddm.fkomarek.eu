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

        <h1 class="nadpis">Vánoce: barvičky a datumy</h1>

        <p>
            Tuto, poslední hodinu před Vánoci, si zkusíme nějaké "kosmetické" věci pro náš ultimátní Vánoční program.
        </p>

        <h2>Barvičky</h2>

        <p>V naší konzoli si můžeme měnit barvičky textu. Můžeme to dělat například takto:</p>

        <pre><code class="language-csharp">Console.ForegroundColor = ConsoleColor.Blue;
Console.WriteLine(&quot;Modr&yacute; text&quot;);

Console.BackgroundColor = ConsoleColor.Green;
Console.WriteLine(&quot;Zelen&aacute; v pozad&iacute; a modr&yacute; text&quot;);

Console.ReadLine();</code></pre>

        <p>Pokud chceme vyresetovat barvičky, můžeme použít prostě <code>Console.ResetColor();</code></p>

        <h2>Datumy</h2>

        <p>
            V C# se nám občas hodí pracovat s aktuálním datem. K tomuto slouží datový typ <code>DateTime</code>. Můžeme ho
            použít například takto:
        </p>

        <pre><code class="language-csharp">DateTime datum = DateTime.Now;

Console.Write(&quot;Aktu&aacute;ln&iacute; rok je: &quot;);
Console.WriteLine(datum.Year);

Console.Write(&quot;Dnes je &quot;);
Console.Write(datum.Day);
Console.WriteLine(&quot;. den v měs&iacute;ci&quot;);</code></pre>

        <h2>Zadání</h2>

        <p>
            Vytvořte program, který vypíšu např. "Veselé Vánoce" tak, aby každé písmenko mělo jinou barvu.
        </p>

        <p>
            Dále kód vypíše (tentokrát již normální barvou), kolik dní zbývá do vánoc. Nezapomeňte vzít v potaz, že uživatel může program spustit v jiný měsíc, než je prosinec.
        </p>

        <h2>Příliš snadné?</h2>

        <p>
            Vytvořte program, který vypíše uživateli, kolik dní žije. Budou se vám pro to hodit následující věci, které jsme zatím nezmínili:
        </p>

        <pre><code class="language-csharp">// nastaví naši proměnnou typu DateTime na nějaké konkrétní datum
DateTime narozeniny = DateTime.Parse("2004-09-14");</code></pre>

        <pre><code class="language-csharp">// spočítá rozdíl mezi dvoumy DateTime
TimeSpan rozdil = jinejDateTime - narozeniny;</code></pre>

        <pre><code class="language-csharp">// vypíše TimeSpan, který jsme nastavili výše, ve dnech.
Console.WriteLine(rozdil.Days);</code></pre>

        <h3>Nezapomeňte odevzdat váš kód na Google Učebnu: <a target="_blank" href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzQxNDk4NTk0Nzk4/details">https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzQxNDk4NTk0Nzk4/details</a></h3>

    </div>

</body>

</html>
