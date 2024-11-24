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

        <h1 class="nadpis">Zpracování dat z JSON</h1>

        <p>
            Minule jsme si ukázali získávání dat z webu. Ukazovali jsme si to ale na datech ve velmi jednoduchém
            formátu, kdy jsme měli číslo a to bylo obsahem celé stránky. Většinou se ale na jedné stránce posílá více
            dat. Aby se od sebe dali odlišit, jsou v nějakém strojově čitelném formátu, ve většině případech v JSON.
        </p>

        <p>
            Můžeme si to ukázat například zde: <a href="http://worldtimeapi.org/api/timezone/Europe/Prague"
                target="_blank">http://worldtimeapi.org/api/timezone/Europe/Prague</a>, kde tato stránka nám ukazuje
            informace o aktuálním čase v Praze. Pro lepší zobrazení doporučuji otevírat tuto stránku v prohlížeči
            Firefox, který ta data zobrazí v tabulce. Taková data jsou ve formátu následujícím:
        </p>

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'praguetime.json', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('praguetime').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <pre class="output" id="praguetime">
Nepodařilo se načíst kód. Máte povolený JavaScript?
        </pre>

        <p>
            Aby jsme taková data mohli zpracovat, potřebujeme si dostáhnout knihovnu <code>Newtonsoft.Json</code>. Tuto
            knihovnu stáhneme následujícím způsobem:
        </p>

        <p>Na pravé liště klikneme <b>pravým tlačítkem</b> na název náš projekt.</p>
        <img src="./nuget1.png">

        <p>V zobrazeném menu klikneme na <code>Spracovat balíčky NuGet...</code>.</p>
        <img src="./nuget2.png">

        <p>
            V menu, co se nám otevřelo, klikneme na <code>Procházet</code> a do vyhledáváciho pole napíšeme
            <code>Newtonsoft.Json</code>. Po té až se nám najde, tak na něj klikneme levým tlačítem.
        </p>
        <img src="nuget3.png">

        <p>
            Po té klikneme na tlačítko <code>Nainstalovat</code>.
        </p>
        <img src="nuget4.png">

        <p>
            Zde můžete vidět kód, který tuto knihovnu využívá.
        </p>

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'timezone.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('timezone').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <pre class="vs-code" id="timezone">
Nepodařilo se načíst kód. Máte povolený JavaScript?
        </pre>

        <p>
            Tento kód nám vypíše následující výstup:
        </p>

        <pre class="output">
Dnes je 324. den v roce.
Praha je v časovém pásmu CET.
        </pre>

        <p>
            Všimněte si, že v kódu máme město jako samostatnou proměnnou. Díky tomu můžeme změnit město na jiné jen
            pomocí změny proměnné, pokud se nachází v Evropě. Zde je menší vysvětlení dalšího kódu:
        </p>

        <p>
            <code>JObject jsonObj = JsonConvert.DeserializeObject&lt;JObject&gt;(response);</code> načte výstup v proměnné <code>response</code> a rozdělí si ho na objekty. <br>
            <code>int dayOfYear = jsonObj["day_of_year"].Value&lt;int&gt;();</code> si z výstupu uloženém v <code>jsonObj</code> vyndá text označený <code>day_of_year</code> a uloží si ho jako <code>int</code>. <br>
            <code>string timezone = jsonObj["abbreviation"].Value&lt;string&gt;();</code> si z výstupu uloženém v <code>jsonObj</code> vyndá text označený <code>dabbreviation</code> a uloží si ho jako <code>string</code>. <br>
        </p>

        <h2>Zadání</h2>
        
        <p>
            Udělejte kód, který uživateli ukáže jeho IP adresu a časové pásmo města <code>Sofia</code>.
        </p>

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'sofia.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('sofia').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseniCollapse1">řešení</button>
        <div id="reseniCollapse1" class="collapse mt-3">
            <pre class="vs-code" id="sofia">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
            </pre>
        </div>

        <h2>Příliš snadné?</h2>

        <p>
            Udělejté kód, který uživateli ukáže časové pásmo jím zvoleného Evropského hlavního města. Seznam měst je zde: <a href="https://worldtimeapi.org/api/timezone/Europe/" target="_blank">https://worldtimeapi.org/api/timezone/Europe/</a>
        </p>

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'casovepasmo.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('casovepasmo').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseniCollapse2">řešení</button>
        <div id="reseniCollapse2" class="collapse mt-3">
            <pre class="vs-code" id="casovepasmo">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
            </pre>
        </div>

    </div>

    <style>
        img {
            width: 50%;
        }
    </style>

</body>

</html>