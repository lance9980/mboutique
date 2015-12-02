<?php
//***** $mArray already defined in header.php
//$mArray= [
//    'welcome'=>['text'=>'Welcome','url'=>'index.php','default'=>true],
//    'macarons'=>['text'=>'Our Macarons','url'=>'our_macarons.php'],
//    'gifts'=>['text'=>'Gifts & Parties','url'=>'gift_parties.php'],
//    'contact'=>['text'=>'Contact','url'=>'contact.php']
//];

//$the_page = $_GET['page'];
//var_dump($the_page);
//print($mArray['welcome']['url']);

if (empty($_GET['page'])) {
    $page_to_load = '404.php';
}
else {
    if (isset($mArray[$_GET['page']])) {
        $page_to_load = $mArray[$_GET['page']]['url'];
    }
    else {
        $page_to_load = '404.php';
    }
}

include($page_to_load);


print_r($_POST);

?>

