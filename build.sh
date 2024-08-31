#!/bin/bash

# Funkce pro zpracování PHP souboru a jeho konverzi na HTML
process_php_to_html() {
    php_file="$1"
    html_file="${php_file%.php}.html"

    # Spustí PHP soubor a uloží výstup do HTML
    php "$php_file" > "$html_file"

    # Zkontroluje, jestli byl soubor úspěšně převeden
    if [ -f "$html_file" ]; then
        echo "Převedeno: $php_file -> $html_file"

        # Smaže původní PHP soubor
        rm "$php_file"
        echo "Smazáno: $php_file"
    else
        echo "Chyba při převodu: $php_file"
    fi
}

# Prohledá všechny index.php soubory ve složce a podadresářích
find . -name "index.php" | while read php_file; do
    process_php_to_html "$php_file"
done

echo "Všechny PHP soubory byly úspěšně převedeny a původní PHP soubory smazány."

# https://answers.netlify.com/t/directory-listing/14246/6