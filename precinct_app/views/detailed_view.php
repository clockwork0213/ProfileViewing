<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>
  .modal-header, h5, .close {
	  background-color: #46b8da;
	  color:white !important;
	  font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Voter's Detailed Information</h4>
</div>

<div class="modal-body">
	<div class="row">
		<div class="col-xs-12 col-xs-4 text-center">
			
			<img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($result['P1']); ?>" alt="" class="center-block img-circle img-responsive"/>
			<img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($result['S1']); ?>" alt="" class="center-block img-circle img-responsive"/>
			<!--<img src="<?php //echo site_url('../images/49.jpg') ?>" alt="" class="center-block img-circle img-responsive"/>-->
			<ul class="list-inline ratings text-center" title="Ratings">
			  <li><a href="#"><span class="glyphicon glyphicon-education"></span></a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-calendar"></span></a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-picture"></span></a></li>
			</ul>
		</div><!--/col-->

		<div class="col-xs-12 col-xs-8">
			<h2><?php echo $result['FFIRSTNAME'] . " " . $result['FLASTNAME'] ?></h2>
			<p><strong>ID: </strong> <?php echo $result['ID'] ?> </p>
			<p><strong>GENDER: </strong> <?php echo $result['SEX'] ?> </p>
			<p><strong>CIVIL STATUS: </strong> <?php echo $result['CIVILSTATUS'] ?></p>
		</div><!--/col-->          
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn btn-xs btn-info" data-dismiss="modal">Close</button>
</div>