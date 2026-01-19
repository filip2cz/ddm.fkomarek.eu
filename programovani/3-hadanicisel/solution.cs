using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp10
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int min = 0;
            int max = 100;
            string playing = "true";
            while (playing == "true")
            {
                Console.WriteLine($"Hádám číslo {(min + max) /2}");
                Console.WriteLine("Je správné číslo větší, menší, nebo stejné?");
                string input = Console.ReadLine();
                if (input == "větší")
                {
                    min = (min + max) / 2+1;
                }
                else if (input == "menší")
                {
                    max = (min + max) / 2 - 1;
                }
                else if (input == "stejné")
                {
                    Console.WriteLine("Vyhrál jsem!");
                    playing = "false";
                }
            }
        }
    }
}
