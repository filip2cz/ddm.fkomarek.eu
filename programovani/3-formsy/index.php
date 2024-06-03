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

        <h1 class="nadpis">Grafické aplikace ve Windows Forms</h1>

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
            V dnešní hodině si ukážeme vytváření grafických aplikací pomocí Windows Forms.<br>
            Jako první si musíme při vytváření projektu vybrat, že chceme vytvořit <code>Aplikaci Windows Forms (.NET Framework)</code>
        </p>

        <img src="selection.png">


        <p>
            Po nastavení jména projektu bychom měli vidět něco takového:
        </p>

        <img src="rozhrani.png">

        <p>
            Abychom do našeho projektu umístili nějaký prvek, v tomto případě nadpis zvaný anglicky <code>Label</code>, můžeme ho přetáhnout z panelu nástroju nalevo.
        </p>

        <div class="alert alert-primary" role="alert">
            Pokud nevidíte na levé straně panel nástrojů, v horním panelu stiskněte <code>Zobrazit</code> a vyberte <code>Panel nástrojů</code> (anglicky <code>Toolbox</code>).
        </div>

        <img src="panelnastroju.png">

        <p>
            V panelu <code>Vlastnosti</code> poté můžeme upravovat všechny vlastnosti tohoto textu.
        </p>

        <img src="vlastnosti.png">

        <p>
            Co zde můžeme upravit je například text našeho nadpisu a také velikost písma, aby byl náš nadpis větší.
        </p>

        <img src="vlastnosti-nadpis.png">

        <p>
            Dále si přidáme tlačítko.
        </p>

        <img src="button-pridani.png">

        <p>
            Stejně, jako u nadpisu, mu upravíme jeho text. Můžeme ho také přímo v našem návrhu roztáhnout, podobně jako třeba čtvereček v malování.<br>
            Když na něj pak dvakrát poklepneme, dostaneme se do kódu. Když jsme na něj dvakrát poklepali, vytvořil se nám nový <code>void</code> s názvem <code>button1_Click</code>.
        </p>

        <pre><code class="language-csharp">...
namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            // K&oacute;d, co se spust&iacute; hned po spu&scaron;těn&iacute; aplikace
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // K&oacute;d, co se spust&iacute; po kliknut&iacute; na tlač&iacute;tko

        }
    }
}
...</code></pre>

        <p>
            Když se vrátíme do návrhu naší grafické aplikace, klikneme na náš text a podíváme se do vlastností, všimněme si, že tento text má název <code>label1</code>.
        </p>

        <img src="label-nazev.png">

        <p>
            Když se poté vrátíme zpět do kódu, můžeme po zmáčknutí tlačítka text tohoto labelu změnit. Uděláme to tak, že napíšeme <code>nazevobjektu.vlastnost = hodnota</code>.
        </p>

        <img src="kod-zmena-labelu.png">

        <p>
            Poté můžeme tlačítkem <b>Spustit</b> na horním panelu spustit náš program. Nyní se spustí naše grafická aplikace s textem a tlačítkem s tím, že pokud stiskneme tlačítko, změní se text.
        </p>

        <h2>Jednoduchý kvíz</h2>

        <p>
            V minulých hodinách jsme vytvořili jednoduchý kvíz. Nyní si ukážeme, jak ho vytvořit v grafické podobě.<br>
            První si přidáme <b>TextBox</b>.
        </p>

        <img src="textbox-add.png">

        <p>
            Ve vlastnostech si můžeme přečíst, že jeho název je <code>textBox1</code>. V kódu z něho můžeme číst následovně:
        </p>

        <pre><code class="language-csharp">...
private void button1_Click(object sender, EventArgs e)
{
    // K&oacute;d, co se spust&iacute; po kliknut&iacute; na tlač&iacute;tko
    string answer = textBox1.Text;
}
...</code></pre>

    <p>
        S trochou další práce si můžeme vytvořit kvíz:
    </p>

    <img src="kviz1.png" style="width: auto">
    <img src="kviz2.png" style="width: auto">
    <img src="kviz3.png" style="width: auto">

    <h2>Zadání</h2>

    <p>Vytvořte podobný kvíz se dvěma otázkami na jakékoliv téma.</p>

    <h2>Příliš snadné?</h2>

    <p>Vytvořte kalkulačku, jenž bude vypadat takto:</p>

    <img src="kalkulacka.png" style="width: auto">

    </div>

</body>

</html>