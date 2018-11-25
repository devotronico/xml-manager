<?php

/*
//$arr = json_decode($xmlstring,TRUE);
echo '<br><br>---------- From String ----------';
$xmlstring = file_get_contents('test.xml');
$xmlFromString = simplexml_load_string($xmlstring); 

foreach( $xmlFromString as $x){

    echo '<p>'.$x->id.'</p>';
    echo '<p>'.$x->name.'</p>';
    echo '<p>'.$x->address->zipcode.'</p>';
    echo '<p>'.$x->address->city.'</p>';
}
*/

echo '<br><br>---------- From File ----------';

$xmlFromFile = simplexml_load_file('users.xml'); 




// $selezionato = $xmlFromFile->xpath('//num[.>12]/preceding-sibling::* |  //num[.>12]/following-sibling::*');
$selezionato = $xmlFromFile->xpath('//num[.>12]');
                                   

// $selezionato = $xmlFromFile->xpath('/users/user[@level>10]/name');

echo '<pre>';print_r( $selezionato );

/*
$xmlFromFile->addAttribute('year','2019');

// Aggiungere un nuovo contenitore utente e il suo contenuto
$nuovoUtente = $xmlFromFile->addChild('user');
$nuovoUtente->addChild('id', '3');
$nuovoUtente->addChild('name', 'foo');
$indirizzo = $nuovoUtente->addChild('address');
$indirizzo->addChild('zipcode', '10349');
$indirizzo->addChild('city', 'Bari');
*/


/*
foreach( $xmlFromFile as $x) :

 
    $x->address->addChild('civico',rand(1,9));


    if ( $x->name == 'lin' ) {
    
        $x->name->addAttribute('gender', 'female'); 
    } else {
        $x->name->addAttribute('gender', 'male'); 
    }
   
    echo '<p>id: '.$x->id.'</p>';
    echo '<p>nome: '.$x->name.' - gender: '.$x->name['gender'].'</p>';
    echo '<p>zipcode: '.$x->address->zipcode.'</p>';
    echo '<p>civico: '.$x->address->civico.'</p>';
    echo '<p>city: '.$x->address->city.'</p>';
    echo '--------------------';
endforeach;
*/
//aggiorna il file
//$xmlFromFile->asXML('users.xml');

?>


<?php
/*
echo '<br><br>---------- From File ----------<br>';
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie[0]->plot;
*/







/*
  die( $ );
  die( '' );
  var_dump( $ );
  echo '<pre>';print_r( $ );
  if ( isset( $ )) { var_dump( $ ); echo '<pre>';print_r( $ ); die(); }
 
 $test = "";
if ( is_null( $var )) {$test .= "null, ";}
if ( isset( $var )) { $test .= "settata, "; }
if ( !$var ) {$test .= "false, ";} 
if ( empty( $var )) {$test .= "empty, ";}
echo $test;
 
 */

?>