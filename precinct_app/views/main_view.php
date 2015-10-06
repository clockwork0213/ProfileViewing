<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>
	.pagination {
		margin: 0px 0;
	}
	.table {
		margin-bottom: 5px;
	}
	#form_search {
		display: inline;
	}
</style>

<div class="container-fluid">
	
	<div class="well well-sm"><!--well-->
	
		<div class="panel-group">
			
			<div class="panel panel-default">
				<div class="panel-body">
					<?php echo form_open('Main/show_main', array('class' => 'form-horizontal', 'role' => 'form')); ?>
					<div class="form-group">
						<div class="col-xs-12">
							<?php echo form_input(array('name' => 'input_ln', 'placeholder' => 'Last Name', 'class' => 'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<?php echo form_input(array('name' => 'input_fn', 'placeholder' => 'First Name', 'class' => 'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<?php echo form_input(array('name' => 'input_mn', 'placeholder' => 'Middle Name', 'class' => 'form-control')); ?>
						</div>
					</div>
					<?php echo form_submit('btn_search', 'Filter', array('class' => 'btn btn-sm btn-info')); ?>
					<a href="<?php echo base_url() . 'Main/show_main'; ?>" class="btn btn-sm btn-info">Reload List</a>
					<?php //echo form_button('btn_reload', 'Reload List', array('class' => 'btn btn-sm btn-info', 'onclick' => base_url() . 'Main/show_main')); ?>
					<?php echo form_reset('btn_clear', 'Clear', array('class' => 'btn btn-sm btn-info')); ?>
					</form>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive"> <?php echo $tblGrid; ?></div>
					<?php $options = array('' => 'Select', '10' => '10', '20' => '20', '50' => '50', '100' => '100'); ?>
					<?php echo form_open('Main/show_main'); ?>
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
</div>