jQuery(document).ready(function() {
	placeholdertovalue();
});

function placeholdertovalue() {
	jQuery( 'input[readonly]' ).each(function(){
		var $this = jQuery(this);
		$this.attr("value", $this.attr("placeholder")).removeAttr("placeholder"); 
	});
}