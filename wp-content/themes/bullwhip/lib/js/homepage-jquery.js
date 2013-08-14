jQuery(document).ready(function($) {
	var numwidgets = $('#homepage-widgets div.widget').length;
	$('#homepage-widgets').addClass('cols-'+numwidgets);
	$('#homepage-widgets .widget,#homepage-widgets .widget .widget-wrap').equalHeights();
});