<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Contact - by Lance Seo</title>
</head>
<body>

    <header>
        <div class="nav">
            <?php
            include 'header.php';
            ?>
        </div>
        <img src="assets/images/contact-image.png">
    </header>

    <div class="contact_main">
        <div class="c1">
            <h1>Visit us!</h1>
            Monday – Friday  |  10am – 9pm<br>
            Saturday  |  10am – 8pm <br>
            Sunday  |  11am – 7pm <br>
            Closed Thanksgiving Day, Christmas Day and Easter Day <br><br>
            1625 Post St <br>
            San Francisco, CA 94115<br><br>
            949.800-3111<br><br>
            <a href="mailto:order@mboutique.com">order@mboutique.com</a><br><br>
            Send your questions, comments and
            flavor suggestions or place an order!
        </div>
        <form>
            <h1>Contact Form</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea><br>
            <input type="submit" value="SEND">
        </form>
        <img src="assets/images/macarons-image.png">
    </div>

    <footer>
        <?
        include 'footer.php'
        ?>
    </footer>

</body>
</html>