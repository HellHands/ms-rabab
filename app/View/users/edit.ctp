<div class="users form">
<form id="UserEditForm" method="post" action="<?= $this->webroot.'users/edit'; ?>" accept-charset="utf-8">
	<div style="display:none;"><input type="hidden" name="_method" value="PUT"></div>	
	<fieldset>
 	<legend>Change Password</legend>
	<input type="hidden" name="data[User][id]" value="<?php echo $id; ?>" id="UserId">
	<?php if($username == 'admin') { ?>
	<input type="hidden" name="data[User][passchange]" value="0" id="UserPasschange">
	<?php }else{ ?>
	<input type="hidden" name="data[User][passchange]" value="1" id="UserPasschange">
	<?php } ?>
	<div class="input text">
		<label for="UserUsername">Username</label><input name="data[User][username]" type="text" maxlength="255" value="<?php echo $uname; ?>" id="UserUsername">
	</div>
	
	<div class="td">
		<label for="txtConfirmPassword">Password</label>
		<input name="data[User][password2]" type="password" id="txtConfirmPassword" onChange="checkPasswordMatch();" />
	</div>
	<div class="td">
		<label for="txtNewPassword">Match Password</label>
		<input name="data[User][password]" type="password" id="txtNewPassword" onChange="checkPasswordMatch();" />
	</div>
	<div class="registrationFormAlert" id="divCheckPasswordMatch">
	</div>
	</fieldset>
<div class="submit"><input type="submit" value="Submit"></div></form></div>

<script>
$('#txtNewPassword').on('keyup keypress blur change', function() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
	{
        $("#divCheckPasswordMatch").html("Passwords do not match!");
		$('input[type="submit"]').attr('disabled','disabled');
    }
	else
	{
        $("#divCheckPasswordMatch").html("Passwords match.");
		$('input[type="submit"]').removeAttr('disabled');
	}
});

$('#txtConfirmPassword').on('keyup keypress blur change', function() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
});
</script>