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

        <p class="test-link">ERROR: načtení souboru link.html bylo neúspěšné</p>

        <h1 class="nadpis">Získávání dat z webu</h1>

        <!--

        <p>
            Mauris elementum mauris vitae tortor. Nullam rhoncus aliquam metus. Nullam dapibus fermentum ipsum.
        </p>

        https://www.freeformatter.com/html-escape.html

        <pre><code class="language-csharp">C# kód</code></pre>

        <pre><code class="language-csharp" id="allowCopy">C# kód</code></pre>

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
            Velké množství dnešních aplikací získává data z internetu. My si dnes ukážeme, jak je z něho získávat. V
            dnešní hodině se zaměříme jen na plaintext data, na formátovaná data se podíváme v příští lekci.
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
            Řekněme, že máme URL, jenž zní
            <a href="http://v4.ipv6-test.com/api/myip.php" target="_blank">http://v4.ipv6-test.com/api/myip.php</a>.
            Když tuto stránku navštívíme, uvidíme zde jen naši IP adresu.
        </p>

        <p>
            Náš program si může data z této stránky stáhnout a vložit do <code>label1</code> následujícím způsobem:
        </p>

        <pre><code class="language-csharp" id="allowCopy">HttpClient client = new HttpClient(); // vytvoření instance HttpClient jménem client
string url = "http://v4.ipv6-test.com/api/myip.php"; // vytvoření proměnné url, do které jsme uložili url adresu, co využijeme
string data = client.GetStringAsync(url).Result; // dotazování se na url adresu v proměnné a uložení odpovědi do proměnné data
label1.Text = data; //nastavení textu labelu1 na obsah proměnné data</code></pre>

        <div class="alert alert-warning" role="alert">
            Pokud vám kód nefunguje, přesvěčte se, že máte na začátku vašeho kódu (v horní oblasti na prvních několika
            řádcích) kód <code>using System.Net.Http;</code>
        </div>

        <p>
            Když se nám spustí tento kód, tak bychom měli v našem <code>label1</code> vidět naši IP adresu.
        </p>

        <h2>Zadání</h2>

        <p>
            Vytvořte program, který nám ukáže naši IP adresu a informace o ní např. pomocí URL adres níže. Tyto url
            adresy fungují tak, že do jich musíte vložit ip adresu a ono vám to řekne informace o ní. V tomto seznamu
            vaší IP adresou nahraďte za <code>0.0.0.0</code>
        </p>

        <pre>
            http://ip-api.com/line/0.0.0.0?fields=country
            http://ip-api.com/line/0.0.0.0?fields=city
            http://ip-api.com/line/0.0.0.0?fields=regionName
            http://ip-api.com/line/0.0.0.0?fields=isp
        </pre>

        <p>
            Další možné parametry:
            <a target="_blank" href="https://ip-api.com/docs/api:newline_separated">
                https://ip-api.com/docs/api:newline_separated
            </a>
        </p>

        <p>
            Nezapomeňte odevzdat váš kód do Google Učebny:
            <a href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/Nzc5MTQzMDQ4OTc4/details" target="_blank">
                https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/Nzc5MTQzMDQ4OTc4/details
            </a>
        </p>

        <h3>Pro připomenutí: jak vkládat string do jiného stringu</h3>

        kód:
        <pre><code class="language-csharp" id="allowCopy">string text1 = "ABC";
string text2 = $"12{text1}34";
Console.WriteLine(text2);</code></pre>

        výstup:
        <pre class="output">12ABC34</pre>

    </div>

</body>

</html>