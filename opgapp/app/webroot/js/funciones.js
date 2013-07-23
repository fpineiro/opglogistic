
function checkOption(){
	var option = document.getElementById('role').value;
	if(option == 'cliente'){
		document.getElementById('context').style.display = "block";
	}else{
		document.getElementById('context').style.display = "none";
	}
}
