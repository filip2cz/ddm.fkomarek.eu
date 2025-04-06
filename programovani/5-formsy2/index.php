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

        <h1 class="nadpis">Okna</h1>

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
            V dnešní lekci se zaměříme na okna, jakožto tu hlavní novou věc, co nám přináší Windows Forms.
        </p>

        <h2>Vlastnosti okna</h2>

        <p>
            Můžeme upravovat spoustu vlastností našeho okna. Zmínil bych například:
        <ul>
            <li>Size - velikost okna</li>
            <li>Text - název okna (v levém horním rohu)</li>
            <li>Icon - ikona programu</li>
            <li>ControlBox - viditelnost ovládacích prvků okna</li>
            <li>BackColor - barva okna v pozadí</li>
            <li>ForeColor - výchozí barva textu</li>
        </ul>
        </p>

        <img src="vlastnosti.png">

        <h2>Message Box</h2>

        <p>
            Určitě si pamatujete na vyskakovací okna. Tyto zde můžeme také vyrábět. Následujícím kódem vytvoříme
            vyskakovací okno se zprávou po stisknutí tlačítka:
        </p>

        <pre><code class="language-csharp" id="allowCopy">private void button1_Click(object sender, EventArgs e)
{
    MessageBox.Show("Zprava");
}</code></pre>

        <img src="messagebox.png" style="max-width: 75%;">

        <p>
            Můžeme také uvést nadpis.
        </p>

        <pre><code class="language-csharp" id="allowCopy">private void button1_Click(object sender, EventArgs e)
{
    MessageBox.Show("Text", "Nadpis");
}</code></pre>

        <img src="messagebox2.png" style="max-width: 75%;">

        <p>
            MessageBox.Show umí zobrazovat také například tlačítka. Pro více informací o nich můžete navštívit oficiální
            dokumentaci:
            <a href="https://learn.microsoft.com/cs-cz/dotnet/api/system.windows.forms.messagebox.show?view=netframework-4.8.1"
                target="_blank">
                https://learn.microsoft.com/cs-cz/dotnet/api/system.windows.forms.messagebox.show?view=netframework-4.8.1
            </a>
        </p>

        <h2>Více oken</h2>

        <p>V našem programu můžeme mít libovolný počet oken a můžeme je zobrazovat a skrývat dle potřeby.</p>

        <p>
            Nové okno můžeme přidat tak, že klikneme pravým na náš projekt, dáme "Přidat" a "Nová položka".
        </p>

        <img src="druheokno.png">

        <img src="druheokno2.png" style="max-width: 75%;">

        <img src="druheokno3.png">

        <p>
            Pokud tento formulář chceme zobrazit, můžeme to udělat například pomocí následujících kroků (v tomto příkladu po kliknutí na tlačítko):
        </p>

        <pre><code class="language-csharp" id="allowCopy">private void button1_Click(object sender, EventArgs e)
{
    var frm = new Form2(); //Vytvoří se nová instance formuláře Form2
    frm.Location = this.Location; //Pozice frm (nového formuláře) je nastavena na stejnou pozici jako aktuální formulář (this)
    frm.StartPosition = FormStartPosition.Manual; //Pozice formuláře bude nastavena manuálně, což umožňuje použít hodnotu z předchozího kroku.
    frm.FormClosing += delegate { this.Show(); }; //Zobrazení předchozího formuláře po zavření Form2 (je možné smazat)
    frm.Show(); //Zobrazení Form2
    this.Hide(); //Skrytí předchozího Formu
}</code></pre>

        <h2>Zadání</h2>

        <p>
            Vytvořte přihlašovací stránku s uživatelským jménem a heslem. Pokud je heslo a jméno správné, ukáže se nové okno s libovolným obsahem (staré okno zmizí). Pokud je heslo nebo jméno špatně, zobrazí se vyskakovací okno (MessageBox) s textem "Chybné heslo".
        </p>

    </div>

</body>

</html>