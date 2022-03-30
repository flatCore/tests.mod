<?php
$readme = file_get_contents("../modules/tests.mod/README.md");

echo '<div class="card p-3">';
$Parsedown = new Parsedown();
echo $Parsedown->text($readme);
echo '</div>';