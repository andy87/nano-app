<?php

use nano\Components\Web\View;

/**
 * @var View $this
 * @var string $class
 * @var string $method
 */

echo $this->render('~views/_common/_menu');

?>

<br> __FILE__ : <?= __FILE__ ?>
<br> Class : <?= $class?>
<br> Method : <?= $method ?>()

