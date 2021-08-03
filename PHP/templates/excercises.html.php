<div>
	<h4>Users:</h4>
	<?php foreach ($excercises as $excercise): ?>
		<span>
		    <p>
		        <?=htmlspecialchars($excercise['name'], ENT_QUOTES, 'UTF-8')?>
			    <form action="../model/deleteExcercise.php" method="post">
				<input type="hidden" name="id" value="<?=$excercise['id'] ?>">
				<input type="submit" value="Delete">
				</form>
		    </p>
		</span>
	<?php endforeach; ?>
</div>