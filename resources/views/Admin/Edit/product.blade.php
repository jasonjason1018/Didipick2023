<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">商品編號</font>
    </td>
    <td width="82%">
        <input type="text" size="42" name="number" id="number" value="" disabled>
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">名稱</font>
    </td>
    <td width="82%"><input type="text" size="42" name="name" id="name" value=""></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">品牌</font>
    </td>
    <td width="82%">
        <select name="brand" id="brand">
        </select>
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">類別</font>
    </td>
    <td width="82%">
        <select name="category" id="category">
        </select>
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">規格</font>
    </td>
    <td width="82%"><textarea name="sku" id="sku" rows="4" cols="60"></textarea></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">關鍵字</font>
    </td>
    <td width="82%"><input type="text" size="42" name="keyword" id="keyword" value=""></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">標籤</font>
    </td>
    <td width="82%"><textarea name="label" id="label" rows="4" cols="60"></textarea></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">簡述</font>
    </td>
    <td width="82%"><textarea name="brief" id="brief" rows="4" cols="60"></textarea></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">詳述</font>
    </td>
    <td width="82%"><textarea name="description" id="description" rows="4" cols="60"></textarea></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">圖片</font>
    </td>
    <td width="82%">
        <textarea id="img" name="img"></textarea>
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">剩餘數量</font>
    </td>
    <td width="82%"><input type="text" size="42" name="quantity" id="quantity" value=""></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">重量</font>
    </td>
    <td width="82%"><input type="text" size="42" name="weight" id="weight" value="">kg</td>
</tr>
<tr>
    <td width="18%" height="30" bgcolor="#C0C0C0" align="center">
        <font size="2">上架日期</font>
    </td>
    <td width="82%" height="30"><input type="date" min="0000-01-01" max="9999-12-31" size="12" name="shelf_on" id="shelf_on" value=""
            autocomplete="off"></td>
</tr>
<tr>
    <td width="18%" height="30" bgcolor="#C0C0C0" align="center">
        <font size="2">下架日期</font>
    </td>
    <td width="82%" height="30"><input type="date" min="0000-01-01" max="9999-12-31" size="12" name="shelf_off" id="shelf_off" value="" autocomplete="off">
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">原網址</font>
    </td>
    <td width="82%">
        <input type="text" size="42" name="original_url" id="original_url" value="">
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">原價(¥)</font>
    </td>
    <td width="82%"><input type="text" size="42" name="o_price" id="o_price" value=""></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">特價(¥)</font>
    </td>
    <td width="82%"><input type="text" size="42" name="s_price" id="s_price" value=""></td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">評價</font>
    </td>
    <td width="82%"><input type="text" size="42" name="star" id="star" value="">
        <font size="2">星</font>
    </td>
</tr>
<tr>
    <td width="18%" bgcolor="#C0C0C0" align="center">
        <font size="2">瀏覽數</font>
    </td>
    <td width="82%"><input type="text" size="42" name="views" id="views" value="">
        <font size="2"></font>
    </td>
</tr>
<tr>
    <td width="100%" colspan="2">
        <input type="button" value="確認修改" id="send_btn">
    </td>
</tr>
<input type="hidden" name="sno" id="sno" value="insert">
<script>
    var text;
    $(document).ready(function(){
        text = $('#sno').val() == "insert"?"新增":"修改";
        $("#send_btn").val('確認'+text);
    });
    var arr = {};
    arr['sku'] = CKEDITOR.replace('sku');
    arr['label'] = CKEDITOR.replace('label');
    arr['brief'] = CKEDITOR.replace('brief');
    arr['description'] = CKEDITOR.replace('description');
    arr['img'] = CKEDITOR.replace('img', {
        toolbar: [
            { name: 'insert', items: ['Image'] }
        ],
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        //readOnly: true
        //resize_enabled : false,
    });

    $("#send_btn").on('click', function(){
        form_data = {};
        $("#content_form").serializeArray().forEach(function(value, index){
            form_data[value['name']] = value['value'];
        });
        
        Object.entries(arr).forEach(function([key, value]) {
            form_data[key] = value.getData();
        });
        $.ajax({
            url:"/ajax/managre/check_require_column",
            type:"POST",
            data:{
                form_data:form_data
            },
            headers: {
                //把csrfToken放到headers
                'X-CSRF-TOKEN': csrf
            },
            success:function(resp){
                if(resp['msg'] == 0){
                    message = $("#"+ resp['column']).parent().prev('td').text() + resp['err_msg'];
                    Swal.fire({
                        icon: 'warning',
                        title: '注意',
                        text: message,
                    })
                    return false;
                }
                Swal.fire({
                  title: '成功',
                  text: "資料"+text+"成功",
                  icon: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: '確定'
                }).then((result) => {
                  if (result.isConfirmed) {
                    submitFunc();
                  }
                })
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    });

    function submitFunc(){
        $("#number").prop('disabled', false);
        $("#content_form").attr("action", "/ajax/managre/product_edit").submit();
    }
</script>