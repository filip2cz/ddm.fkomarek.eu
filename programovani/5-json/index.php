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

        <h1 class="nadpis">JSON a obrázky</h1>

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

        <style>
            img {
                width: 50%;
            }
        </style>

        <p>
            Minule jsme si ukázali získávání dat z webu. Ukazovali jsme si to ale na datech ve velmi jednoduchém
            formátu, kdy jsme měli číslo a to bylo obsahem celé stránky. Většinou se ale na jedné stránce posílá více
            dat. Aby se od sebe dali odlišit, jsou v nějakém strojově čitelném formátu, ve většině případech v JSON.
        </p>

        <p>
            Můžeme si to ukázat například zde: <a href="https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY" target="_blank">https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY</a>, kde tato stránka
            nám
            ukazuje url adresu na dnešní <b>Image of the Day</b> od NASA a další informace.
            Pro lepší zobrazení doporučuji otevírat tuto stránku v
            prohlížeči Firefox, který ta data zobrazí v tabulce. Taková data jsou ve formátu následujícím:
        </p>

        <pre class="output">{
  "copyright": "\nNASA, \nJuno, \nSwRI, \nMSSS;\n Processing &\nLicense:\nGerald Eichstädt & \nSeán Doran\n",
  "date": "2025-05-25",
  "explanation": "Jupiter is stranger than we knew. NASA's Juno spacecraft has now completed over 70 swoops past Jupiter as it moves around its highly elliptical orbit. Pictured from 2017, Jupiter is seen from below where, surprisingly, the horizontal bands that cover most of the planet disappear into swirls and complex patterns.  A line of white oval clouds is visible nearer to the equator.  Impressive results from Juno show that Jupiter's weather phenomena can extend deep below its cloud tops, that Jupiter's center has a core that is unexpectedly large and soft, and that Jupiter's magnetic field varies greatly with location.  Although Juno is scheduled to keep orbiting Jupiter further into 2025, at some time the robotic spacecraft will be maneuvered to plunge into the giant planet.    Jigsaw Jumble: Astronomy Puzzle of the Day",
  "hdurl": "https://apod.nasa.gov/apod/image/2505/BeneathJupiter_Juno_vertical960.jpg",
  "media_type": "image",
  "service_version": "v1",
  "title": "Beneath Jupiter",
  "url": "https://apod.nasa.gov/apod/image/2505/BeneathJupiter_Juno_960.jpg"
}</pre>

        <p>
            Můžete si všimnout, že je to v podstatě soubor, jenž nám dává různé "proměnné" a jejich hodnoty. Abychom
            tyto data mohli vytáhnout, budeme potřebovat knihovnu k tomu určenou.
        </p>

        <h2>
            Instalace knihovny pro zpracování JSON <code>Newtonsoft.Json</code>
        </h2>

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

        <h2>Zpracování dat z JSON</h2>

        <p>
            Následující kód nám získá popisek dnešní fotky dne od NASA a vloží nám ho do <code>label1</code>.
        </p>

        <pre><code class="language-csharp">// definování url, ze které stahujeme data
string APIUrl = $"https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";

// získání dat z API
HttpClient client = new HttpClient();
string response = client.GetStringAsync(APIUrl).Result;

// rozložení JSON na proměnné
JObject jsonObj = JsonConvert.DeserializeObject<JObject>(response);

// vytvoření proměnné popisek a uložení do ní obsah jsonu pod heslem explanation
string popisek = jsonObj["explanation"].Value<string>();

// nastavení textu label1 na obsah proměnné popisek
label1.Text = popisek;</code></pre>

        <code>https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY</code>

        <h2>Zadání</h2>

        <p>
            Přidejte si do vašeho projektu kromě popisku (<code>Label</code>) také obrázek (<code>PictureBox</code>). Z
            JSON souboru výše získejte url adresu obrázku, jenž společně s popiskem ukažte uživateli.
        </p>

        <p>
            Nezapomeňte odevzdat váš kód do Google Učebny:
            <a href="https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/Nzg0ODYxMzUxNzg2/details" target="_blank">
                https://classroom.google.com/c/NzE5NDk1NjM2NDAw/a/Nzg0ODYxMzUxNzg2/details
            </a>
        </p>

        <h2>Příliš snadné?</h2>

        <code>https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=YYYY-MM-DD</code>

        <p>
            Výše napsaná url adresa je doplněna o možnost výběru datumu, ze kterého chceme Image of the Day. Může
            vypadat například takto:
            <a href="https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=2005-09-14"
                target="_blank">https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=2005-09-14
            </a>
        </p>

        <p>
            Přidejte do své aplikace <code>DateTimePicker</code>, díky kterému bude moct uživatel vybrat datum, ze
            kterého si chce obrázek zobrazit.
        </p>

    </div>

</body>

</html>