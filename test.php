<?php

// funkcia add, 2 ciselne parametre ... navratova hodnota bude sucet parametrov 
// navratova hodnota bude sucet parametrov 

function add($a, $b){
    return $a + $b;
      
}
echo add(2,3);    //5
echo add( add(2,3), add(3,2) ); //10

// funkcia display, 1 parameter
// bez navratovej hodnoty 
// vypise na obrazovku data z parametra 
function display($test){
    echo $text;
}
display ("Hello"); // vypis na obrazovku
display( add(6, 5) );

// funkcia slova, 1 parameter
// bez navratovej hodnoty 
// na obrazovku vypise slovo na zadnom indexe
function slovo($text, $index){
    $slova = explode(" ", $text);
    echo $slova[$index];
}
slovo("lorem ipsum dolor", 2);    // dolor

// funkcia nahodny_text, bez parametrov
// navratova hodnota nude nahodny text
function nahodny_text(){
    $texty = [
        "lorem", "ipsum", "dolor", "sit", "amet", "et", "laborum"
    ];
    echo "texty"[ mt_rand(0, count($texty)-1) ];
}
nahodny_text();   // akykolvek nahodny text
nahodny_text();   // iny nahodny text

// funkcia pocitaj, 1 parameter preposlany referenciou
// bez navratovej hodnoty
// inkrementuje cislo o 1
function pripocitaj(&$x){
    echo $a;  // $a => 11
}
$a=10;
pripocitaj($a);
echo $a;   // $a => 11
?>