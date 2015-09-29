<!DOCTYPE html>
<html lang="en">
<head>
	<title>H.A.B</title>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/head_title.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/common.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/dashboard.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/footer.css'; ?>" />

</head>
<body>

<div id="container">
         <?php  echo $header; ?>
         <div id = "content">
              <div id = "left_content">
             <?php
                  if(!empty($my_article))
                  {
                          foreach($my_article as $row)
                          {
               
                                  echo "<div  id = 'content_title'>";
                                       echo  "<span style = 'font-size:28px'><a id = 'article_title' href='/my_web/index.php/article/show_article/".$row['id']."'> ".htmlspecialchars($row['title'])."</a></span>";
                                  echo "</div>";

                                  echo "<div  id = 'article_content'>";
                                           if(mb_strlen($row['content']) <= 300)
                                           {
                                                    echo $row['content'];
                                           }
                                           else
                                           {
                                                      echo  mb_substr($row['content'], 0, 300)."......";
                                           }
                                  echo "</div>";

                                  echo "<div  id = 'add_time'>";
                                       echo "<span class='glyphicon glyphicon-time' style = 'margin-right:5px' aria-hidden='true'></span>";
                                       echo  date('Y-m-d  H:i',$row['add_time']);
                                       if($this->session->userdata('user_name'))
                                       {
                                               echo "<span class='glyphicon glyphicon-pencil' style='margin-left:15px;margin-right:5px' aria-hidden='true'></span>";
                                               echo "<a  style = 'color:grey' href='/my_web/index.php/article/show_article/".$row['id']."'>评论</a>";
                                       }
                                  echo "</div>";
                                  echo "<hr >";
                              
                          }

	               echo $page_nav;

                  }
                  else
                  {
                  	echo "there are no article";
                  }
               ?>
               </div>
               <?php
                      echo $right_content;
               ?>
         </div>
         <div  class = "clear">
         </div>
         <div id = "footer">
            <span>H.A.B&copy;2015</span>
        </div>
</div>
 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script  src ="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
   <script>
      $(function()
      {
         //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失  
            $(window).scroll(function(){  
                if ($(window).scrollTop()>260){  
                    $("#back-to-top").css("display", "block");
                    $("#back-to-top").fadeIn(1500);  
                }  
                else  
                {  
                    $("#back-to-top").fadeOut(1500);  
                }  
            });  
  
            //当点击跳转链接后，回到页面顶部位置  
            $("#back-to-top").click(function(){  
                $('body,html').animate({scrollTop:0},1000);  
                $('back-to-top').css("display", "none");
                return false;  
            });  
      });
   </script>
</body>
</html>