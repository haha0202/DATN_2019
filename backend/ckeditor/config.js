/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.filebrowserBrowseUrl = './ckeditor/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = './ckeditor/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = './ckeditor/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = './ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = './ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = './ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
