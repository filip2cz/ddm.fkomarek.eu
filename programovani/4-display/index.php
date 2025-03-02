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

        <h1 class="nadpis">Displej - čísla</h1>

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
            Dnes si ukážeme, jak vypisovat čísla na náš displej, jenž máme na Arduinu. <!-- Na displeji máme 4 pozice pro čísla s tím, že jsou očíslována od 0 do 3. Pomocí kódu můžeme vybrat pozici a poté znak, který tam napíšeme. Chceme třeba napsat číslo 3 na pozici 0 (na první číslo): -->
        </p>
        <!--
        <pre><code class="language-arduino">#include &lt;edushield.h&gt;

void setup() {
  // put your setup code here, to run once:
  Display.num(3,0);
}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>

        <p>
            Můžeme takto vypsat <code>1234</code> po našem displeji:
        </p>

        <pre><code class="language-arduino">#include &lt;edushield.h&gt;

void setup() {
  // put your setup code here, to run once:
  Display.num(1,0); // Vypsat č&iacute;slo jedna na nultou pozici
  Display.num(2,1); // Vypsat č&iacute;slo dvě na prvn&iacute; pozici
  Display.num(3,2); // Vypsat č&iacute;slo tři na druhou pozici
  Display.num(4,3); // Vypsat č&iacute;slo čtyři na třet&iacute; pozici
}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>
-->

        <!--

        <p>
            Pokud chceme vypisovat písmena, nemůžeme je tam přímo napsat. Každý znak má svůj kód:<br>
            0 má kód 0<br>
            1 má kód 1<br>
            ...<br>
            9 má kód 9<br>
            A má kód 10<br>
            B má kód 11<br>
            C má kód 12<br>
            ...
        </p>

        <p>
            Takto vypadá tedy kód, jenž má na sobě nápis <code>AHOJ</code>:
        </p>

        -->

        <p><b>Textové pole níže jde kopírovat</b></p>
        <pre><code class="language-arduino" id="allowCopy">
// Zde můžete viděl všechny způsoby, jak se dají zapisovat znaky na displej. V hodině si některé z nich popíšeme.

#include &lt;edushield.h&gt;


void setup() {
  Serial.begin(9600);
  delay(1000);
}

void loop() {

  Serial.println(&quot;BeginN...&quot;);
  Display.number(2313);
  Serial.println(&quot;EndN...&quot;);
  delay(1000);

  Display.num4(4,5,6,7);
  delay(1000);

  Display.num4(8,9,10,11);
  delay(1000);

  Display.num4(12,13,14,15);
  delay(1000);

  Display.num(1,0);
  Display.num(2,1);
  Display.num(3,2);
  Display.num(4,3);
  delay(1000);

  Serial.println(&quot;Begin...&quot;);
  Display.set4(0x80,0x80,0x80,0x80);
  Serial.println(&quot;End...&quot;);
  delay(1000);

  Serial.println(&quot;Begin2...&quot;);
  Display.set4(0x77,0x76,0x3f,0x1e);
  Serial.println(&quot;End2...&quot;);
  delay(1000);

  Serial.println(&quot;Begin2...&quot;);
  Display.set4(0b00110111,0b00000110,0b00111001,0b10000000);
  Serial.println(&quot;End2...&quot;);
  delay(1000);

}</code></pre>

        <h2>Zadání</h2>

        <p>
            Vytvořte program, který při stisknutí tlačítka zvětší číslo na displeji o jedno.
        </p>

        <p><b>
                Nezapomeňte kód odevzdat na google učebnu: <a href="https://classroom.google.com/c/NTkwMDUxNjcyMjUy/a/NjgxOTg3ODg4MzQx/details" target="_blank">https://classroom.google.com/c/NTkwMDUxNjcyMjUy/a/NjgxOTg3ODg4MzQx/details</a>
            </b></p>

        <h2>Příliš snadné?</h2>

        <p>
            Vymyslete a vytvořte, jak by se dalo implementovat také odčítání o jedno, aniž by to narušilo hlavní funkci programu.
        </p>

    </div>

</body>

</html>