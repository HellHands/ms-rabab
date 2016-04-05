
<div style="margin-top:20px;"></div>

<div style="margin-top:20px;"></div>
<center><h1><small>Comparison of <br>Monitoring Forms and Census Forms <br>2015-16</small></h1>
<?php if($res >= 80) { ?>
	<button type="button" class="btn btn-success" aria-label="Left Align">
	  <span class="glyphicon glyphicon glyphicon-star" aria-hidden="true"></span> Overall Accuracy = <?= $res.'%'; ?>
	</button>	
<?php 
}else{?>
	<button type="button" class="btn btn-danger" aria-label="Left Align">
	  <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Overall Accuracy = <?= $res.'%'; ?>
	</button>	
<?php
}?>
</center>
<table class="table table-condensed table-bordered" id="example" style="background: #fff;">
	<thead>
		<th style="text-align: left !important;">School SEMIS Code</th>
		<th style="text-align: left !important;">Data Accuracy (%)</th>
	</thead>
	<tbody>
	<?php foreach ($checksArr as $key => $value) { ?>
		<tr>
			<td align="left"><strong><?= $value['semiscode'];?></strong></td>
			<td><?= $value['data_acc'].'%'; ?></td>
		</tr>
	<?php
	} ?>
	
	</tbody>
</table>