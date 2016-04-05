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
            <link href="<?php echo $this->webroot?>css/style.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/blue.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo $this->webroot?>css/invalid.css" rel="stylesheet" type="text/css"/>
			<link href="<?php echo $this->webroot?>css/TableCSSCode.css" rel="stylesheet" type="text/css"/>
            
<!--=========jQuery and jQuery Tools		-->
            <script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.tools.min.js"></script> <!--Import jquery tools-->
            
<!--=========Scripts=========-->
            <!--script type="text/javascript" src="<?php echo $this->webroot?>js/script.js"></script-->
            
<!--=========Date picker=========-->
            <script type="text/javascript" src="<?php echo $this->webroot?>js/jCal.js"></script>
            <script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.animate.clip.js"></script>
            
            
<!--=========Visualize for charting=========-->
            <script type="text/javascript" src="<?php echo $this->webroot?>js/visualize.jQuery.js"></script>
            <!--[if IE]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
            
            
<!--=========wysiwyg editor=========-->
            <script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.wysiwyg.js"></script>
            
            
<!--=========jExpand for Expanding Tables=========-->
            <script type="text/javascript" src="<?php echo $this->webroot?>js/jExpand.js"></script>
            
            
<!--=========Data Tables=========-->
            <script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.dataTables.min.js"></script>
            
<!--=========Site Default JS=========-->
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.validate.js"></script>


			
<!--========= PNG Fix and other fixes for ie =========-->
            <!--[if lt IE 8]>
                        <link href="<?php //echo $this->webroot?>css/ie.css" rel="stylesheet" type="text/css"/>
			<![endif]-->
			<!--[if lt IE 7]>
						<script type="text/javascript" src="<?php //echo $this->webroot?>js/dd_png_fix.js"></script>
						<script>DD_belatedPNG.fix('img, div, a');</script>
			 <![endif]-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4051008-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<!--End Head-->


<!--============================Body============================-->
<body>

<!--==================== Header =======================-->
<div id="header_bg">

<!--============Header Wrapper============-->
	<div class="wrapper">
        
<!--=======Top Header area======-->
		<div id="header_top">
		  <span class="fr">			<?php if(isset($logout)) { ?>
			<a href="<?php echo $this->webroot?>users/logout" style="" >logout</a>
			<?php } ?>
</span>
		  

		</div>
		<!--End Header top Area=-->
    
<!--=========Header Area including search field and logo=========-->
		<div class="header_main clearfix">
        <!--===Search field===-->
		  <div class="header_search">
			<form style=" float:right; margin-top:-20px; font-size:14px; width:100%;" id="edit_school_form" name="edit_school_form" action="<?php echo $this->webroot?>home/index" method="post">
			<a href="#" onclick="document.edit_school_form.submit()" ><img src="<?php echo $this->webroot?>img/search_icon.png"  alt="Search" width="21" height="20" type="submit" value="submit" class="search_icon" /></a>
			<input name="semis_code" type="text"  id="textfield" class="search_field" />
			</form>
		  </div>
                  
<!--===Logo===-->
			<a id="logo" href="<?php echo $this->webroot?>" >
			<div style="text-align:center;">
			</div>
			</a>
		</div>
		<!--End Search field and logo Header Area-->
        
<!--=========Main Navigation=========-->
		<html xmlns="http://www.w3.org/1999/xhtml">
	

<ul id="main_nav">
<li> <a href="#" class="current">Edit </a>
<ul class="current">

<li><a href="<?php echo $this->webroot?>home/index">Edit Schools Information</a></li>
<li><a href="<?php echo $this->webroot?>home/view_teachers">Edit Teachers Information</a></li>
<li><a href="<?php echo $this->webroot?>home/view_classroom_observations">Classroom Observations</a></li>
</ul>
</li>
<li><a href="#">View Reports</a>
<ul>
<li><a href="<?php echo $this->webroot?>home/view_report">General Reports</a></li>
<li><a href="<?php echo $this->webroot?>home/cluster_notified">Clusters Notified</a></li>
<li><a href="<?php echo $this->webroot?>home/view_non_functional_schools/0/1">Non Functional School List</a></li>
<li><a href="<?php echo $this->webroot?>home/view_non_functional_schools/0/2">Single Teacher Schools List</a></li>
<li><a href="<?php echo $this->webroot?>home/distance_calculator">Distance Claculator</a></li>
</ul>
</li>
<li><a href="#">SEMIS Query Module</a>
<ul>
<li><a href="<?php echo $this->webroot?>home/semis_module">Schools Filter</a></li>
<li><a href="<?php echo $this->webroot?>home/semis_summary">Summary Reports</a></li>
<li><a href="<?php echo $this->webroot?>home/semis_ratio">Ratio Reports</a></li>
<li><a href="<?php echo $this->webroot?>home/teachers_filter">Teachers Filter</a></li>
<li><a href="<?php echo $this->webroot?>home/teachers_retiring">Teachers Retiring</a></li>
<li><a href="<?php echo $this->webroot?>home/uc_based_query">UC Based Query</a></li>
</ul>
</li>
<li><a href="#">Information List </a>
<ul>
<li><a href="<?php echo $this->webroot?>home/qa_team">Quality Assurance Team</a></li>
</ul>
</li>
</ul>
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
	<div class="wrapper">
	Copyright (C) 2009   EMR RSU SINDH  . All Rights Reserved. Powered by .
	</div>
</div>
<!--End Footer-->


</body>
<!--End Body-->
</html>