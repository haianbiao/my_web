<div  id = "right_content">
             <div  id = "latest_article">
                  <span  style ="border-bottom:1px solid   #d0d0d0;  font-size:25px;">
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
                 <span  style ="border-bottom:1px solid   #d0d0d0; font-size:25px;">
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
             <div  id = "friend_link">
                <span  style ="border-bottom:1px solid   #d0d0d0; font-size:25px;">
                         友情链接
                 </span>
                 <span>
                   <a href = "http://h5.mainphp.com/"  target="_blank">日光溪流</a>
                   </span>
             </div>

             <div  id = "introduce">
                    <!-- <span><a href='/my_web/index.php/introduce'>关于我</a></span> -->
                     <span  style ="font-size:25px;margin-left:-5px" data-toggle="modal" data-target="#myModal">
                      关于我
                    </span>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog  " role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">关于我</h4>
                          </div>
                          <div class="modal-body" >
                                       有时，不知怎么定义自己，半夜惊醒，不知自己是谁<br/>

做一个独立，自制和有纪律的人<br/>

是走入社会的那份平静，是对生命的不畏惧<br/>
淡泊明志，宁静致远
                          </div>
                        </div>
                      </div>
                    </div>
             </div>
             <div  style = "position:fixed;top:570px;left:1100px"  >
                   <span  id = "back-to-top" ><a href = "#top"  style = "color:white;font-size:20px;">Top</a></span>

             </div>
   </div>

