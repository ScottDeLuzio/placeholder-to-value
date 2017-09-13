jQuery(document).ready(function() {
	placeholdertovalue();
});

function placeholdertovalue() {
	jQuery( 'input[disabled]' ).each(function(){
		var $this = jQuery(this);
		$this.attr("value", $this.attr("placeholder")).removeAttr("placeholder"); 
	});
}