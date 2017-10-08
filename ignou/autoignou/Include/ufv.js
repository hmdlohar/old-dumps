
//Function to check and validate alphabets entered in textboxes based on passed parameters
//an for Alpha Numeric
//az for tel number
//al Lower case Alpha
//au for upper case
//sp for Aplha Numeric and Special Characters
//

function txtalphabet(txtbox,txtlabel,blank,minl,maxl,bblank,alphabet)
{

if (blank=="b" || blank=="B")
		{if (txtbox.value == " ")
			{
			alert(txtlabel+" cannot be blank");
			txtbox.focus();
			return false;
			}
		}
if (blank=="b" || blank=="B")
		{if (txtbox.value == " ")
			{
			alert(txtlabel+" cannot be blank");
			txtbox.focus();
			return false;
			}
		}
		
if (minl != "") 
		{if (txtbox.value.length < parseInt(minl))
			{
			alert(txtlabel+" should contain atleast "+minl+" characters");
			txtbox.focus();
			return false;			
			}
		}
			
if (maxl !="") 
		{if (txtbox.value.length > parseInt(maxl))
			{
			alert(txtlabel+" should contain atmost "+maxl+" characters");
			txtbox.focus();
			return false;			
			}
		}
		
if (bblank =="b")
		{var vstr=txtbox.value;
		for(i=0; i<txtbox.value.length ; i++)
			{if (txtbox.value.charAt(i)==" ")
				{
				alert(txtlabel+" should not contain blank characters");
				txtbox.focus();
				return false;			
				}
			}
		}
		
if (alphabet=="am" || alphabet=="AM" )
		{
		var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
		var checkStr = txtbox.value;
		var allValid = true;
		for (i = 0;  i < checkStr.length;  i++)
			{
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}
		if (!allValid)
			{
			alert("Please enter only alphabet in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
	}
		
	if (alphabet=="an" || alphabet=="AN" )
		{var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-()&. ";
		var checkStr = txtbox.value;	
		var allValid = true;
		for (i = 0;  i < checkStr.length;  i++)
		{   ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}
		if (!allValid)
			{
			alert("Please enter only alpha numeric characters in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
	}
	
	if (alphabet=="az" || alphabet=="AZ" )
		{var checkOK = "0123456789-()";
		var checkStr = txtbox.value;
		var allValid = true;
		for (i = 0;  i < checkStr.length;  i++)
			{ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}
		if (!allValid)
			{
			alert("Please enter only numeric value in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
	}
	
	if (alphabet=="au" || alphabet=="AU" )
		{
			var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			var checkStr = txtbox.value;
			var allValid = true;
			for (i = 0;  i < checkStr.length;  i++)
				{
				ch = checkStr.charAt(i);
				for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}

		if (!allValid)
			{
			alert("Please enter upper case alphabets in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
		}
		
		if (alphabet=="al" || alphabet=="AL" )
		{
			var checkOK = "abcdefghijklmnopqrstuvwxyz";
			var checkStr = txtbox.value;
			var allValid = true;
			for (i = 0;  i < checkStr.length;  i++)
				{
				ch = checkStr.charAt(i);
				for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}
		if (!allValid)
			{
			alert("Please enter lower case alphabets in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
		}

		if (alphabet=="sp" || alphabet=="SP" )
		{
			var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-/,.()#@ ";
			var checkStr = txtbox.value;
			var allValid = true;
			for (i = 0;  i < checkStr.length;  i++)
				{
				ch = checkStr.charAt(i);
				for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}
		if (!allValid)
			{
			alert("Please enter Valid alphabets in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
		}
	return true;
}

//###############################################################################################

//Function to check and validate numbers entered in textboxes based on passed parameters
function txtnumeric(txtbox,txtlabel,zblank,minl,maxl,minval,maxval,numeric,decyn,decnum)
{
	
	if (numeric=="n" || numeric=="N" )
		{
			var checkOK = "0123456789";
			var checkStr = txtbox.value;
			var allValid = true;
			var decp=false;
			var deccounter=0;
			if (decyn=="y" || decyn=="Y")
				checkOK = "0123456789.-:";
			if (decyn=="n" || decyn=="N")
				checkOK = "0123456789";	
			for (i = 0;  i < checkStr.length;  i++)
				{
				ch = checkStr.charAt(i);
				if (decyn=="y" || decyn=="Y")
					if (ch=="." )
						if (!decp)
							decp=true;
						else
							{
							alert("Please enter single decimal point in the "+txtlabel+" field.");
							txtbox.focus();
							return (false);
							}
					if ((decp) && ch != ".")
						deccounter++
						if (deccounter > decnum)
							{
							alert("Number of digits after decimal point should not exceed "+decnum+" in the "+txtlabel+" field.");
							txtbox.focus();
							return (false);
							}
				for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
				}
		if (!allValid)
			{
			alert("Please enter only numeric digits in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
		}

	if (zblank=="z" || zblank=="Z")
	{
		if (eval(txtbox.value)==0)
			{
			alert("Please enter value greater than zero in the "+txtlabel+" field.");
			txtbox.focus();
			return (false);
			}
	}
	if (zblank=="b" || zblank=="B")
	{
		if (txtbox.value=="")
			{
			alert(txtlabel+" field cannot be blank.");
			txtbox.focus();
			return (false);
			}
		
	}
	
	if (minl != "")
	{
		if (txtbox.value.length < minl)
			{
			alert(txtlabel+" field should contain at least "+minl+" digits");
			txtbox.focus();
			return (false);
			}
	}		
	if (maxl != "")
	{
		if (txtbox.value.length > maxl)
			{
			alert(txtlabel+" field should contain at most "+maxl+" digits");
			txtbox.focus();
			return (false);
			}
	}		
	if (minval != "")
	{
		if (eval(txtbox.value) < minval)
			{
			alert(txtlabel+" field should contain a value greater than or equal to "+minval);
			txtbox.focus();
			return (false);
			}
	}		
	if (maxval != "")
	{
		if (eval(txtbox.value) > maxval)
			{
			alert(txtlabel+" field should contain a value less than or equal to "+maxval);
			txtbox.focus();
			return (false);
			}
	}		
	
return true;	
}


function checkString(textbox, txtlabel, chkok, alphabet)
{
   var checkOK = chkok;
   var checkStr = textbox.value;
   var allValid = true;
   
   		for (i = 0;  i < checkStr.length;  i++)
		{   ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
			        
				if (ch == checkOK.charAt(j))
					break;
				if (j == checkOK.length)
					{
					allValid = false;
					break;
					}
		}

			if (!allValid)
			{
			  if(alphabet=="a" || alphabet=="A")
			   {
			    alert("Only alphabets allowed in "+txtlabel+" field");
			   }  
			  if(alphabet=="an" || alphabet=="AN")
			   { 
			    alert("Only alphaumerics allowed in "+txtlabel+" field");
			   }
			   
			  //for address fields 
			  if(alphabet=="ad" || alphabet=="AD")
			   { 
			    alert("Only alphanumerics with some special characters (),/\_-  allowed in "+txtlabel+" field");
			   } 	  
			  
			  //for numeric fields 
			  if(alphabet=="n" || alphabet=="N")
			   { 
			    alert("Only numerics allowed in "+txtlabel+" field");
			   } 	
			  
			  //for phone fields 
			  if(alphabet=="p" || alphabet=="P")
			   { 
			    alert("Only numerics with - allowed in "+txtlabel+" field");
			   } 	 
			  
			  
			     textbox.focus();
			     return false;
			
			}
	return true;
}  //end of method checkString

//########################################################################################################
//method to check whether the provided string includes any special charcters or not
function checkSpecialString(textbox, txtlabel)
{
     var checkOK = "`~!@#$%^&*()_=+|\/?<>;:'{}[]";
     var checkStr = textbox.value;
     var allValid = true;
   
   		for (i = 0;  i < checkStr.length;  i++)
		{   ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
			 {
			        
				if (ch == checkOK.charAt(j))
				  {
				alert("Only alphaumerics allowed in "+txtlabel+" field");
				textbox.focus();
				return false;
				  } 
			
			 }		
		}

			
	return true;
 
}  //end of method checkSpecialString

//Function to check and validate email addresses entered in textboxes based on passed parameters
function emailvalidation(txtbox,txtlabel,minl,maxl)
{	
	if (txtbox.value.charAt(0)=="@" || txtbox.value.charAt(0)=="." )
		{alert("Invalid Email Id");
		txtbox.focus();
		return (false);
		}
	if (txtbox.value == "")
	{
		alert("Please enter a value for the Email field.");
		txtbox.focus();
		return (false);
	}
	if (txtbox.value.length < minl)
	{
		alert("Please enter at least " +minl +" character in the Email field.");
		txtbox.focus();
		return (false);
	}
	if (txtbox.value.length > maxl)
	{
		alert("Please enter at most " +maxl + " characters in the Email field.");
		txtbox.focus();
		return (false);
	}
  
if (echeck(txtbox.value)==false) {
			txtbox.focus()
			return false
	}
	return true

  var myStr=txtbox.value;
	if (myStr != "")
		{
			var space=/\s/;
			if (myStr.search(space) != -1)
				{alert("Please check your Email Format.1");
				txtbox.focus();
				return (false);
				}			

			/*if ((myStr.indexOf("@") == -1) || (myStr.indexOf("@") < 2 ) ||(myStr.indexOf(".") == -1 )
			|| (myStr.indexOf(".") < 2 ) || (myStr.length-myStr.indexOf(".")<=2)
			|| ((myStr.indexOf("@")-myStr.indexOf("."))==1) 
			|| ((myStr.indexOf("@")-myStr.indexOf("."))==-1)
			|| (myStr.indexOf(".") < myStr.indexOf("@"))
			|| ((myStr.indexOf(".")-myStr.indexOf("."))==1)
			|| (myStr.charAt(myStr.length-1)==".")
			|| (myStr.charAt(myStr.length-2)=="."))
			
			
			{
				alert("Please check your Email format.");
				txtbox.focus();
				return (false);
			}
			
			for (i=0; i<myStr.length; i++)
				{
				if (myStr.charAt(i)==".")
					if (myStr.charAt(i+1)==".")
					{
					alert("Please check your Email format.");
					txtbox.focus();
					return (false);
					}
				}
			
			document.write(myStr.search(".."));
			
			if (myStr.search("..") == -1)
				{
					alert("Please check your XXXXXX Email format.");
					txtbox.focus();
					return (false);
				}*/

			if (myStr.indexOf("@") == -1 )
			{
				var substr = myStr.substr(myStr.indexOf("@")+1,myStr.length);
				alert(substr);
				var idx2attherate = substr.search("@");
								alert(idx2attherate);
				if(idx2attherate==-1)
				{
					alert("Please check your Email format.");
					txtbox.focus();
					return (false);
				}
			}
			var allvalidchars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_.@";
			for (i = 0;  i < myStr.length;  i++)
			{
				ch = myStr.charAt(i);
				for (j = 0;  j < allvalidchars.length;  j++)
				{
					if (ch == allvalidchars.charAt(j))
						{
						break;
						}
					else if (j == (allvalidchars.length-1))
						{
						    alert("Please  check your Email");
						    txtbox.focus();
						    return (false);

						}
				}
			}
		}
	return true;
}

//#############################################################################################################


//Function to check and validate passwords entered in textboxes based on passed parameters
function paswordvalidation(txtbox,txtlabel,minl,maxl)
{
	if (txtbox.value.charAt(0)=="@" || txtbox.value.charAt(0)=="." )
		{alert("Invalid password Id");
		txtbox.focus();
		return (false);
		}
	if (txtbox.value == "")
	{
		alert("Please enter a value for the password field.");
		txtbox.focus();
		return (false);
	}
	if (txtbox.value.length < minl)
	{
		alert("Please enter at least "+minl+" characters in the password field.");
		txtbox.focus();
		return (false);
	}
	if (txtbox.value.length > maxl)
	{
		alert("Please enter at most "+maxl+" characters in the password field.");
		txtbox.focus();
		return (false);
	}
  
  var myStr=txtbox.value;
	if (myStr != "")
		{
			var space=/\s/;
			if (myStr.search(space) != -1)
				{alert("Please check your password Format.");
				txtbox.focus();
				return (false);
				}

			var allvalidchars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
			for (i = 0;  i < myStr.length;  i++)
			{
				ch = myStr.charAt(i);
				for (j = 0;  j < allvalidchars.length;  j++)
				{
					if (ch == allvalidchars.charAt(j))
						{
						break;
						}
					else if (j == (allvalidchars.length-1))
						{
						    alert("Please  check your password");
						    txtbox.focus();
						    return (false);

						}
				}
			}
		}
	return true;
}

//#####################################################################################################

//Function to check and validate date, month and year selected in comboboxes based on passed parameters
function date_validate(selectdate, selectmonth, selectyear)
	
{


	var tdate;
	var tmonth;
	var tyear;
	
	for(i=0; i< selectdate.length; i++)
	{
		if	(selectdate.options[i].selected==true)
		 tdate=selectdate.options[i].text;
	}	
	
	for(i=0; i< selectmonth.length; i++)
	{
		if	(selectmonth.options[i].selected==true)
		 tmonth=selectmonth.options[i].text;
	}	
	
	for(i=0; i< selectyear.length; i++)
	{
		if	(selectyear.options[i].selected==true)
		 tyear=selectyear.options[i].text;
	}
	

	if (selectdate == "")
		{
		alert("Date cannot be blank");
		selectdate.focus();
		return false;
		}

	if (selectmonth == "")
		{
		alert("Month cannot be blank");
		//selectmonth.focus();
		return false;
		}

	if (selectyear == "")
		{
		alert("Year cannot be blank");
		selectyear.focus();
		return false;
		}

	if ((tdate == "30" || tdate == "31") && (tmonth == "Feb"))
		{
		alert("Incorrect date or month selected");

		selectdate.focus();
		return false;
		}

	if ((tdate == "31") && (tmonth == "Apr" || tmonth == "Jun" || tmonth == "Sep" || tmonth == "Nov"))
		{
		alert("Incorect date or month selected");
		selectdate.focus();
		return false;
		}

	var check_div_by_four = (eval(tyear) % 4)

	if ((check_div_by_four != 0) && (tdate == "29") && (tmonth == "Feb"))
		{
		alert("Incorect date and month has been entered for leap year");
		selectdate.focus();
		return false;
		}
	return true;
}


function date_validate2(txtbox,txtlabel,blank,currdate,currdatevalue)
{
//if currdate=="L" means Entered Date must be less than Current Date


if(currdate=="L" || currdate=="l")
{
  var strdate=txtbox.value;
  strdate=strdate.substring(3,5)+"-"+strdate.substring(0,2)+"-"+strdate.substring(6,10);

  strdate=new Date(strdate);

  var dt= new Date(currdatevalue);

  if(strdate > dt)

   {
	alert(txtlabel +" can not be more than current date");
	txtbox.focus();
	return false;	
	
   }
}   

if(blank=="b" || blank=="B")
{
	if(txtbox.value=="")
	{//start if if
	  alert("Blank not allowed in "+txtlabel+" field");
	  txtbox.focus();
  	  return false;
  	  }//end of if
}



if(txtbox.value!="")
 {//start if if	

if(txtbox.value.length!=10)
{
	alert("Enter valid date format 'dd/mm/yyyy' in "+txtlabel+" field.");
	txtbox.focus();
	return false;
}
			
			var checkOK = "0123456789/";
			var checkStr = txtbox.value;	
			var allValid = true;
		for (j = 0;  j < checkStr.length;  j++)
		{ //start of for
			  ch = checkStr.charAt(j);
			for (k = 0;  k < checkOK.length;  k++)
				if (ch == checkOK.charAt(k))
					break;
				if (k == checkOK.length)
					{
					allValid = false;
					break;
					}
		}//end of for
			if (!allValid)
			{//start of if

			alert("Only numerics with '/' allowed in "+txtlabel+" field");
			txtbox.focus();
			return false;
					
			}//end of if
		
			

	
	
		
	if(txtbox.value.length>10)
	{//start if if	
			alert(txtlabel+" should not exceed 10 characters");
			txtbox.focus();
			return false;
	}//end of if
	
		
	
	var ch=txtbox.value.substring(0,2);
	var ch1=txtbox.value.substring(3,5);
	var ch2=txtbox.value.substring(6,10);
	
		
	if((txtbox.value.charAt(2)!="/")
	|| (txtbox.value.charAt(5)!="/")
	|| (txtbox.value.charAt(0)=="/")
	|| (txtbox.value.charAt(1)=="/")
	|| (txtbox.value.charAt(3)=="/")
	|| (txtbox.value.charAt(9)=="/")
	|| (txtbox.value.charAt(8)=="/")
	|| (txtbox.value.charAt(7)=="/")
	|| (txtbox.value.charAt(6)=="/")
	|| (txtbox.value.charAt(4)=="/"))	
	{
		alert("check your date format(DD/MM/YYYY) in "+txtlabel+" field");
		txtbox.focus();
		return false;
	}	
	
	if((ch1<1)||(ch1>=13)||(ch<1)||(ch>31))
	{
		alert("Check the date entered in "+txtlabel+" field");
		txtbox.focus();
		return false;
		
	}		
/*	
	if(ch2>2001)
	{
		alert("Check the Year entered in Date Of Birth field");
		document.cand_entry.DateOFBirth.focus();
		return false;
		
	}	
	
*/		
	if ((ch == "30" || ch == "31") && (ch1 == "02"  || ch1 == "2"))
		{
		alert("Incorrect date or month entered in "+txtlabel+" field");
		txtbox.focus();
		return false;
		}
	

if ((ch == "31") && (ch1 == "04" || ch1 == "4" ||  ch1 == "06" || ch1 == "6" ||  ch1 == "09" ||ch1 == "9"|| ch1 == "11"))
		{
		alert("Incorrect date or month entered in "+txtlabel+" field");
		txtbox.focus();
		return false;
		}
	
	var check_div_by_four = (eval(ch2) % 4);
	var check_div_by_hundred = (eval(ch2) % 100);
	var check_div_by_four_hundred = (eval(ch2) % 400);

	if ((ch == "29") && (ch1 == "02" || ch1 == "2"))
	{
		if(check_div_by_four!=0)
		{
	
		alert("Invalid Date entered in "+txtlabel+" field.\n Check for leap year calculations.");
		txtbox.focus();
		return false;
		}
		else if((check_div_by_hundred==0) && (check_div_by_four_hundred!=0))
		{
		alert("Invalid Date entered in "+txtlabel+" field.\n Check for leap year calculations.");
		txtbox.focus();
		return false;
			
			
		}
	}
/*
	if ((check_div_by_four != 0) && (ch == "29") && (ch1 == "02" || ch1 == "2"))
		{
		alert("Leap Year entered in "+txtlabel+" field");
		txtbox.focus();
		return false;
		}*/
	
    }//end of if
}
//end function to validate date for date picker

//########################### Text Area  ####################################
function textarea(txtbox,txtlabel,blank)
{
	if (blank=="b" || blank=="B")
		{if (txtbox.value == "")
			{
			alert(txtlabel+" cannot be blank");
			txtbox.focus();
			return false;
			}
		}
	if (blank=="b" || blank=="B")
		{if (txtbox.value == " ")
			{
			alert(txtlabel+" cannot be blank");
			txtbox.focus();
			return false;
			}
		}

	if(txtbox.value!="")
	{
			var checkOK = "~`!@$%^&_+=[]{}\|<>?";
			//"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz#'-./0123456789,)(;:* ";
			var checkStr = txtbox.value;	
			var newStr="";
			var allValid = true;
			
			for (i = 0;  i < checkStr.length;  i++)
			{   
			    ch = checkStr.charAt(i);
			    
			    for (j = 0;  j < checkOK.length;  j++)
			    {
				if (ch == checkOK.charAt(j))
				{
					allValid = false;
					break;
				}
				if (j == checkOK.length)
				{
					break;
				}
			     }
			     if(!allValid)
				break;
			     if (ch=="'")
				{
					newStr=newStr+"'";
					newStr=newStr+"'";
				}
			     else
				{
					newStr=newStr+ch;
				}	
			}
			if (!allValid)
			{
				alert("Only alphabets allowed in Address Field");
				txtbox.focus();
				return false;
			} 
			else
			{
				txtbox.value=newStr;
			}
	} 
}

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		
if (str.indexOf(at)==-1){
		   alert("Invalid email")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid email")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid email")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid email")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid email")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid email")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid email")
		    return false
		 }

 		 return true					
	}

