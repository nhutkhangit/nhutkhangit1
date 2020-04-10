/* ----------------------------------------------------- */
/* This file for register button insert shortcode to TinyMCE
/* ----------------------------------------------------- */
(function() {
	tinymce.create('tinymce.plugins.kang_pre_shortcodes_button', {
		init : function(ed, url) {
			title = 'kang_pre_shortcodes_button';
			tinymce.plugins.kang_pre_shortcodes_button.theurl = url;
			ed.addButton('kang_pre_shortcodes_button', {
				title	:	'Select Shortcode',
				icon	:	'taoxanh-vn',
				type	:	'menubutton',
				/* List Button */
				menu: [
					/* -----------Video-----------	*/
					{
						text: 'Video',
						value: 'Video',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Video',
								body: [
								{type	:	'textbox', name	:	'url', label	:	'Link video youtube bạn muốn chèn'},
								],
								onsubmit: function( e ) {
									content = ed.selection.getContent();
									ed.insertContent( '[video url="'+e.data.url+'" /]');
								}
							});
						}      
					},
					
				],
			});

		},
		createControl : function(n, cm) {
			return null;
		}
	});

	tinymce.PluginManager.add('kang_pre_shortcodes_button', tinymce.plugins.kang_pre_shortcodes_button);

})();