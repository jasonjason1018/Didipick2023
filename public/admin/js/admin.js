var page_data = '';
function global_set_html(html){
    $("#content_table").html(html);
    $("#content_table td").attr('align', 'center');
}

function global_new_button(page, close = '0'){
    close=='1'?$("#new_tr").hide():$("#new_tr").show().children().children('#new_button').html('<a href="/edit/managre/' + page + '">新增</a>');
}

function global_page_title(title){
    $("#page-title").text(title);
}

function get_index(){
    global_page_title('首頁');
    html = '<tr><td width="100%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">直直買後台</font></td></tr>';
    global_set_html(html);
}

function get_admin(){
    global_page_title('系統管理');
    $.ajax({
        url:"/ajax/managre/get_admin_users",
        type:"POST",
        data:{},
        headers: {
            //把csrfToken放到headers
            'X-CSRF-TOKEN': csrf
        },
        success:function(resp){
            html = '<tr><td bgcolor="#C0C0C0" align="center"><font size="2">姓名</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">帳號</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">部門</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td></tr>';
            // console.log(resp);
            for(i=0;i<resp.length;i++){
                html += '<tr>';
                html += '<td>' + resp[i]['user_name'] + '</td>';
                html += '<td>' + resp[i]['user_account'] + '</td>';
                html += '<td>' + resp[i]['user_group'] + '</td>';
                color = resp[i]['user_status'] == 1?"green":"red";
                status = resp[i]['user_status'] == 1?"開啟":"關閉";
                html += '<td style="color:' + color + '">' + status + '</td>';
                html += '</tr>';
                global_set_html(html);
            }
            
        },
        error:function(xhr){
            console.log(xhr);
        }
    });
}

function get_product(){
    global_page_title('商品管理');
    global_new_button('product');
    $.ajax({
        url:"/ajax/managre/get_product",
        type:"POST",
        data:{},
        headers: {
            //把csrfToken放到headers
            'X-CSRF-TOKEN': csrf
        },
        success:function(resp){
            page_data = resp;
            html = '<tr><td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">名稱</font></td><td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">單價(JPY)</font></td><td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td><td width="10%" bgcolor="#C0C0C0" align="center"><font size="2">剩餘數量</font></td><td width="10%" bgcolor="#C0C0C0" align="center"><font size="2">開關/編輯/刪除</font></td></tr>';
            for(i=0;i<resp.length;i++){
                html += '<tr>';
                html += '<td>' + resp[i]['name'] + '</td>';
                html += '<td>' + resp[i]['s_price'] + '</td>';
                color = resp[i]['status'] == 1?"green":"red";
                status = resp[i]['status'] == 1?"開啟":"關閉";
                html += '<td style="color:' + color + '" id="status' + resp[i]['sno'] + '">' + status + '</td>';
                html += '<td>' + resp[i]['quantity'] + '</td>';
                button_name = "開啟";
                button_status = 1;
                if(status == "開啟"){
                    button_name = "關閉";
                    button_status = 0;
                }
                html += '<td><button type="button" id="switch_button'+resp[i]['sno']+'" onclick="product_switch_status(\'' + resp[i]['sno'] + '\', \'' + button_status + '\')">' + button_name + '</button><button type="button" onclick="location.href=\'/edit/managre/product/' + resp[i]['sno'] + '\'">編輯</button><button type="button" onclick="product_del(\'' + resp[i]['sno'] + '\')">刪除</button></td>';
                html += '</tr>';
            }
            global_set_html(html);
        },
        error:function(xhr){
            console.log(xhr);
        }
    });
}

function product_edit(sno = ''){
    global_page_title('商品管理');
    $.ajax({
        url:"/get_edit/managre/product",
        type:"POST",
        data:{sno:sno},
        headers: {
            //把csrfToken放到headers
            'X-CSRF-TOKEN': csrf
        },
        success:function(resp){
            global_set_html(resp['view']);
            Object.entries(resp['select']).forEach(function([key, value]) {
                option = '';
                resp['select'][key].forEach(function(v, k){
                    option += '<option value="' + v['sno'] + '">' + v['name'] + '</option>';
                });
                $("#" + key).html(option);
            });
            $("#number").val(resp['product_number']);
            if(resp['data'] != ''){
                //object foreach
                Object.entries(resp['data']).forEach(function([key, value]) {
                    if(key == 'brand' || key == 'category'){
                        option = '';
                        resp['select'][key].forEach(function(v, k){
                            selected = v['sno'] == value?"selected":"";
                            option += '<option value="' + v['sno'] + '"' + selected + '>' + v['name'] + '</option>';
                        });
                    }
                    $("#"+key).val(value);
                });
            }

        },
        error:function(xhr){
            console.log(xhr);
        }
    });
}

function product_switch_status(sno = '', status){
    $.ajax({
        url:"/ajax/managre/switch_product_status",
        type:"POST",
        data:{
            sno:sno,
            status:status
        },
        headers: {
            //把csrfToken放到headers
            'X-CSRF-TOKEN': csrf
        },
        success:function(resp){
            $("#status" + sno).attr('style', 'color:' + resp['color']).text(resp['status']);
            button_status_word = status == 0?"開啟":"關閉";
            button_status = status == 0?1:0;
            $("#switch_button" + sno).text(button_status_word).attr("onclick", "product_switch_status('"+sno+"', '"+button_status+"')");
        },
        error:function(xhr){
            console.log(xhr);
        }
    });
}

function product_del(sno){
    Swal.fire({
      title: '注意',
      text: "確定要刪除?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: 'black',
      cancelButtonColor: 'black',
      confirmButtonText: '確定',
      cancelButtonText: '取消'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
            url:"/ajax/managre/delete_product",
            type:"POST",
            data:{
                sno:sno
            },
            headers: {
                //把csrfToken放到headers
                'X-CSRF-TOKEN': csrf
            },
            success:function(resp){
                $("#status" + sno).parent('tr').hide();
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
      }
    })
}

function get_member(){
    global_page_title('會員管理');
    //global_new_button('member');
    $.ajax({
        url:"/ajax/managre/get_member",
        type:"POST",
        data:{},
        headers: {
            //把csrfToken放到headers
            'X-CSRF-TOKEN': csrf
        },
        success:function(resp){
            html = '<tr><td bgcolor="#C0C0C0" align="center"><font size="2">會員編號</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">註冊時間</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">姓名</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">EMAIL</font><td bgcolor="#C0C0C0" align="center"><font size="2">電話</font></td><td bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td></td><td bgcolor="#C0C0C0" align="center"><font size="2">編輯</font></td></tr>';
            for(i=0;i<resp.length;i++){
                html += '<tr>';
                html += '<td>' + resp[i]['identity'] + '</td>';
                html += '<td>' + resp[i]['insert_time'] + '</td>';
                html += '<td>' + resp[i]['name'] + '</td>';
                html += '<td>' + resp[i]['email'] + '</td>';
                html += '<td>' + resp[i]['mobile'] + '</td>';
                color = 'green';
                status = '使用中';
                if(resp[i]['publish'] != 'Y'){
                    color = 'orange';
                    status = '尚未註冊完成';
                    if(resp[i]['publish'] != 'A'){
                        color = 'red';
                        status = '已停用';
                    }
                }
                html += '<td style="color:' + color + '">' + status + '</td>';
                html += '<td><button type="button" onclick="location.href=\'/edit/managre/member/' + resp[i]['id'] + '\'">編輯</button></td>';
                html += '</tr>';
            }
            global_set_html(html);
        },
        error:function(xhr){
            console.log(xhr);
        }
    });
}

function member_edit(sno){
    global_page_title('會員管理');
    $.ajax({
        url:"/get_edit/managre/member",
        type:"POST",
        data:{sno:sno},
        headers: {
            //把csrfToken放到headers
            'X-CSRF-TOKEN': csrf
        },
        success:function(resp){
            global_set_html(resp['view']);
            console.log(resp);
            Object.entries(resp['data']).forEach(function([key, value]) {
               if($("#"+key)[0] != "" && $("#"+key)[0] != undefined){
                   console.log($("#"+key)[0]);
               }                
            });
        },  
        error:function(xhr){
            console.log(xhr);
        }
    });
}
