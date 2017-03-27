<div class="row" id="content">
	<div class="medium-7 small-6 columns large-7 columns">
		<div class="row">
			<?php $this->load->view('blocks/slider'); ?>
		</div>
		<div class="row">
			<?php $this->load->view('blocks/content')?>
		</div>
	</div>
	<div class="medium-offset-1 large-offset-1 medium-4 small-6 large-4 columns">
		<div id="lastNews" class="row box">
			<?php $this->load->view('blocks/lastnews')?>
		</div>
		<div class="row">
			<?php $this->load->view('blocks/joinus')?>
		</div>
		<div class="row">
			<?php $this->load->view('blocks/vote')?>
		</div>
		<div class="row">
			<?php $this->load->view('blocks/partners')?>
		</div>
	</div>
</div>