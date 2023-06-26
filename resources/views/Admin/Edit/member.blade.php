    	 <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">會員編號</font></td>
		    <td width="82%"><font size="3" id="identity">D-</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">類別</font></td>
		    <td width="82%"><font size="3" color="green">一般會員</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">密碼</font></td>
		    <td width="82%">
		    	<input type="password" name="password" id="password" value="">
		    	<a href="javascript:void(0)" id="switch_btn">顯示</a>
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">姓名</font></td>
		    <td width="82%"><input type="text" name="name" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">手機號碼</font></td>
		    <td width="82%"><input type="text" name="mobile" id="mobile" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">身分證號</font></td>
		    <td width="82%"><font size="3" color="green" id="passport"></font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">E-MAIL</font></td>
		    <td width="82%"><input type="text" name="email" id="email" value=""></td>
		  </tr>
		  <!--<tr>
		  	
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">生日</font></td>
		    <td width="82%">
		    	
		    	<font size="3">年</font>
		    	<font size="3">月</font>
		    	<font size="3">日</font>
		    	
		    </td>
		  </tr>-->
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">Tel</font></td>
		    <td width="82%"><input type="text" name="tel" id="tel" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">地址</font></td>
		    <td width="82%">
		    	郵遞區號:<input type="text" name="zipcode" id="zipcode" value="" size="5">
		    	地區:<input type="text" name="area" id="area" value="" size="12">
		    	地址:<input type="text" name="address" id="address" value="" size="32">
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" height="30" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
		    <td width="82%" height="30">
		    	<select name="publish" id="publish">
		    	</select>
		    </td>
		  </tr>
		  
		  <tr>
		    <td width="18%" height="30" bgcolor="#C0C0C0" align="center"><font size="2">帳戶餘額</font></td>
		    <td width="82%" height="30"><font size="3" color="blue" id="balance"></font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">回饋金餘額</font></td>
		    <td width="82%"><font size="3" color="blue" id="feedback"></font></td>
		  </tr>
		  
		  <tr>
		    <td width="100%" colspan="2">
		    	<input type="hidden" name="sno" value="">
		    	<input type="button" value="確認送出" id="send"></td>
		  </tr>
		  <script>
		  		$("#switch_btn").on('click', function(){
		  			$(this).text() == "顯示"?$(this).text("隱藏"):$(this).text("顯示");
		  			$("#password").attr('type') == "password"?$("#password").attr('type', 'text'):$("#password").attr('type', 'password');
		  			
		  		});
		  </script>