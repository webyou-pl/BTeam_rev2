<?php
$address = 'https://'.$_SERVER['SERVER_NAME'].'/template-webyou';

$template_start_head = ' 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Krzysztof Baraniecki and Andrzej Mazurkiewicz - webyou.pl">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="'.$address.'/build/main.css'.'">
';

$template_end_head = '
    <link rel="apple-touch-icon" sizes="180x180" href="'.$address.'/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="'.$address.'/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="'.$address.'/images/favicon-16x16.png">
    <link rel="mask-icon" href="'.$address.'/images/safari-pinned-tab.svg" color="#e1a1e1">
    <meta name="msapplication-TileColor" content="#e1a1e1">
    <meta name="theme-color" content="#ffffff">
</head>
';

$template_start_body = '

';
$template_end_body = '
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script type="text/javascript" src="'.$address.'/js/main.js"></script>
</body>
';

$nav_menu = '
    <nav id="menu" class="">
        <ul>
            <li><a href="'.$address.'/index.php">Strona główna</a></li>
            <li><a href="'.$address.'/subpages/nazwa.php">Link</a></li>
        </ul>
    </nav>
';

$cta = '
    <section id="cta">
        <div class="trianglesInImages-up"></div>
            <div class="container text-center">
                <p class="mb-5 font-weight-bold">Donec commodo viverra metus a iaculis. Cras scelerisque risus ac mi posuere, sit amet sollicitudin magna ultricies. Nunc elementum efficitur lectus in mattis. Ut feugiat aliquet rutrum. Praesent condimentum velit ut urna blandit scelerisque. Duis condimentum tortor purus, in sodales ante ornare ac. Sed sit amet sem dapibus, pharetra quam id, interdum risus.</p>
                <a href="#!" class="btn btn-primary">kontakt</a>
            </div>
        <div class="trianglesInImages-down"></div>
    </section>
';

$footer = '
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>footer</p>
                </div>
        </div>
    </footer>
';

$socialMedia_fix = '
    
';
	

$template_copyright = '	    
    <div id="copyright">
        <div class="container text-center">
            ©2019 <a href="http://www.webyou.pl" target="_blank" >www.webyou.pl</a> - wszelkie prawa zastrzeżone. Projekt zrealizowany przez zespół <a href="http://www.webyou.pl" target="_blank" ><strong>webyou.pl</strong></a>.
        </div>  
    </div>  
';	

$breadcrumbs = '
    <div id="breadcrumbs">
        <p>breadcrumbs</p>
    </div>
';
?>



