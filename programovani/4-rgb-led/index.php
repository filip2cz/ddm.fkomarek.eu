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

        <h1 class="nadpis">RGB LED dioda</h1>

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
            V minulých hodinách jsme si ukázali práci s jednobarevnými LED diodami. Že byli jednobarevné píšu z toho
            důvodu, že na našem Arduinu s EduShieldem se nachází také vícebarevná LED dioda. Tato dioda je připojena ke
            třem pinům, kde na každém definujeme jednu barvu z RGB (+ jeden pin k uzemnění. Celkem tedy 4, ale s tím
            čtvrtým neinteragujeme).
        </p>

        <p>
            Začněme jednoduchým kódem, kdy na naší RGB diodě rozsvítíme jen červenou:
        </p>

        <pre><code class="language-arduino">#define rgb_red 9
#define rgb_green 5
#define rgb_blue 6

void setup() {
  // put your setup code here, to run once:

  // Nastaven&iacute; odporů na diodě
  pinMode(rgb_red,OUTPUT);
  pinMode(rgb_green,OUTPUT);
  pinMode(rgb_blue,OUTPUT);

  // Nastaven&iacute; barvy
  digitalWrite(rgb_red, LOW);
  digitalWrite(rgb_green, HIGH);
  digitalWrite(rgb_blue, HIGH);
}

void loop() {
  // put your main code here, to run repeatedly:
}</code></pre>

        <p>
            Pokud chceme rozsvítit zelenou, můžeme nastavit <code>rgb_green</code> na <code>LOW</code> a všechny ostatní barvy (<code>rgb_red</code> a <code>rgb_blue</code>) nastavit na <code>HIGH</code>.
        </p>

        <pre><code class="language-arduino">#define rgb_red 9
#define rgb_green 5
#define rgb_blue 6

void setup() {
  // put your setup code here, to run once:

  // Nastaven&iacute; odporů na diodě
  pinMode(rgb_red,OUTPUT);
  pinMode(rgb_green,OUTPUT);
  pinMode(rgb_blue,OUTPUT);

  // Nastaven&iacute; barvy
  digitalWrite(rgb_red, HIGH);
  digitalWrite(rgb_green, LOW);
  digitalWrite(rgb_blue, HIGH);
}

void loop() {
  // put your main code here, to run repeatedly:
}</code></pre>

        <h2>Zadání: vytvořte kód, který bude na diodě střídat barvy</h2>

        <p>
            Vytvořte program, který bude po nějakém časovém intervale (například vteřina) střídat všechny barvy.
        </p>

        <p>
            Nápověda: Pro kód ohledně nastavování barev budete chtít použít <code>void loop()</code>.<br>
            Nápověda 2: Pokud chcete běh kódu na chvíli pozastavit, využijte <code>delay()</code>, například <code>delay(500);</code> pozastaví kód na 500 ms = polovina sekundy.
        </p>

        <p>
            Nezapomeňte odevzdat váš kód do Google Classroom: <a href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzQ4MjY5NDg0MTM1/details" target="_blank">https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/NzQ4MjY5NDg0MTM1/details</a>
        </p>

        <!--

        <h2>Jak definujeme barvy v RGB</h2>
        <p>
            Jak možná víte ze školy, každá barva je složená ze tří základních barev: červená, zelená a modrá.<br>
            Pomocí tohoto můžeme definovat, jak moc se má která barva projevit na RGB LED diodě. Používáme k tomu
            hodnoty od 0 (nejvíce barvy) do 255 (nejméně barvy). Pokud jste někdy pracovali s HTML, zde probíhá tvorba
            barvy obráceně (html rgb 200 128 0 = arduinu rgb 55 127 255)
        </p>

        -->

        <h2>Příliš snadné?</h2>

        <p>
            V jedné z minulých hodin jsme si vytvořili semafor. Upravte ten semafor tak, aby fungoval s touto RGB LED diodou.
        </p>

    </div>

</body>

</html>