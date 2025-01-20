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

        <p class="test-link">ERROR: načtení souboru link.html bylo neúspěšné</p>

        <h1 class="nadpis">Práce s LED diodou</h1>

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

        <h2><a href="https://wokwi.com/projects/new/arduino-uno" target="_blank">Simulátor</a></h2>

        <p>
            Dneska budeme pracovat v simulátoru.
            Zkusíme připojit LED diodu, což je vlastně taková "žárovička". Pokud jste v simulátoru, LED diodu můžete
            přidat pomocí tlačítka <code>+</code>. Zapojení bude vypadat takto:
        </p>

        <img src="zapojeni1.png" style="width: auto;">

        <p>
            Pokud chceme naši diodu zapnout, musíme si první definovat v kódu, kde jsme naši diodu zapojili. Uděláme to
            pomocí <code>#define</code>:
        </p>

        <pre><code class="language-arduino">#define led_red 8

void setup() {
  // put your setup code here, to run once:

}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>

        <p>
            Poté ji už můžeme rozsvítit při zapnutí:
        </p>

        <pre><code class="language-arduino">#define led_red 8

void setup() {
  // put your setup code here, to run once:
  digitalWrite(led_red, HIGH);
}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>

        <p>
            Pokud chceme, aby naše dioda blikala, můžeme umístit do <code>loop()</code> kód pro rozsvícení diody, delay
            na nějaký čas a zhasnutí diody. <code>delay(500)</code> nám pozastaví kód na 500 ms, což je půl sekundy (500
            milisekund).
        </p>

        <pre><code class="language-arduino">#define led_red 8

void setup() {
  // put your setup code here, to run once:
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(led_red, HIGH);

  delay(500);

  digitalWrite(led_red, LOW);

  delay(500);
}</code></pre>

        <p>
            Můžeme také do obvodu připojit více diod. Tyto diody budou sdílet <code>GND</code> port, ale budou mít každá
            vlastní číselný port. Na barvách kabelů nezáleží a jsou zde pouze pro usnadnění chápání.
        </p>

        <img src="zapojeni-dve-diody.png" style="width: auto;">

        <p>
            Tuto novou diodu si musíme také definovat a poté ji můžeme používat. V tomto příkladu je zapojena do portu
            číslo 7 a byla pojmenována <code>led_blue</code>. V tomto příkladu se nám diody v blikání střídají.
        </p>

        <pre><code class="language-arduino">#define led_red 8
#define led_blue 7

void setup() {
  // put your setup code here, to run once:
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(led_red, HIGH);
  digitalWrite(led_blue, LOW);

  delay(500);

  digitalWrite(led_red, LOW);
  digitalWrite(led_blue, HIGH);

  delay(500);
}</code></pre>

        <h2>Úkol</h2>

        <p>
            Vytvořte program, který si od uživatele vezme číslo. Pokud je číslo menší než 10, bude svítit modrá dioda.
            Pokud bude větší nebo rovno 10, rozsvítí se červená dioda.
        </p>

        <h2>Úkol 2</h2>

        <p>
            Vytvořte model semaforu, který bude obsahovat tři barvy, které se budou pravidelně střídat tak jako na
            semaforu. K tomu tam bude malý semafor pro chodce, který pustí chodce pokud budou mít auta červenou.
        </p>

    </div>

</body>

</html>