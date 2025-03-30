<?php

use Wizardbeard\PhpHappyPath\Core\Flash;

$body = '<p>This is the $body variable in the index.php template.</p>';
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
</body>
