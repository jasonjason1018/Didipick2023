/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
  config.filebrowserBrowseUrl = '/ckfinder/ckfinder.html';
  config.filebrowserUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

  config.removeDialogTabs = 'image:advanced;image:Link';
  // config.removeButtons = 'ExportPdf';
  // config.height = '111px';
  // config.width = '111px';
  config.resize_enabled = false;

};
