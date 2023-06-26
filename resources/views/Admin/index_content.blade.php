<p>&nbsp;</p>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    <tr>
        <td width="100%">
            <b id="page-title">首頁</b>&nbsp;&nbsp;
            <hr>
        </td>
    </tr>
    <tr id="new_tr" style="display: none;">
        <td width="100%">
            <button id="new_button">新增</button>
            <!-- <button id="prev_page">上一頁</button> -->
        </td>
    </tr>
    <tr>
        <td width="100%">
            <form id="content_form" action="?" method="post">
                @csrf
                <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="content_table">
                    
                </table>
            </form>
        </td>
    </tr>
</table>
<script src="/admin/js/admin.js"></script>
<br><br>