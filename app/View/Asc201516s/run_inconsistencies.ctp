<div class="row" >
<div style="margin-top:20px;"></div>
<table class="table table-condensed table-bordered" style="font-size: 16px; background: #fff;" id="example">
	<thead>
		<th>SEMIS Code</th>
		<th>Errros</th>
	</thead>
	<tbody>
	<?php
	if(!empty($checksArr)){
		foreach ($checksArr as $key => $value) {
			?>
			<tr><td align="center"><strong><?= $value['semiscode']; ?></strong></td>
			<td>
			<?php

			$v = implode(' ', @$value['errors']); 
			echo @$v;
			?>
			</td></tr>
			<?php
		}
	}
	?>
	</tbody>
</table>

</div>
