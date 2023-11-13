using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace playground_dotnet_framework
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int x = 3;
            int y = 5;

            Console.WriteLine("Input:");
            Console.WriteLine($"x = {x}");
            Console.WriteLine($"y = {y}");

            x = x + y;
            y = x - y;
            x = x - y;

            Console.WriteLine("--------------");

            Console.WriteLine("Output:");
            Console.WriteLine($"x = {x}");
            Console.WriteLine($"y = {y}");

            Console.ReadLine();
        }
    }
}
