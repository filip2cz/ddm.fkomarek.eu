Console.Write("Zadejte matematický příklad: ");
string priklad = Console.ReadLine();

try
{
    double vysledek = Convert.ToDouble(new System.Data.DataTable().Compute(priklad, null));
    Console.WriteLine("Výsledek: " + vysledek);
}
catch (Exception ex)
{
    Console.WriteLine("Chyba: " + ex.Message);
}
