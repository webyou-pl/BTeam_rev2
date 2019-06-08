<?php
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>BTeam</title>
    <?php echo $template_end_head; ?>
           <header id="hea[der">
            <?php echo $nav_menu; ?>

    <body>
 
        

        <section class="main" id="main">
            <div class="col-8 main__content">
                <h1 class="main__title">BTeam</h1>
                <p class="main__text">Just a random text here for example.</p>
            </div>
        </section>

        


        <?php echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
     echo $template_end_body; ?>
</html>