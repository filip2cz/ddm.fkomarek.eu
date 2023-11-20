using System;
using System.Net.Http;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

class Program
{
    static void Main()
    {
        // poskládání URL adresy
        string city = "Sofia";
        string APIUrl = $"http://worldtimeapi.org/api/timezone/Europe/{city}";

        // získání dat z API
        HttpClient client = new HttpClient();
        string response = client.GetStringAsync(APIUrl).Result;

        // rozložení JSON na proměnné
        JObject jsonObj = JsonConvert.DeserializeObject&lt;JObject&gt;(response);
        string userIP = jsonObj["client_ip"].Value&lt;string&gt;();
        string timezone = jsonObj["abbreviation"].Value&lt;string&gt;();

        // vypsání dat
        Console.WriteLine($"Vaše IP adresa je {userIP}");
        Console.WriteLine($"Sofia je v časovém pásmu {timezone}.");

        Console.ReadLine();
    }
}