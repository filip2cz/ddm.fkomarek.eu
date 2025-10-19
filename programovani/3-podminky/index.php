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

        <h1 class="nadpis">Podmínky</h1>

        <div class="alert alert-warning d-md-none">
            Upozornění: Tato stránka není optimalizována pro mobilní telefony a pro zařízení
            s menší obrazovkou. Některé prvky mohou být příliš malé nebo jinak nefunkční.
        </div>

        <p>Věc, která je naprosto základní pro programování jsou podmínky.</p>

        <p>
            Podmínka je věc, která se vyhodnotí na pravda nebo nepravda a podle toho se provede nějaký kód.
            V C# se to dělá pomocí <code>if</code> a <code>else</code>.
            Ukážeme si to na následujících příkladech:
        </p>

        <p>Tento kód získá věk uživatele a poté zjistí, jestli je mladší nebo starší 18 let:</p>

        <pre><code class="language-csharp">Console.Write("Zadejte váš věk: ");
int cislo = Convert.ToInt32(Console.ReadLine());
if (cislo >= 18)
{
    Console.WriteLine("Je vám více než 18 let.");
}
else
{
    Console.WriteLine("Jste mladší 18 let.");
}
Console.ReadLine();</code></pre>

        <p>Tento kód se vás zeptá na heslo a poté porovná pomocí podmínek heslo se dvoumi proměnnými:</p>

        <pre><code class="language-csharp">string hesloHonza = "Mojeheslo1";
string hesloFilip = "password1234";

Console.Write("Zadejte heslo: ");
string hesloUzivatel = Console.ReadLine();

if (hesloUzivatel == hesloHonza)
{
    Console.WriteLine("Vítej Honzo.");
}
else if (hesloUzivatel == hesloFilip)
{
    Console.WriteLine("Vítej Filipe.");
}
else
{
    Console.WriteLine("Špatné heslo!");
}
Console.ReadLine();</code></pre>

        <h2>Zadání</h2>

        <p>
            Vytvořte kalkulačku, která se zeptá uživatele na dvě čísla a poté se zeptá,
            jestli je chtějí sečíst, odečíst, vynásobit nebo vydělit. Příklad výstupu:
        </p>

        <pre class="output">
Zadejte první číslo: 5
Zadejte druhé číslo: 4
Zadejte operaci: +
Součet čísel 5 a 4 je 9.
        </pre>

        <p>Pro připomenutí: sčítání, odčítání, násobení, dělení se dělá následujícím způsobem:</p>

        <pre><code class="language-csharp">int scitani = cislo1 + cislo2;
int odcitani = cislo1 - cislo2;
int nasobeni = cislo1 * cislo2;
int deleni = cislo1 / cislo2;</code></pre>

        <p>Pokud budete mít jakékoliv otázky nebo problémy, nebojte se na mě obrátit.</p>

        <!--

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'kalkulacka.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('kalkulacka').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseniCollapse1">řešení</button>
        <div id="reseniCollapse1" class="collapse mt-3">
            <pre class="vs-code" id="kalkulacka">
Nepodařilo se načíst kód. Máte povolený JavaScript?
            </pre>
        </div>

        -->

        <p>Pokud máte hotovo, zkuste ošetřit, aby nešlo dělit nulou.</p>

        <h2>Nezapomeňte odevzdat váš kód do Google Učebny: <a href="https://classroom.google.com/c/ODA4MjE5ODMxODM0/a/ODE1ODIzODQzNzUz/details" target="_blank">https://classroom.google.com/c/ODA4MjE5ODMxODM0/a/ODE1ODIzODQzNzUz/details</a></h2>

        <!--

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'kalkulacka2.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('kalkulacka2').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseniCollapse2">řešení</button>
        <div id="reseniCollapse2" class="collapse mt-3">
            <pre class="vs-code" id="kalkulacka2">
Nepodařilo se načíst kód. Máte povolený JavaScript?
            </pre>
        </div>

        -->

        <h2>Příliš snadné?</h2>
        <p>
            Doplňující úloha je dneska logického charakteru.
            Můžete ji dělat v jakémkoliv jazyku chcete, pokud preferujete něco jiného než C#,
            ale možná vám nebudu poté schopen pomoct s řešením nebo s problémy, pokud si vyberete něco co neznám.<br><br>

            Máte dvě číselné proměnné X a Y. Úkol je prohodit je bez toho, aby jste na to použili nějakou existující
            funkci, nebo aby jste použili jinou proměnnou, ukládání do
            souboru, nebo jakýkoliv jiný způsob ukládání dat kamkoliv a jakkoliv, než jsou tyto dvě proměnné. Řešení je
            čistě matematická záležitost.<br><br>

            Jo a negooglete si to prosím, zkuste na to přijít.
        </p>

        <!--
        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'prohozeni.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('prohozeni').innerHTML = this.responseText;
            };
            xhr.send();
        </script>
        -->

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseniCollapse3">řešení</button>
        <div id="reseniCollapse3" class="collapse mt-3">
            <pre class="vs-code" id="prohozeni">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
            </pre>
        </div>

    </div>

</body>

</html>