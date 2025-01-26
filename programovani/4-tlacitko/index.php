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

        <pre><code class="language-arduino">#define button 2

void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);
    pinMode(button,INPUT_PULLUP);
}

void loop() {
    // put your main code here, to run repeatedly:
    int b = digitalRead(button);
    Serial.println(b);
}</code></pre>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis1">Podrobný popis kódu</button>
        <div id="popis1" class="collapse mt-3">
            <ul>
                <li>
                    <code>#define button 2</code> nám nastaví, že na pinu číslo 2 máme tlačítko. Díky tomuto můžeme pak
                    rovnou použít <code>button</code> místo čísla pinu.
                </li>

                <br>
                <h5>void setup()</h5>

                <li>
                    <code>Serial.begin(9600);</code> nám spustí konzoli s datovým přenosem o rychlosti 9600 <a
                        href="https://cs.wikipedia.org/wiki/Baud" target="_blank">baudů za sekundu</a>.
                </li>

                <li>
                    <code>pinMode(button,INPUT_PULLUP);</code> nám nastaví tlačítko. Podrobný a pro nás nedůležitý
                    popis:<br>
                    <i>
                        Tento kód v jazyce Arduino nastavuje pin s označením "button" jako vstupní s interním pull-up
                        odporem. To znamená, že pin bude připojen k napájecímu napětí (typicky +5V) přes pull-up odpor,
                        což pomůže eliminovat vlivy vnějších rušení a zajistí, že pin bude mít definovanou hodnotu
                        (HIGH), když na něj nebude připojeno nic jiného. Tento kód je často používán při připojení
                        tlačítka nebo spínače, když je jedno z jeho pólů připojeno k danému pinu a druhý pól k zemi.
                    </i>
                </li>

                <br>
                <h5>void loop()</h5>

                <li>
                    <code>int b = digitalRead(button);</code> nám vytvoří proměnnou typu int (číslo), do které budeme
                    ukládat stav tlačítka. 1 = tlačítko není stisknuto, 0 = tlačítko je stisknuto.
                </li>

                <li>
                    <code>Serial.println(b);</code> nám vypíše obsah proměnné <b>b</b> do seriové konzole.
                </li>
            </ul>
        </div>

        <p>
            Vzhledem k tomu, že víme, že 0 znamená že tlačítko bylo stisknuto a 1 znamená že tlačítko bylo puštěno,
            můžeme si pomocí podmínky výstup trochu zpřehlednit.
        </p>

        <pre><code class="language-arduino">#define button 2

void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);
    pinMode(button, INPUT_PULLUP);
}

void loop() {
    // put your main code here, to run repeatedly:
    int b = digitalRead(button);

    if (b == 0) {
        Serial.println(&quot;Tlač&iacute;tko bylo stisknuto&quot;);
    }
    else if (b == 1) {
        Serial.println(&quot;Tlač&iacute;tko bylo pu&scaron;těno&quot;);
    }
}</code></pre>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis2">Podrobný popis kódu</button>
        <div id="popis2" class="collapse mt-3">
            <ul>
                <li>
                    <code>#define button 2</code> nám nastaví, že na pinu číslo 2 máme tlačítko. Díky tomuto můžeme pak
                    rovnou použít <code>button</code> místo čísla pinu.
                </li>

                <br>
                <h5>void setup()</h5>

                <li>
                    <code>Serial.begin(9600);</code> nám spustí konzoli s datovým přenosem o rychlosti 9600 <a
                        href="https://cs.wikipedia.org/wiki/Baud" target="_blank">baudů za sekundu</a>.
                </li>

                <li>
                    <code>pinMode(button,INPUT_PULLUP);</code> nám nastaví tlačítko. Podrobný a pro nás nedůležitý
                    popis:<br>
                    <i>
                        Tento kód v jazyce Arduino nastavuje pin s označením "button" jako vstupní s interním pull-up
                        odporem. To znamená, že pin bude připojen k napájecímu napětí (typicky +5V) přes pull-up odpor,
                        což pomůže eliminovat vlivy vnějších rušení a zajistí, že pin bude mít definovanou hodnotu
                        (HIGH), když na něj nebude připojeno nic jiného. Tento kód je často používán při připojení
                        tlačítka nebo spínače, když je jedno z jeho pólů připojeno k danému pinu a druhý pól k zemi.
                    </i>
                </li>

                <br>
                <h5>void loop()</h5>

                <li>
                    <code>int b = digitalRead(button);</code> nám vytvoří proměnnou typu int (číslo), do které budeme
                    ukládat stav tlačítka. 1 = tlačítko není stisknuto, 0 = tlačítko je stisknuto.
                </li>

                <li>
                    <code>if (b == 0)</code> a <code>else if (b == 1)</code> nám provede akci pouze pokud je stav
                    tlačítka 0
                    nebo 1, neboli stisknuto nebo nestisknuto.
                </li>
            </ul>
        </div>

        <p>
            Můžeme si rovnou vytvořit pro uživatele trochu přívětivější kód, kdy se nám do konzole vypíše pouze změna
            stavu:
        </p>

        <pre><code class="language-arduino">#define button 2
int lastState = 1;

void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);
    pinMode(button,INPUT_PULLUP);
}

void loop() {
    // put your main code here, to run repeatedly:
    int b = digitalRead(button);

    if (lastState != b){
        if (b == 0) {
            Serial.println(&quot;Tlač&iacute;tko bylo stisknuto&quot;);
        }
        else if (b == 1) {
            Serial.println(&quot;Tlač&iacute;tko bylo pu&scaron;těno&quot;);
        }
        lastState = b;
    }
}</code></pre>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis3">Podrobný popis kódu</button>
        <div id="popis3" class="collapse mt-3">
            <ul>
                <li>
                    <code>#define button 2</code> nám nastaví, že na pinu číslo 2 máme tlačítko. Díky tomuto můžeme pak
                    rovnou použít <code>button</code> místo čísla pinu.
                </li>

                <li>
                    <code>int lastState = 1;</code> nám vytvoří proměnnou <b>lastState</b> a uloží si do ní číslo 1.
                    Tuto proměnnou budeme později využívat k tomu, aby se nám do konzole vypsala pouze změna stavu
                    tlačítka.
                </li>

                <br>
                <h5>void setup()</h5>

                <li>
                    <code>Serial.begin(9600);</code> nám spustí konzoli s datovým přenosem o rychlosti 9600 <a
                        href="https://cs.wikipedia.org/wiki/Baud" target="_blank">baudů za sekundu</a>.
                </li>

                <li>
                    <code>pinMode(button,INPUT_PULLUP);</code> nám nastaví tlačítko. Podrobný a pro nás nedůležitý
                    popis:<br>
                    <i>
                        Tento kód v jazyce Arduino nastavuje pin s označením "button" jako vstupní s interním pull-up
                        odporem. To znamená, že pin bude připojen k napájecímu napětí (typicky +5V) přes pull-up odpor,
                        což pomůže eliminovat vlivy vnějších rušení a zajistí, že pin bude mít definovanou hodnotu
                        (HIGH), když na něj nebude připojeno nic jiného. Tento kód je často používán při připojení
                        tlačítka nebo spínače, když je jedno z jeho pólů připojeno k danému pinu a druhý pól k zemi.
                    </i>
                </li>

                <br>
                <h5>void loop()</h5>

                <li>
                    <code>int b = digitalRead(button);</code> nám vytvoří proměnnou typu int (číslo), do které budeme
                    ukládat stav tlačítka. 1 = tlačítko není stisknuto, 0 = tlačítko je stisknuto.
                </li>

                <li>
                    <code>if (lastState != b)</code> nám porovná aktuální stav s posledním známým stavem. Kdyby byl
                    tento if vypuštěn, arduino by neustále vypisovalo text. Takto nám ho ukáže pouze jednou, když se
                    stav změní.
                </li>

                <li>
                    <code>if (b == 0)</code> a <code>else if (b == 1)</code> nám provede akci pouze pokud je stav
                    tlačítka 0
                    nebo 1, neboli stisknuto nebo nestisknuto.
                </li>

                <li>
                    <code>lastState = b;</code> si uloží do proměnné <b>lastState</b> poslední stav. Díky tomuto v
                    kombinaci s <code>if</code> výše se vypíše pouze změna, místo toho aby se vypisoval stav neustále.
                </li>
            </ul>
        </div>

        <h2>Zadání</h2>

        <p>
            Vzpomeňte si na předchozí lekci a vytvořte program, který rozsvítí diodu, pokud je tlačítko stisknuto. Pokud
            bude tlačítko puštěno, dioda zhasne. Led diodu máte připojenou na pinu číslo 13.
        </p>

        <p>
            Doporučuji pro led diodu nastavit následující kód v části setup: <code>pinMode(led,OUTPUT);</code>, čímž
            Arduinu řeknete, že tam je led dioda a bude tam posílat vyšší proud -> led dioda bude svítit více.
        </p>

        <p>
            Nezapomeňte odevzdat váš kód do Google Učebny: <a
                href="https://classroom.google.com/c/NTkwMDUxNjcyMjUy/a/Njc0MTQzNTQ2MTk2/details"
                target="_blank">https://classroom.google.com/c/NTkwMDUxNjcyMjUy/a/Njc0MTQzNTQ2MTk2/details</a>
        </p>

        <h2>Příliš snadné?</h2>

        <p>
            Na arduinu máme také další led diody na pinech 16 a 17. Udělejte kód, kdy se při stisknutí tlačítka rozsvítí
            jedna z těchto diod a po opětovném stisknutí ta co nyní svítí zhasne a rozsvítí se jiná.
        </p>

    </div>

</body>

</html>