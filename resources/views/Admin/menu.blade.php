<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/ckeditor/ckeditor.js"></script>
<link href="/admin/css/tt.css" rel="stylesheet" type="text/css">
	<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0" height="64">
		<tr>
			<td width="100" valign="top">
				<!--<img border="0" src="images/webadmin.gif" width="150" height="80">-->
			</td>
			<td align="left" valign="top">
				<table width="100" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="60"></td>
					</tr>
				</table>
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tt1">
					<tr>
						<td width="10">
							&nbsp;
						</td>

						<td width="80">
							<a href="/managre/index" target="_parent" class="tt1">首　　頁</a>
						</td>

						<td width="80">
							<a href="/managre/admin" target="_parent" class="tt1">系統管理</a>
						</td>

						<td width="80">
							<a href="/managre/product" target="_parent" class="tt1">商品管理</a>
						</td>

						<td width="80">
							<a href="/managre/member" target="_parent" class="tt1">會員管理</a>
						</td>

						<td width="80">
							<a href="/managre/banner" target="_parent" class="tt1">廣告管理</a>
						</td>

						<td width="80">
							<a href="/managre/master" target="_parent" class="tt1">達人勸敗</a>
						</td>

						<td width="80">
							<a href="/managre/feedback" target="_parent" class="tt1">好評推薦</a>
						</td>
 
						<td>
							&nbsp;
						</td>
					</tr>
				</table>
			</td>
			<td width="8%" align="center">
				<!-- <form method="POST" action="./logout.php"> -->
				<p align="left">
					<font size="2" face="微軟正黑體" id="login_username"></font>
					<br>
					<input type="submit" value="登出" name="B1">
				</p>
				<!-- </form> -->
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		var content = "{{$content}}";
		var csrf = $("meta[name=csrf-token]").attr('content');
		$(document).ready(function(){
			$.ajax({
	            url:"/ajax/managre/get_user_data",
	            type:"POST",
	            data:{content:content},
	            headers: {
	                //把csrfToken放到headers
	                'X-CSRF-TOKEN': csrf
	            },
	            success:function(resp){
	                $("#login_username").text('帳號:' + resp[0]['user_name']);
	            },
	            error:function(xhr){
	                console.log(xhr);
	            }
	        });
		});
	</script>