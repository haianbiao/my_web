<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> hai an biao</title>
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/head_title.css'; ?>" />
	<style type = "text/css">
                    body
	       {
	       	margin-top:0px;
	       }
	
	        .clear
	        {
	        	 clear:both;
	        }
	        #content
	        {
	        	 height:60%;
	        }
	        #footer 
	        {
	        	 margin: 0 auto;
	        	 margin-top:30px;
	        	 height:200px;
	        	 width:100%;
	        	 text-align:center;
	        	 background-color:#D2691E;
	        	 line-height:200px;
	        	 font-size:30px;
	        }
	        #content_title
	        {
	              margin-top:20px;
	        	margin-bottom:30px;
	        }
	        #article_content
	        {
	              margin-top:10px;
	        	margin-bottom:10px;
	        }
	        #add_time
	        {
	        	margin-left:400px;
	        	margin-top:30px;
	        	margin-bottom:20px;
	        }
                      a:link
                      {
                              color:black;
                               text-decoration:none;
                      }
                      a:visited
	        {
	        	color: black;
	        }
	        a:hover
	        {
                            color: #FF8040;
	        }

	        a:active
	        {
	        	color: black;
	        }
	        #user_login
	        {
	        	  margin:0 auto;
	        	  width:500px;
	        	  margin-top:100px;
	        	  margin-bottom:100px;
	        	  border :6px solid #C0C0C0;
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

	        #login_btn  input
	        {
                              height:40px;
                              width:100px;
                              background-color:green;
                              color:white;
                              border-radius:5px;
	        }
	        #register_btn input
	        {
	        	  height:40px;
                              width:100px;
                              background-color:blue;
                              color:white;
                              border-radius:5px;
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
	                        <div><span>name :</span><input type = "text"  name = "name"   placeholder = "name"/></div>
	                        <div><span>passwd: </span><input type = "password"  name = "passwd"   placeholder = "passwd"/></div>
	                        <div  id = "login_btn"><input type = "submit"  name = "submit"  value = "login" /></div>
	               </form>
              <?php else: ?>
	               <form  method = "POST"  action = "/my_web/index.php/user/user_register">
	                        <div><span>name :</span><input type = "text"  name = "name"   placeholder = "name"/></div>
	                        <div><span>passwd: </span><input type = "password"  name = "passwd"   placeholder = "passwd"/></div>
	                        <div  id = "register_btn"><input type = "submit"  name = "submit"  value = "register" /></div>
	               </form>
               <?php endif;?>
               </div>
         </div>
  
         <div id = "footer">
                 <span>hai an biao  --- 2015</span>
         </div>
</div>

</body>
</html>