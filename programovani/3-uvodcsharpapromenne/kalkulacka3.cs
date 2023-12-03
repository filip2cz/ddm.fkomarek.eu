Console.Write("Zadejte matematický příklad: ");
string priklad = Console.ReadLine();

double vysledek = Convert.ToDouble(new System.Data.DataTable().Compute(priklad, null));
Console.WriteLine("Výsledek: " + vysledek);