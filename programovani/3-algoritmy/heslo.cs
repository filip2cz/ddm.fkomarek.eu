using System;
class Program
{
    static void Main()
    {
        string heslo = "password";

        Console.Write("Zadejte heslo: ");
        string vstup = Console.ReadLine();

        while (heslo != vstup)
        {
            Console.Write("Špatné heslo, zadejte heslo znovu: ");
            vstup = Console.ReadLine();
        }

        Console.WriteLine("Správné heslo");

        Console.ReadLine();
    }
}