<?php foreach ($users as $user): ?>
    <p>
        <?=htmlspecialchars($user, ENT_QUOTES, 'UTF-8')?>
    </p>
<?php endforeach; ?>
