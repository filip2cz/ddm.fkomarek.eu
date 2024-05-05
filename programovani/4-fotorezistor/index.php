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

        <h1 class="nadpis">Fotorezistor</h1>

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
            V dnešní lekci se podíváme na fotorezistor. Fotorezistor je součástka, která nám umožní zjistit množství světla v okolí. V našem případě funguje tak, že čím nižší světlo je v okolí, tím vyšší číslo nám součástka pošle.
        </p>

        <p>
            Fotorezistor je připojen přes analogový pin (v našem případě <code>A0</code>). Díky tomu nám může posílat číslo, které reprezentuje množství světla.
        </p>

        <p>
            V následujícím kódu si od našeho fotorezistoru získáme každých 200 milisekund číslo a to vypíšeme do konzole:
        </p>

        <pre><code class="language-arduino">#define photorezistor A0 // Definov&aacute;n&iacute; toho, že fotorezistor m&aacute;me na pinu A0

void setup() {
  Serial.begin(9600); // Spu&scaron;těn&iacute; konzole s rychlost&iacute; 9600 baudů
  pinMode(photorezistor, INPUT); // Nastaven&iacute; pinu s fotorezistorem jako vstup (Arduino bude č&iacute;st z tohoto pinu)
}

void loop() {
  int light = analogRead(photorezistor); // Přečtěn&iacute; v&yacute;stupu z fotorezistoru a uložen&iacute; do proměnn&eacute; typu int (č&iacute;slo)
  Serial.print(&quot;světlo: &quot;); // Vyps&aacute;n&iacute; textu &quot;světlo: &quot;
  Serial.println(light); // Vyps&aacute;n&iacute; hodnoty proměnn&eacute; light a ukončen&iacute; ř&aacute;dku

  delay(200); // Vyčk&aacute;n&iacute; 200 milisekund
}
</code></pre>

    <h2>Zadání</h2>

    <p>
        Nyní, s těmito znalostmi, udělejte program, který rozsvítí led diody na EduShieldu (zelená je na pinu 13, žlutá na pinu 17, červená na pinu 16) tak, že pokud zakryjeme fotorezistor, bude Edushield svítit červeně, pokud bude mít trochu světla, bude svítít žlutě a pokud na něj přímo posvítíte (například telefonem), bude svítit zeleně.
    </p>

    <p>
        <b>
            Nezapomeňte váš kód odevzdat do Google učebny: <a href="https://classroom.google.com/c/NTkwMDUxNjcyMjUy/a/Njc3OTY0NTk5NDAw/details" target="_blank">https://classroom.google.com/c/NTkwMDUxNjcyMjUy/a/Njc3OTY0NTk5NDAw/details</a>
        </b>
    </p>

    </div>

</body>

</html>