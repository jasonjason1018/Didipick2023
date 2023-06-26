
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>後台</title>
</head>

<body topmargin="0" leftmargin="0" bgcolor="#EBEBEB">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="2" height="80" width="100%" background="/admin/images/brown_bg_line.png">@include("Admin.menu")</td>
	</tr>
	<tr>
		<td width="0%" background="/admin/images/brown_bg_skin.png" valign="top">@include("Admin.left_list")</td>
		<td width="100%">@include("Admin.index_content")</td>
	</tr>
</table>

</body>
<script>		
	$(document).ready(function(){
		{{ $content }}
	});
</script>
</html>
