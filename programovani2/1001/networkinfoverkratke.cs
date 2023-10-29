WebClient client = new WebClient();
int cislo = int.Parse(await client.DownloadStringTaskAsync("https://raw.githubusercontent.com/filip2cz/network-info/main/ver"));
Console.WriteLine(cislo - 1);