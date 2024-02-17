using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Zadejte váš věk");
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

        Console.ReadLine();
    }
}