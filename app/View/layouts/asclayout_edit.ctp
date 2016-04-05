<?php if(($this->Session->read('Auth.User.id'))== NULL){ $this->redirect('../home/index'); } ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Meta tags !-->
	<meta charset="utf-8">
    <?= $this->Html->meta(array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE-edge')); ?>
    <?= $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1')); ?>
	<?= $this->Html->meta(array('name' => 'robots', 'content' => 'noindex,nofollow')); ?>
	<?= $this->Html->meta('icon', $this->webroot.'images/rsu-favicon.ico'); ?>
			
	<!-- Title !-->	
	<title><?= $title; ?></title>
            
	<!-- Stylesheets !-->
    <?= $this->Html->css('/css/bootstrap.min.css'); ?>	
    <!--//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css-->
	<?= $this->Html->css('/css/dataTables.bootstrap.min.css'); ?>    
    <?= $this->Html->css('/css/form_custom.css'); ?>
    <?= $this->Html->css('/css/jquery-ui.css'); ?>
    <!--< ?= $this->Html->css('/css/jquery.timepicker'); ?>	-->
    <?= $this->Html->css('/css/bootstrap-datepicker.min.css'); ?>	
    <!--< ?= $this->Html->script('/js/script_tables.js'); ?> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body{
    	font-size: 12px !important;
    	color: #555 !important;
	    font-weight: normal !important;
    	font-family: "Open Sans", Arial, sans-serif !important;
    	background: url("<?= $this->webroot; ?>img/subtlenet2.png");
    }
    .noleftmargin input, .noleftmargin select{
    	margin-left: 0 !important;
    	padding: 6px 1px !important;
    	width: auto;
    }
    .noleftmargin input, select{
    	border:1px solid #ddd;
    	border-radius: 4px;
    	font-size: 12px;
    }
    /*input{
    	height: 30px !important;
	    padding: 5px 10px !important;
	    font-size: 12px !important;
	    line-height: 1.5 !important;
	    border-radius: 3px !important;
    }*/

    .form-control{
    	padding: 6px 2px;    	
    }
    .noleftmargin > tr > td{
    	vertical-align: middle !important;
    }

    .lead {
    	font-size: 16px !important;
    	color: #555 !important;
	    font-weight: normal !important;
    	font-family: "Open Sans", Arial, sans-serif !important;
    }
    .form-control2{
    	width: auto !important;
    	display: inline !important;
    	margin-left: 4px !important;
    }
    
    .row{
    	/*background-color: #F5FFFF;*/
    	margin-bottom: 10px;
    	/*border: 1px solid black;
    	padding: 14px 0 0 0;*/
    }
    .btn-primary{
    	margin-top: 10px;
    }
    #minheightcont{
    	min-height: 500px;
    }

    .form-inline .form-control{
    	width: 100%;
    }

    .ui-timepicker-wrapper{
    	width: 13.0em !important;
    }
    tr th {
    	text-align: center;
    	/* vertical-align: middle !important;*/
    }
    .container-fluid{
    	width: 98% !important;
    }

    .smallfont-table{
    	font-size: 12px !important;
    }
    .table-bordered>thead>tr>th {	    
	    background: lightgreen !important;
	}
	#example2{
		width: 100% !important;

	}
	#example3{
		width: 100% !important;
	}
	.hide {
	   position: absolute !important;
	   top: -9999px !important;
	   left: -9999px !important;
	}	

    </style>
</head> 

<!--Body starts here !-->
<!-- style="background: url('../../img/diagonal_bg_tile.jpg');" -->
<body>
<nav class="navbar navbar-default">
  	<div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
	      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      	</button>
	      	<a class="navbar-brand" href=<?= $this->webroot.'home/index';?>>RSU</a>
      	</div>
      	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      	<ul class="nav navbar-nav">
	        	<li><a href=<?= $this->webroot.'home/index';?>>Dashboard </a></li>
	        	
	      	</ul>	      
	      	<?php 
	      	$logout = $this->Session->read('Auth.User.id'); 
	      	if(isset($logout)){?>
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="#"><?= $username; ?></a></li>		       
			   	<li><a href="<?= $this->webroot.'users/logout'; ?>">Log out</a></li>		       
		    </ul><?php } ?>
      	</div>      	
  	</div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12" id="minheightcont">		
			<?= $this->Html->image('header.jpg', array(
				'class' => "img-thumbnail",
				'alt'   => "RSU, SEMIS",
				'width' => "100%"				
				)
			); ?>
			<?= $content_for_layout; ?>			
		</div>
	</div>
	
</div>

<br><br>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?= $this->Html->script('/js/jquery.min.js'); ?>
    <?= $this->Html->script('/js/jquery-ui.js'); ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?= $this->Html->script('/js/bootstrap.min.js'); ?>    
    <?= $this->Html->script('/js/jquery.maskedinput.js'); ?>
    <?= $this->Html->script('/js/bootstrap-datepicker.min.js'); ?>
    <!-- < ?= $this->Html->script('/js/jquery.timepicker.js'); ?>  -->
 	<?= $this->Html->script('/js/jquery.dataTables.min.js'); ?>
    <?= $this->Html->script('/js/dataTables.bootstrap.min.js'); ?>
    

    <script>
		$.fn.extend({ 
            disableSelection: function() { 
                this.each(function() { 
                    if (typeof this.onselectstart != 'undefined') {
                        this.onselectstart = function() { return false; };
                    } else if (typeof this.style.MozUserSelect != 'undefined') {
                        this.style.MozUserSelect = 'none';
                    } else {
                        this.onmousedown = function() { return false; };
                    }
                }); 
            } 
        });
    	//global variables!
		var tehsils_url  = window.location.protocol + "//" + window.location.host + '/asc201516s/get_tehsils/';
		var ucs_url      = window.location.protocol + "//" + window.location.host + '/asc201516s/get_ucs/';
		var statuses_url = window.location.protocol + "//" + window.location.host + '/asc201516s/get_statuses/';
		var tappas_url	 = window.location.protocol + "//" + window.location.host + '/asc201516s/get_tappas/';
		var dehs_url	 = window.location.protocol + "//" + window.location.host + '/asc201516s/get_dehs/';
		//alert(dehs_url);
		
		var username = '<?php echo $username; ?>';
		var uid      = <?php echo $uid; ?>;

		var govtmale;
		var govtfemale;
		var nongovtmale;
		var nongovtfemale;
		
		var nonteacher_male;
		var nonteacher_female;

		var total_teachers;
		var total_nonteachers;

		var total_enrollment;
		var headcount;
		function check_minteacher(evt)
		{
			/*if(!$(".teacher_name").val()){
				$(".teacher_name").attr('style', 'border-color: #a94442;');
				//$(".teacher_name").attr('style', '-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);');
				//$(".teacher_name").attr('style', 'box-shadow: inset 0 1px 1px rgba(0,0,0,.075);');
				return false;
			}else{*/
				return true;
			//}
		}

		function validate_page1(){
			var dp_name           = document.getElementById("Asc201516DpName").value;			
			var dp_name_length    = dp_name.length;			
			var dp_cnic           = document.getElementById("Asc201516DpCnic").value;
			var dp_designation    = document.getElementById("Asc201516Dpdesignations");			
			var strDesig          = dp_designation.options[dp_designation.selectedIndex].value;			
			var status_type       = document.getElementById("condition_select");
			var strStatusType     = status_type.options[status_type.selectedIndex].value;
			var status            = document.getElementById("status_select");
			var strStatus         = status.options[status.selectedIndex].value;
			var level             = document.getElementById("Asc201516DsiLevel");
			var strLevel          = level.options[level.selectedIndex].value;
			var administration    = document.getElementById("Asc201516DsiSchAdministration");
			var strAdministration = administration.options[administration.selectedIndex].value;
			var boundarywall      = document.getElementById("Asc201516BfiSchoolBoundarywall");
			var strBoundary       = boundarywall.options[boundarywall.selectedIndex].value;
			
			if(!dp_name || dp_name_length < 3){
				document.getElementById("Asc201516DpName").focus();
			}else if(!dp_cnic){
				document.getElementById("Asc201516DpCnic").focus();
			}else if(strDesig==0){
				document.getElementById("Asc201516Dpdesignations").focus();
			}else if(strStatusType==0){
				document.getElementById("condition_select").focus();
			}else if(strStatus==0){
				document.getElementById("status_select").focus();
			}else if(strLevel==0){
				document.getElementById("Asc201516DsiLevel").focus();
			}else if(strAdministration==0){
				document.getElementById("Asc201516DsiSchAdministration").focus();
			}else if(strBoundary==0){
				document.getElementById("Asc201516BfiSchoolBoundarywall").focus();
			}

			if((!dp_name) || (!dp_cnic) || (strDesig==0) || (strLevel==0) || (strAdministration==0) || (strBoundary==0) || (strStatusType==0) || (strStatus==0)){
				alert('Fill out required fields!');
				return false;
			}else{
				return true;
			} 	

		}

		function printFunction(){
			window.print();
		}

		function validate_page2(){
			
			var branched     = document.getElementById("Asc201516SchBranched");
			var strBranched  = branched.options[branched.selectedIndex].value;			
			var upgraded     = document.getElementById("Asc201516SchUpgraded");
			var strUpgraded  = upgraded.options[upgraded.selectedIndex].value;


			if(strBranched==0){
				document.getElementById("Asc201516SchBranched").focus();
			}else if(strUpgraded==0){
				document.getElementById("Asc201516SchUpgraded").focus();
			}

			if((strBranched==0) || (strUpgraded==0)){
				alert('Fill out required fields!');
				return false;
			}else{
				return true;
			} 	

		}

		function validate_page3(){
			/*var dp_name           = document.getElementById("Asc201516DpName").value;			
			var dp_cnic           = document.getElementById("Asc201516DpCnic").value;
			var dp_designation    = document.getElementById("Asc201516Dpdesignations");			
			var strDesig          = dp_designation.options[dp_designation.selectedIndex].value;			
			var level             = document.getElementById("Asc201516DsiLevel");
			var strLevel          = level.options[level.selectedIndex].value;
			var administration    = document.getElementById("Asc201516DsiSchAdministration");
			var strAdministration = administration.options[administration.selectedIndex].value;
			var boundarywall      = document.getElementById("Asc201516BfiSchoolBoundarywall");
			var strBoundary       = boundarywall.options[boundarywall.selectedIndex].value;
			
			if(!dp_name){
				document.getElementById("Asc201516DpName").focus();
			}else if(!dp_cnic){
				document.getElementById("Asc201516DpCnic").focus();
			}else if(strDesig==0){
				document.getElementById("Asc201516Dpdesignations").focus();
			}else if(strLevel==0){
				document.getElementById("Asc201516DsiLevel").focus();
			}else if(strAdministration==0){
				document.getElementById("Asc201516DsiSchAdministration").focus();
			}else if(strBoundary==0){
				document.getElementById("Asc201516BfiSchoolBoundarywall").focus();
			}

			if((!dp_name) || (!dp_cnic) || (strDesig==0) || (strLevel==0) || (strAdministration==0) || (strBoundary==0)){
				alert('Fill out required fields!');
				return false;
			}else{*/
				return true;
			//} 	

		}

		function Validation(){
			var table = document.getElementById("teachers_table");
			console.log(table);
			var rowCount = table.rows.length;
			rowCount = rowCount-1;
			//alert(rowCount);
			console.log(rowCount);
			var total_teachers = +$("#total_teachers").val();
			//alert(total_teachers);
			console.log(total_teachers);
			
			if(total_teachers != rowCount){
				alert('Total teachers not added!');
				return false;
			}else { return true; }


			
		}

		//Custom Functions START HERE!
		function check_latitude(e){
			var charCode = (e.which) ? e.which : event.keyCode;

			//var reg = new RegExp("^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}");

			//if(reg.exec(latitude) ) {
			if (charCode != 46 && charCode != 45 && charCode > 31
		    && (charCode < 48 || charCode > 57))
		     return false;
		}

		function check_longitude(e){
			var charCode = (e.which) ? e.which : event.keyCode;
			
			//var reg = new RegExp("^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}");
			
			if (charCode != 46 && charCode != 45 && charCode > 31
		    && (charCode < 48 || charCode > 57))
		     return false;
		}
		
		function isNumberKey(evt){
		    var charCode = (evt.which) ? evt.which : event.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57))
		        return false;
		    return true;
		} 

		function isAlphabetKey(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
		  	//var regex = /^[a-zA-Z]*$/;
		  	if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)){//if (regex.test(document.f.nm.value)) {

		    	//document.getElementById("notification").innerHTML = "Watching.. Everything is Alphabet now";
		      	return true;
		  	}else{
		  		return false;	
		  	}
		  	
		}			
		$(".datepick2, #teachers_dob2, #teachers_doe2").on('click', function(){

			//destroy_datepicker();
			$(".datepick2, #teachers_dob2, #teachers_doe2").datepicker('destroy');
			//initiate_datepicker();			
			$(".datepick2, #teachers_dob2, #teachers_doe2").datepicker({
				format: 'yyyy-mm-dd',
				endDate: "D",
				defaultViewDate: { year: 2015, month: 10, day: 31 },
				autoclose: true
			});

		});

		/*function destroy_datepicker(){
			$(".datepick").datepicker('destroy');
		}
		function initiate_datepicker(){
			//$(".datepicker").removeClass('hasDatepicker').datepicker(); 
			$(".datepick").datepicker({ 
				dateFormat: "yyyy-mm-dd",
				startView: 1,
				endDate: "D",				
				autoclose: true
			});

		}*/
		function addRow2(tableID){
			
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
			var total_teachers = +$("#total_teachers").val();
			console.log(rowCount);
			$(".datepick").datepicker('destroy');
			$(".datepick2, #teachers_dob2").datepicker('destroy');
			//initiate_datepicker();
			

			if(rowCount-1 < total_teachers){                            // limit the user from creating fields more than your limits
				var row = table.insertRow(rowCount);
				var colCount = table.rows[0].cells.length;		
				row.innerHTML = "<tr><td class=\"col-xs-2\"><input type=\"checkbox\" name=\"chk[]\"></td><td class=\"col-xs-2\"> <div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_name][]\" onkeypress=\"return isAlphabetKey(event)\" value=\"\" type=\"text\" id=\"Asc201516Teachers[]\"></div>	</td>		<td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_cnic][]\" maxlength=\"15\" size=\"15\" onkeypress=\"return isNumberKey(event)\" value=\"\" id=\"teachers_cnic\" type=\"text\"></div></td><td><div class=\"input select\"><select name=\"data[asc201516s_teachers][teachers_gender][]\" id=\"Asc201516TeachersGender[]\"><option value=\"1\" selected=\"selected\">M</option><option value=\"2\">F</option></select></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_personnel][]\" maxlength=\"10\" size=\"10\" onkeypress=\"return isNumberKey(event)\" value=\"\" type=\"text\" id=\"Asc201516TeachersPersonnel[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_dob][]\" maxlength=\"11\" size=\"11\" onkeypress=\"return isNumberKey(event)\" id=\"teachers_dob2\" value=\"\" placeholder=\"YYYY-MM-DD\" class=\"datepick2\" type=\"text\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_designation][]\" maxlength=\"2\" size=\"2\" onkeypress=\"return isNumberKey(event)\" type=\"text\" style=\"width:100%;\" id=\"Asc201516TeachersDesignation[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_appointment_bps][]\" maxlength=\"2\" size=\"2\" onkeypress=\"return isNumberKey(event)\" type=\"text\" id=\"Asc201516TeachersAppointmentBps[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_time_scale_bps][]\" maxlength=\"2\" size=\"2\" onkeypress=\"return isNumberKey(event)\" type=\"text\" id=\"Asc201516TeachersTimeScaleBps[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_actual_scale_bps][]\" maxlength=\"2\" size=\"2\" onkeypress=\"return isNumberKey(event)\" type=\"text\" id=\"Asc201516TeachersActualScaleBps[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_doe][]\" maxlength=\"11\" size=\"11\" id=\"teachers_doe2\" placeholder=\"YYYY-MM-DD\" class=\"datepick3\" type=\"text\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_post_type][]\" maxlength=\"2\" size=\"2\" onkeypress=\"return isNumberKey(event)\" type=\"text\" id=\"Asc201516TeachersPostType[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_highest_qualification][]\" maxlength=\"3\" size=\"3\" onkeypress=\"return isNumberKey(event)\" type=\"text\" id=\"Asc201516TeachersHighestQualification[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_professional_training][]\" maxlength=\"1\" size=\"1\" onkeypress=\"return isNumberKey(event)\" style=\"width: 100%;\" type=\"text\" id=\"Asc201516TeachersProfessionalTraining[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_detailment][]\" maxlength=\"1\" size=\"1\" onkeypress=\"return isNumberKey(event)\" style=\"width: 100%;\" type=\"text\" id=\"Asc201516TeachersDetailment[]\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_contact][]\" onkeypress=\"return isNumberKey(event)\" maxlength=\"11\" size=\"11\" id=\"teachers_contact\" value=\"\" type=\"text\"></div></td><td><div class=\"input text\"><input name=\"data[asc201516s_teachers][teachers_subspec][]\" onkeypress=\"return isNumberKey(event)\" maxlength=\"1\" size=\"1\" id=\"teachers_subspec\" value=\"\" type=\"text\"></div></td></tr>";

				/*for(var i=0; i <colCount; i++) {
					var newcell = row.insertCell(i);
					newcell.innerHTML = table.rows[1].cells[i].innerHTML;
					newcell.innerText('asd');

					
				}*/			

				//rowindex = row.rowindex;
				addmask();
				//$(".datepick").datepicker({ dateFormat: "dd-mm-yy" });
				//destroy_datepicker();
				
		    	
			}else{
				alert("Maximum Teachers Limit Reached!");
					   
			}			
			$(".datepick").datepicker({	format: 'yyyy-mm-dd' });
			$(".datepick2, #teachers_dob2").datepicker({	format: 'yyyy-mm-dd', endDate: '1996-12-31' });
			$(".datepick3, #teachers_doe2").datepicker({	format: 'yyyy-mm-dd', endDate: '2015-10-31' });
		}

		function addRow(tableID) {
	

			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
			var total_teachers = +$("#total_teachers").val();
			console.log(rowCount);
			$(".datepick").datepicker('destroy');
			$(".datepick2, #teachers_dob2, #teachers_doe2").datepicker('destroy');
			//initiate_datepicker();
			

			if(rowCount-1 < total_teachers){                            // limit the user from creating fields more than your limits
				var row = table.insertRow(rowCount);
				var colCount = table.rows[0].cells.length;		
				for(var i=0; i <colCount; i++) {
					var newcell = row.insertCell(i);
					newcell.innerHTML = table.rows[1].cells[i].innerHTML;					
					
				}				
				//rowindex = row.rowindex;
				addmask();			    
		    	
			}else{
				alert("Maximum Teachers Limit Reached!");
					   
			}			
			$(".datepick").datepicker({	format: 'yyyy-mm-dd', endDate: "2015-10-31" });
			$(".datepick2, #teachers_dob2, #teachers_doe2").datepicker({	format: 'yyyy-mm-dd' });
			

		}

		function deleteRow(tableID) {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;	
			//console.log("Row Count = " + rowCount);
			for(var i=1; i<rowCount; i++) {
				
				var row = table.rows[i];
				//console.log("table.rows[i] = " + row);
				var chkbox = row.cells[0].childNodes[0+1];
				//console.log(chkbox);
				
				if(null != chkbox && true == chkbox.checked) {
					if(rowCount <= 2) {               // limit the user from removing all the fields
						//console.log(rowCount);
						alert("Cannot Remove all the teachers!");
						break;
					}else{
						table.deleteRow(i);
						rowCount--;
						i--;	
					}
					
				}
			}
		}

		function addmask(x){
			
   	 			$("input#teachers_cnic").mask("99999-9999999-9", {placeholder: "#"});
   	 			$("input#teachers_contact").mask("9999-9999999", {placeholder: "#"});
   	 			$("input#teachers_dob").mask("9999-99-99", {placeholder: "#"});
		   		$("input#teachers_doe").mask("9999-99-99", {placeholder: "#"});		   		
		   		$("input#teachers_dob2").mask("9999-99-99", {placeholder: "#"});
		   		$("input#teachers_doe2").mask("9999-99-99", {placeholder: "#"});	
 				/*
 				$('#teachers_dob').datepicker({
			   		changeMonth: true,
						changeYear: true,
						yearRange: '1930:2015',
			        dateFormat : 'yy-mm-dd',		        
			    }); 

			 	$('.input_date').datepicker({
			   		changeMonth: true,
						changeYear: true,
						yearRange: '1930:2015',
			        dateFormat : 'yy-mm-dd',		        
			    });  
		    $(".input_date").attr('id', x);
			$(".input_date").removeClass('hasDatepicker').datepicker(); 
			$("#teachers_dob").attr('id', x);
			$("#teachers_dob").removeClass('hasDatepicker').datepicker(); */

		}


		function get_total_teachers()
		{			
			var govtmale       = +$('#Asc201516StiGovtMale').val();
			
			/*if(!(govtmale)){
				$('#Asc201516GovtMale').val('0');
				govtmale       = parseInt($('#Asc201516GovtMale').val());
			}*/			
			
			var govtfemale     = +$('#Asc201516StiGovtFemale').val();
			/*if(!(govtfemale)){
				$('#Asc201516GovtFemale').val('0');
				govtfemale     = parseInt($('#Asc201516GovtFemale').val());
			}*/
			
			var nongovtmale    = +$('#Asc201516StiNongovtMale').val();
			/*if(!(nongovtmale)){
				$('#Asc201516NongovtMale').val('0');
				nongovtmale    = parseInt($('#Asc201516NongovtMale').val());
			}*/
			
			var nongovtfemale  = +$('#Asc201516StiNongovtFemale').val();
			/*if(!(nongovtfemale)){
				$('#Asc201516NongovtFemale').val('0');
				nongovtfemale  = parseInt($('#Asc201516NongovtFemale').val());
			}*/
			
			var total_teachers = parseInt(govtmale)+ parseInt(govtfemale)+parseInt(nongovtmale)+parseInt(nongovtfemale);	
				
			return total_teachers;
		}

		function get_total_nonteachers()
		{
			nonteacher_male              = parseInt($('#Asc201516NonteachingMale').val());
			if(!(nonteacher_male)){
				$('#Asc201516NonteachingMale').val('0');
				nonteacher_male       = parseInt($('#Asc201516NonteachingMale').val());
			}	
			
			nonteacher_female            = parseInt($('#Asc201516NonteachingFemale').val());
			if(!(nonteacher_female)){
				$('#Asc201516NonteachingFemale').val('0');
				nonteacher_female       = parseInt($('#Asc201516NonteachingFemale').val());
			}
			total_nonteachers = (nonteacher_male+nonteacher_female);

			return total_nonteachers;
		}

		function get_teachers_headcount(){

			headcount = parseInt($('#headcount_teachingstaff').val());
			
			return headcount;
		}

		function get_nonteachers_headcount(){
			headcount = parseInt($('#headcount_nonteachingstaff').val());
			
			return headcount;
		}


		$('#headcount_teachingstaff').keyup(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			
			
			if(total_teachers < teachers_headcount){
				//e.preventDefault();
				alert('Error!, Teachers Headcount should be less than total teachers!');
				$('#headcount_teachingstaff').val('');
			}
		});

		$('#headcount_teachingstaff').keydown(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			var keyCode = e.keyCode || e.which;
			if(keyCode === 9){
				if(total_teachers < teachers_headcount){
					e.preventDefault();
					alert('Error!, Teachers Headcount should be less than total teachers!');
					$('#headcount_teachingstaff').val('');
				}	
			}

		});

		$('#headcount_nonteachingstaff').keyup(function(){
			var total_nonteachers     = get_total_nonteachers();
			var nonteachers_headcount = get_nonteachers_headcount();

			if(total_nonteachers < nonteachers_headcount){
				alert('Error!, NonTeachers Headcount should be less than total NonTeachers!');
				$('#headcount_nonteachingstaff').val('');
			}

		});

		$('#headcount_nonteachingstaff').keydown(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			var keyCode = e.keyCode || e.which;
			if(keyCode === 9){
				if(total_teachers < teachers_headcount){
					e.preventDefault();
					alert('Error!, Teachers Headcount should be less than total teachers!');
					$('#headcount_nonteachingstaff').val('');
				}	
			}

		});


		
		$(function() {
			$('#Asc201516EditAsc201516Form').on('keyup keypress', function(e) {
			  var keyCode = e.keyCode || e.which;
			  if (keyCode === 13) { 
			    e.preventDefault();
			    return false;
			  }
			});

			$("#example").DataTable();
			$("#example2").DataTable();
			$("#example3").DataTable();
			$("#finalizedByDev1").DataTable();
			$("#formsForReview").DataTable();

			$('[data-toggle="tooltip"]').tooltip(); 

			$('#yoc').datepicker({
			    format: "yyyy",
			    endDate: "2014",
			    startView: 1,
			    minViewMode: 2,
			    autoclose: true
			});

			$('#Asc201516SbiSchoolBuildingConstructionYear').datepicker({
			    format: "yyyy",
			    endDate: "2015",
			    startView: 1,
			    minViewMode: 2,
			    autoclose: true
			});
			

			$('#closure_dmy').datepicker({
			    format: "yyyy-mm-dd",
			    endDate: "2015-10-31",
			    startView: 0,
			    minViewMode: 0,
			    autoclose: true
			});

			$(".datepick").datepicker({
				format: 'yyyy-mm-dd',
				endDate: "2015-10-31",
				setDate: new Date(),				
				autoclose: true
			});
			$(".datepick2").datepicker({
				format: 'yyyy-mm-dd',
				endDate: "2015-10-31",
				setDate: new Date(),				
				autoclose: true
			});

			/*$("#teachers_dob2, #teachers_doe2").datepicker({
				format: 'yyyy-mm-dd',
				endDate: "2015-10-31",
				defaultViewDate: { year: 2015, month: 10, day: 31 },
				autoclose: true
			});*/

			$("#Asc201516HtiCnic").mask("99999-9999999-9", {placeholder:"#"});
		   	$("#Asc201516HtiNumber").mask("9999-9999999", {placeholder:"#"});
		   	$("#Asc201516SchoolPhone").mask("9999-999999", {placeholder: "#"});
		   	$("#teachers_cnic").mask("99999-9999999-9", {placeholder: "#"});
		   	$("#teachers_contact").mask("9999-9999999", {placeholder: "#"});		   	
		   	$("#teachers_dob, #teachers_dob2").mask("9999-99-99", {placeholder: "#"});		   	
		   	$("#teachers_doe, #teachers_doe2").mask("9999-99-99", {placeholder: "#"});		   	

	     	$("#Asc201516DpCnic").mask("99999-9999999-9", {placeholder: "#"});
		   	$("#mnformDccontact").mask("9999-9999999");
		   	$("#mnformDpcontact").mask("9999-9999999");
		   	$("#mnformDmcontact").mask("9999-9999999");


			total_teachers    = get_total_teachers;
			total_nonteachers = (nonteacher_male+nonteacher_female);
			
			if(!total_teachers){ total_teachers = 0;}
			$("#total_teachers").val(total_teachers);
			if(!total_nonteachers){ total_nonteachers = 0;}
			
			$("#district_select").change(function() {

				var v = $('#district_select option:selected').text();		
				
				if(v)
				{
					$("#uc_select").load(ucs_url);
				}			  	

			  	$('#tehsil_select').prepend($('#tehsil_select option:selected').text('Loading...'));
			  	$("#tehsil_select").load(tehsils_url + $("#district_select").val());
			});

			$("#tehsil_select").change(function() {

				$("#uc_select").load(ucs_url + $("#tehsil_select").val());
				var did = $("#district_select").val();
				var tid = $("#tehsil_select").val();
				var v = $("#tehsil_select option:selected").text();
				
				if(v)
				{
					$("#tappa_select").load(tappas_url + tid +'/'+ did);	
					$("#deh_select").load(dehs_url + tid + '/' + did);
				}
				$("#tappa_select").removeAttr('disabled');				
				$("#deh_select").removeAttr('disabled');
				
			});

			$("#condition_select").change(function() {
				
				var choice = parseInt($('#condition_select option:selected').val());
				
				if(choice == 0){					
					$("#status_select").html("<option value='0'>Choose</option>");
					$("#closure_dmy").attr('readonly','readonly');					
					$("#closure_dmy").attr('value', '');					
					$("#closure_dmy").val('');
					$("#closure_date_div").hide();
					$("#closure_dmy").removeAttr('style', 'cursor: pointer; background: #fff;');					
					$("#closure_reason").attr('readonly', 'readonly');	
					$("#closure_reason").val("0");
					$("#closure_reason_div").hide();

					$("#mnformHeadcount").attr('disabled', 'disabled');
				}else if(choice == 2){
					$("#status_select").html("<option value='2'>Closed Temporary</option><option value='3'>Closed Permanently</option>");
					$("#closure_dmy").removeAttr('disabled');
					$("#closure_dmy").removeAttr('readonly');
					$("#closure_dmy").attr('style', 'cursor: pointer; background: #fff;');					
					$("#closure_date_div").show();
					$("#closure_reason").removeAttr('disabled');	
					$("#closure_reason").removeAttr('readonly');	
					$("#closure_reason_div").show();
					$("#mnformHeadcount").attr('disabled', 'disabled');
				}else{
					$("#status_select").html(
						"<option value='1'>Functional</option><option value='2'>Closed Temporary</option>");
					$("#closure_dmy").attr('readonly','readonly');
					$("#closure_dmy").removeAttr('value');					
					$("#closure_dmy").val('');
					$("#closure_dmy").removeAttr('style', 'cursor: pointer; background: #fff;');					
					$("#closure_date_div").hide();					
					$("#closure_reason").attr('readonly', 'readonly');						
					$("#closure_reason").val("0");
					$("#closure_reason_div").hide();
					$("#mnformHeadcount").removeAttr('disabled', 'disabled');	
				}
					
								
			});
			

			$("#status_select").change(function() {				

				var choice = parseInt($('#status_select option:selected').val());
				if(choice == 1){
					$("#closure_dmy").attr('readonly','readonly');
					$("#closure_dmy").removeAttr('value');
					$("#closure_dmy").val('');
					$("#closure_dmy").removeAttr('style', 'cursor: pointer; background: #fff;');
					$("#closure_date_div").hide();
					
					$("#closure_reason").attr('readonly', 'readonly');						
					$("#closure_reason").val("0");
					$("#closure_reason_div").hide();

					$("#mnformHeadcount").removeAttr('disabled', 'disabled');	
				}else if(choice == 2){
					$("#closure_dmy").removeAttr('disabled','disabled');
					$("#closure_dmy").removeAttr('readonly','readonly');
					$("#closure_dmy").attr('style', 'cursor: pointer; background: #fff;');
					$("#closure_date_div").show();
					
					$("#closure_reason").removeAttr('disabled', 'disabled');	
					$("#closure_reason").removeAttr('readonly', 'readonly');	
					$("#closure_reason_div").show();
					$("#mnformHeadcount").attr('disabled', 'disabled');	

				}			
								
			});

			$("#own_govt_building").change(function() {
				choice = $('#own_govt_building option:selected').text();
				if(choice == 'No')
				{
					$("#nogovt_specify").removeAttr('disabled');										
				}else{
					$("#nogovt_specify").attr('disabled','disabled');
				}
			});


			$("#washroom_facility").change(function() {
				choice = $('#washroom_facility option:selected').val();
				if(choice == 1)
				{
					$("#functional_washrooms").removeAttr('disabled');	
					$("#nonfunctional_washrooms").removeAttr('disabled');
					$("#functional_washrooms").removeAttr('readonly');	
					$("#nonfunctional_washrooms").removeAttr('readonly');
				}else{
					$("#functional_washrooms").attr('readonly','readonly');
					$("#functional_washrooms").val('');

					$("#nonfunctional_washrooms").attr('readonly', 'readonly');
					$("#nonfunctional_washrooms").val('');
				}
			});

			$("#closure_reason").change(function(){
				choice = parseInt($("#closure_reason").val());
				if(choice == 8)
				{
					$("#closure_major_reason_specify_div").attr('style', 'display: block;');
					$("#Asc201516SsClosureMajorReasonSpecify").attr('required', 'required');
					$("#Asc201516SsClosureMajorReasonSpecify").removeAttr('readonly', 'readonly');
					$("#Asc201516SsClosureMajorReasonSpecify").removeAttr('disabled', 'disabled');
				}else{
					$("#closure_major_reason_specify_div").attr('style', 'display: none;');
					$("#Asc201516SsClosureMajorReasonSpecify").removeAttr('required', 'required');
					$("#Asc201516SsClosureMajorReasonSpecify").attr('readonly', 'readonly');
					$("#Asc201516SsClosureMajorReasonSpecify").removeAttr('value');
					$("#Asc201516SsClosureMajorReasonSpecify").val('');
				}

			});

			$("#Asc201516DsiSchCampus").change(function(){
				var choice = +$("#Asc201516DsiSchCampus").val();
				if(choice == 1){					
					$("#campus_merge_no_div").attr('style', 'display: block');
					$("#Asc201516DsiSchCampusMergedSchools").removeAttr('disabled', 'disabled');
				}else{
					
					$("#campus_merge_no_div").attr('style', 'display: none');
					$("#Asc201516DsiSchCampusMergedSchools").attr('disabled', 'disabled');
				}

			});

			$("#Asc201516Schoolbuildingowners").change(function(){
				choice = parseInt($(this).val());
				
				var obss = $("#other_building_semiscode_specify");
				var obssid = $("#Asc201516SbiOtherBuildingSemiscodeSpecify");

				var obs = $("#other_building_specify");
				var obsid = $("#Asc201516SbiOtherBuildingSpecify");
				
				var onbs = $("#other_nobuilding_specify");
				var onbsid = $("#Asc201516SbiOtherNobuildingSpecify");

				if (choice == 2) {

					onbs.attr('style', 'display: none;');					
					onbsid.attr('readonly', 'readonly');
					onbsid.val("0");

					obs.attr('style', 'display: none;');
					obsid.attr('readonly', 'readonly');
					obsid.val('');

					obss.attr('style', 'display: block;');
					obssid.removeAttr('readonly', 'readonly');
					obssid.removeAttr('disabled', 'disabled');

				}else if(choice == 4){

					obss.attr('style', 'display: none;');
					obssid.attr('readonly', 'readonly');
					obssid.val("");

					onbs.attr('style', 'display: none;');					
					onbsid.attr('readonly', 'readonly');
					onbsid.val("0");

					obs.attr('style', 'display: block');					
					obsid.removeAttr('readonly', 'readonly');
					obsid.removeAttr('disabled', 'disabled');

				}else if(choice == 5){
					obss.attr('style', 'display: none;');					
					obssid.attr('readonly', 'readonly');
					obssid.val("");

					obs.attr('style', 'display: none');					
					obsid.attr('readonly', 'readonly');
					obsid.val('');

					onbs.attr('style', 'display: block');					
					onbsid.removeAttr('readonly', 'readonly');
					onbsid.removeAttr('disabled', 'disabled');
				}else{

					obss.attr('style', 'display: none;');					
					obssid.attr('readonly', 'readonly');
					obssid.val("");

					obs.attr('style', 'display: none');					
					obsid.attr('readonly', 'readonly');
					obsid.val('');

					onbs.attr('style', 'display: none');					
					onbsid.attr('readonly', 'readonly');
					onbsid.val('0');

				}

			});
			//GIRLS' STIPEND
			$("#Asc201516SchReceivedGirlsStipend").change(function(){
				var choice = $(this).val();
				if(choice == 1)
				{
					$("#Asc201516SchReceivedGirlsStipendEnrollment").removeAttr('disabled', 'disabled');
					$("#Asc201516SchReceivedGirlsStipendEligible").removeAttr('disabled', 'disabled');
					$("#Asc201516SchReceivedGirlsStipendReceived").removeAttr('disabled', 'disabled');
					$("#Asc201516SchReceivedGirlsStipendEnrollment").removeAttr('readonly', 'readonly');
					$("#Asc201516SchReceivedGirlsStipendEligible").removeAttr('readonly', 'readonly');
					$("#Asc201516SchReceivedGirlsStipendReceived").removeAttr('readonly', 'readonly');
				}else{
					$("#Asc201516SchReceivedGirlsStipendEnrollment").attr('readonly', 'readonly');
					$("#Asc201516SchReceivedGirlsStipendEnrollment").val('');
					$("#Asc201516SchReceivedGirlsStipendEligible").attr('readonly', 'readonly');
					$("#Asc201516SchReceivedGirlsStipendEligible").val('');
					$("#Asc201516SchReceivedGirlsStipendReceived").attr('readonly', 'readonly');
					$("#Asc201516SchReceivedGirlsStipendReceived").val('');
				}
			});
			//SCHOOL MEDIUM-WISE ENROLLMENT
			$("#Asc201516DsiSchMedium0").change(function(){
				if(document.getElementById("Asc201516DsiSchMedium0").checked){
					$("#Asc201516DsiEnrollmentUrdu").removeAttr('disabled', 'disabled');	
					$("#Asc201516DsiEnrollmentUrdu").removeAttr('readonly', 'readonly');
				}else{
					$("#Asc201516DsiEnrollmentUrdu").attr('readonly', 'readonly');	
					$("#Asc201516DsiEnrollmentUrdu").val('');
					$("#Asc201516DsiEnrollmentUrdu").attr('value' ,'');

					var sum     = 0;
					
					var english = +$("#Asc201516DsiEnrollmentEnglish").val();
					var sindhi  = +$("#Asc201516DsiEnrollmentSindhi").val();

					var sum = sum + (english + sindhi);

					$("#Asc201516DsiEnrollmentTotal").val(sum);					
				}
			});

			$("#Asc201516DsiSchMedium1").change(function(){
				if(document.getElementById("Asc201516DsiSchMedium1").checked){
					$("#Asc201516DsiEnrollmentSindhi").removeAttr('disabled', 'disabled');	
					$("#Asc201516DsiEnrollmentSindhi").removeAttr('readonly', 'readonly');
				}else{
					$("#Asc201516DsiEnrollmentSindhi").attr('readonly', 'readonly');	
					$("#Asc201516DsiEnrollmentSindhi").val('');					
					$("#Asc201516DsiEnrollmentSindhi").attr('value' ,'');
					var sum     = 0;
					
					var urdu = +$("#Asc201516DsiEnrollmentUrdu").val();
					var english  = +$("#Asc201516DsiEnrollmentEnglish").val();

					var sum = sum + (urdu + english);

					$("#Asc201516DsiEnrollmentTotal").val(sum);

				}
			});

			$("#Asc201516DsiSchMedium2").change(function(){
				if(document.getElementById("Asc201516DsiSchMedium2").checked){
					$("#Asc201516DsiEnrollmentEnglish").removeAttr('disabled', 'disabled');	
					$("#Asc201516DsiEnrollmentEnglish").removeAttr('readonly', 'readonly');
				}else{
					$("#Asc201516DsiEnrollmentEnglish").attr('readonly', 'readonly');		
					$("#Asc201516DsiEnrollmentEnglish").val('');
					$("#Asc201516DsiEnrollmentEnglish").attr('value' ,'');
					var sum     = 0;
					
					var urdu = +$("#Asc201516DsiEnrollmentUrdu").val();
					var sindhi  = +$("#Asc201516DsiEnrollmentSindhi").val();

					var sum = sum + (urdu + sindhi);

					$("#Asc201516DsiEnrollmentTotal").val(sum);
				}
			});

			//UPGRADED YES?NO
			$("#Asc201516SchUpgraded").change(function(){
				var choice = $(this).val();
				if(choice == 1)
				{
					$("#Asc201516SchUpgradedLevel").removeAttr('disabled', 'disabled');
					$("#Asc201516SchUpgradedLevel").removeAttr('readonly', 'readonly');

				}else{
					//$("#Asc201516SchUpgradedLevel").attr('disabled', 'disabled');
					$("#Asc201516SchUpgradedLevel").attr('readonly', 'readonly');
					$("#Asc201516SchUpgradedLevel").html("<option value=''></option>");
				}
			});

			//ROOMS BEING USED FOR PURPOSE OTHER THAN LEARNING/TEACHING 
			$('#Asc201516SbiSchoolBuildingOtherThanLearning').change(function(){
				var choice = parseInt($('#Asc201516SbiSchoolBuildingOtherThanLearning').val());
				if(choice == 6)
				{ 
					$('#purpose_other_than_learning').attr('style' , 'display: block');
					$('#Asc201516SbiPurposeOtherThanLearningSpecify').removeAttr('disabled', 'disabled');
					$('#Asc201516SbiPurposeOtherThanLearningSpecify').removeAttr('readonly', 'readonly');

					$('#other_than_learning_rooms_count').attr('style', 'display: none');
					$('#Asc201516SbiSchoolBuildingOtherThanLearningRooms').attr('readonly', 'readonly');					
					$('#Asc201516SbiSchoolBuildingOtherThanLearningRooms').val('');
				}else if(choice == 0){
					$('#other_than_learning_rooms_count').attr('style', 'display: none');
					$('#Asc201516SbiSchoolBuildingOtherThanLearningRooms').attr('readonly', 'readonly');
					$('#Asc201516SbiSchoolBuildingOtherThanLearningRooms').val('');

					$('#purpose_other_than_learning').attr('style' , 'display: none');
					$('#Asc201516SbiPurposeOtherThanLearningSpecify').attr('readonly', 'readonly');
					$('#Asc201516SbiPurposeOtherThanLearningSpecify').val('');
				}else{
					$('#purpose_other_than_learning').attr('style' , 'display: none');
					$('#Asc201516SbiPurposeOtherThanLearningSpecify').attr('readonly', 'readonly');					
					$('#Asc201516SbiPurposeOtherThanLearningSpecify').val('');

					$('#other_than_learning_rooms_count').attr('style', 'display: block');
					$('#Asc201516SbiSchoolBuildingOtherThanLearningRooms').removeAttr('disabled', 'disabled');
					$('#Asc201516SbiSchoolBuildingOtherThanLearningRooms').removeAttr('readonly', 'readonly');
				}
			});

			//TOTAL ROOMS AND CLASSROOMS CHECK			
			$('#total_rooms_as_classrooms').keyup(function(){
				var classrooms = +$(this).val();
				var totalrooms = +$("#total_rooms").val();
				
				if(classrooms > totalrooms)
				{					
					$("#total_classrooms_div").attr('class', 'form-group col-md-3 has-error');
					$("#total_rooms_as_classrooms").val('');				
				}else if(classrooms <= totalrooms)
				{
					$("#total_classrooms_div").attr('class', 'form-group col-md-3 has-success');
					
				}else{
					$("#total_classrooms_div").attr('class', 'form-group col-md-3');	
				}				
			});

			//SOURCE OF ENROLLMENT SPECIFY
			$('#Asc201516EnrSourceOfEnrollment').change(function(){
				var choice = parseInt($('#Asc201516EnrSourceOfEnrollment').val());
				if(choice == 3)
				{
					$('#Asc201516EnrSourceOfEnrollmentSpecify').removeAttr('disabled', 'disabled');
					$('#source_of_enrollment_specify').attr('style', 'display: block');
				}else{
					$('#Asc201516EnrSourceOfEnrollmentSpecify').attr('disabled', 'disabled');
					$('#source_of_enrollment_specify').attr('style', 'display: none');
				}
			});

			$('#Asc201516SchBranched').change(function(){
				var choice = parseInt($('#Asc201516SchBranched').val());
				if(choice == 1)
				{	
					$('#consolidated_main_school_name').attr('style', 'display: block');					
					$('#Asc201516SchBranchedMainSchoolName').removeAttr('disabled', 'disabled');
					$('#Asc201516SchBranchedMainSchoolName').removeAttr('readonly', 'readonly');
										
					$('#consolidated_main_school_semis').attr('style', 'display: block');
					$('#Asc201516SchBranchedMainSchoolSemis').removeAttr('disabled', 'disabled');
					$('#Asc201516SchBranchedMainSchoolSemis').removeAttr('readonly', 'readonly');
					
				}else{
					$('#consolidated_main_school_name').attr('style', 'display: none');					
					$('#Asc201516SchBranchedMainSchoolName').attr('readonly', 'readonly');
					$('#Asc201516SchBranchedMainSchoolName').val('');
										
					$('#consolidated_main_school_semis').attr('style', 'display: none');
					$('#Asc201516SchBranchedMainSchoolSemis').attr('readonly', 'readonly');
					$('#Asc201516SchBranchedMainSchoolSemis').val('');
					

				}
			});

			//TOTAL TEACHING AND NON-TEACHING STAFF KEYUP EVENTS FOR SUM!
			$("#Asc201516StiGovtMale").keyup(function(){
				var sum       = 0;
				
				govtmale      = +$("#Asc201516StiGovtMale").val();				
				nongovtmale   = +$("#Asc201516StiNongovtMale").val();
				govtfemale    = +$("#Asc201516StiGovtFemale").val();
				nongovtfemale = +$("#Asc201516StiNongovtFemale").val();
				
				sum           = sum + (govtmale+nongovtmale+govtfemale+nongovtfemale);

				
				$("#total_teachers").val(sum);
				$("#total_teachers_reference").text("Total Teachers = " + sum);				
				if(sum != 0){
					$(".teacher_name").removeAttr('disabled', 'disabled');
					$("button#addrow").removeAttr('disabled', 'disabled');
				}else{
					$(".teacher_name").attr('disabled', 'disabled');
					$("button#addrow").attr('disabled', 'disabled');
				}
				
			});
			$("#Asc201516StiNongovtMale").keyup(function(){
				var sum       = 0;
				
				govtmale      = +$("#Asc201516StiGovtMale").val();				
				nongovtmale   = +$("#Asc201516StiNongovtMale").val();
				govtfemale    = +$("#Asc201516StiGovtFemale").val();
				nongovtfemale = +$("#Asc201516StiNongovtFemale").val();
				
				sum           = sum + (govtmale+nongovtmale+govtfemale+nongovtfemale);
				
				$("#total_teachers").val(sum);
				$("#total_teachers_reference").text("Total Teachers = " + sum);				
				if(sum != 0){
					$(".teacher_name").removeAttr('disabled', 'disabled');
					$("button#addrow").removeAttr('disabled', 'disabled');
				}else{
					$(".teacher_name").attr('disabled', 'disabled');
					$("button#addrow").attr('disabled', 'disabled');
				}
				
			});
			$("#Asc201516StiGovtFemale").keyup(function(){
				var sum       = 0;
				
				govtmale      = +$("#Asc201516StiGovtMale").val();				
				nongovtmale   = +$("#Asc201516StiNongovtMale").val();
				govtfemale    = +$("#Asc201516StiGovtFemale").val();
				nongovtfemale = +$("#Asc201516StiNongovtFemale").val();
				
				sum           = sum + (govtmale+nongovtmale+govtfemale+nongovtfemale);
				
				$("#total_teachers").val(sum);
				$("#total_teachers_reference").text("Total Teachers = " + sum);				
				if(sum != 0){
					$(".teacher_name").removeAttr('disabled', 'disabled');
					$("button#addrow").removeAttr('disabled', 'disabled');
				}else{
					$(".teacher_name").attr('disabled', 'disabled');
					$("button#addrow").attr('disabled', 'disabled');
				}
				
			});
			$("#Asc201516StiNongovtFemale").keyup(function(){
				var sum       = 0;
				
				govtmale      = +$("#Asc201516StiGovtMale").val();				
				nongovtmale   = +$("#Asc201516StiNongovtMale").val();
				govtfemale    = +$("#Asc201516StiGovtFemale").val();
				nongovtfemale = +$("#Asc201516StiNongovtFemale").val();
				
				sum           = sum + (govtmale+nongovtmale+govtfemale+nongovtfemale);
				
				$("#total_teachers").val(sum);
				$("#total_teachers_reference").text("Total Teachers = " + sum);				
				if(sum != 0){
					$(".teacher_name").removeAttr('disabled', 'disabled');
					$("button#addrow").removeAttr('disabled', 'disabled');					
				}else{
					$(".teacher_name").attr('disabled', 'disabled');
					$("button#addrow").attr('disabled', 'disabled');
				}
				
			});

			$("#Asc201516StiNonteachingMale").keyup(function(){
				var sum           = 0;
				
				nonteachingMale   = +$("#Asc201516StiNonteachingMale").val();				
				nonteachingFemale = +$("#Asc201516StiNonteachingFemale").val();				
				
				sum               = sum + (nonteachingMale+nonteachingFemale);
				
				$("#total_nonteachers").val(sum);
				
			});

			$("#Asc201516StiNonteachingFemale").keyup(function(){
				var sum           = 0;
				
				nonteachingMale   = +$("#Asc201516StiNonteachingMale").val();				
				nonteachingFemale = +$("#Asc201516StiNonteachingFemale").val();				
				
				sum               = sum + (nonteachingMale+nonteachingFemale);
				
				$("#total_nonteachers").val(sum);
				
			});

			$("#Asc201516EleClassEceBoysEnrollment, #Asc201516EleClassKatchiBoysEnrollment, #Asc201516EleClassOneBoysEnrollment, #Asc201516EleClassTwoBoysEnrollment, #Asc201516EleClassThreeBoysEnrollment, #Asc201516EleClassFourBoysEnrollment, #Asc201516EleClassFiveBoysEnrollment, #Asc201516EleClassSixBoysEnrollment, #Asc201516EleClassSevenBoysEnrollment, #Asc201516EleClassEightBoysEnrollment").keyup(function(){
				var sum = 0;

				ece    = +$("#Asc201516EleClassEceBoysEnrollment").val();					
				katchi = +$("#Asc201516EleClassKatchiBoysEnrollment").val();				
				one    = +$("#Asc201516EleClassOneBoysEnrollment").val();
				two    = +$("#Asc201516EleClassTwoBoysEnrollment").val();
				three  = +$("#Asc201516EleClassThreeBoysEnrollment").val();
				four   = +$("#Asc201516EleClassFourBoysEnrollment").val();
				five   = +$("#Asc201516EleClassFiveBoysEnrollment").val();
				six    = +$("#Asc201516EleClassSixBoysEnrollment").val();
				seven  = +$("#Asc201516EleClassSevenBoysEnrollment").val();
				eight  = +$("#Asc201516EleClassEightBoysEnrollment").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();

				sum =  sum + (ece+katchi+one+two+three+four+five+six+seven+eight);								
				
				$("#Asc201516EleTotalBoysEnrollment").val(sum);

				var boys_enr = +$("#Asc201516EleTotalBoysEnrollment").val();
				var girls_enr = +$("#Asc201516EleTotalGirlsEnrollment").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_ele_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');	
					$("#ele_enr_table").css({"background-color":"red", "color":"#fff"});							
				}else if(boys_n_girls <= total_enrollment){
					$("#total_ele_enrollment_reference").text('');
					$("#ele_enr_table").css({"background-color":"green", "color":"#fff"});
				}

			});


			$("#Asc201516EleClassEceGirlsEnrollment, #Asc201516EleClassKatchiGirlsEnrollment, #Asc201516EleClassOneGirlsEnrollment, #Asc201516EleClassTwoGirlsEnrollment, #Asc201516EleClassThreeGirlsEnrollment, #Asc201516EleClassFourGirlsEnrollment, #Asc201516EleClassFiveGirlsEnrollment, #Asc201516EleClassSixGirlsEnrollment, #Asc201516EleClassSevenGirlsEnrollment, #Asc201516EleClassEightGirlsEnrollment").keyup(function(){
				var sum = 0;

				ece    = +$("#Asc201516EleClassEceGirlsEnrollment").val();					
				katchi = +$("#Asc201516EleClassKatchiGirlsEnrollment").val();				
				one    = +$("#Asc201516EleClassOneGirlsEnrollment").val();
				two    = +$("#Asc201516EleClassTwoGirlsEnrollment").val();
				three  = +$("#Asc201516EleClassThreeGirlsEnrollment").val();
				four   = +$("#Asc201516EleClassFourGirlsEnrollment").val();
				five   = +$("#Asc201516EleClassFiveGirlsEnrollment").val();
				six    = +$("#Asc201516EleClassSixGirlsEnrollment").val();
				seven  = +$("#Asc201516EleClassSevenGirlsEnrollment").val();
				eight  = +$("#Asc201516EleClassEightGirlsEnrollment").val();				
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();				

				sum =  sum + (ece+katchi+one+two+three+four+five+six+seven+eight);								
				
				$("#Asc201516EleTotalGirlsEnrollment").val(sum);

				var boys_enr = +$("#Asc201516EleTotalBoysEnrollment").val();
				var girls_enr = +$("#Asc201516EleTotalGirlsEnrollment").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_ele_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');	
					$("#ele_enr_table").css({"background-color":"red", "color":"#fff"});							
				}else if(boys_n_girls <= total_enrollment){
					$("#total_ele_enrollment_reference").text('');
					$("#ele_enr_table").css({"background-color":"green", "color":"#fff"});
				}

			});

			$(".sec-boys-enrollment-calc").keyup(function(){
				var sum = 0;

				nine_arts  = +$("#Asc201516SecClassNineArtsBoysEnrollment").val();					
				nine_comp  = +$("#Asc201516SecClassNineCompBoysEnrollment").val();				
				nine_bio   = +$("#Asc201516SecClassNineBioBoysEnrollment").val();
				nine_comm  = +$("#Asc201516SecClassNineCommBoysEnrollment").val();
				nine_other = +$("#Asc201516SecClassNineOtherBoysEnrollment").val();

				Ten_arts   = +$("#Asc201516SecClassTenArtsBoysEnrollment").val();					
				Ten_comp   = +$("#Asc201516SecClassTenCompBoysEnrollment").val();				
				Ten_bio    = +$("#Asc201516SecClassTenBioBoysEnrollment").val();
				Ten_comm   = +$("#Asc201516SecClassTenCommBoysEnrollment").val();
				Ten_other  = +$("#Asc201516SecClassTenOtherBoysEnrollment").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();

				sum =  sum + (nine_arts+nine_comp+nine_bio+nine_comm+nine_other+Ten_arts+Ten_comp+Ten_bio+Ten_comm+Ten_other);				
				
				$("#Asc201516SecTotalBoysEnrollment").val(sum);


				var boys_enr = +$("#Asc201516SecTotalBoysEnrollment").val();
				var girls_enr = +$("#Asc201516SecTotalGirlsEnrollment").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_sec_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');		
					$("#sec_enr_table").css({"background-color":"red", "color":"#fff"});			
				}else if(boys_n_girls <= total_enrollment){
					$("#total_sec_enrollment_reference").text('');
					$("#sec_enr_table").css({"background-color":"green", "color":"#fff"});
				}

			});

			$(".sec-girls-enrollment-calc").keyup(function(){
				var sum = 0;

				nine_arts  = +$("#Asc201516SecClassNineArtsGirlsEnrollment").val();					
				nine_comp  = +$("#Asc201516SecClassNineCompGirlsEnrollment").val();				
				nine_bio   = +$("#Asc201516SecClassNineBioGirlsEnrollment").val();
				nine_comm  = +$("#Asc201516SecClassNineCommGirlsEnrollment").val();
				nine_other = +$("#Asc201516SecClassNineOtherGirlsEnrollment").val();

				Ten_arts   = +$("#Asc201516SecClassTenArtsGirlsEnrollment").val();					
				Ten_comp   = +$("#Asc201516SecClassTenCompGirlsEnrollment").val();				
				Ten_bio    = +$("#Asc201516SecClassTenBioGirlsEnrollment").val();
				Ten_comm   = +$("#Asc201516SecClassTenCommGirlsEnrollment").val();
				Ten_other  = +$("#Asc201516SecClassTenOtherGirlsEnrollment").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();

				sum =  sum + (nine_arts+nine_comp+nine_bio+nine_comm+nine_other+Ten_arts+Ten_comp+Ten_bio+Ten_comm+Ten_other);				
				
				$("#Asc201516SecTotalGirlsEnrollment").val(sum);

				var boys_enr = +$("#Asc201516SecTotalBoysEnrollment").val();
				var girls_enr = +$("#Asc201516SecTotalGirlsEnrollment").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_sec_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');		
					$("#sec_enr_table").css({"background-color":"red", "color":"#fff"});			
				}else if(boys_n_girls <= total_enrollment){
					$("#total_sec_enrollment_reference").text('');
					$("#sec_enr_table").css({"background-color":"green", "color":"#fff"});
				}

			});

			$(".hsec-boys-enrollment-calc").keyup(function(){
				var sum = 0;

				eleven_arts  = +$("#Asc201516HsecClassElevenArtsBoysEnrollment").val();					
				eleven_comp  = +$("#Asc201516HsecClassElevenCompBoysEnrollment").val();				
				eleven_med   = +$("#Asc201516HsecClassElevenMedBoysEnrollment").val();
				eleven_eng   = +$("#Asc201516HsecClassElevenEngBoysEnrollment").val();
				eleven_comm  = +$("#Asc201516HsecClassElevenCommBoysEnrollment").val();
				eleven_other = +$("#Asc201516HsecClassElevenOtherBoysEnrollment").val();

				twelve_arts  = +$("#Asc201516HsecClassTwelveArtsBoysEnrollment").val();					
				twelve_comp  = +$("#Asc201516HsecClassTwelveCompBoysEnrollment").val();				
				twelve_med   = +$("#Asc201516HsecClassTwelveMedBoysEnrollment").val();
				twelve_eng   = +$("#Asc201516HsecClassTwelveEngBoysEnrollment").val();
				twelve_comm  = +$("#Asc201516HsecClassTwelveCommBoysEnrollment").val();
				twelve_other = +$("#Asc201516HsecClassTwelveOtherBoysEnrollment").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();

				sum =  sum + (eleven_arts+eleven_comp+eleven_med+eleven_eng+eleven_comm+eleven_other+twelve_arts+twelve_comp+twelve_med+twelve_eng+twelve_comm+twelve_other);				
				
				$("#Asc201516HsecTotalBoysEnrollment").val(sum);

				var boys_enr = +$("#Asc201516HsecTotalBoysEnrollment").val();
				var girls_enr = +$("#Asc201516HsecTotalGirlsEnrollment").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_hsec_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');		
					$("#hsec_enr_table").css({"background-color":"red", "color":"#fff"});			
				}else if(boys_n_girls <= total_enrollment){
					$("#total_hsec_enrollment_reference").text('');
					$("#hsec_enr_table").css({"background-color":"green", "color":"#fff"});
				}

			});

			$(".hsec-girls-enrollment-calc").keyup(function(){
				var sum = 0;

				eleven_arts  = +$("#Asc201516HsecClassElevenArtsGirlsEnrollment").val();									
				eleven_comp  = +$("#Asc201516HsecClassElevenCompGirlsEnrollment").val();							
				eleven_med   = +$("#Asc201516HsecClassElevenMedGirlsEnrollment").val();				
				eleven_eng   = +$("#Asc201516HsecClassElevenEngGirlsEnrollment").val();				
				eleven_comm  = +$("#Asc201516HsecClassElevenCommGirlsEnrollment").val();				
				eleven_other = +$("#Asc201516HsecClassElevenOtherGirlsEnrollment").val();				

				twelve_arts  = +$("#Asc201516HsecClassTwelveArtsGirlsEnrollment").val();					
				twelve_comp  = +$("#Asc201516HsecClassTwelveCompGirlsEnrollment").val();				
				twelve_med   = +$("#Asc201516HsecClassTwelveMedGirlsEnrollment").val();
				twelve_eng   = +$("#Asc201516HsecClassTwelveEngGirlsEnrollment").val();
				twelve_comm  = +$("#Asc201516HsecClassTwelveCommGirlsEnrollment").val();
				twelve_other = +$("#Asc201516HsecClassTwelveOtherGirlsEnrollment").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();

				sum =  sum + (eleven_arts+eleven_comp+eleven_med+eleven_eng+eleven_comm+eleven_other+twelve_arts+twelve_comp+twelve_med+twelve_eng+twelve_comm+twelve_other);			
				
				$("#Asc201516HsecTotalGirlsEnrollment").val(sum);

				var boys_enr = +$("#Asc201516HsecTotalBoysEnrollment").val();
				var girls_enr = +$("#Asc201516HsecTotalGirlsEnrollment").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_hsec_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');		
					$("#hsec_enr_table").css({"background-color":"red", "color":"#fff"});			
				}else if(boys_n_girls <= total_enrollment){
					$("#total_hsec_enrollment_reference").text('');
					$("#hsec_enr_table").css({"background-color":"green", "color":"#fff"});
				}

			});

			$(".perm-abs-calc").keyup(function(){
				var sum = 0;

				ece              = +$("#Asc201516PermClassEceBoysAbsentees").val();									
				katchi           = +$("#Asc201516PermClassKatchiBoysAbsentees").val();								
				one              = +$("#Asc201516PermClassOneBoysAbsentees").val();			
				two              = +$("#Asc201516PermClassTwoBoysAbsentees").val();			
				three            = +$("#Asc201516PermClassThreeBoysAbsentees").val();				
				four             = +$("#Asc201516PermClassFourBoysAbsentees").val();									
				five             = +$("#Asc201516PermClassFiveBoysAbsentees").val();								
				six              = +$("#Asc201516PermClassSixBoysAbsentees").val();
				seven            = +$("#Asc201516PermClassSevenBoysAbsentees").val();
				eight            = +$("#Asc201516PermClassEightBoysAbsentees").val();
				nine             = +$("#Asc201516PermClassNineBoysAbsentees").val();
				ten              = +$("#Asc201516PermClassTenBoysAbsentees").val();					
				eleven           = +$("#Asc201516PermClassElevenBoysAbsentees").val();				
				twelve           = +$("#Asc201516PermClassTwelveBoysAbsentees").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();
				
				sum    =  sum + (ece+katchi+one+two+three+four+five+six+seven+eight+nine+ten+eleven+twelve);				
				
				$("#Asc201516PermTotalBoysAbsentees").val(sum);
				
				var boys_enr = +$("#Asc201516PermTotalBoysAbsentees").val();
				var girls_enr = +$("#Asc201516PermTotalGirlsAbsentees").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_permabs_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');					
				}else if(boys_n_girls <= total_enrollment){
					$("#total_permabs_enrollment_reference").text('');
				}

			});

			$(".perm-abs-girls-calc").keyup(function(){
				var sum = 0;

				ece    = +$("#Asc201516PermClassEceGirlsAbsentees").val();					
				katchi = +$("#Asc201516PermClassKatchiGirlsAbsentees").val();				
				one    = +$("#Asc201516PermClassOneGirlsAbsentees").val();
				two    = +$("#Asc201516PermClassTwoGirlsAbsentees").val();
				three  = +$("#Asc201516PermClassThreeGirlsAbsentees").val();
				four   = +$("#Asc201516PermClassFourGirlsAbsentees").val();		 			
				five   = +$("#Asc201516PermClassFiveGirlsAbsentees").val();				
				six    = +$("#Asc201516PermClassSixGirlsAbsentees").val();
				seven  = +$("#Asc201516PermClassSevenGirlsAbsentees").val();
				eight  = +$("#Asc201516PermClassEightGirlsAbsentees").val();
				nine   = +$("#Asc201516PermClassNineGirlsAbsentees").val();
				ten    = +$("#Asc201516PermClassTenGirlsAbsentees").val();					
				eleven = +$("#Asc201516PermClassElevenGirlsAbsentees").val();				
				twelve = +$("#Asc201516PermClassTwelveGirlsAbsentees").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();
				
				sum    =  sum + (ece+katchi+one+two+three+four+five+six+seven+eight+nine+ten+eleven+twelve);				
				
				$("#Asc201516PermTotalGirlsAbsentees").val(sum);

				var boys_enr = +$("#Asc201516PermTotalBoysAbsentees").val();
				var girls_enr = +$("#Asc201516PermTotalGirlsAbsentees").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_permabs_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');					
				}else if(boys_n_girls <= total_enrollment){
					$("#total_permabs_enrollment_reference").text('');
				}

			});

			$(".repeaters-boys-calc").keyup(function(){
				var sum = 0;

				four             = +$("#Asc201516RepeatersClassFourBoys").val();					
				five             = +$("#Asc201516RepeatersClassFiveBoys").val();				
				six              = +$("#Asc201516RepeatersClassSixBoys").val();
				seven            = +$("#Asc201516RepeatersClassSevenBoys").val();
				eight            = +$("#Asc201516RepeatersClassEightBoys").val();
				nine             = +$("#Asc201516RepeatersClassNineBoys").val();
				ten              = +$("#Asc201516RepeatersClassTenBoys").val();					
				eleven           = +$("#Asc201516RepeatersClassElevenBoys").val();				
				twelve           = +$("#Asc201516RepeatersClassTwelveBoys").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();
				
				sum    =  sum + (four+five+six+seven+eight+nine+ten+eleven+twelve);				
				
				$("#Asc201516RepeatersTotalBoys").val(sum);

				var boys_enr = +$("#Asc201516RepeatersTotalBoys").val();
				var girls_enr = +$("#Asc201516RepeatersTotalGirls").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');
				}else if(boys_n_girls <= total_enrollment){
					$("#total_enrollment_reference").text('');
				}

			});

			$(".repeaters-girls-calc").keyup(function(){
				var sum = 0;

				four   = +$("#Asc201516RepeatersClassFourGirls").val();					
				five   = +$("#Asc201516RepeatersClassFiveGirls").val();				
				six    = +$("#Asc201516RepeatersClassSixGirls").val();
				seven  = +$("#Asc201516RepeatersClassSevenGirls").val();
				eight  = +$("#Asc201516RepeatersClassEightGirls").val();
				nine   = +$("#Asc201516RepeatersClassNineGirls").val();
				ten    = +$("#Asc201516RepeatersClassTenGirls").val();					
				eleven = +$("#Asc201516RepeatersClassElevenGirls").val();				
				twelve = +$("#Asc201516RepeatersClassTwelveGirls").val();
				total_enrollment = +$("#Asc201516DsiEnrollmentTotal").val();

				sum    =  sum + (four+five+six+seven+eight+nine+ten+eleven+twelve);				
				
				$("#Asc201516RepeatersTotalGirls").val(sum);

				var boys_enr = +$("#Asc201516RepeatersTotalBoys").val();
				var girls_enr = +$("#Asc201516RepeatersTotalGirls").val();

				var boys_n_girls = 0 + (boys_enr + girls_enr);
				if(boys_n_girls > total_enrollment){					
					$("#total_enrollment_reference").text('Total Enrollment of ' + total_enrollment + ' exceeded!');
				}else if(boys_n_girls <= total_enrollment){
					$("#total_enrollment_reference").text('');
				}

			});
			
			$("#Asc201516SchAdopted").change(function(){
				var choice = $("#Asc201516SchAdopted").val();  
				if(choice == 1)
				{
					$("#adopter_name_div").attr('style', 'display: block');
					$("#Asc201516SchAdopterName").removeAttr('disabled','disabled');
					$("#Asc201516SchAdopterName").removeAttr('readonly','readonly');
				}else{
					$("#adopter_name_div").attr('style', 'display: none');
					$("#Asc201516SchAdopterName").attr('readonly','readonly');
					$("#Asc201516SchAdopterName").removeAttr('value');
					$("#Asc201516SchAdopterName").val('');
				}
			});

			$("#Asc201516DsiSneApproved").change(function() {
				var choice = $(this).val();
				if(choice == 1){
					$("#sne_posts_div").attr('style', 'display: block');
					$("#Asc201516DsiSneTeachingSanctioned").removeAttr('disabled', 'disabled');
					$("#Asc201516DsiSneNonteachingSanctioned").removeAttr('disabled', 'disabled');
					$("#Asc201516DsiSneTeachingSanctioned").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingSanctioned").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSneTeachingWorking").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingWorking").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingSanctioned").val('');
					$("#Asc201516DsiSneTeachingSanctioned").val('');
					$("#Asc201516DsiSneTeachingWorking").val('');
					$("#Asc201516DsiSneNonteachingWorking").val('');
					$("#Asc201516DsiSneTeachingVacant").val('');
					$("#Asc201516DsiSneNonteachingVacant").val('');

				}else if(choice == 2){
					$("#sne_posts_div").attr('style', 'display: block'); 
					$("#Asc201516DsiSneTeachingSanctioned").attr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingSanctioned").attr('readonly', 'readonly');
					$("#Asc201516DsiSneTeachingWorking").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingWorking").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSneTeachingVacant").attr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingVacant").attr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingSanctioned").val('');
					$("#Asc201516DsiSneTeachingSanctioned").val('');
					$("#Asc201516DsiSneTeachingWorking").val('');
					$("#Asc201516DsiSneNonteachingWorking").val('');
					$("#Asc201516DsiSneTeachingVacant").val('');
					$("#Asc201516DsiSneNonteachingVacant").val('');
				}else{
					$("#sne_posts_div").attr('style', 'display: none'); 
					$("#Asc201516DsiSneNonteachingSanctioned").val('');
					$("#Asc201516DsiSneTeachingSanctioned").val('');
					$("#Asc201516DsiSneTeachingWorking").val('');
					$("#Asc201516DsiSneNonteachingWorking").val('');
					$("#Asc201516DsiSneTeachingVacant").val('');
					$("#Asc201516DsiSneNonteachingVacant").val('');

					$("#Asc201516DsiSneTeachingSanctioned").attr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingSanctioned").attr('readonly', 'readonly');
					$("#Asc201516DsiSneTeachingWorking").attr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingWorking").attr('readonly', 'readonly');
					$("#Asc201516DsiSneTeachingVacant").attr('readonly', 'readonly');
					$("#Asc201516DsiSneNonteachingVacant").attr('readonly', 'readonly');

				}
			});
			
			$("#Asc201516DsiSneTeachingSanctioned, #Asc201516DsiSneTeachingWorking, #Asc201516DsiSneNonteachingSanctioned, #Asc201516DsiSneNonteachingWorking").keyup(function() {
				if ($("#Asc201516DsiSneApproved").val() == 1){
					var res                    = 0;
					var res_teaching;
					var res_nonteaching;
					var sanctioned_teaching    = +$("#Asc201516DsiSneTeachingSanctioned").val();
					var sanctioned_nonteaching = +$("#Asc201516DsiSneNonteachingSanctioned").val(); 
					var working_teaching       = +$("#Asc201516DsiSneTeachingWorking").val(); 
					var working_nonteaching    = +$("#Asc201516DsiSneNonteachingWorking").val(); 
					var vacant_teaching        = $("#Asc201516DsiSneTeachingVacant");
					var vacant_nonteaching     = $("#Asc201516DsiSneNonteachingVacant");

					res_teaching = res + (sanctioned_teaching - working_teaching);
					res_nonteaching = res + ( sanctioned_nonteaching - working_nonteaching);

					vacant_teaching.val(res_teaching);
					vacant_nonteaching.val(res_nonteaching);

				}else{
					var res                    = 0;
					var res_teaching;
					var res_nonteaching;
					var sanctioned_teaching    = +$("#Asc201516DsiSneTeachingSanctioned").val();
					var sanctioned_nonteaching = +$("#Asc201516DsiSneNonteachingSanctioned").val(); 
					var working_teaching       = +$("#Asc201516DsiSneTeachingWorking").val(); 
					var working_nonteaching    = +$("#Asc201516DsiSneNonteachingWorking").val(); 
					var vacant_teaching        = $("#Asc201516DsiSneTeachingVacant");
					var vacant_nonteaching     = $("#Asc201516DsiSneNonteachingVacant");

					res_teaching = res + (working_teaching);
					res_nonteaching = res + (working_nonteaching);

					vacant_teaching.val(res_teaching);
					vacant_nonteaching.val(res_nonteaching);

				}
				
				
			});

			$("#Asc201516DsiEnrollmentUrdu, #Asc201516DsiEnrollmentEnglish, #Asc201516DsiEnrollmentSindhi").keyup(function(){
				var sum     = 0;
				var urdu    = +$("#Asc201516DsiEnrollmentUrdu").val();
				var english = +$("#Asc201516DsiEnrollmentEnglish").val();
				var sindhi  = +$("#Asc201516DsiEnrollmentSindhi").val();

				var sum = sum + (urdu + english + sindhi);

				$("#Asc201516DsiEnrollmentTotal").val(sum);

			});


			/*$("#Asc201516DsiEnrollmentTotal").bind('input propertychange change keyup input', function() {

				var total_enrollment = +$(this).val();
				var total_enrolment_reference = $("#total_enrollment_reference");
				console.log(total_enrollment);


				total_enrollment_reference.val(total_enrollment);
				console.log(total_enrollment_reference);
			});*/ 

			$("#Asc201516NoOfPprsSchools, #Asc201516NoOfPvtSchools").keyup(function() {
				sum = 0;
				var pprs = +$("#Asc201516NoOfPprsSchools").val();
				var pvt  = +$("#Asc201516NoOfPvtSchools").val();

				sum = sum + (pprs+pvt);

				$("#Asc201516NoOfTotalSurroundingSchools").val(sum);
			});

			/*$("#timescale_bps").keyup(function(){
				var name = $(this).parent().parent();				
				var appbps_val = name.siblings('td').children("div.input").children("input#appointment_bps").val();				
				var timebps_val = $(this).val();
				console.log(appbps_val);
				console.log(timebps_val);

				    			
				if(timescale_bps <= appointment_bps){
					$(this).attr('style', 'border-color: green;');
				}else{
					$(this).attr('style', 'border-color: red;');
					$(this).val('');
				}

			});*/

			$("#Asc201516DsiSchCampusMergedSchools").keyup(function(){
				var semiscode = +$("#Asc201516SchoolSemisCode").val();
				var value = +$(this).val();
				if(value == semiscode){
					$(this).attr('style', 'border-color: red;');

					$(this).val('');
				}else{
					$(this).attr('style', 'border-color: #ccc;');
				}
				
			});

			$("#Asc201516SchBranchedMainSchoolSemis").keyup(function(){
				var semiscode = +$("#Asc201516SchoolSemisCode").val();
				var value = +$(this).val();
				if(value == semiscode){
					$(this).attr('style', 'border-color: red;');

					$(this).val('');
				}else{
					$(this).attr('style', 'border-color: #ccc;');
				}
				
			});

			$("#Asc201516SchUpgraded").change(function(){
				var choice = $("#Asc201516SchUpgraded").val();
				var upgradeSelect = $("#Asc201516SchUpgradedLevel");
				var levelSelected = +$("#Asc201516DsiLevel").val();

				if(choice == 1){
					if(levelSelected == 1){
						upgradeSelect.html("<option value='2'>2 = Middle</option><option value='3'>3 = Elementary</option><option value='4'>4 = Secondary</option><option value='5'>5 = Higher Secondary</option><option value='9'>9 = Primary with permission to run middle classes</option>");
					}else if(levelSelected == 2){
						upgradeSelect.html("<option value='3'>3 = Elementary</option><option value='4'>4 = Secondary</option><option value='5'>5 = Higher Secondary</option><option value='9'>9 = Primary with permission to run middle classes</option>");

					}else if(levelSelected == 3){
						upgradeSelect.html("<option value='4'>4 = Secondary</option><option value='5'>5 = Higher Secondary</option><option value='9'>9 = Primary with permission to run middle classes</option>");
					}else if(levelSelected == 4){
						upgradeSelect.html("<option value='5'>5 = Higher Secondary</option><option value='9'>9 = Primary with permission to run middle classes</option>");
					}else if(levelSelected == 5){
						upgradeSelect.html("<option value='9'>9 = Primary with permission to run middle classes</option>");
					}else if(levelSelected == 9){
						upgradeSelect.html("<option value='9'>9 = Primary with permission to run middle classes</option>");
					}else{
						upgradeSelect.html("<option value=''>Select Level First</option>");
					}

				}else if(choice == 2){
					$("#Asc201516SchUpgradedLevel").val('');
					
				}else if(choice == 0){
					$("#Asc201516SchUpgradedLevel").val('');
					
				}
			});

			$("#Asc201516DsiLevel").change(function() {
				var choice = $("#Asc201516DsiLevel").val();

				if((choice == 1) || (choice == 2) || (choice == 3) || (choice == 9)){
					$("#elem_tbl").attr('style', 'display: block;');
					$("#sec_tbl").attr('style', 'display: none;');
					$("#hsec_tbl").attr('style', 'display: none;');
				}else if(choice == 4){
					$("#elem_tbl").attr('style', 'display: none;');
					$("#sec_tbl").attr('style', 'display: block;');
					$("#hsec_tbl").attr('style', 'display: none;');
				}else if(choice == 5){
					$("#elem_tbl").attr('style', 'display: none;');
					$("#sec_tbl").attr('style', 'display: none;');
					$("#hsec_tbl").attr('style', 'display: block;');
				}else{
					$("#elem_tbl").attr('style', 'display: none;');
					$("#sec_tbl").attr('style', 'display: none;');
					$("#hsec_tbl").attr('style', 'display: none;');
				}
			});

			$("#Asc201516DsiSchAdministration").change(function(){
				var choice = $(this).val();
				if(choice == 5){
					$("#sch_admin_specify_div").attr('style', 'display: block');
					$("#Asc201516DsiSchAdministrationSpecify").removeAttr('disabled', 'disabled');
					$("#Asc201516DsiSchAdministrationSpecify").removeAttr('readonly', 'readonly');
					$("#Asc201516DsiSchAdministrationSpecify").val('');
					$("#Asc201516DsiSchAdministrationSpecify").attr('value', '');

				}else{
					$("#sch_admin_specify_div").attr('style', 'display: none');
					$("#Asc201516DsiSchAdministrationSpecify").attr('readonly', 'readonly');
					$("#Asc201516DsiSchAdministrationSpecify").val('');
					$("#Asc201516DsiSchAdministrationSpecify").attr('value', '');					
				}

			});

			var currentpage=1;
			//Navigation buttons!
			$("#btnpage1, #btnpage11").click(function(){
				if(currentpage == 2){
					if(validate_page2() == true){
						$("#page1").removeClass('hide');				
						$("#page2").addClass('hide');				
						$("#page3").addClass('hide');				
						$('html,body').scrollTop(0);
						currentpage = 1;		
					}
				}else if(currentpage == 3){
					if(validate_page3() == true){
						$("#page1").removeClass('hide');				
						$("#page2").addClass('hide');				
						$("#page3").addClass('hide');				
						$('html,body').scrollTop(0);
						currentpage = 1;		
					}
				}				
			});
		
			$("#btnpage2, #btnpage21").click(function(){
				if(currentpage == 1){
					if(validate_page1() == true){
						$("#page2").removeClass('hide');								
						$("#page1").addClass('hide');				
						$("#page3").addClass('hide');
						$('html,body').scrollTop(0);
						currentpage = 2;
					}		
				}else if(currentpage == 3){
					if(validate_page3() == true){
						$("#page2").removeClass('hide');								
						$("#page1").addClass('hide');				
						$("#page3").addClass('hide');
						$('html,body').scrollTop(0);
						currentpage = 2;
					}					
				}								
			});
		
			$("#btnpage3, #btnpage31").click(function(){
			console.log(currentpage);				
				if(currentpage == 1){
					if(validate_page1() == true){
						$("#page3").removeClass('hide');
						$("#page1").addClass('hide');
						$("#page2").addClass('hide');				
						$('html,body').scrollTop(0);
						currentpage = 3;
					}	

				}else if(currentpage == 2){
					if(validate_page2() == true){
						$("#page3").removeClass('hide');
						$("#page1").addClass('hide');
						$("#page2").addClass('hide');				
						$('html,body').scrollTop(0);
						currentpage = 3;
					}	
				}				
			});
		
		});
		
		
	</script>
</body>
<!--End Body-->
</html>
