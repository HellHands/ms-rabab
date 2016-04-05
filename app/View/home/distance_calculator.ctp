<script>
function add_school_for_distance(id)
{
	$('#distance_calculator').append('<tr><td></td><td><strong>School # '+id+' </strong><input type="text" style="width:250px;" id="distance_to_'+id+'" name="distance_to[]" value="" /></td></tr>');
	var y = id+1;
	
	$('#distance_from_func').attr('onClick','add_school_for_distance('+y+')');
	
	$('#submit_form_button').attr('onClick','submit_query('+id+')');
}

function submit_query(id)
{
	var distance_from = $('#distance_from').val();
	var distance_to = new Array();
	for (var x=0;x<id; x++ )
	{
		var y = x+1;
		distance_to[x] = $('#distance_to_'+y).val();
	}
	//alert(distance_to +' - '+distance_from );
	
	$('.reports').html('<img src="<?php echo $this->webroot?>img/loading.gif">');
	
	$.ajax({
            url: '<?php echo $this->webroot?>home/view_gps_distances/'+distance_from+'/'+distance_to,
            type: "GET",
            cache: false,
            success: function (html) {
                
				$('.reports').html(html);
                $('.reports').show(2000);
			},
            error: function(xhr, ajaxOptions, thrownError){
            }
        });
}
</script>
<table id="distance_calculator">
<tr>
<td></td>
<td><a href="javascript:void(0);" id="distance_from_func" onClick="add_school_for_distance(2)">Add School</a></td>
</tr>
<tr>
<th>Semis Code Of School To Calculate Distance From</th>
<th>Semis Code Of Schools To Calculate Distance To</th>
</tr>
<tr>
	<td><strong>From The School</strong> <input type="text" style="width:250px;" id="distance_from" name="distance_from" value="" /></td>
	<td>
		<strong>School # 1 </strong><input style="width:250px;" type="text" id="distance_to_1" name="distance_to[]" value="" />
	</td>
</tr>
</table>
<table>
<tr><td width="50%" ></td><td width="50%"><input id="submit_form_button" style="width:100px;" type="button" value="submit" onClick="submit_query(1);" /></td></tr>
</table>
<div class="reports"></div>
