using System;
using System.IO;
using System.Net.Http;

class Program
{
    static void Main()
    {
        int cislo;
        HttpClient client = new HttpClient();
        cislo = Convert.ToInt32(client.GetStringAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver").Result);

        File.WriteAllText("C:\\Users\\filip\\Desktop\\soubor.txt", Convert.ToString(cislo + 8));
    }
}