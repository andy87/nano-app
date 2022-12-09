<?php

use nano\Components\Web\View;

/**
 * @var View $this
 * @var string $class
 * @var string $method
 */

echo $this->render('_frame');
echo $this->render(View::DIR . '/_common/blackBox');
?>

<br> __FILE__ : <?= __FILE__ ?>
<br> Class : <?= $class?>
<br> Method : <?= $method ?>()

