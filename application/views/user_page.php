<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>H.A.B</title>
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/head_title.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/common.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/dashboard.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/footer.css'; ?>" />
	<style type = "text/css">
	        #content
	        {
	        	 height:60%;
	        }
	        #user_login
	        {
	        	  margin:0 auto;
	        	  width:500px;
	        	  margin-top:100px;
	        	  margin-bottom:200px;
	        	  border :1px solid #C0C0C0;
	        	  font-size:18px;
	        }

	        #user_login div
	        {
	        	 margin:0 auto;
	        	 width:300px;
	        	 margin-top:30px;
	        	 margin-bottom:30px;
	        }

	        #user_login  span
	        {
	        	 display:block;
	        	 width:80px;
	        }

	        #user_login input
	        {
	        	  width:200px;
	        	  height:30px;
	        }
	</style>
</head>
<body>

<div id="container">
         <?php echo $header; ?>
         <div id = "content">
                <div   id = "user_login">
                 <?php  if($type == "login") :?>
	              <form  method = "POST"  action = "/my_web/index.php/user/user_login">
	                        <div><span>用户名 :</span><input type = "text"  name = "name"   placeholder = "name"/></div>
	                        <div><span>密码 : </span><input type = "password"  name = "passwd"   placeholder = "passwd"/></div>
	                        <div  id = "login_btn"><input type = "submit"  name = "submit"  class = "btn btn-success" value = "login" /></div>
	               </form>
              <?php else: ?>
	               <form  method = "POST"  action = "/my_web/index.php/user/user_register">
	                        <div><span>用户名  :</span><input type = "text"  name = "name"   placeholder = "name"/></div>
	                        <div><span>密码   : </span><input type = "password"  name = "passwd"   placeholder = "passwd"/></div>
	                        <div  id = "register_btn"><input type = "submit"  name = "submit"  class = "btn btn-primary"  value = "register" /></div>
	               </form>
               <?php endif;?>
               </div>
         </div>
 <div id = "footer">
     <span>H.A.B&copy;2015</span>
</div>
</div>

</body>
</html>