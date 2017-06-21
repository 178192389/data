
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript">

	function checkboxAll(){
		var checkAll=document.getElementById('checkAll');
		var arr = document.getElementsByName('id[]');
		if(!checkAll.checked ==true){
			for(var i= 0;i<arr.length;i++){
				arr[i].checked = false;
			}			
		}else{
			for(var i= 0;i<arr.length;i++){
				arr[i].checked = true;
			}
		}
	}
		function check(){
		var name=document.getElementById('name');
		window.location.href="__URL__/index/id/"+name.value;
	}
</script>
</head>
<body>
	<center>
	<h1>学生管理系统首页</h1>
查询:<input type="text"  id="name"  onchange="check()" value=""/>

<form action="__URL__/del" method="get">
		 <button type="submit">批量删除</button>
     
		<a href="__URL__/add">新增数据</a> 
	<table border="1" align="center" width="800" > 
		<tr>
			<th><input type="checkbox" id="checkAll" onclick="checkboxAll()" value=""/>全选</th>
			<th>序号</th>
			<th>姓名</th>
			<th>学号</th>
			<th>性别</th>
			<th>年龄</th>
			<th>身高</th>
			<th>班级</th>
			<th>教室</th>
			<th>操作</th>
		</tr>
		<volist name="list" id="ve">
		<tr>
			<td><input type="checkbox" name="id[]"  value="<{$ve.student_id}>"/></td>
			<td><{$ve.student_id}></td>
			<td><{$ve.student_name}></td>
			<td><{$ve.number}></td>
			<td><{$ve.sex}></td>
			<td><{$ve.age}></td>
			<td><{$ve.height}></td>
			<td><{$ve.class}></td>
			<td><{$ve.classroom}></td>
			<td>
				<a href="__URL__/modify?id=<{$ve.student_id}>">修改</a>
				<a href="__URL__/del?id=<{$ve.student_id}>">删除</a>
			</td>
		</tr>
		</volist>
	</table>
</form>
		<{$page}>
	</center>	
				
</body>
</html> 
 
