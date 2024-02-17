using System;
using System.Net;
using System.Net.Sockets;
using System.Text;

class Program
{
    static void Main(string[] args)
    {
        // Definice portu, na kterém bude server naslouchat
        int port = 4444;

        // Vytvoření TcpListeneru
        TcpListener server = null;
        try
        {
            // Naslouchání na všech síťových rozhraních na daném portu
            IPAddress localAddr = IPAddress.Any;
            server = new TcpListener(localAddr, port);

            // Start serveru
            server.Start();

            Console.WriteLine($"Listening on port {port}...");

            // Čekání na připojení klienta
            TcpClient client = server.AcceptTcpClient();
            Console.WriteLine("Client connected!");

            // Získání dat ze vstupního streamu klienta
            NetworkStream stream = client.GetStream();

            // Vytvoření proměnných pro uložení příchozích dat
            byte[] data = new byte[256];
            int bytes;

            // Čtení dat ze streamu
            while ((bytes = stream.Read(data, 0, data.Length)) != 0)
            {
                string responseData = Encoding.ASCII.GetString(data, 0, bytes); // Převod dat na řetězec
                Console.WriteLine($"Received message: {responseData}"); // Vypsání výstupu do konzole serverz

                // Odpověď na klienta
                byte[] msg = Encoding.ASCII.GetBytes($"Server: message received: {responseData}"); // Převod stringu na formát pro odeslání
                stream.Write(msg, 0, msg.Length); // Odeslání odpovědi
                Console.WriteLine("Answered");
                return; // Ukončení while - pokud chcete aby mohl uživatel napsat více zpráv, můžete odebrat
            }

            // Uzavření připojení
            client.Close();
        }
        catch (Exception e)
        {
            Console.WriteLine($"Error: {e.Message}");
        }
        finally
        {
            // Uzavření serveru
            server.Stop();
        }

        Console.WriteLine("Server closed.");
    }
}
