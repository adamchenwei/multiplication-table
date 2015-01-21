<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kids Games</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="ui/css/bootstrap.min-2.3.2.css" rel="stylesheet" media="screen">		
		<link href="ui/css/crud.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<div class="container">			
			
			<div class="jumbotron">
				<h1>Kids Games Home</h1>        
			</div>
		<div class="navbar">
			<div class="navbar-inner">    
				<ul class="nav">
					<li><a href="javascript:void(0);" id="multiplication_chart"><i class="icon-th icon-black"></i> Multiplication Chart</a></li>
				</ul>
			</div>
		</div>
		<div id="chart-content"></div>
		<div id="indicator" style="display: none; text-align: center;" class="loading_img">
			<img src="ui/img/indicator.gif"/>
		</div>

		<div id="content"></div>
				</div>

		<script src="http://code.jquery.com/jquery.js"></script>
		
	</body>
</html>










<script>
$(function() {
	$(document).on("click", "a#multiplication_chart", function(){ showMutliplicationChart() });

});


function showMutliplicationChart(){
	//alert("show table!");
	//// if loop in <tr>
		//loop 9 times ;
		//empty value -- start from 8, end 0;
		//x = number of loop;
		//y ++ each loop; start from 1;
	var y = 1;//the number of row init
	var e = 1;//total non empty td init
	var table ="<table class='table table-striped table-bordered'>";//table init
	for (var k=1;k<10;k++){// loop for totally 9 tr
		table +='<tr id=row"'+k+'">';
		
		for (var n =1; n<10; n ++) {// loop 9 td
			x = n;//value of x
			//y is declared outside of this for loop
			//z value is calculated now
			z = x*y;
			//count non-empty td 
			if (n<=e||n==1){//if not empty then...
				table +='<td>'+x+' x '+y+' = '+z+'</td>';
			}else{//if it should be empty then...
				table +='<td></td>';
			}
		}
		table +='</tr>';
		y = y+1;//add one more row
		e = e+1;//increase count for non-empty td
	}
	table +="</table>";
	//alert(table);
	$('#chart-content').html(table);
}




</script>
