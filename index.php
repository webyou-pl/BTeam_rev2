<?php
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Nazwa Sara</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <div id="slider" class="text-center">
                <p>slider</p>
            </div>
        </header>

        <section id="nazwa-sekcji">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p>sekcja</p>
                    </div>
                </div>
            </div>
        </section>


        <?php echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
     echo $template_end_body; ?>
</html>