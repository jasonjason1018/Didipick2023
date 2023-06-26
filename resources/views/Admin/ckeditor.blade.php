<script src="ckeditor/ckeditor.js"></script>
<textarea id="test"></textarea>
<script>
    CKEDITOR.replace('test', {
    	toolbar: [
	        { name: 'insert', items: ['Image'] }
	    ],
	    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	    height : '111px',
  		width : '111px',
	  	resize_enabled : false,

    });
</script>