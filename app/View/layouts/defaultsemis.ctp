<?php if(isset($superadmin)) { if($superadmin == 1 || $superadmin == 2) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--============================Head============================-->
<head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="robots" content="noindex,nofollow" />
			
<!--=========Title=========-->
			<title>
				<?php echo $title_for_layout; ?>
			</title>
            
<!--=========Stylesheets=========-->
			<link href="<?php echo $this->webroot?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo $this->webroot?>css/style.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/blue.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/invalid.css" rel="stylesheet" type="text/css"/>
			<link href="<?php echo $this->webroot?>css/TableCSSCode.css" rel="stylesheet" type="text/css"/>

			
<!--=========jQuery and jQuery Tools		-->
        <script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.tools.min.js"></script> <!--Import jquery tools-->     
<!--=========Visualize for charting=========-->
            <!--[if IE]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->            
            

<!--=========Site Default JS=========-->
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.dataTables.js"></script>
		
			
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
			
			<span class="fr">			
				<?php if(isset($logout)) { ?>
					<a class="button2" href="<?php echo $this->webroot?>users/logout" style="" >logout</a>
				<?php } ?>
			</span>
			<?php if($superadmin == 1 || $superadmin == 2) { ?>
			<span>
				<?php if($superadmin == 2) { ?>
				<a href="<?php echo $this->webroot?>home/do_dashboard">Dashboard Report</a>
				<a style="margin-right:580px; float:right;" href="<?php echo $this->webroot?>home/do_schools">Details of Submitted Forms</a>
				<?php }elseif($uname == 'admin') { ?>
				<a href="<?php echo $this->webroot?>home/superdashboard">Dashboard Report</a>
				<a style="margin-right:580px; float:right;" href="<?php echo $this->webroot?>home/editsuperuser">Details of Submitted Forms</a>
				<a style="margin-right:-312px; float:right;" href="<?php echo $this->webroot?>users/add">Add New User</a>
				<?php }else{ ?>
				<a href="<?php echo $this->webroot?>home/superdashboard">Dashboard Report</a>
				<a style="margin-right:580px; float:right;" href="<?php echo $this->webroot?>home/editsuperuser">Details of Submitted Forms</a>
				<?php } ?>
			</span>
			<?php } ?>
		</div>
		<!--End Search field and logo Header Area-->
        
<!--=========Main Navigation=========-->
<?php 
		echo $this->Html->meta('icon');

		
		echo $scripts_for_layout;
		$session->flash('auth');
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
<?php } }else{ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--============================Head============================-->
<head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="robots" content="noindex,nofollow" />
			
<!--=========Title=========-->
           <title>
				<?php echo $title_for_layout; ?>
			</title>
            
<!--=========Stylesheets=========-->
			<link href="<?php echo $this->webroot?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/style.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/blue.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/invalid.css" rel="stylesheet" type="text/css"/>
			<link href="<?php echo $this->webroot?>css/TableCSSCode.css" rel="stylesheet" type="text/css"/>
<!--=========jQuery and jQuery Tools		-->
        <script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.tools.min.js"></script> <!--Import jquery tools-->     
<!--=========Visualize for charting=========-->
            <!--[if IE]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->            
            
<!--=========Site Default JS=========-->
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/bootstrap-datetimepicker.min.js"></script>

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
			<span class="fr">			
				<?php if(isset($logout)) { ?>
					<a class="button2" href="<?php echo $this->webroot?>users/logout" style="" >logout</a>
				<?php } ?>
			</span>
		</div>
		<!--End Search field and logo Header Area-->
        
<!--=========Main Navigation=========-->
<?php 
		echo $this->Html->meta('icon');

		
		echo $scripts_for_layout;
		$session->flash('auth');
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
			maxDate : '10/31/2014',
			pickTime: false
		});
		$('#datetimepicker3').datetimepicker({
		  maxDate : '10/31/2014',
		  pickTime: false
		});
		$('#datetimepicker5').datetimepicker({
			pickTime: false,
			format: "yyyy",
			viewMode: "years", 
			maxDate : '10/31/2014',
			minViewMode: "years"
			
		});
		$('#datetimepickersmcmeet').datetimepicker({
			pickTime: false,
			maxDate : '10/31/2014'
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

