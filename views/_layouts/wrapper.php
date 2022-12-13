<?php

/**
 * @var View $this
 * @var string $content
 */

use nano\Components\Web\View;

?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="<?= View::$charset ?>"/>
        <title><?= View::$title ?></title>
        <!--link href="/css/styles.css" rel="stylesheet"-->
    </head>
    <body>
        Layout <?= __FILE__ ?>
        <header>
            <nav>
                <!-- nav -->
            </nav>
        </header>

        <main>
            <?= $content ?>
        </main>

        <footer>
            <!-- footer -->
        </footer>

        <!--div id="resources">
            <script src="/js/scripts.js" type="text/javascript"></script>
        </div-->
    </body>
</html>