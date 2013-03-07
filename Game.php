<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>The Getting to Work Game</title>
<style type="text/css">
	body {
		padding-top:5px;
	    font:15px tahoma, sans-serif;
		background-color:#EEEEEE;
	    text-align:center;
	}
	div {
		width : 600px;
		margin : auto;
		background : #ffffff;
		border-style : solid;
		border-width : 1px;
		border-color : #ccc;
	    padding : 30px;
	    border:1px solid #ccc;
	    -webkit-box-shadow:rgba(0,0,0,.2) 0 0 5px;
	    -moz-box-shadow:rgba(0,0,0,.2) 0 0 5px;
	    -o-box-shadow:rgba(0,0,0,.2) 0 0 5px;
	    box-shadow:rgba(0,0,0,.2) 0 0 5px;
	}
	table {
		width:80%;
		border: 1px solid black;
		background-color:#FFFFFF;
		margin-left:auto; 
    	margin-right:auto;
		border-collapse: collapse;
	}	
	td {
		border: 0px solid black;
		padding:10px;
	}	
	td.big {
		width: 37%;
	}
	td.small {
		width: 26%;
	}
	.bold {
		font-weight:bold;
	}	
	.italics {
		font-style:italic;
	}
	.left {
		text-align:left;
	}
	.color1 {
		background-color:#F8E2E9;
	}
	.color2 {
		background-color:#E6FFFF;
	}
	.color3 {
		background-color:#D3D3D3;
	}
	.color4 {
		background-color:#BFFF80;
	}
	.myButton {
		-moz-box-shadow:inset 0px 0px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 0px 0px 0px #ffffff;
		box-shadow:inset 0px 0px 0px 0px #ffffff;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
		background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
		background-color:#ededed;
		-moz-border-radius:11px;
		-webkit-border-radius:11px;
		border-radius:11px;
		display:inline-block;
		color:#080808;
		font-family:arial;
		font-size:17px;
		font-weight:bold;
		padding:10px 0;
	    width:100px;
		text-decoration:none;
		text-shadow:1px 0px 0px #ffffff;
	}
	.myButton:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
		background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
		background-color:#dfdfdf;
	}
	.myButton:active {
		position:relative;
		top:1px;
	}
</style>
<script type="text/javascript">
    //Check that the client browser has javascript enabled
    window.onload = checkJavaScriptValidity;
    function checkJavaScriptValidity() {
        document.getElementById("enabled").innerHTML = ""; 
    }
</script>
</head>
	<body>
		<div>
			<form>
				<h1>The Getting to Work Game</h1>
				<p class="left">Please click on the mode of transport that you would like to take to work today: drive or cycle. Note that the choice you make 
				will impact both your bank balance and the length of the game. At the end of the game the amount of money you have left in the bank will be paid to you as a bonus.</p>
				<table>
					<tr>
						<td class="small"></td>
						<td class="big"><span id="Week" class="bold">Week 1</span></td>
						<td class="big"><span id="Day" class="bold">Day 1</span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2"><span id="Question" class="bold italics">How will you chose to get to work today?</span></td>
					</tr>
					<tr>
						<td></td>
						<td class="color1"><button id="Option1" class="myButton" type="submit">Drive</button></td>
						<td class="color2"><button id="Option1" class="myButton" type="submit">Cycle</button></td>
					</tr>
					<tr>
						<td><span id="Attribute1 Heading" class="bold">Cost ($):</span></td>
						<td class="color1"><span id="Attribute1A">0.20</span></td>
						<td class="color2"><span id="Attribute1B">0.10</span></td>
					</tr>
					<tr>
						<td><span id="Attribute2 Heading" class="bold">Delay (sec.):</span></td>
						<td class="color1"><span id="Attribute2A">10</span></td>
						<td class="color2"><span id="Attribute2B">50</span></td>
					</tr>
					<tr>
						<td><span id="Attribute3 Heading" class="bold">CO2 (g):</span></td>
						<td class="color1"><span id="Attribute3A">1302</span></td>
						<td class="color2"><span id="Attribute3B">101</span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" class="color3 bold">Bank balance ($): <span id="Bank">5.00</span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" class="color4 bold">Carbon Footprint (g): <span id="Footprint">0</span></td>
					</tr>
					<tr>
						<td></td>
						<td><img src="Comitted.png" alt="Badge" width="100" height="101"></td>
						<td>You have been awarded a badge for making a significant <span id="Badge" class="bold">COMMITMENT</span> towards reducing your carbon footprint.</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>