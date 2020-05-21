<html>
<head>
	<meta charset="utf-8">
	<title>查看内容</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">
		table.imagetable {
			font-family: verdana,arial,sans-serif;
			font-size:14px;
			color:#333333;
			border-width: 1px;
			border-color: #999999;
			border-collapse: collapse;
		}
		table.imagetable th {
			background:#b5cfd2 url('./image/cell-blue.jpg');
			border-width: 1px;
			padding: 8px;
			border-style: solid;
			border-color: #999999;
		}
		table.imagetable td {
			background:#dcddc0 url('./image/cell-grey.jpg');
			border-width: 1px;
			padding: 5px;
			border-style: solid;
			border-color: #999999;
		}
	</style>
	<script src="./jquery-3.4.1.js"></script>
</head>	
<body>
	<?php include './public/header.php'; ?>
	<h3 style="text-align: center;color:orange;">查看留言</h3>
	<table class="imagetable" width="700px" align="center">
		<tr>
			<th>编号</th>
			<th>标题</th>
			<th>留言者</th>
			<th>留言内容</th>
			<th>留言时间</th>
			<th>操作</th>
		</tr>
		<?php
		require('./ck.php');
		foreach($shuju as $value){
			echo "<tr><td>".$value['id']."</td><td>".$value['title']."</td><td>".$value['author']."</td><td>".$value['content']."</td><td>".$value['createtime']."</td><td><a id='del' href=del?id=".$value['id'].">删除</a>&nbsp;&nbsp;&nbsp;<a id= 'updata' href=gengxin.php?id=".$value['id'].">更新</a></td></tr>";
		}
		?>
	</table>
	
</body>
</html>
