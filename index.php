<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hewlett Interactive Infographic</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-wrapper">
		<div class="container">
			<h1><span class="header-top">Board Meeting</span>Process Overview</h1>
			<div id="pie-container" class="">
			  <div id="pie" class="" data-position="start">
				<img src="images/icon-center.png" alt="" id="center-icon" class="center-icon">
				<img id="pie-all" name="mpieall" src="images/pie-all.png" border="0" id="mpieall" usemap="#m_pieall" alt="" />
				<map name="m_pieall" id="m_pieall">
<area shape="circle" coords="722,720, 118" href="#start" alt="" />
<area shape="poly" coords="830,783,714,721,1007,519,1039,583,1057,663,1067,711,1069,738,1061,810,1049,854,1013,910,830,783" href="#hr-investments" alt="" />
<area shape="poly" coords="719,719,1031,928,997,960,953,998,907,1024,865,1042,781,820,719,719" href="#finance" alt="" />
<area shape="poly" coords="719,715,877,1070,833,1088,783,1098,737,1100,666,1092,714,837,719,715" href="#legal" alt="" />
<area shape="poly" coords="719,720,658,1113,594,1095,534,1071,488,1041,452,1009,636,803,719,720" href="#communications" alt="" />
<area shape="poly" coords="634,804,412,1046,332,948,316,912,292,854,272,794,270,742,264,671,282,611,298,545,719,715,634,804" href="#programs" alt="" />
<area shape="poly" coords="714,719,274,535,316,459,356,411,402,367,452,315,498,295,550,269,588,259,630,247,676,241,682,243,714,715,714,719" href="#board-book" alt="" />
<area shape="poly" coords="817,649,1135,433,1061,351,1019,317,959,279,899,257,833,231,791,229,757,219,716,219,682,219,714,715,817,649" href="#board-meeting" alt="" />
				</map>	
				
				<div id="pie-slice-board-meeting" class="pie-slice">
					<img name="pie-slice-board-meeting" src="images/pie-slice-board-meeting.png" border="0" alt="" class="pie-slice__image" />
				</div>
				<div id="pie-slice-board-book" class="pie-slice">
					<img name="pie-slice-board-book" src="images/pie-slice-board-book.png" border="0" alt="" class="pie-slice__image" />
				</div>
				<div id="pie-slice-programs" class="pie-slice">
					<img name="pie-slice-programs" src="images/pie-slice-programs.png" border="0" alt="" class="pie-slice__image" />
				</div>
				<div id="pie-slice-communications" class="pie-slice">
					<img name="pie-slice-communications" src="images/pie-slice-communications.png" border="0" alt="" class="pie-slice__image" />
				</div>
				<div id="pie-slice-finance" class="pie-slice">
					<img name="pie-slice-finance" src="images/pie-slice-finance.png" border="0" alt="" class="pie-slice__image" />
				</div>
				<div id="pie-slice-legal" class="pie-slice">
					<img name="pie-slice-legal" src="images/pie-slice-legal.png" border="0" alt="" class="pie-slice__image" />
				</div>
				<div  id="pie-slice-hr-investments" class="pie-slice">
					<div class="pie-text" id="pie-text-hr-investments"><img src="images/pie-text-hr-investments.png" alt=""></div>
					<img name="pie-slice-hr-investments" src="images/pie-slice-hr-investments.png" border="0" alt="" class="pie-slice__image" />
				</div>
			  </div>
			</div>
			<div class="copyright"><p>Distributed by the Office of the President</p></div>
			<div class="logo"><img src="images/logo.png" alt="" class="logo__image"></div>
		</div>
	</div>
	
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" >if (typeof jQuery === 'undefined') {
  document.write(unescape('%3Cscript%20src%3D%22/js/jquery-2.1.4.min.js%22%3E%3C/script%3E')); };

 $(document).ready(function () {
	
	$( 'area' ).click( function(e) {
		e.preventDefault();
		
		var current = $( '#pie' ).attr('data-position');
		//alert(current);
		var str = this.href;
		var n = str.indexOf("#");
		var pos = str.substr(n+1);
		//alert(pos);
		
		if( current != 'start' ) {
			$('#pie-slice-' + current).attr('class', 'pie-slice shrink');
			setTimeout(function(){
				$('.pie-slice').attr('class', 'pie-slice');
				//$('#pie-slice-' + current).attr('class', 'pie-slice');
				$('#pie').attr('class', pos);
			}, 2000);
			setTimeout(function(){
				if ( pos != 'start' ) { $('.pie-slice').attr('class', 'pie-slice faded'); }
				$('#pie-slice-' + pos).attr('class', 'pie-slice active');
				
				$('#pie').attr('data-position', pos);
			}, 5000);
		}
		else {
			$('#pie').attr('class', pos);
			setTimeout(function(){
				if ( pos != 'start' ) { $('.pie-slice').attr('class', 'pie-slice faded'); }
				$('#pie-slice-' + pos).attr('class', 'pie-slice active');					
				$('#pie').attr('data-position', pos);
			}, 4000);
		}
		//$('.pie-slice').attr('class', 'pie-slice');
		
		
	});
	
		
		$('.anchorlink').on('click', function(e) {
			e.preventDefault();
		  // rest of stuff
		});
		

});


</script>
</body>
</html>