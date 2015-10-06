<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container-fluid">

	<div class="panel-group">
		
		<div class="panel panel-default">
			<div class="panel-body">
				
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive"> <?php echo $tblGrid; ?></div>
				<?php $options = array('' => 'Select', '10' => '10', '20' => '20', '50' => '50', '100' => '100'); ?>
				<?php echo form_open('Main/getVoters'); ?>
				<?php echo form_dropdown('sel', $options, '', array('onChange' => 'this.form.submit()')); ?>
				</form>
				<?php echo $links; ?>
			</div>
		</div>
	</div>
	
	<!--MODAL DETAILED VIEW-->
	<div id="voterView" class="modal fade" role="dialog">
		<div class="modal-dialog modal-xs">
			<!--MODAL CONTENT-->
			<div class="modal-content"></div>
		</div>
	</div>
	
</div>