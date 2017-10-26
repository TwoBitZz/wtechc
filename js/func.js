function validateForm(theForm) 
	{
		
    if (document.form1.TxtUserName.value.length == 0) 
    {
    	alert("Username can't blank." );
    	document.form1.TxtUserName.focus();
    	return false;

    } 
    
    if (document.form1.TxtPassword.value.length == 0) 
    {
    	alert("Password can't blank." );
    	document.form1.TxtUserName.focus();
    	return false;
    } 
     
	}
	

