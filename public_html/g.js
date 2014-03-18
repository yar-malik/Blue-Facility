function g(){alert("hey");
  var xmlhttp = createXMLHTTPrequest(xmlhttp);
    xmlhttp.open("GET","insert_facility_request.php",true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
	      if (xmlhttp.readyState==4 && xmlhttp.status==200){
		    alert("hey");
	      }
	    }
  
}