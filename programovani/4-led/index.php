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

        <h1 class="nadpis">LED DIODA</h1>

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

        <pre><code class="language-arduino">//nastavíme, že červená led je na pinu číslo 8
#define led_red 8

void setup() {
  // put your setup code here, to run once:

}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>

        <p>
            Poté ji už můžeme rozsvítit při zapnutí:
        </p>

        <pre><code class="language-arduino">//nastavíme, že červená led je na pinu číslo 8
#define led_red 8

void setup() {
  // nastavíme pin s diodou jako OUTPUT
  pinMode(led_red,OUTPUT);

  // pošleme do pinu s diodou elektřinu
  digitalWrite(led_red, HIGH);
}

void loop() {

}</code></pre>

        <p>
            Pokud chceme, aby naše dioda blikala, můžeme umístit do <code>loop()</code> kód pro rozsvícení diody, delay
            na nějaký čas a zhasnutí diody. <code>delay(500)</code> nám pozastaví kód na 500 ms, což je půl sekundy (500
            milisekund).
        </p>

        <pre><code class="language-arduino">//nastavíme, že červená led je na pinu číslo 8
#define led_red 8

void setup() {
  // nastavíme pin s diodou jako OUTPUT
  pinMode(led_red,OUTPUT);
}

void loop() {
  // pošleme do pinu s diodou elektřinu
  digitalWrite(led_red, HIGH);

  // počkáme 500 ms = 0,5 sekundy
  delay(500);

  // přestaneme posílat elektřinu do pinu s diodou
  digitalWrite(led_red, LOW);

  // počkáme 500 ms = 0,5 sekundy
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

        <pre><code class="language-arduino">//nastavíme, že červená led je na pinu číslo 8
#define led_red 8

//nastavíme, že modrá led je na pinu číslo 7
#define led_blue 7

void setup() {
  // nastavíme pin s červenou diodou jako OUTPUT
  pinMode(led_red,OUTPUT);

  // nastavíme pin s modrou diodou jako OUTPUT
  pinMode(led_blue,OUTPUT);
}

void loop() {
  // pošleme do pinu s červenou diodou elektřinu
  digitalWrite(led_red, HIGH);
  // přestaneme posílat elektřinu do pinu s modrou diodou
  digitalWrite(led_blue, LOW);

  // počkáme 500 ms = 0,5 sekundy
  delay(500);

  // přestaneme posílat elektřinu do pinu s červenou diodou
  digitalWrite(led_red, LOW);
  // pošleme do pinu s modrou diodou elektřinu
  digitalWrite(led_blue, HIGH);

  // počkáme 500 ms = 0,5 sekundy
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

    </div>

</body>

</html>