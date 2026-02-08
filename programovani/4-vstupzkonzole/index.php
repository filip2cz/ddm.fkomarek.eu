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

        <h1 class="nadpis">Vstup ze sériové konzole</h1>

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

        -->

        <p>
            Jsou případy, kdybychom z naší konzole ocenili vstup. Získat vstup správně může být trochu složitější kvůli
            tomu, jak Arduino funguje. Projdeme si společně cestou ke zjištění toho, jak vstup získat co nejlépe.
        </p>

        <pre><code class="language-arduino">void setup() {
  // spuštění sériové konzole s rychlostí 9600 baudů za sekundu
  Serial.begin(9600);

  // vytvoří proměnnou typu string jménem input
  String input;
  // čte sériovou konzoli do momentu, kdy se objeví nový řádek a vstup uloží do proměnné input
  input = Serial.readStringUntil('\n');

  // vypíše do sériové konzole proměnnou input
  Serial.println(input);
}

void loop() {

}</code></pre>

        <p>
            <code>input = Serial.readStringUntil('\n');</code> nám přečte vstup ze sériové konzole a uloží nám
            ho do
            proměnné <b>input</b>.
            <b>\n</b> značí, že má přestat číst po tom co mu pošleme celý řádek. Kdybychom zde dali například
            <b>l</b> a poté poslali text <b>Hello Wolrd!</b>, do proměnné se uloží pouze text <b>He</b>.
        </p>

        <!--
        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis1">Podrobný popis kódu</button>
        <div id="popis1" class="collapse mt-3">
            <ul>
                <li>
                    Využíváme zde pouze <code>void setup()</code>. Kód ve <code>void setup()</code> se spustí pouze
                    jednou.
                </li>

                <li>
                    <code>Serial.begin(9600);</code> nám spustí sériovou konzoli, kterou by bez tohoto řádku nešlo
                    používat. Číslo 9600 znamená, že rychlost přenosu dat bude 9600 <a href="https://cs.wikipedia.org/wiki/Baud" target="_blank">baudů za sekundu</a>.
                </li>

                <li>
                    <code>String input;</code> nám vytvoří proměnnou typu <b>String</b> se jménem <b>input</b>, jenž
                    bude obsahovat text.
                </li>

                <li>
                    <code>input = Serial.readStringUntil('\n');</code> nám přečte vstup ze sériové konzole a uloží nám
                    ho do
                    proměnné <b>input</b>.
                    <b>\n</b> značí, že má přestat číst po tom co mu pošleme celý řádek. Kdybychom zde dali například
                    <b>l</b> a poté poslali text <b>Hello Wolrd!</b>, do proměnné se uloží pouze text <b>He</b>.
                </li>

                <li>
                    <code>Serial.println(input);</code> nám vypíše obsah proměnné <b>input</b> do konzole.
                </li>
            </ul>
        </div>
        -->

        <p>
            Jak si můžete všimnout, tento kód se nechová tak, jak by jsme očekávali. Pokud do konzole zadáme text,
            nevypíše se nám do konzole. Je to z toho důvodu, že <code>Serial.readStringUntil</code> nefunguje tak, že
            počká na vstup od uživatele. Podívá se pouze, jestli v ten konkrétní moment, kdy je řádek vykonáván, není z
            konzole nějaký příchozí vstup. Můžeme si to ukázat tak, že tento kód přesuneme do <code>void loop()</code>,
            díky čemuž se nám bude neustále opakovat.
        </p>

        <pre><code class="language-arduino">void setup() {
  // spuštění sériové konzole s rychlostí 9600 baudů za sekundu
  Serial.begin(9600);
}

void loop() {
  // vytvoří proměnnou typu string jménem input
  String input;
  // čte sériovou konzoli do momentu, kdy se objeví nový řádek a vstup uloží do proměnné input
  input = Serial.readStringUntil('\n');

  // vypíše do sériové konzole proměnnou input
  Serial.println(input);
}</code></pre>

        <!--

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis2">Podrobný popis kódu</button>
        <div id="popis2" class="collapse mt-3">
            <ul>
                <li>
                    Využíváme zde <code>void setup()</code> a <code>void loop()</code>. Kód ve <code>void setup()</code>
                    se spustí pouze
                    jednou, zatím co <code>void loop()</code> se bude spouštět opakovaně.
                </li>

                <br>
                <h5>Kód ve <code>void setup()</code>:</h5>

                <li>
                    <code>Serial.begin(9600);</code> nám spustí sériovou konzoli, kterou by bez tohoto řádku nešlo
                    používat. Číslo 9600 znamená, že rychlost přenosu dat bude 9600 <a href="https://cs.wikipedia.org/wiki/Baud" target="_blank">baudů za sekundu</a>.
                </li>

                <br>
                <h5>Kód ve <code>void loop()</code>:</h5>

                <li>
                    <code>String input;</code> nám vytvoří proměnnou typu <b>String</b> se jménem <b>input</b>, jenž
                    bude obsahovat text.
                </li>

                <li>
                    <code>input = Serial.readStringUntil('\n');</code> nám přečte vstup ze sériové konzole a uloží nám
                    ho do
                    proměnné <b>input</b>.
                    <b>\n</b> značí, že má přestat číst po tom co mu pošleme celý řádek. Kdybychom zde dali například
                    <b>l</b> a poté poslali text <b>Hello Wolrd!</b>, do proměnné se uloží pouze text <b>He</b>.
                </li>

                <li>
                    <code>Serial.println(input);</code> nám vypíše obsah proměnné <b>input</b> do konzole.
                </li>
            </ul>
        </div>

        -->

        <p>
            Nyní když spustíme kód, můžeme si všimnout, že můžeme zadat vstup a on se zobrazí, akorát odjede nahoru.
            Toto je způsobeno tím, že v moment kdy je proměnná prázdná, což je kvůli tomů že ji na začátku
            <code>void loop()</code> pokaždé vytvoříme, zobrazí se prázdná proměnná a zabere nám tím nový řádek.
            Můžeme to vyřešit tím, že si sami počkáme na to, až uživatel zadá vstup.
        </p>

        <pre><code class="language-arduino">void setup() {
  // spuštění sériové konzole s rychlostí 9600 baudů za sekundu
  Serial.begin(9600);
  
  // vytvoří proměnnou typu string jménem input
  String input;

  // opakuj, dokud je délka proměnné vstup menší než 1...
  while (input.length() &lt; 1) {
    // čte sériovou konzoli do momentu, kdy se objeví nový řádek a vstup uloží do proměnné input
    input = Serial.readStringUntil('\n');
  }

  // vypíše do sériové konzole proměnnou input
  Serial.println(input);
}

void loop() {

}</code></pre>

        <p>
            Tento kód již počká na uživatele a potom co zadá text se pokračuje v běhu programu, kde je vypsání jeho
            vstupu do konzole.
        </p>

        <p>
            Pokud chceme od uživatele získat číslo, musíme od něj první získat <code>String</code> a poté ho převést na
            <code>int</code>. Provedeme to následovně:
        </p>

        <pre><code class="language-arduino">void setup() {
  // spuštění sériové konzole s rychlostí 9600 baudů za sekundu
  Serial.begin(9600);

  // vytvoří proměnnou typu string jménem input
  String input;

  // opakuj, dokud je délka proměnné vstup menší než 1...
  while (input.length() &lt; 1) {
    // čte sériovou konzoli do momentu, kdy se objeví nový řádek a vstup uloží do proměnné input
    input = Serial.readStringUntil('\n');
  }

  // převede string input na číslo typu int, vytvoří proměnnou cislo typu int a uloží do něj to číslo
  int cislo = input.toInt();
  // vypíše do konzole výsledek cislo + 2
  Serial.println(cislo + 2);
}

void loop() {
    
}</code></pre>

        <h2>Zadání:</h2>

        <p>
            Vytvořte kalkulačku, která si od uživatele vezme dvě čísla a poté s nimi provede operaci, kterou si uživatel
            vybere (sčítání, odčítání, násobení, dělení).
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