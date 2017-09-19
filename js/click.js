$(document).ready(function(){
	$('#tableType').click(function(){
		$('#customerTable').toggle();
		$('#licenseTable').toggle();
		if(document.getElementById("tableType").innerHTML == "License Table"){
			document.getElementById("tableType").innerHTML = "Customer Table";
		}
	});
});