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

        <h1 class="nadpis">NetCat</h1>

        <p>
            Když vytváříme program co komunikuje se síti, hodí se nám nástroj, díky kterému můžeme tyto věci snadno
            testovat. Jedním z takových nástrojů je NetCat.
        </p>

        <p>
            NetCat pro Windows je možné stáhnout zde: <a
                href="https://github.com/filip2cz/netcat-precompiled/raw/main/nc64.exe"
                target="_blank">https://github.com/filip2cz/netcat-precompiled/raw/main/nc64.exe</a> <br>
            Pokud pracujete na jiném operačním systému než jsou 64-bitové Windows, je třeba si stáhnout netcat odjinud.
            Můžete také zkusit, jestli není na vašem systému předinstalován, zkuste v příkazové řádce příkaz
            <code>nc</code>, <code>ncat</code> nebo <code>netcat</code>.
        </p>

        <p>
            Program netcat se používá jinak, než programy, se kterými většina z vás již pracovala. Je používán z
            příkazové řádky. První se musíte dostat do složky, kam jste netcat stáhli. Pokud jste ho uložili na plochu,
            dostanete se tam následujícím příkazem v PowerShellu:
        </p>

        <pre class="output">
cd ~\Desktop\
        </pre>

        <p>
            Powershell spustíte tak, že kliknete pravým tlačítkem myši na tlačítko Windows na liště a vyberete Windows
            Powershell nebo Terminál (záleží na vaší verzi Windows).
        </p>

        <p>
            Odtud již můžete spustit program netcat. Program se spouští následovně
            <code>.\nc64.exe [instrukce pro program]</code> <br>
            Příkazem <code>.\nc64.exe -h</code> si zobrazíte informace o programu.
        </p>

        <pre class="output">
PS C:\Users\student\Desktop> .\nc64.exe -h
[v1.12 NT http://eternallybored.org/misc/netcat/]
connect to somewhere:   nc [-options] hostname port[s] [ports] ...
listen for inbound:     nc -l -p port [options] [hostname] [port]
options:
        -d              detach from console, background mode

        -e prog         inbound program to exec [dangerous!!]
        -g gateway      source-routing hop point[s], up to 8
        -G num          source-routing pointer: 4, 8, 12, ...
        -h              this cruft
        -i secs         delay interval for lines sent, ports scanned
        -l              listen mode, for inbound connects
        -L              listen harder, re-listen on socket close
        -n              numeric-only IP addresses, no DNS
        -o file         hex dump of traffic
        -p port         local port number
        -r              randomize local and remote ports
        -s addr         local source address
        -t              answer TELNET negotiation
        -c              send CRLF instead of just LF
        -u              UDP mode
        -v              verbose [use twice to be more verbose]
        -w secs         timeout for connects and final net reads
        -z              zero-I/O mode [used for scanning]
port numbers can be individual or ranges: m-n [inclusive]
        </pre>

        <p>
            Program se dá použít dvěma způsoby: jako klient a jako server.
        </p>

        <p>
            Pokud se chceme na někoho připojit, použíjeme příkaz následovně:
        </p>

        <pre class="output">
nc [ip adresa] [port]
        </pre>

        <p>
            Pokud chceme otevřít port pro to, aby se někdo připojil k nám, použijeme příkaz takto:
        </p>

        <pre class="output">
.\nc64.exe -l -p [port]
        </pre>

        <p>
            V obou případech je může být port jakékoliv číslo mezi 1 a 65535. Pokud se ovšem dva lidé připojují k sobě,
            musí použít stejný port. Je ovšem doporučeno vyvarovat se portům menším než 1024, protože tyto porty
            používají konkrétní služby a na každém portu může běžet pouze jedna věc. Například webové stránky běží na
            portu 80.
        </p>

        <div class="alert alert-primary" role="alert">
            Port při síťové komunikaci slouží k určení, ke kterému portu se má program připojit na serveru. Na jednom
            serveru může běžet více programů, každý co ale používá nějaký port musí mít vlastní port. Díky portu nás
            server dostane do toho programu, který chceme, například do webové stránky na něm místo toho aby se nás
            pokusil připojit do konzole serveru.
        </div>

        <p>
            Ip adresu můžete zjistit příkazem <code>ipconfig</code> následovně:
        </p>

        <pre class="output">
PS C:\Users\student\Desktop> ipconfig
Windows IP Configuration


Ethernet adapter Ethernet:

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::978f:e12a:ab5f:ae65%10
   IPv4 Address. . . . . . . . . . . : 192.168.1.107
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : fe80::1%10
                                       192.168.1.1
        </pre>

        <p>
            Zde můžeme vidět, že IP adresa našeho stroje je <code>192.168.1.107</code>. Můžete si všimnout, že je zde
            napsáno IPv4. Existuje také IPv6, která funguje velmi podobně, ale nebudeme se jí zde zabývat.
        </p>

        <h2>Zadání:</h2>

        <!--

        <p>
            Utvořte dvojice. Jeden u sebe otevře nějaký port a druhý se na něj připojí. Pokud si nebudete vědět rady,
            nebojte se zeptat vašeho lektora. Pokud je vás lichý počet a není možné utvořit dvojice, můžete se
            prostřídat tak aby si to zkusili všichni.
        </p>

        -->

        <p>
            Spustěte si netcat dvakrát. Jednou jako server a jednou jako clienta, který se na ten server připojí.
            Otestujte úspěšné spojení tak, že pošlete data z clienta na server a obráceně. Pokud si nebudete vědět rady,
            nebojte se zeptat vašeho lektora.
        </p>

        <p>
            Ukončení programu uděláte zkratkou ctrl+c. Normálně je tato zkratka pro kopírování, nicméně zkratky v
            příkazové řádce se fungují jinak.
        </p>

        <h2>Už máte hotovo?</h2>

        <p>
            V minulých hodinách jsme si utvořili programy komunikující se sítí. Pokud tyto programy stále máte, můžete
            otestovat, jak se budou chovat, když se budou připojovat na vaši ip adresu, když otevřete port pomocí
            netcat.
        </p>

    </div>

</body>

</html>