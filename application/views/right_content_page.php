<div  id = "right_content">
   <div  id = "tag">
       <span  style ="color:#0000FF; font-size:30px;">
           标签
       </span>
       <br/>
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
   <div  id = "latest_article">
        <span  style ="color:#0000FF; font-size:30px;">
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
   <div  id = "introduce">
          <!-- <span><a href='/my_web/index.php/introduce'>关于我</a></span> -->
           <button type="button"  class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal">
            关于我
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  " role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">关于我</h4>
                </div>
                <div class="modal-body" >
                  我不在乎你的美丑，它不是我选择你的唯一理由，更多的是彼此的感觉，我不愿意看到你天天为一些小事愁眉苦脸。我们还都很年轻，对生活、工作应该充满朝气、信心。不要总是喊累，或是抱怨社会对你不公，为此我到希望用自己的行动去改变现状，因为这个过程是多么的有趣。人还是要有目标，有信念的好，要不然每天都过得索然无味又有什么意义，在我看来追求和等待的过程是美好的，也是我的兴趣和动力之所在。别干什么都抱怨，那我只能认为是你的心态不对，主动点去改变自己，世界会变不同。
                </div>
              </div>
            </div>
          </div>
   </div>
   <div  style = "margin-top:110px;margin-left:15px">
         <a href = "#top"  style = "color:#0000FF">返回顶部</a>

   </div>
   </div>