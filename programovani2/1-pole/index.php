<?php
// Cesta k souboru, který chcete načíst
$kod_soucet_file_path = 'soucet.cs';

// Kontrola, zda soubor existuje a lze ho načíst
if (file_exists($kod_soucet_file_path) && is_readable($kod_soucet_file_path)) {
    // Načte obsah souboru
    $contentsoucet = file_get_contents($kod_soucet_file_path);
} else {
    // Nastaví chybovou zprávu, pokud soubor neexistuje nebo nelze načíst
    $contentsoucet = "Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno.";
}


// Cesta k souboru, který chcete načíst
$kod_stack_file_path = 'https://raw.githubusercontent.com/filip2cz/mvop-3-stack/master/Program.cs';

if (ini_get('allow_url_fopen')) {
    $contentstack = @file_get_contents($kod_stack_file_path);
    if ($contentstack === false) {
        $contentstack = "Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno.";
    }
} else {
    $contentstack = "Načítání souborů z URL není na serveru povoleno.";
}
?>

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

        <h1 class="nadpis">Pole</h1>

        <p>
            Jak jistě víte, v C# máme proměnné, kam můžeme ukládat hodnoty. Co se ale může hodit jsou pole hodnot, kdy
            ukládáme do jednoho pole více hodnot. Může se to hodit například, pokud nevíme, kolik těch hodnot budeme
            zpracovávat.
        </p>

        <p>
            Zde je příklad, jak vytvořit pole s předepsanými hodnotami:
        </p>

        <pre><code class="language-csharp">string[] monthsOfTheYear = { "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"};</code></pre>

        <div class="alert alert-warning" role="alert">
            Ve většině programovacích jazycích, včetně C#, se začíná počítat od 0. V tomto poli se tedy
            monthsOfTheYear[0] = "January" a monthsOfTheYear[11] = "December". Použití monthsOfTheYear[12] vyústí v
            error, protože dvanáctý prvek pole neexistuje.
        </div>

        <p>
            S těmito hodnotami můžeme pracovat podobně jako se stringy:
        </p>

        <pre><code class="language-csharp">monthsOfTheYear[7] = "Srpen";
monthsOfTheYear[8] = string.Empty;
monthsOfTheYear[9] = Console.ReadLine();</code></pre>

        <p>
            Pokud chceme pracovat s každým jedním prvkem pole, můžeme použít <code>foreach</code>. Následující příklad
            vypíše všechny měsíce z pole výše.
        </p>
        
        <pre><code class="language-csharp">foreach (var item in monthsOfTheYear)
{
    Console.WriteLine(item);
}</code></pre>

        <p>
            <code>foreach</code> funguje tak, že do vnitřní proměnné <code>item</code> (může se jmenovat jakkoliv) vloží
            první prvek z pole, udělá s ním to co je uvnitř hranatých závorek (v našem případě ho vypíše) a po té udělá
            to samé s dalším a dalším prvkem.
        </p>

        <p>
            Pokud chceme vytvořit prázné pole znaků, vytvoříme ho následujícím způsobem:
        </p>
        
        <pre><code class="language-csharp">string[] pole = new string[x];</code></pre>

        <p>
            V tomto kódu musíme <code>x</code> nahradit celým číslem, které vyjadřuje velikost pole. Z tohoto se dá odvodit, že pole
            má přesně určenou velikost. Tuto velikost můžeme změnit pomocí následujícího kódu:
        </p>

        <pre><code class="language-csharp">string[] pole = new string[5];
Console.WriteLine($"Velikost pole: {pole.Length}");

Array.Resize(ref pole, 10 );
Console.WriteLine($"Nová velikost pole: {pole.Length}");</code></pre>

        <p>
            <code>string[]</code> není samozřejmě jediný typ pole, co můžeme použít. Od každého typu proměnné existuje
            typ pole. Můžeme tam použít například <code>int[]</code> pro pole celých čísel, <code>double[]</code> pro
            pole čísel s možností desetinných míst, nebo třeba <code>bool[]</code> pro pole true/false.
        </p>

        <p>
            Zadání: vytvořte program, který si od uživatele vyžádá jím určený počet čísel a poté je sečte.
        </p>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni-soucet">řešení</button>
        <div id="reseni-soucet" class="collapse mt-3">
            <pre><code class="language-csharp" id="soucet"><?php echo htmlspecialchars($contentsoucet, ENT_QUOTES, 'UTF-8'); ?></code></pre>
        </div>

        <h2>Příliš snadné?</h2>

        <p>
            Vytvořte program zvaný stack, který uživateli dovolí spustit následující příkazy:<br>
            <code>Push</code> ukládá znak na konec pole <br>
            <code>Pop</code> vrací znak z konce pole a odstraňuje jej z pole <br>
            <code>Peek</code> vrací znak na na konci pole (nechává jej v poli) <br>
            <code>IsEmpty</code> vrací true/false podle toho, zda je či není pole prázdné <br>
            <code>PrintStack</code> vypíše na konzoli všechny hodnoty v poli <br>
        </p>

        <p>
            Zde máte program, který funguje stejně: <a href="https://github.com/filip2cz/mvop-3-stack/releases/download/v1.1/stack-win64.exe" target="_blank">stack-win64.exe</a>
        </p>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni-stack">řešení</button>
        <div id="reseni-stack" class="collapse mt-3">
            <pre><code class="language-csharp" id="stack"><?php echo htmlspecialchars($contentstack, ENT_QUOTES, 'UTF-8'); ?></cod/pre>
        </div>

    </div>

</body>

</html>