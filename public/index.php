<?php
    if (defined("DIR")) {

        require constant("DIR") . "vendor/autoload.php";

        define("__DIR", dirname(__FILE__) . DIRECTORY_SEPARATOR );
        
    } else {
        
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . "vendor/autoload.php";
        
        define("__DIR", dirname(__DIR__) . DIRECTORY_SEPARATOR );
    }
    

    const 
    __DS = DIRECTORY_SEPARATOR,
    __PARTIALS = __DIR . "partials" . __DS,
    __APP = __DIR . "app" . __DS,
    __MAIN = __PARTIALS . "main" . __DS,
    __SECTIONS = __PARTIALS . "sections" . __DS,
    __CHUNK = __PARTIALS . "chunk" . __DS,
    __ROOT = __DIR . "public" . __DS,
    PROJECT_NAME = "manage your time ",
    PROJECT_ID = "v ",
    PROJECT_BASE = "base-" . PROJECT_ID . "2.2.4", 
    PROJECT_V = PROJECT_NAME . "1.0";

    $params = [
        "AnimationsSetting",
        "ColorsSetting"
    ];

    $result = [];

    foreach ($params as $i => $paramValue) {
        
        if (isset($_COOKIE[$paramValue])) 

            if (!preg_match('/Default/',$_COOKIE[$paramValue]))

                $result[] = " ".$_COOKIE[$paramValue];

            else 

                $result[] = null;
        else
            $result[] = null;
    }

    $bodyClass = "class=\"body{$result[0]}{$result[1]}\"";

?>

<!DOCTYPE html>

<html lang="fr">

<?php require_once __PARTIALS . "manifest.php"?>

<?php require_once __MAIN . "head.php"?>

<body id="body" <?= $bodyClass ?>>

    <div id="app" class="app">

<?php require_once __MAIN . "header.php"?>


<?php require_once __SECTIONS . "main.php"?>

        
<?php require_once __MAIN . "footer.php"?>

        <div class="shortCuts-container">

<?php require_once __CHUNK . "helper.php"?>

<?php require_once __CHUNK . "setting.php"?>

        </div>

    </div>

<?php require_once __PARTIALS . "javascript.php"?>

</body>

</html>