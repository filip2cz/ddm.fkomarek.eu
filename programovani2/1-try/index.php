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

        <h1 class="nadpis">Práce s errory</h1>

        <p>
            Když tvoříme program, může se nám stát mimo jiné také spousta errorů tvořených uživateli. Například, když
            uživatel zadá string tam, kam očekáváme číslo. Tomuto můžeme předcházet pomocí <code>try {} catch {}</code>.
            Níže je příklad, když očekáváme číslo, ale uživatel zadá text.
        </p>

        <script>
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'example.cs', true);
            xhr.onreadystatechange = function () {
                if (this.readyState !== 4) return;
                if (this.status !== 200) return; // or whatever error handling you want
                document.getElementById('example').innerHTML = this.responseText;
            };
            xhr.send();
        </script>

        <pre><code class="language-csharp">Console.WriteLine("Zadejte váš věk");
int input;

try
{
    input = Convert.ToInt32(Console.ReadLine());
    Console.WriteLine($"Váš věk je {input}");
}
catch (Exception)
{
    Console.WriteLine("Zadaný text není číslo");
}

Console.ReadLine();</code></pre>

        <p>
            Můžeme také vypsat error tak, jak nám ho program dá:
        </p>
        
        <pre><code class="language-csharp">Console.WriteLine("Zadejte váš věk");
int input;

try
{
    input = Convert.ToInt32(Console.ReadLine());
    Console.WriteLine($"Váš věk je {input}");
}
catch (Exception ex)
{
    Console.WriteLine("Zadaný text není číslo");
    Console.WriteLine(ex);
}

Console.ReadLine();</code></pre>

        <p>
            Je vhodné toto používat všude, kde mohou nastat errory od uživatele, abychom zajistili co nejstabilnější
            program.
        </p>

    </div>

</body>

</html>