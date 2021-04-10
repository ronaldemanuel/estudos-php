<?php

for ($i = 1; $i <= 15; $i++) {
    if ($i == 13) {
        continue; // vai para a próxima iteração do loop
    } 

    echo "#$i" . PHP_EOL;
}
