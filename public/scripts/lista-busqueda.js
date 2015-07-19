function objetoajax(){
		var xmlhttp=false;
		try{
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");				
			}catch(E){
				xmlhttp=false;
			}
		}
		return xmlhttp;
	}

function listafiltro(){
		//dni=document.idd.value;
		var codigo = document.getElementById('codigo').value;
		var nombre=document.getElementById('nombre').value;
		var xmlhttp;
		if(codigo=="" && nombre==""){
			document.getElementById("lista_alimentos").innerHTML="";
			return;
		}
		if( window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=ActiveXObject("Microsoft.XMLHTTP");
		}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
xmlDoc=xmlhttp.responseXML;
	
	var restable=document.getElementById("lista_alimentos");
	var XMLNodes=['ctalmy','calimmy','nomalimmy','enercmy','enerckjmy','watergmy','procntgmy','fatgmy','chocdfgmy','choavlgmy','fibracgmy','fibtggmy','ashgmy','calccamgmy','fosfpmgmy','zincznmgmy','hierrofemgmy','cartbqmgmy','retinolugmy','vitamgmy','thiamgmy','ribfmgmy','niamgmy','vitcmgmy','asctmgmy'];
	var itemtags=xmlDoc.getElementsByTagName("persona");

		
		if(itemtags.length!=0){
				for(i=0;i<itemtags.length;i++){
					restable.insertRow(i);
				for(j=0;j<XMLNodes.length;j++){
				var recordNode=itemtags[i].getElementsByTagName(XMLNodes[j])[0];
				restable.rows[i].insertCell(j);
					if('textContent' in recordNode){
					restable.rows[i].cells[j].innerHTML=recordNode.textContent;
					}else{
					document.getElementById("lista_alimentos").innerHTML="";
					}
				}
			}
		}else{
		document.getElementById("lista_alimentos").innerHTML="";
		}
}
}
		xmlhttp.open('get','alimentos?c='+codigo+'&n='+nombre,true);
		xmlhttp.send();
		}
		