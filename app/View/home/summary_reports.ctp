<br />
<br />
<br />
<div class="landing-navigation">
<form id="district_report_form" action="<?php echo $this->webroot?>home/submit_summary_report" method="post">

<?php foreach($districts as $district) { ?>

<div style="height:20px;"><input type="radio" name="district" value="<?php echo $district['Region']['id']?>" checked="checked"><?php echo $district['Region']['name']?></input></div>

<?php } ?>
<input type="submit" value="submit" />
</form>
</div>