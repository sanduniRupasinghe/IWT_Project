
function validateform(){  
			var boat_id = document.registration.dId.value;  
			var name = document.registration.name.value;
			var phone_Number= document.registration.phone_number.value;  
			var psw = document.registration.psw.value; 
			var psw_repeat = document.registration.psw_repeat.value; 

			if(boat_id.length<10){
				alert("ID Number invalid");  
				return false;
			}else if (name==null || name==""){
			  alert("Name can't be blank ");
			  return false;  
			}else if(phone_Number.length<10){  
			  alert("Phone Number must be at least 10 characters long.");  
			   return false;
			 }else if(psw.length<6){   
			  alert("Password Number must be at least 6 characters long. ");  
			   return false;  
			 }else if (psw !== psw_repeat){
			 	alert("Password Not Match ");  
			   return false;
				
				}
			
			}
