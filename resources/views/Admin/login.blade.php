<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>無標題文件</title>
<style type="text/css">
<!--
body {
	background-image: url(admin/images/login_bg.gif);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.bg {
	background-image: url(admin/images/login_bg2.png);
	background-repeat: no-repeat;
	height: 310px;
	width: 310px;
}
.box {
	height: 20px;
	width: 200px;
	border: 1px solid #666666;
}
.box2 {
	font-size: 12px;
	color: #666666;
	background-color: #CCCCCC;
	height: 20px;
	width: 40px;
	border: 1px solid #666666;
}
.tt1 {
	font-size: 12px;
	color: #666666;
}
-->
</style>
</head>

<body>
	<form action="?" id="login_form">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30"></td>
      </tr>
      <tr>
        <td align="center"><table width="300" border="0" cellpadding="0" cellspacing="0" class="bg">
          <tr>
            <td align="center" valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="200">&nbsp;</td>
              </tr>
            </table>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="30" class="tt1">帳號:</td>
                  <td><input name="username" type="text" class="box" id="username" /></td>
                </tr>
              </table>
              <table width="250" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="10"></td>
                  </tr>
              </table>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="30" class="tt1">密碼:</td>
                  <td><input name="password" type="password" class="box" id="password" /></td>
                </tr>
              </table>
              <table width="250" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="10"></td>
                </tr>
              </table>
              <table width="230" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="right"><input name="button" type="button" class="box2" id="button" value="重填" onclick="location.reload()" /></td>
                  <td width="50" align="right"><input name="send" type="button" class="box2" id="send" value="送出" /></td>
                </tr>
              </table>
              </td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</form>
</body>

<script>
    $("#send").click(function(){
        csrf = $("meta[name=csrf-token]").attr('content');
        form_data = $("#login_form").serialize().split("&");
        arr_data = {};
        form_data.forEach(function(value, index){
            arr_data[value.split('=')[0]] = value.split('=')[1];
        });

        $.ajax({
            url:"/ajax/managre/login",
            type:"POST",
            data:{arr_data:arr_data},
            headers: {
                //把csrfToken放到headers
                'X-CSRF-TOKEN': csrf
            },
            success:function(resp){
              console.log(resp);
                if(resp['msg'] == 0){
                    Swal.fire({
                        icon: 'error',
                        title: '錯誤',
                        text: resp['err_msg'],
                    })
                    $("#username, #password").val("");
                    return false;
                }
                Swal.fire({
                  title: '成功✅',
                  text: "登入成功",
                  icon: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: '確定'
                }).then((result) => {
                  if (result.isConfirmed) {
                    location.href = "/managre/index";
                  }
                })
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

    
    $(document).keydown(function(event) {
        var key_code = event.which || event.keyCode;
        if(key_code == 13){
            $("#send").click();
        }
    });
</script>
</html>
