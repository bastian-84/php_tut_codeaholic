<?php

// while

// Loop with $counter
/* $iCounter = 0;
while($iCounter < 10){
    echo 'Counter = ' . $iCounter . '<br />';
    $iCounter++;
    if( $iCounter >= 6){
        break;
    }
} */
/* $iCounter = 0;
$bLoop = true;
while($bLoop == true){
    echo 'Counter = ' . $iCounter . '<br />';
    $iCounter++;
    if( $iCounter >= 6){
        $bLoop = false;
    }
} */

// do - while

// for

// foreach
/* $fruits = array('Banana', 'Apple', 'Limette');
foreach ($fruits as $fruit ) {
    echo  $fruit . '<br />';
}; */

// Iterate Over associative array.
$arrPerson = array(
    'name' => 'Claire',
    'surname' => 'Redfield',
    'age' => '29',
    'hobbies' => array(
        'Shooting range',
        'Riddles'
    )
);
# var_dump($arrPerson);
foreach($arrPerson as $key => $value){
    if($key === 'hobbies'){
        break;
    }
    echo $value . '<br />';
}