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
<div id = "container">
             <?php echo $header; ?>
             <div id = "content">
                           <div id = "left_content">
                           <form>
			<textarea id="editor_id" name="content" style="width:600px;height:300px;">
			</textarea>
			<input type = "submit"  name = "submit"   value = "queren"  class = "btn btn-success"/>
		</form>
		</div>
	</div>
              <div  class = "clear">
              </div>
	<div id = "footer">
                 <span>H.A.B&copy;2015</span>
              </div>
</div>

<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>