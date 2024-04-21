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

        <h1 class="nadpis">Hledání chyb</h1>

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
            V následujících kódech se nacházejí chyby. Najděte chyby a opravte je tak, aby kód fungoval. Pokud si
            nebudete vědět rady, použijte materiály z předchozích hodin.
        </p>

        <p>
            Opravený kód vkládejte do následujícího zadání na Google učebně:
        </p>

        <ol>
            <li>
                <pre><code class="language-arduino">// V n&aacute;sleduj&iacute;c&iacute;m k&oacute;du se nach&aacute;z&iacute; 2 chyby
void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600)
  Serial.println(Hello world!);
}

void loop() {
  // put your main code here, to run repeatedly:
}
// Oček&aacute;van&aacute; funkce k&oacute;du:
// Vyp&iacute;&scaron;e do konzole text &quot;Hello wolrd!&quot;</code></pre>
            </li>

            <li>
                <pre><code class="language-arduino">// V n&aacute;sleduj&iacute;c&iacute;m k&oacute;du se nach&aacute;z&iacute; 1 chyba
void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  int x = 9;
  if (x = 10) {
    Serial.println(&quot;Proměnn&aacute; x je č&iacute;slo 10&quot;);
  }
  else {
    Serial.println(&quot;Proměnn&aacute; x nen&iacute; č&iacute;slo 10&quot;);
  }
}

void loop() {
  // put your main code here, to run repeatedly:
}
// Oček&aacute;van&aacute; funkce k&oacute;du:
// Vyp&iacute;&scaron;e, jestli proměnn&aacute; x je nebo nen&iacute; č&iacute;slo 10.</code></pre>
            </li>

            <li>
                <pre><code class="language-arduino">// V n&aacute;sleduj&iacute;c&iacute;m k&oacute;du se nach&aacute;z&iacute; 2 chyby
void setup() {
  // put your setup code here, to run once:
  Serial.start(9600);
  int x = 5;
  while (x &lt; 10){
    Serial.println(x);
    x+;
  }
}

void loop() {
  // put your main code here, to run repeatedly:

}

// očekávaný výstup kódu:
// vypsání čísel od 5 do 9</code></pre>

            </li>

            <li>
                <pre><code class="language-arduino">// V n&aacute;sleduj&iacute;c&iacute;m k&oacute;du se nach&aacute;z&iacute; 4 chyby
void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  string input;
  while (input.length &lt; 1) (
    input = Serial.readStringUntil('\n');
  )
  Serial.WriteLine(input);

}

void loop() {
  // put your main code here, to run repeatedly:

}
// očekávaná funce kódu:
// kód si vezme vstup od uživatele z konzole a poté ho vypíše</code></pre>
            </li>

            <li>
                <pre><code class="language-arduino">// V n&aacute;sleduj&iacute;c&iacute;m k&oacute;du se nach&aacute;z&iacute; 4 chyby
#define led_yellow 17
#define led_red 16
void setup() {
  // put your setup code here, to run once:
  pinMode(led_yellow, OUTPUT);
  pinMode(led_red, OUTPUT);
  digitalWrite(led_red, BIG);
  digitalWrite(led_yellow, BIG);
}

void loop() {
  // put your main code here, to run repeatedly:
}
// Oček&aacute;van&aacute; funkce k&oacute;du:
// Tento k&oacute;d by měl rozsv&iacute;tit žlutou a červenou led diodu na pinech 17 a 16</code></pre>
            </li>

            <li>
                <pre><code class="language-arduino">// V n&aacute;sleduj&iacute;c&iacute;m k&oacute;du se nach&aacute;z&iacute; 3 chyby
#define BUTTON 3
int lastState = 1;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(BUTTON,INPUT_PULLUP);
}

void loop() {
  // put your main code here, to run repeatedly:
  int b = digitalRead(BUTTON);

  if (lastState != b){
    if (b == 1) {
      Serial.println(&quot;Tlač&iacute;tko bylo stisknuto&quot;);
    }
    else if (b == 2) {
      Serial.println(&quot;Tlač&iacute;tko bylo pu&scaron;těno&quot;);
    }
    lastState = b;
  }
}
// oček&aacute;van&yacute; v&yacute;stup k&oacute;du:
// Vyp&iacute;&scaron;e do konzole změnu stavu tlač&iacute;tka na horn&iacute;m d&iacute;lu Arduina, jenž je připojen&eacute; na pinu 2</code></pre>
            </li>

        </ol>

        <h2>Máte již hotovo?</h2>

        <p>
            Projděte si zadání na Google učebně, spousta z vás tam nemá něco hotového: <a href="https://classroom.google.com/w/NTkwMDUxNjcyMjUy/t/all" target="_blank">https://classroom.google.com/w/NTkwMDUxNjcyMjUy/t/all</a>
        </p>

    </div>

</body>

</html>