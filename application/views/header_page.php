         <div class = "header "   id = "top">
                <div   id = "my_name" >
                            <a  href = "/my_web/index.php/home">H.A.B</a>
                </div>
                <div id = "user_operate">
                       <?php 
                       if($this->session->userdata('user_name')):
                        ?>
                               <span  class = "login_out"><a  href = "/my_web/index.php/user/login_out">退出</a></span>
                        <?php
                       else:
                        ?>
                                 <span  class = "login"><a  href = "/my_web/index.php/login">登录</a></span>
                                 <span  class = "separate_line">|</span>
                                <span  class = "register"><a  href = "/my_web/index.php/register">注册</a></span>
                      <?php
                       endif
                       ?>
                       <div  class = "clear"></div>
                </div>
                <div  class = "clear">
                <span  id = "sub_title">不积跬步,无以至千里；不积小流,无以成江海</span>
                </div>
         </div>