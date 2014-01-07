<?php
	$presenter = new Rtablada\CommentAllThings\DefaultPresenter($commenter);
?>

<?php if ($commenter->hasComments()): ?>
	<ul class="comments">
		<?php echo $presenter->renderComments() ?>
	</ul>
<?php endif ?>

<?php echo $presenter->renderCommentForm() ?>
