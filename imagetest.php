<?php


require('lib/php/autoload.php');
    
$content = '<p>Hold it now hold it now. hit it!</p>
<p>:)</p>
<p>pretty good. :P</p>
<p><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/1f422.svg?v=1.2.4" type="image/svg+xml" standby=":turtle:">:turtle:</object><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/1f422.svg?v=1.2.4" type="image/svg+xml" standby=":turtle:">:turtle:</object><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/1f422.svg?v=1.2.4" type="image/svg+xml" standby=":turtle:">:turtle:</object></p>
<p><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/1f601.svg?v=1.2.4" type="image/svg+xml" standby=":grin:">:grin:</object></p>
<p><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/1f422.svg?v=1.2.4" type="image/svg+xml" standby=":turtle:">:turtle:</object><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/263a.svg?v=1.2.4" type="image/svg+xml" standby=":relaxed:">:relaxed:</object><object class="emojione" data="//cdn.jsdelivr.net/emojione/assets/svg/1f62d.svg?v=1.2.4" type="image/svg+xml" standby=":sob:">:sob:</object></p>';

$value = Emojione\Emojione::imageToShortname($content);

/*
$pattern = '/<object class=\"emojione\"[^>]*>(.*?)<\/object>/S';
$replacement = 'x${1}x';
$value = preg_replace($pattern, $replacement, $content);
*/
echo $value;

exit;
    
?>