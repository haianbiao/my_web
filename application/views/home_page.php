<!DOCTYPE html>
<html lang="en">
<head>
	      <title>广厦</title>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name="keywords" content="php,linux"/>
              <meta name="description" content="记录一些技术积累和生活感悟" />
              <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/head_title.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/common.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/dashboard.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/footer.css'; ?>" />
   <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/nprogress.css'; ?>" />
    <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/editor/plugins/code/prettify.css'; ?>" />

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
                                       echo  "<span style = 'font-size:28px;'><a id = 'article_title' href='/my_web/index.php/article/show_article/".$row['id']."'> ".htmlspecialchars($row['title'])."</a></span>";
                                  echo "</div>";
                                  echo "<div  id = 'add_time'>";
                                        echo "<span style = 'margin-left:0px' >作者&nbsp;广厦</span>";

                                       echo "<span style='margin-left:25px;margin-right:5px' ></span>";
                                       echo "<a  style = 'color:grey' href='/my_web/index.php/article/show_article/".$row['id']."'>评论</a>";
                                      echo "<span style = 'margin-left:30px;margin-right:5px' >发布于</span>";
                                       echo  date('Y-m-d  H:i',$row['add_time']);
            
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

                                  echo "<hr  style = 'color:red'/>";
                              
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
        <?php   $this->load->view('footer_page'); ?>
</div>
 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script  src ="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
<script  src ="<?php echo base_url();?>assets/js/nprogress.js" ></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/plugins/code/prettify.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/plugins/code/code.js"></script>
   <script>
      $(function()
      {
              NProgress.start();
              NProgress.inc(0.2);
               NProgress.inc(0.2);
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

      $(window).load(function(){
           NProgress.done(); 
      })
   </script>
   <script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id',{
                     cssPath: '<?php echo base_url(); ?>assets/editor/plugins/code/prettify.css',
                     items:[
        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '/',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
        'anchor', 'link', 'unlink'
]
                });
                prettyPrint();
        });
</script>
</body>
</html>