<script>
		var talukasArray = new Array();
		<?php foreach($tehsils as $tehsil) { ?>
			talukasArray[<?php echo $tehsil["semisCodesDistrictTehsil"]["tehsil_id"]; ?>] = new Array();
			talukasArray[<?php echo $tehsil["semisCodesDistrictTehsil"]["tehsil_id"]; ?>]["district"] = "<?php echo $tehsil["semisCodesDistrictTehsil"]["district"]; ?>";
			talukasArray[<?php echo $tehsil["semisCodesDistrictTehsil"]["tehsil_id"]; ?>]["tehsil"] = "<?php echo $tehsil["semisCodesDistrictTehsil"]["tehsil"]; ?>";
		<?php } ?>
</script>

<?php 
	echo $this->Html->css('demo_page');
	echo $this->Html->css('demo_table');
?>

<!--script type="text/javascript" src="<?php //echo $this->webroot?>js/jquery.js"></script-->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.dataTables.js"></script>



	

<script type="text/javascript" charset="utf-8">
			
			(function($) {
			/*
			 * Function: fnGetColumnData
			 * Purpose:  Return an array of table values from a particular column.
			 * Returns:  array string: 1d data array 
			 * Inputs:   object:oSettings - dataTable settings object. This is always the last argument past to the function
			 *           int:iColumn - the id of the column to extract the data from
			 *           bool:bUnique - optional - if set to false duplicated values are not filtered out
			 *           bool:bFiltered - optional - if set to false all the table data is used (not only the filtered)
			 *           bool:bIgnoreEmpty - optional - if set to false empty values are not filtered from the result array
			 * Author:   Benedikt Forchhammer <b.forchhammer /AT\ mind2.de>
			 */
			$.fn.dataTableExt.oApi.fnGetColumnData = function ( oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty ) {
				// check that we have a column id
				if ( typeof iColumn == "undefined" ) return new Array();
				
				// by default we only wany unique data
				if ( typeof bUnique == "undefined" ) bUnique = true;
				
				// by default we do want to only look at filtered data
				if ( typeof bFiltered == "undefined" ) bFiltered = true;
				
				// by default we do not wany to include empty values
				if ( typeof bIgnoreEmpty == "undefined" ) bIgnoreEmpty = true;
				
				// list of rows which we're going to loop through
				var aiRows;
				
				// use only filtered rows
				if (bFiltered == true) aiRows = oSettings.aiDisplay; 
				// use all rows
				else aiRows = oSettings.aiDisplayMaster; // all row numbers
			
				// set up data array	
				var asResultData = new Array();
				
				for (var i=0,c=aiRows.length; i<c; i++) {
					iRow = aiRows[i];
					var aData = this.fnGetData(iRow);
					var sValue = aData[iColumn];
					
					// ignore empty values?
					if (bIgnoreEmpty == true && sValue.length == 0) continue;
			
					// ignore unique values?
					else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1) continue;
					
					// else push the value onto the result data array
					else asResultData.push(sValue);
				}
				
				return asResultData;
			}}(jQuery));
			
			function view_pdf(type)
			{
				
				if(type == "ddo")
				{
					var ddo_code = $("#ddo_code").val();
					if(!ddo_code)
					{
						$("#empty_ddo").attr("style","display:block;color:#ff0000;");
					}else
					{
						$("#empty_ddo").attr("style","display:none;color:#ff0000;");
						var url = <?php echo $this->webroot?>;
						url += "home/view_pdf/0/0/0/0/0/0/0/0/"+ddo_code;
						window.open(url, '_blank');
						window.focus();
					}
					
				}else
				{
					var id = 0;
					if(!id)
					{
						id = 0;
					}
					var prefix = $("#sel0").val();
					if(!prefix)
					{
						prefix = 0;
					}
					var school_name = $("input[name=search_browser]").val();
					if(!school_name)
					{
						school_name = 0;
					}
					var gender = $("#sel2").val();
					if(!gender)
					{
						gender = 0;
					}
					var level = $("#sel3").val();
					if(!level)
					{
						level = 0;
					}
					var district = $("#sel4").val();
					if(!district)
					{
						district = 0;
					}
					var tehsil = $("#sel5").val();
					if(!tehsil)
					{
						tehsil = 0;
					}
					var  uc = $("#sel6").val();
					if(!uc)
					{
						uc = 0;
					}
					
					var url = <?php echo $this->webroot?>;
					url += "home/view_pdf/"+id+"/"+district+"/"+tehsil+"/"+uc+"/"+prefix+"/"+school_name+"/"+level+"/"+gender;
					window.open(url, '_blank');
					window.focus();
				}
				
				
			}
			
			function update_tehsils(district)
			{
				var aData 
				var aData = new Array();
				if(district == "")
				{	
					var r='<option value="">No Filter</option>';
					for ( x in talukasArray)
					{
						r += '<option value="'+talukasArray[x]["tehsil"]+'">'+talukasArray[x]["tehsil"]+'</option>';
					}
				}else
				{
					var r='<option value="">No Filter</option>';
					for ( x in talukasArray)
					{
						if(talukasArray[x]["district"] == district)
						{
							r += '<option value="'+talukasArray[x]["tehsil"]+'">'+talukasArray[x]["tehsil"]+'</option>';
						}
					}
				}
				
				$("#sel5").html(r);
			}
			
			function update_ucs(taluka, level)
			{
				if(taluka == "")
				{
					taluka = 0;
				}
				$.ajax({
						url: '<?php echo $this->webroot?>home/update_uc_name_select/tehsilName/'+level+'/'+taluka,
						type: "GET",
						cache: false,
						success: function (html) {
						$("#sel6").html(html);
						},
						error: function(xhr, ajaxOptions, thrownError){
						}
					});
			}
			
			function fnCreateSelect( aData , a)
			{
				if(!(a == 4))
				{
					var r='<select style="vertical-align:middle;" id="sel'+a+'"><option value="">No Filter</option>', i, iLen=aData.length;
				}else
				{
					var r='<select style="vertical-align:middle;" id="sel'+a+'">', i, iLen=aData.length;
				}
				
				for ( i=0 ; i<iLen ; i++ )
				{
					r += '<option value="'+aData[i]+'">'+aData[i]+'</option>';
				}
				if(!(a == 4))
				{
					return r+'</select>';
				}else
				{
					return r+'<option value="">All</option></select>';
				}
			}
			
			var asInitVals = new Array();
			
			
			$(document).ready(function() {
				
				$("#sel4").change(function() {
					var value = $("#sel4").val();
					alert(value);
				});
				
				/* Initialise the DataTable */
				var oTable = $('#example').dataTable( {
					"sDom": '<"top"ipl>rt<"bottom"><"clear">',
					"oLanguage": {
						"sSearch": "Search all columns:"
					},	
					"bProcessing": true,
					"sPaginationType": "full_numbers"
				} );
				

				$("tfoot input").keyup( function () {
				/* Filter on the column (the index) of this element */
				oTable.fnFilter( this.value, 1 );
				} );
					
				/*
				 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
				 * the footer
				 */
				
				$("tfoot th").each( function ( i ) {
						if(!(i == 1))
						{
							
							this.innerHTML = fnCreateSelect( oTable.fnGetColumnData(i), i );
							
							if(i == 4)
							{
								oTable.fnFilter( "Umerkot", 4 );
							}
						// if(this.innerHTML == '<select><option value=""></option></select>')
						// {
							// this.innerHTML = fnCreateSelect( oTable.fnGetColumnData(i) );
						// }
						
						$('select', this).change( function () {
							
							if(i == 0)
							{
								// oTable.fnFilter( "", 2 );
								// $("#sel2").val("");
								oTable.fnFilter( "", 3 );
								$("#sel3").val("");
							}
							
							// if(i == 2)
							// {
								// oTable.fnFilter( "", 0 );
								// $("#sel0").val("");
								// oTable.fnFilter( "", 3 );
								// $("#sel3").val("");
							// }
							
							if(i == 3)
							{
								oTable.fnFilter( "", 0 );
								$("#sel0").val("");
								// oTable.fnFilter( "", 2 );
								// $("#sel2").val("");
							}
							
							
							if(i == 4)
							{
								oTable.fnFilter( "", 5 );
								oTable.fnFilter( "", 6 );
								
								update_tehsils($(this).val());
								update_ucs($(this).val(), 1);
							}
							if(i == 5)
							{
								oTable.fnFilter( "", 6 );
								if($(this).val() == "")
								{
									update_ucs($("#sel5").val(), 1);
								}else
								{
									update_ucs($(this).val(), 2);
								}
							}
							
							oTable.fnFilter( $.trim($(this).val()), i );
							
							window.setTimeout(  
								function() {  
								var length_taluka = $('#sel5 option').size();
								length_taluka = length_taluka * (17.5);
								$("#sel5").attr("size",10);
								
								var length_uc = $('#sel6 option').size();
								length_uc = length_uc * (17.5);
								$("#sel6").attr("size",10);
								$("#sel5").attr("style","vertical-align:middle; height:"+length_uc+"px;");
								$("#sel6").attr("style","vertical-align:middle; height:"+length_uc+"px;");
								$("#sel0").attr("style","vertical-align:middle; height:"+length_uc+"px;");
								$("#sel2").attr("style","vertical-align:middle; height:"+length_uc+"px;");
								$("#sel3").attr("style","vertical-align:middle; height:"+length_uc+"px;");
								$("#sel4").attr("style","vertical-align:middle; height:"+length_uc+"px;");
								},  
								2000
							);
							
							
						} );
						}
					} );
				
				
				$("tfoot input").each( function (i) {
					
					asInitVals[i] = this.value;
					
				} );
				
				$("tfoot input").focus( function () {
					if ( this.className == "search_init" )
					{
						this.className = "";
						this.value = "";
					}
				} );
				
				$("tfoot input").blur( function (i) {
					if ( this.value == "" )
					{
						this.className = "search_init";
						this.value = asInitVals[$("tfoot input").index(this)];
					}
				} );
				
				$("#sel0").attr("size",10);
				$("#sel2").attr("size",10);
				$("#sel3").attr("size",10);
				$("#sel4").attr("size",10);
				
				window.setTimeout(  
						function() {  
						var length_taluka = $('#sel5 option').size();
						length_taluka = length_taluka * (17.5);
						$("#sel5").attr("size",10);
						
						var length_uc = $('#sel6 option').size();
						length_uc = length_uc * (17.5);
						$("#sel6").attr("size",10);
						$("#sel5").attr("style","vertical-align:middle; height:"+length_uc+"px;");
						$("#sel6").attr("style","vertical-align:middle; height:"+length_uc+"px;");
						$("#sel0").attr("style","vertical-align:middle; height:"+length_uc+"px;");
						$("#sel2").attr("style","vertical-align:middle; height:"+length_uc+"px;");
						$("#sel3").attr("style","vertical-align:middle; height:"+length_uc+"px;");
						$("#sel4").attr("style","vertical-align:middle; height:"+length_uc+"px;");
						},  
						2000
					);
				
				
			} );
			
			function populatte_select()
			{
			
					
			}
			
			function update_length()
			{
				
				
				var length_taluka = $('#sel5 option').size();
				length_taluka = length_taluka * (17.5);
				$("#sel5").attr("size",10);
				
				var length_uc = $('#sel6 option').size();
				length_uc = length_uc * (17.5);
				$("#sel6").attr("size",10);
				$("#sel5").attr("style","vertical-align:middle; height:"+length_uc+"px;");
				$("#sel6").attr("style","vertical-align:middle; height:"+length_uc+"px;");
				$("#sel0").attr("style","vertical-align:middle; height:"+length_uc+"px;");
				$("#sel2").attr("style","vertical-align:middle; height:"+length_uc+"px;");
				$("#sel3").attr("style","vertical-align:middle; height:"+length_uc+"px;");
				$("#sel4").attr("style","vertical-align:middle; height:"+length_uc+"px;");
				
				
			}
		</script>			
<div><a href="javascript:view_pdf();">View details in PDF</a> <br><label>DDO Code</label><input type="text" name="ddo_code" id="ddo_code" value="" class="ddo" ></input><a href="javascript:view_pdf('ddo');" >View DDO Schools</a></div>
<div id="empty_ddo" style="display:none;">The DDO Code Must not be empty.</div>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em; line-height:12px;">
	<thead>
		<tr>
			<th>Prefix</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Level</th>
			<th>District</th>
			<th>Taluka</th>
			<th>UC</th>
			<th width="15%">View Details</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach($results as $result) {
			echo '<tr><td>'.$result["semisUniversal2010"]["prefix"].'</td>'; 
			echo '<td>'.$result["semisUniversal2010"]["school_name"].'</td>'; 
			
			if($result["semisUniversal2010"]["gender_id"] == 1)
			{	
				echo '<td>Boys</td>';
			}elseif($result["semisUniversal2010"]["gender_id"] == 2){
				echo '<td>Girls</td>';
			}elseif($result["semisUniversal2010"]["gender_id"] == 3){
				echo '<td>Mixed</td>';
			}else
			{
				echo '<td></td>';
			}
			
			
			if($result["semisUniversal2010"]["level_id"] == 1)
			{	
				echo '<td>Primary</td>';
			}elseif($result["semisUniversal2010"]["level_id"] == 2){
				echo '<td>Middle</td>';
			}elseif($result["semisUniversal2010"]["level_id"] == 3){
				echo '<td>Elementary</td>';
			}elseif($result["semisUniversal2010"]["level_id"] == 4){
				echo '<td>High</td>';
			}elseif($result["semisUniversal2010"]["level_id"] == 5){
				echo '<td>Higher Secondary</td>';
			}else
			{
				echo '<td></td>';
			}
				echo '<td>'.$result["semisCodesDistrictTehsil"]["district"].'</td>'; 
				echo '<td>'.$result["semisCodesDistrictTehsil"]["tehsil"].'</td>'; 
				echo '<td>'.$result["SemisCodeUc"]["uc_name"].'</td>'; 
				echo '<td><a target="_blank" href="'.$this->webroot.'home/school_details/'.$result["semisUniversal2010"]["id"].'" >View Details(webpage)</a>'; 
				echo '<br><a target="_blank" href="'.$this->webroot.'home/view_pdf/'.$result["semisUniversal2010"]["id"].'/0/0/0/0/0/0/0" >View Details PDF</a></td>'; 
			}
		?>
	</tbody>
	<tfoot>
		<tr>
			<th></th>
			<th style="vertical-align:top;"><input type="text" name="search_browser" value="" class="search_init" /></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>
</table>