if (typeof jQuery === 'undefined') {
  document.write(unescape('%3Cscript%20src%3D%22/js/jquery-2.1.4.min.js%22%3E%3C/script%3E'));

(function ( $ ) {
 
    var shade = "#556b2f";
 
    $.fn.replacesrc = function( options ) {
		var settings = $.extend({
            // These are the defaults.
            imgclass: "rotation-programs-and-grants"
        }, options );
        this.removeClass( 'replacesrc' );
		this.addClass( settings.imgclass );
		this.addClass( 'replacesrc' );
        return this;
    };
 
}( jQuery ));

 $(document).ready(function () {
	
		$('#map-office-of-the-president-board-book').click(function () {
			
            $('#hewlettimagemap').replacesrc({ imgclass: 'rotation-office-of-the-president-board-book' });
						 
			setTimeout(function()
			{
				$('#hewlettimagemap').attr('src','images/pie-2.png');
				        
			 }, 3000);
		});
		
        $('#map-programs-and-grants').click(function () {
			
            $('#hewlettimagemap').replacesrc({ imgclass: 'rotation-programs-and-grants' });
			 
			setTimeout(function()
			{
				$('#hewlettimagemap').attr('src','images/pie-3.png');
				        
			 }, 3000);
		});
		
		$('#map-office-of-the-president-board-meeting').click(function () {
			
            $('#hewlettimagemap').removeClass().addClass('rotation-office-of-the-president-board-meeting replacesrc');
			$('#hewlettimagemap').replacesrc();
			 
			setTimeout(function()
			{
				$('#hewlettimagemap').attr('src','images/pie-2.png');
				        
			 }, 3000);
		});
		
		$('.anchorlink').on('click', function(e) {
			e.preventDefault();
		  // rest of stuff
		});
		
		
    });
