<div>
	<h4>Users:</h4>
	<?php foreach ($excercises as $excercise): ?>

	    <p>
	        <?=htmlspecialchars($excercise, ENT_QUOTES, 'UTF-8')?>
	    </p>
	<?php endforeach; ?>
</div>