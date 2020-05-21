<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文本式留言板</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css"/>
	<script src="./jquery-3.4.1.js"></script>
</head>
<body>
	 <?php include './public/header.php'; ?>
	<h3 style="text-align: center;color:orange;">我要留言</h3>
	<form action="./add.php" method='post'>
		<table width='500px'  height="280" border='1' align="center">
			<tr>
				<td align="right">标题：</td>
				<td><input type="text" name="title" placeholder="请输入标题"></td>
			</tr>
			<tr>
				<td align="right">留言者：</td>
				<td><input type="text" name="author" placeholder="请输入留言者姓名"></td>
			</tr>
			
			<tr>
				<td align="right">留言内容：</td>
				<td><textarea cols='30' rows="5" name="content" placeholder="请说上几句"></textarea>
			</tr>
			<tr>
       			<td colspan="2" align="center">
                    <input type="reset" value="重置" class="d" onmouseover="this.className='over'" onmouseout="this.className='d'" />
                     <input type="submit" value="提交" class="d" onmouseover="this.className='over'" onmouseout="this.className='d'" />
                </td>
     		 </tr>
		</table>
	</form>
</body>
</html>