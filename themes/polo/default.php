<?php $this->inc('elements/header.php'); ?>

<div class="container" id="contenu">
	<?php 
		$cont = new Area('cont');
		$cont->display($c);
	?>
</div>

<?php $this->inc('elements/footer.php'); ?>