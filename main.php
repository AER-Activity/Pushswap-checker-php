<?php

$la = [];
$lb = []; 
$ref = [];

if ($argc == 1) {
    echo "Usage: cat \"instruction.txt\" | php main.php <input>\n";
    exit(84);
}

for ($i = 1; $i < $argc; $i++) {
    array_push($la, $argv[$i]);
    array_push($ref, $argv[$i]);
}

sort($ref);

while ($shell = fgets(STDIN)) {
    switch (trim($shell)) {
        case "sa":
            sa();
            break;
        case "sb":
            sb();
            break;
        case "sc":
            sa();
            sb();
            break;
        case "pa":
            pa();
            break;
        case "pb":
            pb();
            break;
        case "ra":
            ra();
            break;
        case "rb":
            rb();
            break;
        case "rr":
            ra();
            rb();
            break;
        case "rra":
            rra();
            break;
        case "rrb":
            rrb();
            break;
        case "rrr":
            rra();
            rrb();
            break;
    }
}


if (count($la) != $argc - 1) {
    echo "\nInstruction non valide, la liste final ne comporte pas le bon nombre de numéro\n\n";
    echo "la => ";
    foreach ($la as $nbr) {
        echo"{$nbr} ";
    }

    echo "\n\nlb => ";
    foreach ($lb as $nbr) {
        echo"{$nbr} ";
    }
    echo "\n";
    exit (1);
}

if ($ref != $la) {
    echo "\nLa liste final n'est pas bien triée\n\n";
    echo "ref => ";
    foreach ($ref as $nbr) {
        echo"{$nbr} ";
    }
    echo "\n\nla => ";
    foreach ($la as $nbr) {
        echo"{$nbr} ";
    }
    exit (1);
} else {
    echo "\nLa liste final est bien triée\n\n";
}

function sa() {
    global $la;
    // échange les positions des deux premiers éléments de la (rien ne se produit s’il n’y a pas assez d’éléments).
}

function sb() {
    global $lb;
    // échange les positions des deux premiers éléments de lb (rien ne se produit s’il n’y a pas assez d’éléments).
}

function pa() {
    global $la;
    global $lb;
    // prend le premier élément de lb et le place à la première position de la (rien ne se produit si lb est vide).
}

function pb() {
    global $la;
    global $lb;
    // prend le premier élément de la et le place à la première position de lb (rien ne se produit si la est vide).
}

function ra() {
    global $la;
    // fait une rotation de la vers le début. (le premier élément devient le dernier)
}

function rb() {
    global $lb;
    // fait une rotation de lb vers le début (le premier élément devient le dernier).
}

function rra() {
    global $la;
    // fait une rotation de la vers la fin. (le dernier élément devient le premier).
}

function rrb() {
    global $lb;
    // fait une rotation de lb vers la fin. (le dernier élément devient le premier).
}
