
    
          
          function checkEmail(str1)
          {
               var posat=str1.indexOf("@");
               var posdot=str1.indexOf(".");
          
          if(posat!=-1 && posdot!=-1)
          {
              if(posat>=1 && (posdot-posat)>=2 && (str1.length-1-posdot)>=2 && (str1.length-1-posdot)<=5)
              {
                  return true;
              }
              else
              {
                  return false;
              }
          }
          else
          {
              return false;
          }
          }

          function validateForm(){

               var stb =document.myform.STB_No.value;
               var nam=document.myform.Name.value;
               var mobnum=document.myform.Mobile_no.value;
               var email2=document.myform.Email.value;
               var address =document.myform.Address.value;
               var pincode =document.myform.Pincode.value;
               var adhar =document.myform.Adhar_no.value;

               if(stb == " " )
               {
                alert("Plese enter STB no");
                return false;
               }
               else if (nam=="" || nam==null)
               {
                  alert("Name should not be null");
                  return false;
               }
               else if(nam.length<3)
               {
                  alert("Name length should be 3-30");
                  return false;
               }
               else if(nam.length>30)
               {
                  alert("Name length should be 3-30");
                  return false;
               }
               else if(isNaN(nam)==false)
               {
                  alert("Name should not be a numeric");
                  return false;
               }
               else if(email2=="" || email2==null)
               {
                  alert("Email cannot be empty");
                  return false;
               }
               else if(!checkEmail(email2))
               {
                  alert("Email not valid");
                  
               }
               else if (mobnum=="" || mobnum==null)
               {
                  alert("Mobile no cannot be null");
                  return false;
               }
               else if(mobnum.length!=10)
               {
                  alert("Please enter a 10 digit no");
                  return false;
               }
               else if(mobnum[0]<'6')
               {
                  alert("Enter a valid mobile no");
                  return false;
               }
               else if(pincode=="" || pincode==null)
               {
                  alert("pincode cannot be null");
                  return false;
               }
               else if(adhar=="" || adhar==null)
               {
                  alert("Adhar No can not be null");
                  return false;
               }
               else if(adhar.length == 12 )
               {
                  alert("Enter a valid Adhar No");
                  return false;
               }
               else if(address.length>220)
               {
                  alert("Address cannot be greater than 220 characters");
                  return false;
               }
               else
               {
                  alert("successfully registered");
                  return true;
               }
          }