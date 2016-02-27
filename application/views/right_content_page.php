<div  id = "right_content">
             <div  id = "latest_article">
                  <span  style ="border-bottom:1px solid   #d0d0d0;  font-size:25px;color:#7B68EE">
                        最新文章
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
             <div  id = "tag">
                 <span  style ="border-bottom:1px solid   #d0d0d0; font-size:25px;color:#7B68EE">
                     标签
                 </span>
                 <span>
                      <?php
                               if(!empty($tags))
                               {
                               	   $i = 1;
                               	  foreach($tags as $row)
                               	  {
                                              echo "<a href = '/my_web/index.php/tag/get_article_by_tag_id/".$row['tag_id']."'>".$row['name']."</a>&nbsp;&nbsp;";
                                              $i++;
                                              if($i % 5 == 0)
                                              {
                                              	  echo "<br/>";
                                              }
                               	  }
                               }
                      ?>
                 </span>
             </div>
             <div  id = 'latest_comment'>
                     <span  style ="border-bottom:1px solid   #d0d0d0; font-size:25px;color:#7B68EE">
                              最新评论
                     </span>
                     <span>
                              <?php
                                   if(!empty($latest_comments))
                                   {
                                          foreach($latest_comments as $key => $row)
                                          {
                                                 echo "<div style = 'margin-top:5px;width:180px;word-break:break-all'>".$row['user_name'].'在《'.$row['title'].'》的评论:&nbsp;<font style="color:#6A5ACD">'.$row['comment_content']."</font></div>";
                                          }
                                   }
                                   else
                                   {
                                           echo "暂无评论";
                                   }
                              ?>
                     </span>
             </div>

             <div  id = "friend_link">
                <span  style ="border-bottom:1px solid   #d0d0d0; font-size:25px;color:#7B68EE">
                         友情链接
                 </span>
                 <span>
                   <a href = "http://www.superman2014.com"  target="_blank">日光溪流</a>
                   </span>
             </div>

               <div  id = "message_board">
                <span>      
                         <a href = "<?php echo site_url('message_board/get_message'); ?>"    style ="color:grey;font-size:25px;color:#7B68EE">留言板</a>
                 </span>
             </div>

             <div  id = "introduce">
                    <!-- <span><a href='/my_web/index.php/introduce'>关于我</a></span> -->
                     <span  style ="font-size:25px;margin-left:-5px;color:#7B68EE" data-toggle="modal" data-target="#myModal">
                      关于我
                    </span>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog  " role="document">
                        <div class="modal-content"  style = 'margin-top:200px'>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style = 'color:#8A2BE2;font-size:1.5em' >广&nbsp;厦</h4>
                          </div>
                          <div class="modal-body"  style = 'padding-bottom:20px;'>
                                       <span>PHP开发工程师</span>
                                       <span>现就职于京东</span>
                                      <span>github账号: haianbiao@github.com</span>
                                       <span>崇拜的语言 C  ,  C++ 和 Python</span>
                                       <span>崇尚开源和黑客精神</span>
                          </div>
                        </div>
                      </div>
                    </div>
             </div>
             <div  style = "position:fixed;top:570px;left:1100px"  >
                   <span  id = "back-to-top" ><a href = "#top"  style = "color:white;font-size:20px;">Top</a></span>

             </div>
   </div>

