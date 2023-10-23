Console.Write("Zadejte první číslo: ");
int cislo1 = Convert.ToInt32(Console.ReadLine());
Console.Write("Zadejte druhé číslo: ");
int cislo2 = Convert.ToInt32(Console.ReadLine());
Console.Write("Zadejte operaci (+, -, *, /): ");
string operace = Console.ReadLine();

if (operace == "+")
{
    Console.WriteLine("Součet čísel " + cislo1 + " a " + cislo2 + " je " + (cislo1 + cislo2) + ".");
}
if (operace == "-")
{
    Console.WriteLine("Rozdíl čísel " + cislo1 + " a " + cislo2 + " je " + (cislo1 - cislo2) + ".");
}
if (operace == "*")
{
    Console.WriteLine("Součin čísel " + cislo1 + " a " + cislo2 + " je " + (cislo1 * cislo2) + ".");
}
if (operace == "/")
{
    Console.WriteLine("Podíl čísel " + cislo1 + " a " + cislo2 + " je " + (cislo1 / cislo2) + ".");
}