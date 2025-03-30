<?php

include(__DIR__ . '/../_head.php');

use Wizardbeard\PhpHappyPath\Core\Flash;

$body = '<p>This is the $body variable in the index.php template.</p>';
$footer = '<hr/><p><b>P.H.P. Happy Path</b> <i>v' . $version . '</i></p>';
?>
<body>
    <div>
        <p>
            <b>Message:&nbsp;</b><?= Flash::getMessage() ?>
        </p>
    </div>
    <h1>PHP Happy Path</h1>
    <div>
        <?= $body ?>
    </div>
    <div>
        <?= $footer ?>
    </div>
    <div>
        <h3>Routes</h3>
        <?= json_encode($routes) ?>
    </div>
</body>
