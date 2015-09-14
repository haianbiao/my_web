<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> H.A.B</title>
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
                                       echo  "<span style = 'font-size:30px'><a id = 'article_title' href='/my_web/index.php/article/show_article/".$row['id']."'> ".htmlspecialchars($row['title'])."</a></span>";
                                  echo "</div>";

                                  echo "<div  id = 'article_content'>";
                                       echo  htmlspecialchars(mb_substr($row['content'], 0, 80))."......";
                                  echo "</div>";

                                  echo "<div  id = 'add_time'>";
                                       echo  date('Y-m-d  H:i:s',$row['add_time']);
                                  echo "</div>";
                                  echo "<hr>";
                              
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
</body>
</html>