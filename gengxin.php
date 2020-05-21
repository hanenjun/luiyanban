<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文本式留言板</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css"/>
   <style>
      #yc{
         display:none;
      }
   </style>
   <script src="./jquery-3.4.1.js"></script>
</head>
<body>
     <?php include './public/header.php'; ?>
     <?php 
     
     $id = isset($_GET['id'])?$_GET['id']:null;
        require("./ck.php");
     ?>
	<h3 style="text-align: center;color:orange;">更新留言</h3>
	<form action="updata.php" method='post'>
		<table width='500px'  height="280" border='1' align="center">
			<tr>
         <input type="text" id='yc' name="id" placeholder="请输入标题" value=<?php echo  $shuju[0]['id'] ?>>
                <td align="right">标题：</td>
                
				<td><input type="text" name="title" placeholder="请输入标题" value=<?php echo  $shuju[0]['title'] ?>></td>
			</tr>
			<tr>
				<td align="right">留言者：</td>
				<td><input type="text" name="author" placeholder="请输入留言者姓名"value=<?php echo  $shuju[0]['author'] ?>></td>
			</tr>
			
			<tr>
				<td align="right">留言内容：</td>
				<td><textarea cols='30' rows="5" name="content" placeholder="请说上几句"> <?php echo  $shuju[0]['content'] ?></textarea>
			</tr>
			<tr>
       			<td colspan="2" align="center">
                    <input id='cz' type="reset" value="重置" class="d" onmouseover="this.className='over'" onmouseout="this.className='d'" />
                     <input id='tj' type="submit" value="提交" class="d" onmouseover="this.className='over'" onmouseout="this.className='d'" />
                </td>
     		 </tr>
		</table>
	</form>
</body>
</html>