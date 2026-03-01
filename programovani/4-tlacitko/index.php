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

        <p class="test-link">ERROR: načtení souboru link.html bylo neúspěšné</p>

        <a href="../"><button class="btn btn-primary" type="button">Zpět</button></a>

        <h1 class="nadpis">Tlačítko</h1>

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
            V dnešní hodině si ukážeme, jak pracovat s tlačítky. V našem edushield je tlačítko na pinu číslo 2. Více
            info ohledně pinů v edushield:
            <a href="https://github.com/arduino-edushield/edushield/blob/master/extras/learning/course/cz/cheatsheet.md"
                target="_blank">https://github.com/arduino-edushield/edushield/blob/master/extras/learning/course/cz/cheatsheet.md</a>
        </p>

        <p>
            Následující kód nám zařídí, že se bude do konzole vypisovat číslo 0, pokud je tlačítko stisknuto. Pokud
            není, bude se nám vypisovat číslo 1.
        </p>

        <pre><code class="language-arduino">// nastaví, že na pinu číslo 2 máme tlačítko. Díky tomuto můžeme pak rovnou použít button místo čísla pinu
#define button 2

void setup() {
    // spustí konzoli s datovým přenosem o rychlosti 9600 baudů za sekundu
    Serial.begin(9600);
    // nastaví pin tlačítka jako vstupní
    pinMode(button,INPUT_PULLUP);
}

void loop() {
    // vytvoří proměnnou typu int (číslo), do které budeme ukládat stav tlačítka. 1 = tlačítko není stisknuto, 0 = tlačítko je stisknuto
    int b = digitalRead(button);
    // vypíše obsah proměnné b do seriové konzole
    Serial.println(b);
}</code></pre>

        <p>
            Vzhledem k tomu, že víme, že 0 znamená že tlačítko bylo stisknuto a 1 znamená že tlačítko bylo puštěno,
            můžeme si pomocí podmínky výstup trochu zpřehlednit.
        </p>

        <pre><code class="language-arduino">// nastaví, že na pinu číslo 2 máme tlačítko. Díky tomuto můžeme pak rovnou použít button místo čísla pinu
#define button 2

void setup() {
    // spustí konzoli s datovým přenosem o rychlosti 9600 baudů za sekundu
    Serial.begin(9600);
    // nastaví pin tlačítka jako vstupní
    pinMode(button, INPUT_PULLUP);
}

void loop() {
    // vytvoří proměnnou typu int (číslo), do které budeme ukládat stav tlačítka. 1 = tlačítko není stisknuto, 0 = tlačítko je stisknuto
    int b = digitalRead(button);

    // Pokud je tlačítko stisknuto, vypíše text v uvozovnách do konzole
    if (b == 0) {
        Serial.println(&quot;Tlač&iacute;tko bylo stisknuto&quot;);
    }
    // Pokud tlačítko není stisknuto, vypíše text v uvozovnách do konzole
    else if (b == 1) {
        Serial.println(&quot;Tlač&iacute;tko bylo pu&scaron;těno&quot;);
    }
}</code></pre>

        <p>
            Můžeme si rovnou vytvořit pro uživatele trochu přívětivější kód, kdy se nám do konzole vypíše pouze změna
            stavu:
        </p>

        <pre><code class="language-arduino">// nastaví, že na pinu číslo 2 máme tlačítko. Díky tomuto můžeme pak rovnou použít button místo čísla pinu
#define button 2
// vytvoří proměnnou lastState a uloží si do ní číslo 1. Tuto proměnnou budeme později využívat k tomu, aby se nám do konzole vypsala pouze změna stavu tlačítka
int lastState = 1;

void setup() {
    // spustí konzoli s datovým přenosem o rychlosti 9600 baudů za sekundu
    Serial.begin(9600);
    // nastaví pin tlačítka jako vstupní
    pinMode(button,INPUT_PULLUP);
}

void loop() {
    // vytvoří proměnnou typu int (číslo), do které budeme ukládat stav tlačítka. 1 = tlačítko není stisknuto, 0 = tlačítko je stisknuto
    int b = digitalRead(button);

    // Pokud se lastState NErovná b
    if (lastState != b){
        // Pokud je tlačítko stisknuto, vypíše text v uvozovnách do konzole
        if (b == 0) {
            Serial.println(&quot;Tlač&iacute;tko bylo stisknuto&quot;);
        }
        // Pokud tlačítko není stisknuto, vypíše text v uvozovnách do konzole
        else if (b == 1) {
            Serial.println(&quot;Tlač&iacute;tko bylo pu&scaron;těno&quot;);
        }

        // uloží do proměnné lastState poslední stav. Díky tomuto v kombinaci s if výše se vypíše pouze změna, místo toho aby se vypisoval stav neustále
        lastState = b;
    }
}</code></pre>

        <h2>Zadání</h2>

        <p>
            Vzpomeňte si na předchozí lekci a vytvořte program, který rozsvítí diodu, pokud je tlačítko stisknuto. Pokud
            bude tlačítko puštěno, dioda zhasne. Led diodu máte připojenou na pinu číslo 13.
        </p>

        <p>
            Doporučuji pro led diodu nastavit následující kód v části setup: <code>pinMode(led,OUTPUT);</code>, čímž
            Arduinu řeknete, že tam je led dioda a bude tam posílat vyšší proud -> led dioda bude svítit více.
        </p>

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

        <h2>Příliš snadné?</h2>

        <p>
            Na arduinu máme také další led diody na pinech 16 a 17. Udělejte kód, kdy se při stisknutí tlačítka rozsvítí
            jedna z těchto diod a po opětovném stisknutí ta co nyní svítí zhasne a rozsvítí se jiná.
        </p>

    </div>

</body>

</html>