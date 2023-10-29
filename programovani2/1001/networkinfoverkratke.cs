HttpClient client = new HttpClient();
int cislo = int.Parse(client.GetStringAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver").Result);
Console.WriteLine(cislo - 1);