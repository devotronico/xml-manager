<?php
$nl = '<br>';
$parser = xml_parser_create();

// secondo argomento è la funzione di apertura di un elemento 
// terzo argomento è la funzione di apertura di un elemento 
xml_set_element_handler($parser, "apertura_elemento", "chiusura_elemento");

//cattura il valore dei nodi
xml_set_character_data_handler($parser, "dati_elemento");


// Tenta di aprire il file xml
if ( !($handle = fopen('users.xml', 'r')) ) {
    die('impossibile aprire il file');
}

while( $data = fread($handle, 4096) ) {
    xml_parse($parser, $data);
}

xml_parser_free($parser);



// Tag di apertura
function apertura_elemento($parser, $nome_elemento, $attributi) {

    if( !empty($nome_elemento) ) {
        echo 'aperto '.$nome_elemento.'<br>';
        // attributi es. <user mioattributo="red">
        if( count($attributi) ) {
            foreach($attributi as $nome_attributo =>$attributo ) {
                echo $nome_attributo.': '.$attributi[$nome_attributo].'<br>';
            }
        }
    }
}

// Valore contenuto nei Tag/Nodi
function dati_elemento($parser, $dati) {

    if( !empty($dati) ) {
        echo 'valore: '.$dati.'<br>';
    }
}

// Tag di chiusura
function chiusura_elemento($parser, $nome_elemento) {

    if( !empty($nome_elemento) ) {
        echo 'chiuso '.$nome_elemento.'<br>';
    }
}