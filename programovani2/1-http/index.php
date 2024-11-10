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

        <h1 class="nadpis">HTTP pomocí C#</h1>

        <div class="alert alert-warning d-md-none">
            Upozornění: Tato stránka není optimalizována pro mobilní telefony a pro zařízení
            s menší obrazovkou. Některé prvky mohou být příliš malé nebo jinak nefunkční.
        </div>

        <p>
            V této kapitole si ukážeme síťování v C# pomocí HTTP nebo HTTPS protokolu. Hodí se nám to, pokud potřebujeme
            získávat nějaká data
            z internetu, většinou data co se mohou měnit.
        </p>

        <div class="alert alert-primary" role="alert">
            <b>Co je to HTTP a HTTPS protokol?</b><br>
            HTTP je protokol, který slouží k načítání webových stránek. Většina uživatelů se s ním setká, když načítají
            webovou stránku. Techničtější uživatelé se s ním mohou setkat, pokud chtějí použít nějaké API, což je
            jednoduchá stránka, co říká programům nějaká data ve strojovém formátu, například <a
                href="https://www.timeapi.io/api/time/current/zone?timeZone=Europe%2FPrague" target="_blank">TimeAPI</a> vám ukáže
            aktuální čas v Praze, a další informace, ve strojovém formátu. HTTPS protokol je šifrovaná verze HTTP, pro naše účely není třeba
            znát podrobnosti o tomto šifrování.
        </div>

        <p>
            Kód, který nám stáhne obsah nějakého odkazu může vypadat například následujícím způsobem:
        </p>

        <pre><code class="language-csharp">string text;
int cislo;
HttpClient client = new HttpClient();
text = client.GetStringAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver").Result;
cislo = int.Parse(text);
Console.WriteLine(cislo - 1);</code></pre>

        <div class="alert alert-warning" role="alert">
            Pokud vám kód nefunguje, přesvěčte se, že máte na začátku vašeho kódu (v horní oblasti na prvních několika
            řádcích) kód <code>using System.Net.Http;</code>
        </div>

        <p>
            Tento kód dělá následující věci:<br>
            <code>int latestVersion;</code> vytvoří proměnou typu int s názvem latestVersion<br>
            <code>HttpClient client = new HttpClient();</code> tímto způsobem spustíme webový client obsažený v C#, jenž
            nám umožní
            stahovat data z internetu pomocí http nebo https protokolu.
            Instanci tohoto webového clientu, kterou jsme si vytvořili, jsme pojmenovali <code>client</code>, může se
            jmenovat dle vašeho uvážení.<br>
            <code>text = client.GetStringAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver").Result;</code>
            uloží do proměnné <code>text</code> obsah stránky.<br>
            <code>cislo = int.Parse(text);</code> převede již dříve stažený obsah stránky, neboli proměnnou
            <code>text</code> do int, abychom s ním mohli počítat jako s číslem.<br>
            <code>Console.WriteLine(cislo - 1);</code> nakonec vypíšeme číslo, které jsme stáhli z internetu, ale o 1 menší.
        </p>

        <p>
            Pro úsporu textu se dá tento kód zkrátit následujícím způsobem:
        </p>

        <pre><code class="language-csharp">HttpClient client = new HttpClient();
int cislo = int.Parse(client.GetStringAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver").Result);
Console.WriteLine(cislo - 1);</code></pre>

        <h2>Zadání</h2>
        <p>
            Zkuste ze stránky <a
                href="https://www.random.org/integers/?num=1&min=10&max=60&col=1&base=10&format=plain&rnd=new"
                target="_blank">https://www.random.org/integers/?num=1&min=10&max=60&col=1&base=10&format=plain&rnd=new</a>
            stáhnout číslo a po té ho vydělit číslem ze stránky <a
                href="https://www.random.org/integers/?num=1&min=1&max=6&col=1&base=10&format=plain&rnd=new"
                target="_blank">https://www.random.org/integers/?num=1&min=1&max=6&col=1&base=10&format=plain&rnd=new</a>.
            Nezapomeňte, že výsledek nemusí být celé číslo, takže je vhodné použít jiný datový typ, než int.
        </p>

        <!--

        <h2>Příliš snadné?</h2>
        <p>
            Doplňující úloha je dneska logického charakteru.
            Můžete ji dělat v jakémkoliv jazyku chcete, pokud preferujete něco jiného než C#,
            ale možná vám nebudu poté schopen pomoct s řešením nebo s problémy, pokud si vyberete něco co neznám.

            Máte dvě číselné proměnné X a Y. Úkol je prohodit je bez toho, aby jste na to použili nějakou existující
            funkci, nebo aby jste použili jinou proměnnou, ukládání do
            souboru, nebo jakýkoliv jiný způsob ukládání dat kamkoliv a jakkoliv, než jsou tyto dvě proměnné. Řešení je
            čistě matematická záležitost.
        </p>

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

        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#reseniCollapse3">řešení</button>
        <div id="reseniCollapse3" class="collapse mt-3">
            <pre class="vs-code" id="prohozeni">
Nepodařilo se načíst kód. Řešení pravděpodobně ještě nebylo uvolněno, nebo nemáte povolený JavaScript.
            </pre>
        </div>

        -->

    </div>

</body>

</html>