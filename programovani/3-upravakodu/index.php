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

        <h1 class="nadpis">Procvičování - úprava kódu</h1>

        <p>
            Dnes se zaměříme na procvičování. Níže je několik zadání, které se skládají z kódu a zadání, jenž je
            většinou nějak upravit nebo opravit kód. Pokud nějakou úlohu nebudete zvládat, nebojte si říct o pomoc a
            nebo přeskočte na další zadání.
        </p>

        <ol>
            <h2>
                <li>Čísla</li>
            </h2>

            <p>
                Upravte následující kód tak, aby se součet x a y rovnal 100.
            </p>

            <pre><code class="language-csharp" id="allowCopy">using System;

class Program
{
    static void Main()
    {
        int x = 57;
        int y = 36;

        Console.WriteLine(x + y);

        Console.ReadLine();
    }
}</code></pre>

            <!--

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '1-solution.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('1-solution').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <button class="btn btn-primary" data-bs-toggle="collapse"
                data-bs-target="#reseni-1-solution">řešení</button>
            <div id="reseni-1-solution" class="collapse mt-3">
                <pre class="vs-code" id="1-solution">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>
            </div>

            -->

            <h2>
                <li>Špatný typ proměnné</li>
            </h2>

            <p>
                Následující kód nejde spustit. Opravte kód tak, aby fungoval, ale nezměnila se čísla co sčítáme.
                Nápověda: <code>int</code> není to co chceme použít.
            </p>

            <pre><code class="language-csharp" id="allowCopy">using System;

class Program
{
    static void Main()
    {
        int x = 56.4;
        int y = 43.6;

        Console.WriteLine(x + y);

        Console.ReadLine();
    }
}</code></pre>

            <!--

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '2-solution.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('2-solution').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <button class="btn btn-primary" data-bs-toggle="collapse"
                data-bs-target="#reseni-2-solution">řešení</button>
            <div id="reseni-2-solution" class="collapse mt-3">
                <pre class="vs-code" id="2-solution">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>
            </div>

            -->

            <h2>
                <li>Rozbitý IF</li>
            </h2>

            <p>
                Když se spustí následující kód, nic se nevypíše. Upravte <code>if</code> tak, aby se obsah spustil.
            </p>

            <pre><code class="language-csharp" id="allowCopy">using System;

class Program
{
    static void Main()
    {
        if (5 == 7)
        {
            Console.WriteLine("ANO");
        }

        Console.ReadLine();
    }
}</code></pre>

            <!--

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '3-solution.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('3-solution').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <button class="btn btn-primary" data-bs-toggle="collapse"
                data-bs-target="#reseni-3-solution">řešení</button>
            <div id="reseni-3-solution" class="collapse mt-3">
                <pre class="vs-code" id="3-solution">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>
            </div>

            -->

            <h2>
                <li>Čísla od 1 do 99</li>
            </h2>

            <p>
                Upravte kód tak, aby se ukázali všechna čísla od 0 do 99
            </p>

            <pre><code class="language-csharp" id="allowCopy">using System;

class Program
{
    static void Main()
    {
        int x = 0;
        while (x < 100)
        {
            Console.WriteLine(x);
            x += 2;
        }

        Console.ReadLine();
    }
}</code></pre>

            <!--

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '4-solution.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('4-solution').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '4-solution2.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('4-solution2').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <button class="btn btn-primary" data-bs-toggle="collapse"
                data-bs-target="#reseni-4-solution">řešení</button>
            <div id="reseni-4-solution" class="collapse mt-4">
                <pre class="vs-code" id="4-solution">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>

                <p>nebo ještě lépe:</p>

                <pre class="vs-code" id="4-solution2">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>
            </div>

            -->

            <h2>
                <li>Násobící program</li>
            </h2>

            <p>
                Vytvořte program, který se bude chovat tak, že mu uživatel zadá číslo a dostane výstup. Pokuste se zjistit, co program dělá.
            </p>

            <p>Vzorový výstup 1:</p>
            <pre class="output">
Zadejte číslo: 5
Výsledek: 10
            </pre>

            <p>Vzorový výstup 2:</p>
            <pre class="output">
Zadejte číslo: 3,7
Výsledek: 7,4
            </pre>

            <!--

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '5-solution.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('5-solution').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <button class="btn btn-primary" data-bs-toggle="collapse"
                data-bs-target="#reseni-5-solution">řešení</button>
            <div id="reseni-5-solution" class="collapse mt-3">
                <pre class="vs-code" id="5-solution">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>
            </div>

            -->

            <h2>
                <li>Záhadná kalkulačka</li>
            </h2>

            <p>
                Vytvořte program, který se bude chovat tak, že mu uživatel zadá číslo a dostane výstup. Pokuste se zjistit, co program dělá.
            </p>

            <p>Vzorový výstup 1:</p>
            <pre class="output">
Zadejte a: 5
Zadejte b: 3
Obvod: 16
Obsah: 15
            </pre>

            <p>Vzorový výstup 2:</p>
            <pre class="output">
Zadejte a: 3,4
Zadejte b: 5,6
Obvod: 18
Obsah: 19,04
            </pre>

            <!--

            <script>
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '6-solution.cs', true);
                xhr.onreadystatechange = function () {
                    if (this.readyState !== 4) return;
                    if (this.status !== 200) return; // or whatever error handling you want
                    document.getElementById('6-solution').innerHTML = this.responseText;
                };
                xhr.send();
            </script>

            <button class="btn btn-primary" data-bs-toggle="collapse"
                data-bs-target="#reseni-6-solution">řešení</button>
            <div id="reseni-6-solution" class="collapse mt-3">
                <pre class="vs-code" id="6-solution">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
                </pre>
            </div>

            -->

        </ol>
    </div>

</body>

</html>