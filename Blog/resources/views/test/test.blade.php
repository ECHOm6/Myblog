<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="text/javascript" src="{{asset('/js/jQuery.js')}}"></script>
</head>
<body>
	<form action="{{route('test6')}}" method="POST">
		<input type="text" name="str">+
		<input type="text" name="str1">

		<!-- <button id="btn">运算</button> -->
		<input type="submit" value="提交">
@if(isset($aa))
		<p>结果为{{$aa}}</p>
@endif
	</form>
	<!-- <script type="text/javascript">
		$('#btn').click(function(){
			var str=$('input').val();
			console.log(str);
			$.ajax({
				type:'POST',
				url:'www.daipan.com/test/test6',
				
				data:{
					name:str
				},
				success:function(){
					
				},

			})
		});
	</script> -->
</body>
</html>