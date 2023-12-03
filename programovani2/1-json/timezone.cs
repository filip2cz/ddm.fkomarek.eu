using System;
using System.Net.Http;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

class Program
{
    static void Main()
    {
        // poskládání URL adresy
        string city = "Prague";
        string APIUrl = $"http://worldtimeapi.org/api/timezone/Europe/{city}";

        // získání dat z API
        HttpClient client = new HttpClient();
        string response = client.GetStringAsync(APIUrl).Result;

        // rozložení JSON na proměnné
        JObject jsonObj = JsonConvert.DeserializeObject&lt;JObject&gt;(response);
        int dayOfYear = jsonObj["day_of_year"].Value&lt;int&gt;();
        string timezone = jsonObj["abbreviation"].Value&lt;string&gt;();

        // vypsání dat
        Console.WriteLine($"Dnes je {dayOfYear}. den v roce.");
        Console.WriteLine($"Praha je v časovém pásmu {timezone}.");

        Console.ReadLine();
    }
}
