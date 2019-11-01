<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
</head>
<body>
<?php echo form_open(); ?>
<div class="formSignIn" >
  <div class="form-group">
    <input autocomplete="off" type="text" name="username" placeholder="User Email" value="<?php if(!empty($username)){ echo $username;} ?>" />
    <span class="required-server"><?php echo form_error('username','<p style="color:#F83A18">','</p>'); ?></span> </div>
  <div class="form-group">
    <input autocomplete="off" type="password"  name="password" placeholder="User Password" value="<?php if(!empty($password)){ echo $password;} ?>" />
    <span class="required-server"><?php echo form_error('password','<p style="color:#F83A18">','</p>'); ?></span> </div>
  <div class="form-group">
    <label for="captcha"><?php echo $captcha['image']; ?></label>
    <br>
    <input type="text" autocomplete="off" name="userCaptcha" placeholder="Enter above text" value="<?php if(!empty($userCaptcha)){ echo $userCaptcha;} ?>" />
    <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> </div>
  <div class="form-group">
    <input type="submit" class="btn btn-success" value="Sign In" name="" />
  </div>
</div>
<?php echo form_close(); ?>
</body>
</html>