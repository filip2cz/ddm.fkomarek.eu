#!/bin/sh
cd ./programovani/4-rgb-led && php index.php > index.html && rm index.php && cd ../../
cd ./programovani/4-hledanichyb && php index.php > index.html && rm index.php && cd ../../
cd ./programovani/4-fotorezistor && php index.php > index.html && rm index.php && cd ../../
cd ./programovani/4-display && php index.php > index.html && rm index.php && cd ../../
cd ./programovani/4-procvicovani && php index.php > index.html && rm index.php && cd ../../

cd ./robotika/3-semafor && php index.php > index.html && rm index.php && cd ../../

# https://answers.netlify.com/t/directory-listing/14246/6