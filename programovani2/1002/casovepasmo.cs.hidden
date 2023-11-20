using System;
using System.Net.Http;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

class Program
{
    static void Main()
    {
        // poskládání URL adresy
        Console.Write("Zadejte Evropské hlavní město: ");
        string city = Console.ReadLine();
        string APIUrl = $"http://worldtimeapi.org/api/timezone/Europe/{city}";

        // získání dat z API
        HttpClient client = new HttpClient();
        string response = client.GetStringAsync(APIUrl).Result;

        // rozložení JSON na proměnné
        JObject jsonObj = JsonConvert.DeserializeObject&lt;JObject&gt;(response);
        string timezone = jsonObj["abbreviation"].Value&lt;string&gt;();

        // vypsání dat
        Console.WriteLine($"{city} je v časovém pásmu {timezone}.");

        Console.ReadLine();
    }
}