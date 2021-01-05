<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Générateur</title>
        <link rel="stylesheet" href="http://localhost:63342/Dev-app-dyna/MVC-Hello-World/Static/style.css"/>
    </head>
    <body>
        <?php Vue::montrer('standard/entete'); ?>
        <?php echo $A_vue['body'] ?>
        <?php Vue::montrer('standard/pied'); ?>
    </body>
</html>