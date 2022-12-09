<?php

/**
 * @var View $this
 * @var string $content
 */

use andy87\nano\components\app\View;

?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title><?= View::$title ?></title>
        <link href="/css/styles.css" rel="stylesheet">
    </head>
    <body>
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

        <div id="resources">
            <script src="/js/scripts.js" type="text/javascript"></script>
        </div>
    </body>
</html>