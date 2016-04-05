<script type="text/javascript">
function it_report(id)
	{
		$('.reports').hide(2000);
		$('.reports').html('');
		//$('#show_meeting'+id).attr('onClick','hide_meeting('+id+')');
		
		$.ajax({
            url: '<?php echo $this->webroot?>home/view_teacher_reports/1/'+id,
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
function interest_report(id)
	{
		$('.reports').hide(2000);
		$('.reports').html('');
		//$('#show_meeting'+id).attr('onClick','hide_meeting('+id+')');
		
		$.ajax({
            url: '<?php echo $this->webroot?>home/view_teacher_reports/2/'+id,
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

function qualification_report(id)
	{
		$('.reports').hide(2000);
		$('.reports').html('');
		//$('#show_meeting'+id).attr('onClick','hide_meeting('+id+')');
		
		$.ajax({
            url: '<?php echo $this->webroot?>home/view_teacher_reports/3/'+id,
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


function summary_report(id)
	{
		$('.reports').hide(2000);
		$('.reports').html('');
		//$('#show_meeting'+id).attr('onClick','hide_meeting('+id+')');
		
		$.ajax({
            url: '<?php echo $this->webroot?>home/view_teacher_reports/4/'+id,
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
<div id="report_wrapper">

<div id="side-navigation">
<h3>By Skills</h3>
<h4>By IT Skills</h4>
<a href="javascript:it_report(1);">MS Word</a><br />
<a href="javascript:it_report(2);">MS Excel</a><br />
<a href="javascript:it_report(3);">MS Access</a><br />
<a href="javascript:it_report(4);">MS Power Point</a><br />
<a href="javascript:it_report(5);">Email</a><br />
<a href="javascript:it_report(6);">MS Project</a><br /><br /><br />
<h4>By Other Skills</h4>
<a href="javascript:it_report(7);">Presentation Skills</a><br />
<a href="javascript:it_report(8);">Report Writing</a><br />
<a href="javascript:it_report(9);">Interpersonal Skills</a><br />

<h3>By Interest</h3>
<a href="javascript:interest_report(1);">School Inspection</a><br />
<a href="javascript:interest_report(2);">Student Advise</a><br />
<a href="javascript:interest_report(3);">Educational Development and Planning</a><br />
<a href="javascript:interest_report(4);">Student Assessment</a><br />
<a href="javascript:interest_report(5);">Teacher Training & Development</a><br />
<a href="javascript:interest_report(6);">SMC / Cluster Mobilization</a><br />
<a href="javascript:interest_report(7);">Monitoring and Evaluation</a><br />
<a href="javascript:interest_report(8);">Policy and Research</a><br />
<a href="javascript:interest_report(9);">Role of IT/Innovation</a><br />
<a href="javascript:interest_report(10);">Education Sector Reform</a><br />


<h3>By Qualification</h3>
<a href="javascript:qualification_report('ba');">B.A</a><br />
<a href="javascript:qualification_report('bsc');">BSC</a><br />
<a href="javascript:qualification_report('bed');">B.ED</a><br />
<a href="javascript:qualification_report('bs');">BS</a><br />
<a href="javascript:qualification_report('ma');">M.A</a><br />
<a href="javascript:qualification_report('msc');">MSC</a><br />
<a href="javascript:qualification_report('med');">M.ED</a><br />
<a href="javascript:qualification_report('ms');">M.S</a><br />
<a href="javascript:qualification_report('mphil');">M.Phil</a><br />
<a href="javascript:qualification_report('phd');">P.H.D</a><br />

<h3>By Proffessional Qualification</h3>
<a href="javascript:qualification_report('ct');">C.T</a><br />
<a href="javascript:qualification_report('ptc');">P.T.C</a><br />


<h3>Summary Reports</h3>
<a href="javascript:summary_report('skills');">Summary Report for Skills</a><br />

</div>

<div id="reports" class="reports">
	<h1 style="text-align:center;" >Reports Would Be Displayed Here</h1>
</div>
</div>