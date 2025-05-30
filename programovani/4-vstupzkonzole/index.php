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
  // put your setup code here, to run once:
  Serial.begin(9600);

  String input;
  input = Serial.readStringUntil('\n');

  Serial.println(input);
}

void loop() {
  // put your main code here, to run repeatedly:

}</code></pre>

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

        <p>
            Jak si můžete všimnout, tento kód se nechová tak, jak by jsme očekávali. Pokud do konzole zadáme text,
            nevypíše se nám do konzole. Je to z toho důvodu, že <code>Serial.readStringUntil</code> nefunguje tak, že
            počká na vstup od uživatele. Podívá se pouze, jestli v ten konkrétní moment, kdy je řádek vykonáván, není z
            konzole nějaký příchozí vstup. Můžeme si to ukázat tak, že tento kód přesuneme do <code>void loop()</code>,
            díky čemuž se nám bude neustále opakovat.
        </p>

        <pre><code class="language-arduino">void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  String input;
  input = Serial.readStringUntil('\n');

  Serial.println(input);
}</code></pre>

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

        <p>
            Nyní když spustíme kód, můžeme si všimnout, že můžeme zadat vstup a on se zobrazí, akorát odjede nahoru.
            Toto je způsobeno tím, že v moment kdy je proměnná prázdná, což je kvůli tomů že ji na začátku
            <code>void loop()</code> pokaždé vytvoříme, zobrazí se prázdná proměnná a zabere nám tím nový řádek.
            Můžeme to vyřešit tím, že si sami počkáme na to, až uživatel zadá vstup.
        </p>

        <pre><code class="language-arduino">void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  String input;
  while (input.length() &lt; 1) {
    input = Serial.readStringUntil('\n');
  }
  Serial.println(input);
}</code></pre>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#popis3">Podrobný popis kódu</button>
        <div id="popis3" class="collapse mt-3">
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
                    <code>while (input.length() &lt; 1)</code> nám bude běžet do doby, než bude vstup od uživatele větší
                    něž 1. Jedničku jsem zvolil proto, že i samotný ENTER který dáme na konci se počítá jako jeden znak.
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

        <p>
            Tento kód již počká na uživatele a potom co zadá text se pokračuje v běhu programu, kde je vypsání jeho
            vstupu do konzole.
        </p>

        <p>
            Pokud chceme od uživatele získat číslo, musíme od něj první získat <code>String</code> a poté ho převést na
            <code>int</code>. Provedeme to následovně:
        </p>

        <pre><code class="language-arduino">void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  String input;
  while (input.length() &lt; 1) {
    input = Serial.readStringUntil('\n');
  }
  int cislo = input.toInt();
  Serial.println(cislo + 2);
}</code></pre>

        <h2>Zadání:</h2>

        <p>
            Vytvořte kalkulačku, která si od uživatele vezme dvě čísla a poté s nimi provede operaci, kterou si uživatel
            vybere (sčítání, odčítání, násobení, dělení).
        </p>

        <p>
            Nezapomeňte odevzdat váš kód na Google Classroom: <a
                href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/Njg3NzQ5NTEzNTI1/details">https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/Njg3NzQ5NTEzNTI1/details</a>
        </p>

    </div>

</body>

</html>