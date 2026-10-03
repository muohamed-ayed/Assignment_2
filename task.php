<?php

function addcontact($book ,$name,$phone){

$book [$name]= [
    "phone"=> $phone,
    "date"=> date("Y-m-d"),
];
return $book;
};

function searchcontact($book,$filterfn){
    return array_filter($book, $filterfn, ARRAY_FILTER_USE_KEY);
};



$contacts = [];
  $contacts = addcontact($contacts,"mohamed","01289976454") ;
  $contacts = addcontact($contacts,"ali","01279945362") ;
  $contacts = addcontact($contacts,"ahmed","01075532964") ;
  $contacts = addcontact($contacts,"mahmoud","01156764853") ;
  $contacts = addcontact($contacts,"sara","01545678345") ;
$output = [];
foreach ($contacts as $name => $value) {
    $output[] = "$name: {$value['phone']} , {$value['date']}";
};

$filter = searchContact($contacts, function($name) {
    return str_starts_with($name, 'm');
});

echo "[".   implode("||", $output) ."]" ."<br>" ;

echo "<hr>";

foreach ($filter as $name => $value) {
    echo "Name: $name | Phone: {$value['phone']} | Date: {$value['date']}<br>";
}




?>