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

        <pre><code class="language-csharp">// Vypsání textu "Zadejte váš věk" do konzole
Console.WriteLine("Zadejte váš věk");

// Vytvoření proměnné input typu string
string input;
// Vytvoření proměnné cislo typu int
int cislo;

// Získání vstupu od uživatele
input = Console.ReadLine();

// "Pokus se..."
try
{
    // Převedení proměnné input na int a uložení do proměnné cislo
    cislo = Convert.ToInt32(input);

    // Vypsání textu "Váš věk je" a proměnné cislo
    Console.WriteLine($"Váš věk je {cislo}");
}
// "Pokud se pokus nepodařil..."
catch (Exception)
{
    Console.WriteLine("Zadaný text není číslo");
}
</code></pre>

        <p>
            Můžeme také vypsat error tak, jak nám ho program dá:
        </p>
        
        <pre><code class="language-csharp">// Vypsání textu "Zadejte váš věk" do konzole
Console.WriteLine("Zadejte váš věk");

// Vytvoření proměnné input typu string
string input;
// Vytvoření proměnné cislo typu int
int cislo;

// Získání vstupu od uživatele
input = Console.ReadLine();

// "Pokus se..."
try
{
    // Převedení proměnné input na int a uložení do proměnné cislo
    cislo = Convert.ToInt32(input);

    // Vypsání textu "Váš věk je" a proměnné cislo
    Console.WriteLine($"Váš věk je {cislo}");
}
// "Pokud se pokus nepodařil..."
catch (Exception ex)
{
    Console.WriteLine("Zadaný text není číslo");
    Console.WriteLine(ex);
}</code></pre>

        <p>
            Je vhodné toto používat všude, kde mohou nastat errory od uživatele, abychom zajistili co nejstabilnější
            program.
        </p>

        <h2>Zadání</h2>

        <p>
            Do vaší kalkulačky, kterou jsme v minulých hodinách dělali, přidejte <code>try</code> a <code>catch</code>, aby uživatel nerozbil aplikaci tím, že zadá text místo čísla.
        </p>

        <p>
            Nezapomeňte odevzdat váš kód na Google učebnu: <a href="https://classroom.google.com/c/ODA4MjE5ODMxODM0/a/ODMxNzg5MjQxNjky/details" target="_blank">https://classroom.google.com/c/ODA4MjE5ODMxODM0/a/ODMxNzg5MjQxNjky/details</a>
        </p>

    </div>

</body>

</html>