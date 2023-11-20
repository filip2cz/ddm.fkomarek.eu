using System;

class Program
{
    static void Main()
    {
        double x;
        double y;
        string operace;

        Console.Write("Zadejte první číslo: ");
        x = Convert.ToDouble(Console.ReadLine());

        Console.Write("Zadejte druhé číslo: ");
        y = Convert.ToDouble(Console.ReadLine());

        Console.Write("Zadejte operaci (+,-,*,/): ");
        operace = Console.ReadLine();

        if (operace == "+")
        {
            Console.WriteLine(x + y);
        }
        else if (operace == "-")
        {
            Console.WriteLine(x - y);
        }
        else if (operace == "*")
        {
            Console.WriteLine(x * y);
        }
        else if (operace == "/")
        {
            if (y == 0)
            {
                Console.WriteLine("Nelze dělit nulou!");
            }
            else
            {
                Console.WriteLine(x / y);
            }
        }

        Console.ReadLine();
    }
}
