<?php
// Cesta k souboru, který chcete načíst
$kod_1az32_file_path = '1az32.cs';

// Kontrola, zda soubor existuje a lze ho načíst
if (file_exists($kod_1az32_file_path) && is_readable($kod_1az32_file_path)) {
    // Načte obsah souboru
    $content1az32 = file_get_contents($kod_1az32_file_path);
} else {
    // Nastaví chybovou zprávu, pokud soubor neexistuje nebo nelze načíst
    $content1az32 = "Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno.";
}


// Cesta k souboru, který chcete načíst
$kod_16az64_file_path = '16az64.cs';

// Kontrola, zda soubor existuje a lze ho načíst
if (file_exists($kod_16az64_file_path) && is_readable($kod_16az64_file_path)) {
    // Načte obsah souboru
    $content16az64 = file_get_contents($kod_16az64_file_path);
} else {
    // Nastaví chybovou zprávu, pokud soubor neexistuje nebo nelze načíst
    $content16az64 = "Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno.";
}


// Cesta k souboru, který chcete načíst
$kod_sude0az100_file_path = 'sude0az100.cs';

// Kontrola, zda soubor existuje a lze ho načíst
if (file_exists($kod_sude0az100_file_path) && is_readable($kod_sude0az100_file_path)) {
    // Načte obsah souboru
    $contentsude0az100 = file_get_contents($kod_sude0az100_file_path);
} else {
    // Nastaví chybovou zprávu, pokud soubor neexistuje nebo nelze načíst
    $contentsude0az100 = "Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno.";
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
    <?php include("../../src/link.html"); ?>

    <div class="container">

        <a href="../"><button class="btn btn-primary" type="button">Zpět</button></a>

        <h1 class="nadpis">Cykly: While</h1>

        <p>
            V C# a dalších programovacích jazycích máme cykly. Jedná se o opakování kódu po námi určenou dobu.
            Následující příklad ukazuje, jak můžeme vypsat všechna čísla od 10.
        </p>

        <pre><code class="language-csharp">// Vytvořen&iacute; proměnn&eacute; i typu int
int i;
// Uložen&iacute; č&iacute;sla 1 do proměnn&eacute; i
i = 1;

// Dokud je i men&scaron;&iacute; nebo rovno 10
while (i &lt;= 10)
{
    // Vypi&scaron; do konzole i
    Console.WriteLine(i);
    // Zvět&scaron;i i o jedno
    i++;
}</code></pre>

        <p>
            Na začátku kódu si určíme proměnnout, v našem případě i, ze kterého začneme.
            V tomto kódu můžeme vidět použití while. V kulaté závorce vydíme podmínku, do kdy se bude cyklus vykonávat.
            V tomto případě bude běžet, dokud je <code>i</code> menší nebo rovno <code>10</code>. "Menší nebo rovno"
            zapisujeme jako <code>&lt;=</code>. Ve špičaté závorce vidíme kód, co se bude vykonávat stále dokola dokud
            cyklus běží. V našem případě se nám vypíše proměnná <code>i</code> a po té se o jedno zvětší pomocí
            <code>i++</code>.
        </p>

        <h2>Zadání</h2>

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

        <h3>1)</h3>

        <p>
            Nyní se inspirujte kódem výše a napište kód, který vypíše čísla od 1 do 32.
        </p>

        <!--

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni-1az32">řešení</button>
        <div id="reseni-1az32" class="collapse mt-3">
            <pre><code class="language-csharp" id="1az32"><?php echo htmlspecialchars($content1az32, ENT_QUOTES, 'UTF-8'); ?></code></pre>
        </div>

        -->

        <h3>2)</h3>

        <p>Upravte program tak, aby ukázal čísla od 16 do 64.</p>

        <!--

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni-16az64">řešení</button>
        <div id="reseni-16az64" class="collapse mt-3">
            <pre><code class="language-csharp" id="16az64"><?php echo htmlspecialchars($content16az64, ENT_QUOTES, 'UTF-8'); ?></code></pre>
        </div>

        -->

        <h3>3)</h3>

        <p>Upravte kód tak, aby se vypsali pouze sudá čísla od 0 včetně do 100.</p>

        <!--

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni-sude0az100">řešení</button>
        <div id="reseni-sude0az100" class="collapse mt-3">
            <pre><code class="language-csharp" id="sude0az100"><?php echo htmlspecialchars($contentsude0az100, ENT_QUOTES, 'UTF-8'); ?></code></pre>
        </div>

        -->

        <h2>Příliš snadné?</h2>

        <p>
            Udělejte program, kde uživatel napíše rozsah čísel a program mu vypíše všechna čísla mezi těmito dvoumi
            čísly. Například, pokud uživatel napíše čísla 3 a 7, výstup programu bude: 3 4 5 6 7
        </p>

    </div>

</body>

</html>