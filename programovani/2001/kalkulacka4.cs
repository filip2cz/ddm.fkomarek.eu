Console.WriteLine("Zadejte příklad");
Console.WriteLine("Zohledněte prioritu operací už při zadávání příkladu!!!");

string input = Console.ReadLine();
Console.WriteLine($"Zadanný příklad: {input}");

char[] charInput = input.ToCharArray();

//kontrola, jestli to neobsahuje nepovolené znaky
bool calculating = true;

int i = 0;
while (i < charInput.Length && calculating == true)
{
    if (Char.IsLetter(charInput[i]))
    {
        Console.WriteLine($"neplatný znak nalezen: {charInput[i]}");
        calculating = false;
    }

    i++;
}

string operatorsString = "+-*/ ";
char[] operators = operatorsString.ToCharArray();

double value = 0;
i = 0;
string number;
bool notUsed = true;
int cykly = 0;
while (calculating)
{
    cykly++;
    //Console.WriteLine($"[DEBUG]: {cykly}. cyklus");

    number = null;
    while (i < charInput.Length && Char.IsDigit(charInput[i]) && notUsed)
    {
        if (number == null)
        {
            number = charInput[i].ToString();
        }
        else
        {
            number = number.Insert(number.Length, charInput[i].ToString());
        }

        i++;
        notUsed = false;

        value = value + Convert.ToDouble(number);
    }
    if (i < charInput.Length && charInput[i] == operators[0] && notUsed)
    {
        i++;

        while (i < charInput.Length && Char.IsDigit(charInput[i]) && notUsed)
        {
            if (number == null)
            {
                number = charInput[i].ToString();
            }
            else
            {
                number = number.Insert(number.Length, charInput[i].ToString());
            }

            i++;
            notUsed = false;
        }

        value = value + Convert.ToDouble(number);

        notUsed = false;
    }
    if (i < charInput.Length && charInput[i] == operators[1] && notUsed)
    {
        i++;

        while (i < charInput.Length && Char.IsDigit(charInput[i]) && notUsed)
        {
            if (number == null)
            {
                number = charInput[i].ToString();
            }
            else
            {
                number = number.Insert(number.Length, charInput[i].ToString());
            }

            i++;
            notUsed = false;
        }

        value = value - Convert.ToDouble(number);
        notUsed = false;
    }
    if (i < charInput.Length && charInput[i] == operators[2] && notUsed)
    {
        i++;

        while (i < charInput.Length && Char.IsDigit(charInput[i]) && notUsed)
        {
            if (number == null)
            {
                number = charInput[i].ToString();
            }
            else
            {
                number = number.Insert(number.Length, charInput[i].ToString());
            }

            i++;
            notUsed = false;
        }

        value = value * Convert.ToDouble(number);
        notUsed = false;
    }
    if (i < charInput.Length && charInput[i] == operators[3] && notUsed)
    {
        i++;

        while (i < charInput.Length && Char.IsDigit(charInput[i]) && notUsed)
        {
            if (number == null)
            {
                number = charInput[i].ToString();
            }
            else
            {
                number = number.Insert(number.Length, charInput[i].ToString());
            }

            i++;
            notUsed = false;
        }

        value = value / Convert.ToDouble(number);
        notUsed = false;
    }
    if (i < charInput.Length && charInput[i] == operators[4] && notUsed)
    {
        i++;
        notUsed = false;
    }
    number = null;

    if (i == charInput.Length)
    {
        calculating = false;
    }

    notUsed = true;
}
Console.WriteLine($"Výsledek: {value}");