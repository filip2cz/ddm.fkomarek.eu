using System;
using System.Net.Sockets;
using System.Text;

class Program
{
    static void Main()
    {
        // Nastavení IP adresy a portu serveru
        string serverIp = "ssfs.fkomarek.eu";
        int serverPort = 4444;

        // Vytvoření TcpClient pro připojení k serveru
        using (TcpClient client = new TcpClient(serverIp, serverPort))
        {
            // Otevření síťovýého streamu pro komunikaci
            using (NetworkStream stream = client.GetStream())
            {
                // Vytvoření byte array pro přijímání dat
                byte[] buffer = new byte[1024];

                // Přečtení data ze streamu
                int bytesRead = stream.Read(buffer, 0, buffer.Length);

                // Převod dat na řetězec
                string receivedData = Encoding.UTF8.GetString(buffer, 0, bytesRead);

                // Vypsání přijatých dat
                Console.WriteLine("Přijatý řetězec: " + receivedData);
            }
        }

        Console.ReadLine();
    }
}
