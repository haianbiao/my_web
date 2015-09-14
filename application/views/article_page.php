<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> H.A.B</title>
  <meta charset="utf-8">
  <title> hab</title>
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
         <?php echo $header; ?>
         <div id = "content">
              <div id = "left_content">
             <?php
                  if(!empty($full_article))
                  {
	               
	                                  echo "<div  id = 'content_title'>";
	                                       echo  "<span style = 'font-size:30px'><a id = 'article_title' href='/my_web/index.php/article/show_article/".$full_article['id']."'> ".htmlspecialchars($full_article['title'])."</a>
                                                         </span>";
                                              echo "<span  style = 'margin-left:30px'>".date('Y-m-d  H:i:s', $full_article['add_time'])."</span>";
	                                  echo "</div>";

	                                  echo "<div  id = 'article_content'>";
	                                       echo  htmlspecialchars($full_article['content']);
	                                  echo "</div>";

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

</body>
</html>