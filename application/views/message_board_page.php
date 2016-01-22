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
                   <div  style = 'margin-top:50px;text-align:center;'>
                             坚持，是一种品质，是一种精神，是一份信仰；<br/>
                             忍耐，是一种态度，是一种认真，是一杯好酒；<br/>
                             超越，是一种追求，是一种认知，是一次提升。
                   </div>
                   <div   style="min-height:400px;width:600px;margin:0 auto;margin-top:50px;margin-bottom:30px">
                   <?php
                         if(!empty($message))
                         {
                                foreach($message  as $key => $row)
                                {
                                       echo "<div   style = 'border-bottom: 1px dashed #7B68EE;text-align:center;margin-top:30px'>";
                                                echo "<span style = 'color:   #F08080' >";
                                                       echo  htmlspecialchars($row['name']).":&nbsp;&nbsp;".htmlspecialchars($row['content']);
                                                echo "</span>";
                                       echo "</div>";
                                }
                         }
                   ?>
                   </div>
                   <div style = "width:500px;margin-top:30px;margin:0 auto">
                         <form   method = "POST"  action = "<?php  echo site_url('message_board/save_message');?>">
                                    <div>
                                            <span style = "display:inline-block;width:83px">姓名<font style = "color:red">*</font>:</span><input type = "text"   name = 'name'  style = "width:370px" value = "">
                                      </div>
                                    <div style = "margin-top:10px">
                                            <span  style = "display:inline-block;width:80px">内容<font style = "color:red">*</font>: </span>
                                            <textarea  name = "message"  style = "width:370px;height:120px">

                                             </textarea>
                                    </div>
                                    <div  style = "margin-top:30px">
                                            <input type = "submit"  class = 'btn btn-primary' name = "submit"  value = "留言" />
                                    </div>
                          </form>
                   </div>
         </div>
         <div  class = "clear">
         </div>
        <?php   $this->load->view('footer_page'); ?>
</div>
 <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script  src ="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
</body>
</html>