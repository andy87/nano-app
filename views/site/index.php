<?php

use nano\Components\Web\View;

/**
 * @var View $this
 * @var string $class
 * @var string $method
 */

?>


<div class="block__youTube">
    <img class="b_youTube--mask" src="/img/youtube_mask853x480.jpg" alt="/">
    <iframe class="b_youTube--frame" src="https://vk.com/video_ext.php?oid=-96457590&id=456240520&hash=588eaf98b0237b00&hd=2"  allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
</div>

<style>
    .block__youTube {
        position: relative;
        display: inline-block;
        z-index: 1;
    }
    .b_youTube--mask {
        position: relative;
        width: 100%;
        height: auto;
        max-width: 853px;
        z-index: 5;
    }
    .b_youTube--frame{
        position: absolute;
        z-index: 10;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>