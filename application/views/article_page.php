<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>H.A.B</title>
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
                                 echo  "<span style = 'font-size:28px'><a id = 'article_title' href='/my_web/index.php/article/show_article/".$full_article['id']."'> ".htmlspecialchars($full_article['title'])."</a>
                                                 </span>";
                                      echo "<span  style = 'margin-left:30px'>".date('Y-m-d  H:i', $full_article['add_time'])."</span>";
                            echo "</div>";

                            echo "<div  id = 'article_content'>";
                                 echo  $full_article['content'];
                            echo "</div>";
                            if($this->session->userdata('user_name'))
                            {
                                    echo "<div  id = 'comments'>";
                                            echo "<span>发表评论</span>";
                                            echo "<hr/>";
                                            if(!empty($comments))
                                            {
                                                    foreach($comments as $row)
                                                    {
                                                           echo "<div  id = 'comment'>";
                                                                   echo "<span style = 'color:#1DA55B'>".$row['user_name']."</span>";
                                                                   echo "<span  style = 'margin-top:10px'>".$row['content']."</span>";
                                                                   echo "<span  style = 'text-align:right;color:  #C0C0C0'>".date('Y-m-d H:i', $row['add_time'])."</span>";
                                                           echo "</div>";
                                                           echo  "<hr/>";
                                                    }
                                            }

                                            echo "<div>";
                                                      echo "<form   method = 'POST'  action = '".site_url('comment/store_comment')."'>";
                                                            echo "<div><span class='glyphicon glyphicon-user' style = 'margin-right:15px' aria-hidden='true'></span><input type = 'text'  name = 'user_name'  value = '".$this->session->userdata('user_name')."'  readonly='readonly'  style = 'width:150px;padding-left:15px'/></div>";
                                                            echo "<textarea  name = 'comment'  style = 'width:473px;height:139px;margin-top:20px'></textarea>";
                                                            echo "<input  type = 'hidden' name = 'article_id'   value = '".$full_article['id']."'/>";
                                                            echo "<div  style = 'margin-top:20px'>
                                                                       <input  type = 'submit'    class = 'btn btn-primary' name = 'submit'  value = '评论'/>
                                                                       </div>";
                                                       echo "</form>";
                                            echo "</div>";
                                    echo "</div>";
                          }

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