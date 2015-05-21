	</div>
	
	
	<!------------------------------ Right Side ------------------------------>
	<div class="col-xs-12 col-sm-12 col-md-4 hidden-xs hidden-sm">
		<?=$this->load->view('authentication/login')?>
		
		<div class="panel panel-success">
			<div class="panel-heading">Day Online</div>
			<div class="panel-body">
				<b>DAY ONLINE: 
				<?php
					$startDay = new DateTime('2015-05-17');
					$nowDay = new DateTime();
					echo $startDay->diff($nowDay)->days;
				?> DAYS</b>
			</div>
		</div>
		
		<div class="panel panel-success">
			<div class="panel-heading">HYIP Monitors</div>
			<div class="panel-body">
				HYIP.COM<br>
				HYIPS.COM<br>
			</div>
		</div>
		
		<?php if($this->router->class != 'investment'):?>
		<div class="panel panel-success">
			<div class="panel-heading">Calculate Your Profit</div>
			<div class="panel-body">
				<?=$this->load->view('calculate_profit')?>
			</div>
		</div>
		<?php endif;?>
	</div>
</div>