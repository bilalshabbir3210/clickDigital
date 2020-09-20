<!--Extends Basic Template !-->
<?= $this->extend('layouts/base')?>

<!--Render Title to Basic Template !-->

<?= $this->section('title')?>
	<?= $title ?>
<?php $this->endSection()?>	

<!--Render Body of Basic Template !-->

<?= $this->section('content')?>
<div class="content">
	
<?= $this->include('layouts/top-nav')?>

<?= $this->include('layouts/menu')?>

<?= $this->include('layouts/slider')?>

<?= $this->include('layouts/services')?>

<?= $this->include('layouts/counters')?>

<?= $this->include('layouts/team')?>

<?= $this->include('layouts/contact-section')?>

<?= $this->include('layouts/footer')?>
			
	</div>
</div>
<?= $this->endSection()?>