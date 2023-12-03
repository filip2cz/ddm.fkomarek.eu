string text;
int cislo;
HttpClient client = new HttpClient();
text = client.GetStringAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver").Result;
cislo = int.Parse(text);
Console.WriteLine(cislo - 1);