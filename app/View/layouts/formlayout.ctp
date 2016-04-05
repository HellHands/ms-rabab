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

    <?= $this->Html->css('/css/bootstrap-datepicker.min.css');	?>
    <?= $this->Html->css('/css/form_custom.css'); ?>	
    <?= $this->Html->css('/css/jquery-ui.css'); ?>
    <?= $this->Html->css('/css/jquery.timepicker'); ?>
    

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .form-control2{
    	width: auto !important;
    	display: inline !important;
    	margin-left: 4px !important;
    }
    
    .row{
    	background-color: #F5FFFF;
    	border: 1px solid gray;
    	padding: 14px 0 0 0;
    }
    .btn-primary{
    	margin-top: 10px;
    }
    #minheightcont{
    	min-height: 500px;
    }
    .lead{
    	background: rgba(218, 218, 181, 0.52);
    }
    .ui-timepicker-wrapper{
    	width: 13.0em !important;
    }
    
    </style>
</head> 

<!--Body starts here !-->
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
      	<?php if(isset($logout)){?>
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a href="#"><?= $username; ?></a></li>		       
		   	<li><a href="<?= $this->webroot.'users/logout'; ?>">Log out</a></li>		       
	    </ul><?php } ?>
	
  	</div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="text-align: center;">
			<img src="<?= $this->webroot.'img/sindhgovt_logo.png'; ?>" class="img-rounded"></img>
		</div>
		<center><h1>Monitoring Proforma <br><small>Reform Support Unit</small></h1></center>
		<div class="col-md-10" style="float: none; margin: 0 auto;" id="minheightcont">		
			<hr>
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
    <?= $this->Html->script('/js/bootstrap-datepicker.min.js'); ?>
    <?= $this->Html->script('/js/jquery.maskedinput.js'); ?>
    <?= $this->Html->script('/js/jquery.timepicker.js'); ?>
    

    <script>
    	//global variables!
		var tehsils_url  = window.location.protocol + "//" + window.location.host + '/latest/home/get_tehsils/';
		var ucs_url      = window.location.protocol + "//" + window.location.host + '/latest/home/get_ucs/';
		var statuses_url = window.location.protocol + "//" + window.location.host + '/latest/home/get_statuses/';
		var semisC_url   = window.location.protocol + "//" + window.location.host + '/latest/home/get_semis_ajax/';
		
		var username = '<?php echo $username; ?>';
		var uid      = '<?php echo $uid; ?>';

		var govtmale;
		var govtfemale;
		var nongovtmale;
		var nongovtfemale;
		
		var nonteacher_male;
		var nonteacher_female;

		var total_teachers;
		var total_nonteachers;

		var total_enrollment;
		var std_headcount;

		var total_rooms;
		var total_rooms_as_classrooms;

		function verify(evt){			  			  
			  	if($("#school_name").val() == ''){
			  		alert('Please validate SEMIS Code');
			  		evt.preventDefault();
			  		return false;
			  	}else{
			  		return true;
			  	}			  
			  
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

		function get_total_rooms() 
		{
			total_rooms = parseInt($("#mnformTotalRooms").val());

			return total_rooms;
		}

		function get_total_rooms_as_classrooms()
		{
			total_rooms_as_classrooms = parseInt($('#mnformTotalClassrooms').val());

			return total_rooms_as_classrooms;

		}

		function get_total_enrollment()
		{
			total_enrollment = parseInt($("#mnformTotalEnrollment").val());

			return total_enrollment;
		}

		function get_total_headcount_stds()
		{
			std_headcount = parseInt($("#mnformHeadcount").val());

			return std_headcount;
		}
		
		function get_total_teachers()
		{
			govtmale       = parseInt($('#mnformGovtMale').val());
			if(!(govtmale)){
				$('#mnformGovtMale').val('');
				govtmale       = 0;//parseInt($('#mnformGovtMale').val());
			}	

			govtfemale     = parseInt($('#mnformGovtFemale').val());
			if(!(govtfemale)){
				$('#mnformGovtFemale').val('');
				govtfemale     = 0;//parseInt($('#mnformGovtFemale').val());
			}

			nongovtmale    = parseInt($('#mnformNongovtMale').val());
			if(!(nongovtmale)){
				$('#mnformNongovtMale').val('');
				nongovtmale    = 0;//parseInt($('#mnformNongovtMale').val());
			}

			nongovtfemale  = parseInt($('#mnformNongovtFemale').val());
			if(!(nongovtfemale)){
				$('#mnformNongovtFemale').val('');
				nongovtfemale  = 0;//parseInt($('#mnformNongovtFemale').val());
			}

			total_teachers = (govtmale+govtfemale+nongovtmale+nongovtfemale);

			return total_teachers;
		}

		function get_total_nonteachers()
		{
			nonteacher_male              = parseInt($('#mnformNonteachingMale').val());
			if(!(nonteacher_male)){
				$('#mnformNonteachingMale').val('');
				nonteacher_male       = $('#mnformNonteachingMale').val();
			}	
			
			nonteacher_female            = parseInt($('#mnformNonteachingFemale').val());
			if(!(nonteacher_female)){
				$('#mnformNonteachingFemale').val('');
				nonteacher_female       = $('#mnformNonteachingFemale').val();
			}
			total_nonteachers = (nonteacher_male+nonteacher_female);

			return total_nonteachers;
		}

		function get_teachers_headcount(){

			headcount = parseInt($('#mnformHeadcountTeachingstaff').val());
			
			return headcount;
		}

		function get_nonteachers_headcount(){
			headcount = parseInt($('#mnformHeadcountNonteachingstaff').val());
			
			return headcount;
		}



		$('#mnformTotalClassrooms').keyup(function(e){
			var total_rooms               = get_total_rooms();
			var total_rooms_as_classrooms = get_total_rooms_as_classrooms();

			if(total_rooms < total_rooms_as_classrooms)
			{
				e.preventDefault();
				alert('Error!, Total Classrooms should be less than or equal to Total Rooms');
				$("#mnformTotalClassrooms").val('');
			}
		});

		$('#mnformTotalClassrooms').keydown(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			var keyCode = e.keyCode || e.which;
			if(keyCode === 9){
				if(total_teachers < teachers_headcount){
					e.preventDefault();
					alert('Error!, Teachers Headcount should be less than total teachers!');
					$('#mnformTotalClassrooms').val('');
				}	
			}

		});

		$('#mnformHeadcount').keyup(function(e){
			var std_headcount = get_total_headcount_stds();
			var total_enrollment = get_total_enrollment();

			if(total_enrollment < std_headcount)
			{
				e.preventDefault();
				alert('Error!, Headcount should be less than Total Enrollment');
				$("#mnformHeadcount").val('');
			}
		});

		$('#mnformHeadcount').keydown(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			var keyCode = e.keyCode || e.which;
			if(keyCode === 9){
				if(total_teachers < teachers_headcount){
					e.preventDefault();
					alert('Error!, Teachers Headcount should be less than total teachers!');
					$('#mnformHeadcount').val('');
				}	
			}

		});


		$('#mnformHeadcountTeachingstaff').keyup(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			if(total_teachers < teachers_headcount){
				e.preventDefault();
				alert('Error!, Teachers Headcount should be less than total teachers!');
				$('#mnformHeadcountTeachingstaff').val('');
			}
		});

		$('#mnformHeadcountTeachingstaff').keydown(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			var keyCode = e.keyCode || e.which;
			if(keyCode === 9){
				if(total_teachers < teachers_headcount){
					e.preventDefault();
					alert('Error!, Teachers Headcount should be less than total teachers!');
					$('#mnformHeadcountTeachingstaff').val('');
				}	
			}

		});

		$('#mnformHeadcountNonteachingstaff').keyup(function(){
			var total_nonteachers     = get_total_nonteachers();
			var nonteachers_headcount = get_nonteachers_headcount();

			if(total_nonteachers < nonteachers_headcount){
				alert('Error!, NonTeachers Headcount should be less than total NonTeachers!');
				$('#mnformHeadcountNonteachingstaff').val('');				
			}

		});

		$('#mnformHeadcountNonteachingstaff').keydown(function(e){
			var total_teachers     = get_total_teachers();
			var teachers_headcount = get_teachers_headcount();			

			var keyCode = e.keyCode || e.which;
			if(keyCode === 9){
				if(total_teachers < teachers_headcount){
					e.preventDefault();
					alert('Error!, Teachers Headcount should be less than total teachers!');
					$('#mnformHeadcountNonteachingstaff').val('');
				}	
			}

		});


		$('#mnformGovtMale').keyup(function(){
			total_teachers = get_total_teachers();
	        $('#mnformTotalTeachers').val(total_teachers);	
	        
		});

		$('#mnformNongovtMale').keyup(function(){
			total_teachers = get_total_teachers();
	        $('#mnformTotalTeachers').val(total_teachers);	
		});

		$('#mnformGovtFemale').keyup(function(){
			total_teachers = get_total_teachers();
	        $('#mnformTotalTeachers').val(total_teachers);	
		});

		$('#mnformNongovtFemale').keyup(function(){
			total_teachers = get_total_teachers();
	        $('#mnformTotalTeachers').val(total_teachers);	
		});

		$('#mnformNonteachingMale').keyup(function(){
			total_teachers = get_total_nonteachers();
	        $('#mnformTotalNonteachingStaff').val(total_teachers);	
		});

		$('#mnformNonteachingFemale').keyup(function(){
			total_teachers = get_total_nonteachers();
	        $('#mnformTotalNonteachingStaff').val(total_teachers);	
		});


		$(function() {
			$('#dov').datepicker({
			    format: "dd-mm-yyyy",
			    endDate: "D",
			    todayBtn: "linked",
			    clearBtn: true,
			    autoclose: true,
			    todayHighlight: true
			});

			$('#closure_dmy').datepicker({
				format: "dd-mm-yyyy",
				endDate: "31-10-2015",
				todayBtn: "linked",
				clearBtn: true,
				autoClose: true,
				todayHighlight: true
			});

			//alert(tehsils_url);
			//alert(username + ' ' + uid);
			$("#mnformDpcnic").mask("99999-9999999-9");//, {placeholder:"XXXXX-XXXXXXX-X"});
		   	$("#mnformDmcnic").mask("99999-9999999-9");//, {placeholder:"XXXXX-XXXXXXX-X"});
		   	$("#mnformDccontact").mask("9999-9999999");
		   	$("#mnformDpcontact").mask("9999-9999999");
		   	$("#mnformDmcontact").mask("9999-9999999");
		   			   
		    $('#tov').timepicker({'scrollDefault': 'now' });
			
			total_teachers = (govtmale+govtfemale+nongovtmale+nongovtfemale);
			total_nonteachers = (nonteacher_male+nonteacher_female);			

			if(!total_teachers){ total_teachers = 0;}
			if(!total_nonteachers){ total_nonteachers = 0;}

			$('#mnformTotalTeachers').val(total_teachers);
			$('#mnformTotalNonteachingStaff').val(total_nonteachers);

			$("#district_select").change(function() {				
				var v = $('#district_select option:selected').text();		
				
				if(v)
				{
					$("#uc_select").load(ucs_url);
				}
			  	//$("#tehsil_select").load('http://localhost/old/monitoring_forms201516/get_tehsils/' + $("#district_select").val());

			  	$('#tehsil_select').prepend($('#tehsil_select option:selected').text('Loading...'));
			  	$("#tehsil_select").load(tehsils_url + $("#district_select").val());
			});

			$("#tehsil_select").change(function() {
				$("#uc_select").load(ucs_url + $("#tehsil_select").val());
			});

			$("#condition_select").change(function() {
				//$("#status_select").load(statuses_url + $("#condition_select").val());


				//var choice = $('#condition_select option:selected').text();
				var choice = parseInt($('#condition_select option:selected').val());
				
				if(choice == 0){					
					$("#closure_dmy").attr('disabled','disabled');
					//$("#closure_dmyDay").attr('disabled','disabled');
					//$("#closure_dmyMonth").attr('disabled','disabled');
					//$("#closure_dmyYear").attr('disabled','disabled');
					$("#closure_reason").attr('disabled', 'disabled');	
					$("#mnformHeadcount").attr('disabled', 'disabled');
				}else if(choice == 2){
					$("#status_select").html("<option value='2'>Closed Temporary</option><option value='3'>Closed Permanently</option>");
					$("#closure_dmy").removeAttr('disabled','disabled');
					//$("#closure_dmyDay").removeAttr('disabled');
					//$("#closure_dmyMonth").removeAttr('disabled');
					//$("#closure_dmyYear").removeAttr('disabled');
					$("#closure_reason").removeAttr('disabled');	
					$("#mnformHeadcount").attr('disabled', 'disabled');
				}else{
					$("#status_select").html(
						"<option value='1'>Functional</option><option value='2'>Closed Temporary</option>");
					$("#closure_dmy").attr('disabled','disabled');
					//$("#closure_dmyDay").attr('disabled','disabled');
					//$("#closure_dmyMonth").attr('disabled','disabled');
					//$("#closure_dmyYear").attr('disabled','disabled');
					$("#closure_reason").attr('disabled', 'disabled');	
					$("#mnformHeadcount").removeAttr('disabled', 'disabled');	
				}
					
								
			});
			
			$("#status_select").change(function() {
				//$("#status_select").load(statuses_url + $("#condition_select").val());
				//var choice = $('#condition_select option:selected').text();

				var choice = parseInt($('#status_select option:selected').val());
				if(choice == 1){
					$("#closure_dmy").attr('disabled','disabled');
					//$("#closure_dmyDay").attr('disabled','disabled');
					//$("#closure_dmyMonth").attr('disabled','disabled');
					//$("#closure_dmyYear").attr('disabled','disabled');
					$("#closure_reason").attr('disabled', 'disabled');	
					$("#mnformHeadcount").removeAttr('disabled', 'disabled');	

				}else if(choice == 2){
					$("#closure_dmy").removeAttr('disabled','disabled');
					//$("#closure_dmyDay").removeAttr('disabled','disabled');
					//$("#closure_dmyMonth").removeAttr('disabled','disabled');
					//$("#closure_dmyYear").removeAttr('disabled','disabled');
					$("#closure_reason").removeAttr('disabled', 'disabled');	
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
				choice = $('#washroom_facility option:selected').text();
				if(choice == 'Yes')
				{
					$("#functional_washrooms").removeAttr('disabled');					
					$("#nonfunctional_washrooms").removeAttr('disabled');					
					//$("#functional_washrooms").attr('required', 'required');
					//$("#nonfunctional_washrooms").attr('required', 'required');
				}else{
					$("#functional_washrooms").attr('disabled','disabled');
					$("#nonfunctional_washrooms").attr('disabled', 'disabled');					
				}
			});
			 
			$("#closure_reason").change(function(){
				choice = parseInt($("#closure_reason").val());
				if(choice == 8)
				{
					$("#closure_major_reason_specify_div").attr('style', 'display: block;');
					$("#mnformClosureMajorReasonSpecify").attr('required', 'required');
					$("#mnformClosureMajorReasonSpecify").removeAttr('disabled', 'disabled');
				}else{
					$("#closure_major_reason_specify_div").attr('style', 'display: none;');
					$("#mnformClosureMajorReasonSpecify").removeAttr('required', 'required');
					$("#mnformClosureMajorReasonSpecify").attr('disabled', 'disabled');
				}

			});

			$("#mnformSemisCode").keyup(function() {
				
				var x = $("#mnformSemisCode").val().length;
				if(x == 9){					
					$("#semis_code_div").attr('class', 'form-group col-md-3 has-success');
				}else{
					$("#semis_code_div").attr('class', 'form-group col-md-3 has-error');
				}

			});		

	
			$("#validatesemis").on('click', function() {
				var str = +$("#mnformSemisCode").val();
				  	
				  	if (str == '') {
				    	document.getElementById("SemisCodeResult").innerHTML="";
				    	return;
				  	} 
				  	
				  	if (window.XMLHttpRequest) {
				    	// code for IE7+, Firefox, Chrome, Opera, Safari
				    	xmlhttp=new XMLHttpRequest();
				  	} else { // code for IE6, IE5
				    	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  	}
				  	
				  	xmlhttp.onreadystatechange=function() {
				    	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				    		//document.getElementById("SemisCodeResult").innerHTML=xmlhttp.responseText;
							var data     = JSON.parse(xmlhttp.responseText);				        
							var name     = data['name'];
							var tehsilid = data['talukaid'];
							var ucid     = data['ucid'];
				    		console.log(tehsilid);
				    		if(!tehsilid){
				    			data['talukaid'] = '';
				    			data['taluka'] = ''
				    		}
				    		
				    		if(!ucid){
				    			data['uc'] = '';
				    			data['ucid'] = '';
				    		}
				    		//console.log(data['tehsilid']);

				    		

					        if(data && name){
					        	
					        	document.getElementById("district_box").value  = data['district'];
								document.getElementById("district_id").value   = data['districtid'];
								
								document.getElementById("tehsil_select").value = data['taluka'];
								document.getElementById("tehsil_id").value     = data['talukaid'];

								document.getElementById("uc_select").value     = data['uc'];
								document.getElementById("uc_id").value         = data['ucid'];
								document.getElementById("school_name").value   = data['name'];	
								document.getElementById("SemisCodeResult").innerHTML = "";
					        }else if(!name){					        	
					        	document.getElementById("district_box").value  = "";
								document.getElementById("district_id").value   = "";
								
								document.getElementById("tehsil_select").value = "";
								document.getElementById("tehsil_id").value     = "";

								document.getElementById("uc_select").value     = "";
								document.getElementById("uc_id").value         = "";
								document.getElementById("school_name").value   = "";
					        	document.getElementById("SemisCodeResult").innerHTML = "<div class=\"alert alert-danger\" style=\"margin-top: 20px; margin-bottom: 0; padding: 8px;\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Error!</strong> Not found.</div>";
					        }
							
					        
				    	}
				  	}				  	
				  	
				  	xmlhttp.open("GET", semisC_url + str, true);
				  	xmlhttp.send();
				});

			//});

		});		
	</script>
</body>
<!--End Body-->
</html>
