<?php

echo '<div class="subHeader">tests.mod</div>';

$bs_examples = glob("../modules/tests.mod/snippets/bootstrap5/*");
$fc_examples = glob("../modules/tests.mod/snippets/flatcore/*");

$snippet_preview = 'Chosse a file from the list';
$snippet_source = '';
$get_file = '';

if(isset($_GET['set']) && $_GET['set'] == 'fc') {
    $dir = '../modules/tests.mod/snippets/flatcore/';
}

if(isset($_GET['set']) && $_GET['set'] == 'bs5') {
    $dir = '../modules/tests.mod/snippets/bootstrap5/';
}

if(isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $get_file = $dir.$file;
}


echo '<div class="row">';
echo '<div class="col-3">';

echo '<div class="list-group mb-3">';
echo '<a href="#" class="list-group-item list-group-item-action disabled">flatCore</a>';
foreach($fc_examples as $fce) {

    $filename = basename($fce);

    $class_active = '';
    if($file == $filename) {
        $class_active = 'active';
    }

    echo '<a href="?tn=moduls&sub=tests.mod&a=start&set=fc&file='.$filename.'" class="list-group-item list-group-item-action '.$class_active.'">';
    echo $filename;
    echo '</a>';
}
echo '</div>';

echo '<div class="list-group">';
echo '<a href="#" class="list-group-item list-group-item-action disabled">Bootstrap5</a>';
foreach($bs_examples as $bse) {
    $filename = basename($bse);

    $class_active = '';
    if($file == $filename) {
        $class_active = 'active';
    }

    echo '<a href="?tn=moduls&sub=tests.mod&a=start&set=bs5&file='.$filename.'" class="list-group-item list-group-item-action '.$class_active.'">';
    echo $filename;
    echo '</a>';
}
echo '</div>';

echo '</div>';
echo '<div class="col-9">';

echo '<div class="card">';
echo '<div class="card-header">';
echo '<ul class="nav nav-tabs card-header-tabs">';
echo '<li class="nav-item"><a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#nav-preview">Preview</a></li>';
echo '<li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#nav-source">Source</a></li>';
echo '</ul>';
echo '</div>'; // card-header
echo '<div class="card-body">';

echo '<div class="tab-content" id="nav-tabContent">';

echo '<div class="tab-pane fade show active" id="nav-preview" role="tabpanel">';
if(is_file($get_file)) {
    include $get_file;
} else {
    echo '<p>Choose a file from the List</p>';
}
echo '</div>'; // tab-pane #nav-preview
echo '<div class="tab-pane fade" id="nav-source" role="tabpanel">';
echo '<pre class="code">';
$source = file_get_contents($get_file);
echo htmlentities($source);
echo '</pre>';
echo '</div>'; // tab-pane #nav-source

echo '</div>'; // tab-content

echo '</div>'; // card-body
echo '</div>'; // card

echo '</div>'; // col
echo '</div>'; // row