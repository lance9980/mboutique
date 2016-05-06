<?php
$mArray= [
    'welcome'=>['text'=>'Welcome','url'=>'index.php','default'=>true],
    'macarons'=>['text'=>'Our Macarons','url'=>'our_macarons.php'],
    'gifts'=>['text'=>'Gifts & Parties','url'=>'gift_parties.php'],
    'contact'=>['text'=>'Contact','url'=>'contact.php']
    ];
?>
<ul>
<?
foreach ($mArray as $keys=>$values) {
    if ($values['default'] && basename($_SERVER['PHP_SELF']) === 'index.php') {
        print("<li>".$values['text']."</a>");
    }
    else {
        print("<li><a href=".$values['url'].">".$values['text']."</a>");
    }
}

?>
</ul>
