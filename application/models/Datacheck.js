var xhr = createRequest(); 
function MakeUserData(dataSource, divID, NAME, EMAIL, PHONE)  
{     
	if(xhr) 
    {  
		var place = document.getElementById(divID);     

		check = new Boolean(true);

    	if (NAME == "") /* checks start */
		{
        	check = Boolean(false);
        	place.innerHTML= "<p>NAME cannot be null</p>";
        } 
		if(PHONE == "")
		{
            check = Boolean(false);
        	place.innerHTML= "<p>PHONE cannot be null</p>";
        }
        if(PHONE.Length < 10)
        {
            check = Boolean(false);
        	place.innerHTML= "<p>PHONE must be between 10 and 12 digits</p>";
        }
        if(PHONE.Length > 12)
        {
            check = Boolean(false);
        	place.innerHTML= "<p>PHONE must be between 10 and 12 digits</p>";
        }
        if (EMAIL == "") 
		{
        	check = Boolean(false);
        	place.innerHTML= "<p>STREET_NUM cannot be null</p>";
        } 
		
		if (check == true)/* checks end */
		{
			var url =" &name="+encodeURIComponent(NAME)+" &Number="+encodeURIComponent(PHONE)+
			" &email="+encodeURIComponent(EMAIL);    
				xhr.open("POST", dataSource, true);     /* getting data and sending */
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");     
				xhr.onreadystatechange = function() 
				{             
					if (xhr.readyState == 4 && xhr.status == 200) 
					{ 
						place.innerHTML = xhr.responseText;
					}   
				}    
				xhr.send(url);
		}		
	}
}  