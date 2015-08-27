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

	        #left_content
	        {
	        	 float:left;
	        	 width:60%;
	        	 padding :30px 80px;
	        	 margin-top:50px;

	        	 color:grey;
	        }
	        #right_content
	        {
                             float:left;
	        	 padding :30px 80px;
	        	 margin-top:50px;
	        	 height:700px;
	        	 color:grey;
	        }

	        #tag
	        {
	        	 margin-bottom:30px;
	        }

	        #latest_article
	        {
	        	margin-top:30px;
	        	margin-bottom:30px;
	        }

	        #latest_article  span
	        {
	        	display:block;
	        	margin-top:6px;
	        	margin-bottom:6px;
	        }
	        #introduce
	        {
	        	font-size:30px;
	        }
	</style>
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
	                              
	                          }

                  }
                  else
                  {
                  	echo "there are no article";
                  }
               ?>
               </div>
               <div  id = "right_content">
                   <div  id = "tag">
                       <span  style ="color:#D2691E; font-size:30px;">
                           tag
                       </span>
                       <br/>
                       <span>
                             php &nbsp; ajax
                       </span>
                   </div>
                   <div  id = "latest_article">
                        <span  style ="color:#D2691E; font-size:30px;">
                              latest  article
                        </span>
                        <?php
                               if(!empty($my_latest_article))
                               {
                                         foreach($my_latest_article as $row)
	                           {
	               
	                                  echo "<div  id = 'latest_content_title'>";
	                                       echo  "<span><a id = 'article_title' href='/my_web/index.php/article/show_article/".$row['id']."'> ".htmlspecialchars($row['title'])."</a></span>";
	                                  echo "</div>";
	                              
	                           }
                               }
                        ?>
                   </div>
                   <div  id = "introduce">
                           <span><a href='/my_web/index.php/introduce'> About   Me</a></span>
                   </div>
               </div>
         </div>
         <div  class = "clear">
         </div>
         <div id = "footer">
                 <span>hai an biao  --- 2015</span>
         </div>
</div>

</body>
</html>