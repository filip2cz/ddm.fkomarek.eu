<!DOCTYPE html>
<html lang='cs' data-bs-theme="dark">

<head>
    <title>DDM - Filip Komárek</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <meta charset='utf-8'>
</head>

<body>
    <?php include("../../src/link.html"); ?>

    <p class="test-link">ERROR loading link.html, enable javascript please</p>

    <div class="container">

        <a href="../"><button class="btn btn-primary" type="button">Zpět</button></a>

        <h1 class="nadpis">Úvod do Arduina</h1>

        <p>
            Vrchol našeho kroužku je práce s Arduiny. Přece jen, jsme programování IOT. Budeme pracovat s Arduino
            Uno. V DDM je máme fyzicky a budeme používat program
            <a href="https://docs.arduino.cc/software/ide/#ide-v2" target="_blank">Arduino IDE V2</a>,
            doma si programování můžete zkoušet na simulátoru zde:
            <a href="https://wokwi.com/projects/new/arduino-uno"
                target="_blank">https://wokwi.com/projects/new/arduino-uno</a>.
            Arduino se neprogramuje v C#, na který jsme zvyklí, ale je programováno v upraveném jazyce C++.
        </p>

        <p>
            Jako první připojíme naše Arduino kabelem k počítači. Poté můžeme zapnout program Arduino IDE. Náš program
            by měl vypadat nějak takto:
        </p>

        <img src="ide.png" style="width: 70% !important;">

        <h2>Výběr zařízení</h2>

        <p>
            První musíme vybrat port, na kterém máme naše Arduino připojeno. To vybereme pomocí selektoru
            <code>Select Board</code> v levém horním rohu. V našem případě používáme Arduino Uno.
        </p>

        <img src="selectboard.png" style="width: 50% !important;">

        <h2>Struktura kódu</h2>

        <p>
            Jak můžete vidět na obrázku níže, náš kód obsahuje dvě části. <code>setup</code> obsahuje kód, který se
            spustí jednou na začátku. <code>loop</code> obsahuje kód, který se bude spouštět pořád dokola.
        </p>

        <img src="code.png" style="width: 50% !important;">

        <h2>Konzole</h2>
        <p>
            Naše Arduino nám podobně, jako konzolové aplikace v C#, ukazují konzoli. Můžeme ji zobrazit pomocí tlačítka
            v pravém horním rohu.
        </p>

        <img src="consolebutton.png" style="width: 35% !important;">

        <p>
            Abychom mohli do konzole posílat text, musíme Arduinu říct, že ji má použít. Tuto tzv. inicializaci konzole
            provedeme následovně:
        </p>

        <pre><code class="language-arduino">void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);
    Serial.println("Hello wolrd!");

  }

  void loop() {
    // put your main code here, to run repeatedly:

  }</code></pre>

        <p>Když se nyní podíváme do naší sériové konzole, měli bychom vidět nápis <code>Hello World!</code></p>

        <img src="helloworld.png">

        <p>
            Pokud chceme, aby se nám text <code>Hello world!</code> ukazoval donekonečka, můžeme tuto část dát do
            <code>loop</code> části.
        </p>

        <pre><code class="language-arduino">void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);
}
void loop() {
    // put your main code here, to run repeatedly:
    Serial.println("Hello world!");
}</code></pre>

        <pre class="output">
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!
Hello world!</pre>

        <p>Můžeme také rovnou například zkusit sečíst dvě čísla, kód bude vypadat následovně:</p>

        <pre><code class="language-arduino">void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  Serial.println("Hello wolrd!");
  Serial.println(6 + 1);
}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>

        <p>Při takovém kódu dostaneme následující výstup:</p>

        <pre class="output">
Hello wolrd!
7</pre>

        <p>
            Můžeme rovnou upravit kód tak, aby se nám vše ukázalo na jednom řádku. Pokud nechceme dát po vypsání další
            řádek, stačí nám použít <code>Serial.print();</code> místo <code>Serial.println();</code> .
        </p>

        <pre><code class="language-arduino">void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);
    Serial.print("Součet čísel 6 a 1 = ");
    Serial.println(6 + 1);
}

void loop() {
    // put your main code here, to run repeatedly:

}</code></pre>

        <pre class="output">Součet čísel 6 a 1 = 7</pre>

        <h2>Proměnné - int</h2>

        <p>
            Stejně jako v jiných programovacích jazycích, také zde máme proměnné. Definovat a sečíst dvě čísla můžeme
            následovně:
        </p>

        <pre><code class="language-arduino">void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);

    int cislo1 = 6;
    int cislo2 = 1;

    Serial.println(cislo1 + cislo2);
}

void loop() {
    // put your main code here, to run repeatedly:

}</code></pre>

        <pre class="output">7</pre>

        <p>
            Můžeme také sečíst dvě čísla a uložit je do proměnné.
        </p>

        <pre><code class="language-arduino">void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);

    int cislo1 = 6;
    int cislo2 = 1;
    int vysledek = cislo1 + cislo2;

    Serial.println(vysledek);
}

void loop() {
    // put your main code here, to run repeatedly:

}</code></pre>

        <pre class="output">7</pre>

        <h2>Proměnné - String</h2>

        <p>
            Můžeme si definovat text jako <code>String</code>.
        </p>

        <pre><code class="language-arduino">void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);

    String text = "Součet čísel 6 a 1 = ";

    int cislo1 = 6;
    int cislo2 = 1;
    int vysledek = cislo1 + cislo2;

    Serial.print(text);
    Serial.println(vysledek);
}

void loop() {
    // put your main code here, to run repeatedly:

}</code></pre>

        <pre class="output">Součet čísel 6 a 1 = 7</pre>

        <h2>Použití proměnné v <code>setup()</code> a <code>loop()</code> zároveň</h2>

        <p>Pokud chci použít proměnnou v <code>setup()</code> a v <code>loop()</code> zároveň, musím si ji definovat mimo tyto voidy.</p>

        <pre><code class="language-arduino">int vysledek;

void setup() {
    // put your setup code here, to run once:
    Serial.begin(9600);

    String text = "Součet čísel 6 a 1 = ";

    int cislo1 = 6;
    int cislo2 = 1;
    vysledek = cislo1 + cislo2;

    Serial.print(text);
}

void loop() {
    // put your main code here, to run repeatedly:
    Serial.println(vysledek);

}</code></pre>

        <h2>Úkol</h2>
        <p>
            Vytvořte program, který vypíše čísla od 1 do 15 bez toho, aby jste použili <code>while</code>. Použijte
            <code>void loop()</code>. Vzpomeňte si na <code>if</code> ze C#, který zde funguje stejně.
        </p>

        <!--

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseni">řešení</button>
        <div id="reseni" class="collapse mt-3">
            <pre><code class="language-arduino">int x = 1;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  if (x &lt;= 15) {
    Serial.println(x);
    x++;
  }
}</code></pre>

        <pre class="output">1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
        </pre>
        </div>

-->

    </div>

</body>

</html>