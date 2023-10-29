string text;
int cislo;
WebClient client = new WebClient();
text = await client.DownloadStringTaskAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver");
cislo = int.Parse(text);
Console.WriteLine(cislo - 1);