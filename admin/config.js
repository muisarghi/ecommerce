/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowserUrl='kcfinder/browse.php?type=files';
	config.filebrowserImageBrowseUrl='kcfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = 'kcfinder/browse.php?type=flash';
	config.filebrowserUploadUrl = 'kcfinder/upload.php?type=files';
	config.filebrowserImageUploadUrl = 'kcfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = 'upload.php?type=flash';
};
