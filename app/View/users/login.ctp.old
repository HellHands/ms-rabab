<style>
    #containers {
        background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #CCCCCC;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);

        margin: 0 auto;
    margin: 0 auto 120px;    
    width: 340px;
    	
    }

    .form {
        margin: 0 auto;
        
    }
    .form label {
        color: #555;
        display: inline-block;
        margin-left: 18px;
        padding-top: 10px;
        font-size: 14px;
    }

    .form input {
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        font-size: 12px;
        outline: none;
    }
    .form input[type=text],
    .form input[type=password] {
        color: #777;
        padding-left: 10px;
        margin: 10px;
        margin-top: 12px;
        margin-left: 18px;
    	
    	margin-left:18px\9; /* IE 8 and below */
    	margin-top:12px\9; /* IE 8 and below */
        width: 290px;
        height: 35px;
    	border: 1px solid #c7d0d2;
        border-radius: 2px;
        box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
    -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        transition: all .4s ease;
    	}
    input[type=text]:hover,
    input[type=password]:hover {
        border: 1px solid #b6bfc0;
        box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
    }
    .form input[type=text]:focus,
    .form input[type=password]:focus {
        border: 1px solid #a8c9e4;
        box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
    }
    #lower {
        background: #ecf2f5;
        width: 100%;
        height: 69px;
        margin-top: 20px;
    	  box-shadow: inset 0 1px 1px #fff;
        border-top: 1px solid #ccc;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .form input[type=submit] {
        float: right;
        margin-right: 20px;
        margin-top: 20px;
        width: 80px;
        height: 30px;
    font-size: 14px;
        font-weight: bold;
        color: #fff;
        background-color: #acd6ef; /*IE fallback*/
        background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
        background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
        background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
        border-radius: 30px;
        border: 1px solid #66add6;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
        cursor: pointer;
    }
    .from input[type=submit]:hover {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
        background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
    }
    .form input[type=submit]:active {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
        background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
        background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
    }
</style>

<?php $this->Session->flash('auth'); ?>

<br/><br/>

<center><h5>Please Login to fill the Monitoring Form</h5></center>

<div id="containers">    
    <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>        
    <form id="UserLoginForm" class="form" method="post" action="<?php echo $this->webroot; ?>users/login" accept-charset="utf-8">
        
        <label for="username">Username:</label>
        <input type="text"      name="data[User][username]" id="UserUsername" >
        
        <label for="password">Password:</label>
        <input type="password"  name="data[User][password]" id="UserPassword">
        
        <div id="lower">
            <input type="submit" value="Login">
        </div><!--/ lower end !-->
    </form> <!-- form end !-->
</div> <!-- container div end !-->

