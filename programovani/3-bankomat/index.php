<!DOCTYPE html>
<html lang='cs' data-bs-theme="dark">

<head>
    <title>DDM - Filip Komárek</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <meta charset='utf-8'>
</head>

<body>
    <?php include("../../src/link.html"); ?>

    <div class="container">

        <a href="../"><button class="btn btn-primary" type="button">Zpět</button></a>

        <h1 class="nadpis">Zadání: Bankomat</h1>

        <p>
            Zadání: vytvořte program pro bankomat, jenž se uživatele zeptá, kolik chce vybrat a po té mu vydá peníze v
            co nejméně bankovkách/mincích.
        </p>

        <p>
            Zde je příklad výstupu:
        </p>

        <pre class="output">
Zadejte částku: 7151

5000
2000
100
50
1
        </pre>

        <h2>Příliš snadné?</h2>

        <p>
            Udělejte program pro bankomat, který si bude pamatovat částku uloženou u uživatele. Po spuštění se zobrazí,
            kolik má uživatel na účtu a bankomat mu umožní vložit peníze nebo vybrat peníze. Vložení peněz bude fungovat
            tak, že uživatel napíše kolik vkládá. Výběr bude fungovat stejně jako v zadání výše. Po provedení operace se
            program neukončí, ale zeptá se znova co má dělat.
        </p>

        <h2>Taky příliš snadné?</h2>

        <p>
            Vytvořte program, do kterého zadám číslo a on mi vypíše všechny možnosti, jak mi dát tuto částku.
        </p>

        <p>
            Příklad výstupu:
        </p>

        <pre class="output">
Zadejte částku: 7

5 2
5 1 1
2 2 2 1
2 2 1 1 1
2 1 1 1 1 1
1 1 1 1 1 1 1
        </pre>

    </div>

</body>

</html>