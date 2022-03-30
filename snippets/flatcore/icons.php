<?php
echo '<div class="scroll-container">';
echo '<div class="card-columns custom-columns">';
foreach($icon as $k => $v) {

    echo '<div class="card text-center mb-2">';
    echo '<div class="card-body">';
    echo '<span class="text-secondary h1">'.$v.'</span>';
    echo '<p class="card-text"><code>$icon[\''.$k.'\']</code></p>';
    echo '</div>';
    echo '</div>';

}
echo '<div class="w-100 p-4"></div>';
echo '</div>';
echo '</div>';