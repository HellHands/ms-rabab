<?php if(isset($superadmin) && ($superadmin == 1 || $superadmin == 2 || $superadmin == 4)) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--============================Head============================-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	<?php 
	echo $this->Html->meta('icon', $this->webroot.'images/rsu-favicon.ico');
	?>
			
	<!-- TITLE -->
	<title> <?php echo $title_for_layout; ?> </title>
            
	<!--=========Stylesheets=========-->
	<?= $this->Html->css('/css/bootstrap-datetimepicker.min.css'); ?>
	<?= $this->Html->css('/css/style.css'); ?>
	<?= $this->Html->css('/css/blue.css'); ?>
	<?= $this->Html->css('/css/invalid.css'); ?>
	<?= $this->Html->css('/css/TableCSSCode.css'); ?>
				
	<!--=========jQuery and jQuery Tools		-->
	<?= $this->Html->script('/js/jquery.tools.min.js'); ?> <!--Import jquery tools-->     
	
	<!--=========Visualize for charting=========-->
    <!--[if IE]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->            
            

	<!--=========Site Default JS=========-->
	<?= $this->Html->script('/js/jquery-1.10.2.js'); ?>
	<?= $this->Html->script('/js/bootstrap-datetimepicker.min.js'); ?>
	<?= $this->Html->script('/js/jquery.dataTables.js'); ?>

	<!--=========This Data Tables=========-->			
	<!--========= PNG Fix and other fixes for ie =========-->
    <!--[if lt IE 8]>
                <link href="<?php //echo $this->webroot?>css/ie.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<!--[if lt IE 7]>
				<script type="text/javascript" src="<?php //echo $this->webroot?>js/dd_png_fix.js"></script>
				<script>DD_belatedPNG.fix('img, div, a');</script>
	 <![endif]-->

</head> <!--End Head-->

<!--============================Body============================-->
<body>

<!--==================== Header =======================-->
<div id="header_bg">

<!--============Header Wrapper============-->
	<div class="">
	
<!--=======Top Header area======-->
		<!--div id="header_top">
			<span class="fr">			
				< ?php if(isset($logout)) { ?>
					<a href="< ?php echo $this->webroot?>users/logout" style="" >logout</a>
				< ?php } ?>
			</span>
		</div-->
		<!--End Header top Area=-->
    
<!--=========Header Area including search field and logo=========-->
		<div class="header_main clearfix">
        <!--===Search field===-->
		  <!--div class="header_search">
			<form style=" float:right; margin-top:-20px; font-size:14px; width:100%;" id="edit_school_form" name="edit_school_form" action="<?php echo $this->webroot?>home/index" method="post">
			<a href="#" onclick="document.edit_school_form.submit()" ><img src="<?php echo $this->webroot?>img/search_icon.png"  alt="Search" width="21" height="20" type="submit" value="submit" class="search_icon" /></a>
			<input name="semis_code" type="text"  id="textfield" class="search_field" />
			</form>
		  </div-->
                  
<!--===Logo===-->
			<a id="" href="#" >
				<img src="<?php echo $this->webroot?>img/semislogo.png" style="width: 100%; height: 124px;  margin-top: 0px;" ></img>
			</a>
			<!--div style="color: #FFFFFF;font-size: 21px;text-align: center;">SEMIS Data Entry Module for High & Higher Secondary Schools</div-->
			
			<span class="fr">			
				<?php if(isset($logout)) { ?>
					<a class="button2" href="<?php echo $this->webroot?>users/logout" style="" >logout</a>
				<?php } ?>
			</span>
			<?php if($superadmin == 1 || $superadmin == 2 || $superadmin == 4) { ?>
			<span>
				<?php if($uname == 'admin') { ?>
				<a href="<?php echo $this->webroot?>home/superdashboard">Dashboard Report</a>
				<!--<a style="margin-right:500px; float:right;" href="< ?php echo $this->webroot?>home/superdashboard201415">Details of Submitted Forms ASC 2014 15</a>
				<a style="margin-right:-400px; float:right;" href="< ?php echo $this->webroot?>home/inconsistency">Inconsistencies</a>
				<a style="margin-right:-500px; float:right;" href="< ?php echo $this->webroot?>users/">List User</a>
				<a style="margin-right:-750px; float:right;" href="< ?php echo $this->webroot?>home/semis_form_p1_edit/newschool">Without Semiscode School Form</a>-->
				<a style="margin-left: 12px;" href="<?php echo $this->webroot?>home/superdashboard201415">Details of Submitted Forms ASC 2014 15</a>
				<a style="margin-left: 12px;" href="<?php echo $this->webroot?>home/inconsistency">Inconsistencies</a>
				<a style="margin-left: 12px;" href="<?php echo $this->webroot?>users/">List User</a>
				<a style="margin-left: 12px;" href="<?php echo $this->webroot?>home/semis_form_p1_edit/newschool">Without Semiscode School Form</a>
				<a style="margin-left: 12px;" href="<?php echo $this->webroot?>home/mnform">MonitoringForm</a>
				<?php }elseif($superadmin == 1 || $superadmin == 2 || $superadmin == 4) { ?>
				<a href="<?php echo $this->webroot?>home/index">Dashboard Report</a>
				<!--<a style="margin-right:500px; float:right;" href="<?php echo $this->webroot?>home/superdashboard201415">Details of Submitted Forms</a>-->
				<a style="margin-left: 30px;" href="<?php echo $this->webroot?>home/superdashboard201415">Details of Submitted Forms</a>
				<!--a style="margin-right:580px; float:right;" href="< ?php echo $this->webroot?>home/editsuperuser">Details of Submitted Forms</a-->
				<!--<a style="margin-right:-350px; float:right;" href="< ?php echo $this->webroot?>home/inconsistency">Inconsistencies </a> -->
				<a style="margin-left: 30px;" href="<?php echo $this->webroot?>home/inconsistency">Inconsistencies </a>
				<a style="margin-left: 30px;" href="<?php echo $this->webroot?>home/semis_form_p1_edit/newschool">Without Semiscode School Form</a>
				<a style="margin-left: 30px;" href="<?php echo $this->webroot?>home/mnform">Monitoring Form 2015-16</a>
				<?php }else{ ?>
				<a href="<?php echo $this->webroot?>home/superdashboard">Dashboard Report</a>
				<a style="margin-right:580px; float:right;" href="<?php echo $this->webroot?>home/superdashboard201415">Details of Submitted Forms</a>
				<a style="margin-right:200px; float:right;" href="<?php echo $this->webroot?>home/semis_form_p1_edit/newschool">Without Semiscode School Form</a>				
				<?php } ?>
			</span>
			<?php } ?>
		</div>
		<!--End Search field and logo Header Area-->
        
<!--=========Main Navigation=========-->
<?php 
		echo $this->Html->meta('icon');

		
		echo $scripts_for_layout;
		$this->Session->flash('auth');
?>


		
		
<!--End Main Navigation-->
        
<!--=========Jump Menu=========- ->
        <div class="jump_menu">
            <a href="#" class="jump_menu_btn">Jump To</a>
            <ul class="jump_menu_list">
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/users2_icon.png" alt="" width="24" height="24" />Users</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/tools_icon.png" alt="" width="24" height="24" />Settings</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/messages_icon.png" alt="" width="24" height="24" />Messages</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/key_icon.png" alt="" width="24" height="24" />Credentials</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/documents_icon.png" alt="" width="24" height="24" />Pages</a></li>
            </ul>
        </div>
		<!--End Jump Menu-->
    
  	</div>
  <!--End Wrapper-->
</div>
<!--End Header-->



<!--============================ Template Content Background ============================-->
<div id="content_bg" class="clearfix">

<!--============================ Main Content Area ============================-->
<div class="content wrapper clearfix">
		<div id="content" class="box">
		<div class="body">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
		</div>
		</div>
</div>	
<!--End main content area-->
</div>
<!--End Template Content bacground-->



<!--============================Footer============================-->
<div id="footer">
	<script type="text/javascript">
	  $(function() {
		$('#datetimepicker4').datetimepicker({
			format: "yyyy",
			viewMode: "years", 
			minViewMode: "years",
			pickTime: false
		});
		$('#datetimepicker3').datetimepicker({
		  pickTime: false
		});
		$('#datetimepicker5').datetimepicker({
			pickTime: false,
			format: "yyyy",
			viewMode: "years", 
			minViewMode: "years"
		});
		$('#datetimepickersmcmeet').datetimepicker({
			pickTime: false
		});
		
	  });
	</script>
	<div class="">
	<img src="<?php echo $this->webroot; ?>img/bottom.JPG" style="margin-top: -20px; max-width:100%;" />
	<h8>Copyright (C) 2014   SEMIS RSU SINDH  . All Rights Reserved.</h8>
	</div>
</div>
<!--End Footer-->


</body>
<!--End Body-->
</html>
<?php }else{ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--============================Head============================-->
<head>
   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	<?= $this->Html->meta('icon', $this->webroot.'images/rsu-favicon.ico'); ?>
	<!--=========Title=========-->
	<title> <?= $title_for_layout; ?> </title>
	<!--=========Stylesheets=========-->
	<?= $this->Html->css('/css/bootstrap-datetimepicker.min.css'); ?>
	<?= $this->Html->css('/css/style.css'); ?>
	<?= $this->Html->css('/css/blue.css'); ?>
	<?= $this->Html->css('/css/invalid.css'); ?>
	<?= $this->Html->css('/css/TableCSSCode.css'); ?>

	<!--=========jQuery and jQuery Tools		-->
	<?= $this->Html->script('/js/jquery.tools.min.js'); ?> <!--Import jquery tools-->     
	
	<!--=========Visualize for charting=========-->
    <!--[if IE]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->            
            

	<!--=========Site Default JS=========-->
	<?= $this->Html->script('/js/jquery-1.10.2.js'); ?>
	<?= $this->Html->script('/js/bootstrap-datetimepicker.min.js'); ?>

<!--========= PNG Fix and other fixes for ie =========-->
            <!--[if lt IE 8]>
                        <link href="<?php //echo $this->webroot?>css/ie.css" rel="stylesheet" type="text/css"/>
			<![endif]-->
			<!--[if lt IE 7]>
						<script type="text/javascript" src="<?php //echo $this->webroot?>js/dd_png_fix.js"></script>
						<script>DD_belatedPNG.fix('img, div, a');</script>
			 <![endif]-->

</head>
<!--End Head-->


<!--============================Body============================-->
<body>

<!--==================== Header =======================-->
<div id="header_bg">

<!--============Header Wrapper============-->
	<div class="">
        
<!--=======Top Header area======-->
		<!--div id="header_top">
			<span class="fr">			
				< ?php if(isset($logout)) { ?>
					<a href="< ?php echo $this->webroot?>users/logout" style="" >logout</a>
				< ?php } ?>
			</span>
		</div-->
		<!--End Header top Area=-->
    
<!--=========Header Area including search field and logo=========-->
		<div class="header_main clearfix">
        <!--===Search field===-->
		  <!--div class="header_search">
			<form style=" float:right; margin-top:-20px; font-size:14px; width:100%;" id="edit_school_form" name="edit_school_form" action="<?php echo $this->webroot?>home/index" method="post">
			<a href="#" onclick="document.edit_school_form.submit()" ><img src="<?php echo $this->webroot?>img/search_icon.png"  alt="Search" width="21" height="20" type="submit" value="submit" class="search_icon" /></a>
			<input name="semis_code" type="text"  id="textfield" class="search_field" />
			</form>
		  </div-->
                  
<!--===Logo===-->
			<a id="" href="#" >
				<img src="<?php echo $this->webroot?>img/semislogo.png" style="width: 100%; height: 124px;  margin-top: 0px;" ></img>
			</a>
			<!--div style="color: #FFFFFF;font-size: 21px;text-align: center;">SEMIS Data Entry Module for High & Higher Secondary Schools</div-->
			<?php if(isset($logout)) { ?>
			<span class="fr">			
				<a class="button2" style="" href="<?php echo $this->webroot?>users/logout" style="" >logout</a>
			</span>
			<span>
			<a style="margin-right:700px; float:right;" href="<?php echo $this->webroot?>home/semis_form_p1_edit/newschool">Without Semiscode School Form</a>
			</span>
			<?php } ?>
		</div>
		<!--End Search field and logo Header Area-->
        
<!--=========Main Navigation=========-->
<?php 
		echo $this->Html->meta('icon');

		
		echo $scripts_for_layout;
//		$this->$session->flash->auth;	
		$this->Session->flash('auth');
	?>


		
		
<!--End Main Navigation-->
        
<!--=========Jump Menu=========- ->
        <div class="jump_menu">
            <a href="#" class="jump_menu_btn">Jump To</a>
            <ul class="jump_menu_list">
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/users2_icon.png" alt="" width="24" height="24" />Users</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/tools_icon.png" alt="" width="24" height="24" />Settings</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/messages_icon.png" alt="" width="24" height="24" />Messages</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/key_icon.png" alt="" width="24" height="24" />Credentials</a></li>
                <li><a href="#"><img src="< ?php echo $this->webroot?>img/documents_icon.png" alt="" width="24" height="24" />Pages</a></li>
            </ul>
        </div>
		<!--End Jump Menu-->
    
  	</div>
  <!--End Wrapper-->
</div>
<!--End Header-->



<!--============================ Template Content Background ============================-->
<div id="content_bg" class="clearfix">

<!--============================ Main Content Area ============================-->
<div class="content wrapper clearfix">
		<div id="content" class="box">
		<div class="body">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
		</div>
		</div>
</div>	
<!--End main content area-->
</div>
<!--End Template Content bacground-->



<!--============================Footer============================-->
<div id="footer">
	<script type="text/javascript">
	  $(function() {
		$('#datetimepicker4').datetimepicker({
			format: "yyyy",
			viewMode: "years", 
			minViewMode: "years",
			// maxDate : '10/31/2014',
			pickTime: false
		});
		$('#datetimepicker3').datetimepicker({
		  pickTime: false
		});
		$('#datetimepicker5').datetimepicker({
			pickTime: false,
			format: "yyyy",
			viewMode: "years", 
			minViewMode: "years"
			
		});
		$('#datetimepickersmcmeet').datetimepicker({
			pickTime: false
		});
		
	  });
	</script>
	<div class="">
	<img src="<?php echo $this->webroot; ?>img/bottom.JPG" style="margin-top: -20px; max-width:100%;" />
	<h8>Copyright (C) 2014   SEMIS RSU SINDH  . All Rights Reserved.</h8>
	</div>
</div>
<!--End Footer-->


</body>
<!--End Body-->
</html>
<?php } ?>
