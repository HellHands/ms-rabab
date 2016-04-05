<?php if (isset($union_councils_names)) { ?>
	
				<option selected="selected" value="" >No Filter</option>
				<?php foreach($union_councils_names as $union_council) { ?>
					<option value="<?php echo $union_council['SemisCodeUc']['uc_name'];?>" ><?php echo $union_council["SemisCodeUc"]["uc_name"]; ?> </option><?php } ?>
	
<?php } ?>