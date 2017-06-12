/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
				customConfig: 'ckeditor/ckeditor_settings/config.js';
                config.extraPlugins = 'autogrow';
                config.autoGrow_onStartup = true;
				config.toolbarCanCollapse = true;
				config.height = 300;
                config.autoGrow_minHeight = 600;
                config.autoGrow_maxHeight = 2000;
                config.autoGrow_bottomSpace = 50;
				config.language = 'pt';
				config.uiColor = '#AADC6E';
};
