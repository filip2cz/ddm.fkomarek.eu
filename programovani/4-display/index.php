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

        <p>
            Dnešní hodina bude částečně založena na tom, abychom se naučili sami pochopit, co a jak.
            Níže je kód, který na displej vypisuje spoustu věcí. Zkuste pomocí něho vymyslet, jak vypisovat čísla.
        </p>

        <p><b>Textové pole níže jde kopírovat</b></p>
        <pre><code class="language-arduino" id="allowCopy">#include &lt;edushield.h&gt;

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
                Nezapomeňte kód odevzdat na google učebnu: <a href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzU2MjkyMzc5OTg4/details" target="_blank">https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzU2MjkyMzc5OTg4/details</a>
            </b></p>

        <h2>Příliš snadné?</h2>

        <p>
            Vymyslete a vytvořte, jak by se dalo implementovat také odčítání o jedno, aniž by to narušilo hlavní funkci programu.
        </p>

        <h2>Nápověda k písmenkům</h2>

        <pre><code class="language-arduino">Display.set4(0b00110111,0b00000110,0b00111001,0b10000000);</code></pre>

    <img src="https://raw.githubusercontent.com/arduino-edushield/edushield/refs/heads/master/extras/learning/course/cz/img/7segment.png" style=" max-width: 30% !important;">

    </div>

</body>

</html>