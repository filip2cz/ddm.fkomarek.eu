Console.WriteLine("Kolik čísel chcete zadat?");
int size = Convert.ToInt32(Console.ReadLine());
int[] input = new int[size];

Console.WriteLine("Zadejte čísla:");
int zadano = 0;
while (zadano < input.Length)
{
    input[zadano] = Convert.ToInt32(Console.ReadLine());
    zadano++;
}

int output = 0;
foreach (int i in input)
{
    output = output + i;
}

Console.WriteLine($"Součet vámi zadaných čísel: {output}");