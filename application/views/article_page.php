<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>广厦</title>
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
                            echo "<div  id = 'comments'>";
                                    echo "<span>发表评论</span>";
                                    echo "<hr/>";
                                    if(!empty($comments))
                                    {
                                            foreach($comments as $row)
                                            {
                                                   echo "<div  id = 'comment'>";
                                                           echo "<span style = 'color:#1DA55B'>".$row['user_name']."</span>";
                                                           echo "<span  style = 'margin-top:10px'>".htmlspecialchars($row['content'])."</span>";
                                                           echo "<span  style = 'text-align:right;color:  #C0C0C0'>".date('Y-m-d H:i', $row['add_time'])."</span>";
                                                   echo "</div>";
                                                   echo  "<hr/>";
                                            }
                                    }

                                    echo "<div>";
                                              echo "<form   method = 'POST'  action = '".site_url('comment/store_comment')."'>";
                                                    echo "<div>姓名 <font style = 'color:red'>*</font><input type = 'text'  name = 'user_name'  value = ''  style = 'width:200px;margin-left:10px'/></div>";
                                                    echo "<div style = 'margin-top:10px'>邮箱 <font style = 'color:red'>*</font><input type = 'text'  name = 'user_email'  value = ''  style = 'width:200px;margin-left:10px'/></div>";
                                                    echo "<div style = 'margin-top:10px'>站点<input type = 'text'  name = 'web_site'  value = ''  style = 'width:200px;margin-left:20px'/></div>";
                                                    echo "<span style = 'vertical-align:top;display:inline-block;margin-top:20px'>内容&nbsp;<font style = 'color:red;'>*</font></span><textarea  name = 'comment'  style = 'width:455px;height:109px;margin-top:20px;margin-left:10px'></textarea>";
                                                    echo "<input  type = 'hidden' name = 'article_id'   value = '".$full_article['id']."'/>";
                                                    echo "<div  style = 'margin-top:20px'>
                                                               <input  type = 'submit'    class = 'btn btn-primary' name = 'submit'  value = '评论'/>
                                                               </div>";
                                               echo "</form>";
                                    echo "</div>";
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
        <?php   $this->load->view('footer_page'); ?>
</div>
 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script  src ="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
</body>
</html>