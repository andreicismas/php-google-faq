
<?php include 'indexfaq.php' ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="dist/app.css">
        <title>Google FAQ</title>
    </head>
    <body>
        <main>
            <div>
                <?php
                foreach ($faq as $single_faq) { ?>
                    <h2><?php echo $single_faq['question']; ?></h2>
                    <?php
                    foreach ($single_faq['answer'] as $paragraph) { ?>
                        <p><?php echo $paragraph; ?></p>
                        <?php
                        
                    }
                }
                ?>
            </div>
        </main>
      
    </body>
</html>