
function checkOption(){
	var option = document.getElementById('role').value;
	if(option == 'cliente'){
		document.getElementById('context').style.display = "block";
		document.getElementById('context2').style.display = "block";
	}else{
		if(option == 'jb'){
			document.getElementById('context').style.display = 'none';
			document.getElementById('context2').style.display = "block";
	}else{
		document.getElementById('context').style.display = "none";
		document.getElementById('context2').style.display = "none";
		}
	}
}
