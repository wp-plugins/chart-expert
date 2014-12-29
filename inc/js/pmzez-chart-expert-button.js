(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton( 'my_mce_button', {
			text: '',
			icon: 'button',
			type: 'menubutton',
			menu: [
				{
					text: 'Basic',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Basic Chart',
							body: [
								{
									type: 'textbox',
									name: 'idname',
									label: 'Chart Plot ID : ',
									value: ''
								},
								{
									type: 'textbox',
									name: 'dataurl',
									label: 'Data URL : ',
									value: '',
								},
								{
									type: 'listbox',
									name: 'chartlist',
									label: 'Chart Type: ',
									'values': [
										{text: 'Pie', value: 'pie'},
										{text: 'Donut', value: 'donut'},
										{text: 'Bar', value: 'bar'},
										{text: 'Line', value: 'line'},
										{text: 'Area', value: 'area'},
										{text: 'Spline', value: 'spline'},
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '<div id="pce_'+e.data.idname+'"></div>'+'[pmzez_chart id="pce_'+ e.data.idname+'" type="' + e.data.chartlist + '" url="' + e.data.dataurl + '"]');
								
							}
					});
					}
				},
				{
					text: 'Advanced',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Advanced Chart',
							body: [
								{
									type: 'textbox',
									name: 'idname',
									label: 'Chart Plot ID : ',
									value: ''
								},
								{
									type: 'textbox',
									name: 'dataurl',
									label: 'Data URL : ',
									value: '',
								},
								{
									type: 'textbox',
									name: 'ctimeout',
									label: 'Chart Timeout : ',
									value: '1000',
								},
								{
									type: 'textbox',
									name: 'ctimeouturl',
									label: 'Timeout chart URL : ',
									value: '',
								},
								{
									type: 'listbox',
									name: 'chartlist',
									label: 'Chart Type: ',
									'values': [
										{text: 'Pie', value: 'pie'},
										{text: 'Donut', value: 'donut'},
										{text: 'Bar', value: 'bar'},
										{text: 'Line', value: 'line'},
										{text: 'Area', value: 'area'},
										{text: 'Spline', value: 'spline'},
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '<div id="pce_'+e.data.idname+'"></div>'+'[pmzez_chart id="pce_'+ e.data.idname+'" type="' + e.data.chartlist + '" url="' + e.data.dataurl + '" timeout="' + e.data.ctimeout + '" timeouturl="' + e.data.ctimeouturl + '"]');
								
							}
					});
					}
				}
			],
		});
	});
})();

