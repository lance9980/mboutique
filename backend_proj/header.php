<header>
    <div class="nav">
        <ul>
    <?
    foreach ($mArray as $keys=>$values) {
//        if ($values['default'] && basename($_SERVER['PHP_SELF']) === 'index.php') {
//            print("<li>".$values['text']."</a>");
//        }
//        else {
        print("<li><a href='index2.php?page=".$keys."'>".$values['text']."</a>");
//       }
    }

    ?>
        </ul>
    </div>
</header>
