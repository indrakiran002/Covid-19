<!DOCTYPE html>
<html>
<head>

<title>HOSPITAL APPOINTMENT</title>

<style>

heading1 {
         color:steelblue;
         font-size:50px;
         text-align:center;
         }

heading2 {
         color:#8A0829;
         font-size:20px;
         }

body {
      margin:5%;
      padding:5%; 
      border:5px inset steelblue;
      background-color:#e8f3f8;
      }

form { 
      margin:20px;
      width:320px;
      color:steelblue;
      }

input[type=text],select,input[type=email],input[type=tel],
input[type=date],input[type=number],input[type=textarea]
                      {
                      height=60vh;
                      padding:5px;
                      font-size:15px;
                      border:2px steelblue solid;
                      }


input[type=text],select,input[type=email],input[type=tel],
input[type=date],input[type=number],input[type=textarea]
                      {
                       background-color:#F5F6CE;
                       colour:white;
                      }
input[type=submit], input[type=reset] 
                   {
                    background-color:#F5F6CE;
                    border:5px inset;
                    color:steelblue;
                    padding: 16px 32px;
                    margin: 4px 2px;
                    cursor: pointer;
                   }
</style>
</head>

<body>

<heading1><center>HEALTH CHECKUP FORM</center></heading1>
<form action="hspfm.php" method="POST">
     <br>
     <label for="n"> NAME: </label><br>
     <input type="text" placeholder="First name" id="n" name="firstname" maxlength="30" size="15">
     <br><br>
     <input type="text" placeholder="Last name" id="n" name="lastname" maxlength="30" size="15">
     <br><br>
    
     <label for="id-num"> SRM ID : </label>
     <input type="text" id="id-num" name="srmid" placeholder="AP***********" maxlength="13" size="15">
     <br><br>
     
     <label for="mail-id"> ENTER E-MAIL ID : </label>
     <input type="email" placeholder="memyself.k1818@gmail.com" id="mail-id" name="mailid" size="50">
     <br><br>

     <label for="phone-num"> ENTER PHONE NUMBER : </label>
     <input type="tel" id="phone-num" name="phone" placeholder="phone number" maxlength="10" pattern="[0-9]{10}" required>
     <br>
     <small>[Format:0123456789]</small>
     <br><br>
     
     <label for="prblm"> REASON FOR APPOINTMENT : </label><br>
     <input type="textarea" id="prblm" name="problem"  placeholder="Brief explanation is required." style="width:1000px; height:99px;">
     </textarea>
     <br><br>
     
     <p>DID YOU VISIT DOCTOR RECENTLY : </p>
     <input type="radio" id="s" name="vrecent" value="yes">
     <label for="s"> YES </label>
     <br>
     <input type="radio" id="no" name="vrecent" value="no">
     <label for="no"> NO </label>
     <br><br>

     
     <p> IS YOUR CONDITION TOO BAD ? </p>
     <input type="radio" id="s1" name="condi_tion" value="yes.">
     <label for="s1"> YES </label>
     <br>
     <input type="radio" id="no1" name="condi_tion" value="no.">
     <label for="no1"> NO </label>
     <br><br>
     
     <label for="appointment date">SELECT DATE FOR APPOINTMENT : </label>
     <input type="date" id="appointment date" name="adate" placeholder="dd-mm-yyyy">
     <br><br>

     <label for="visit">SELECT TIME : </label> 
     <select id="visit" name="vtime" placeholder="select">
             <option value="09:00am-11:00am">09:00am-11:00am</option>
             <option value="03:00pm-05:00pm">03:00pm-05:00pm</option>
             <option value="08:00pm-10:00pm">08:00pm-10:00pm</option>
     </select>
     <br><br>
     
      <p>CHOOSE YOUR CONTACT PREFRENCE : </p>
      <input type="Checkbox" name="contact" id="contact" value="phone">
      <label for="contact" >On Phone.</label>
      <br>
      <input type="Checkbox" name="contact" id="contact1" value="mail">
      <label for="contact1" >Send Mail.</label>
      <br>
      <input type="Checkbox" name="contact" id="contact2" value="message">
      <label for="contact2">Text message. </label>
      <br><br>

     <input type="submit" placeholder="submit" name="submit" onclick="vali()">
     <input type="reset" placeholder="reset">
     <br><br><br><br><br><br><br><br><br><br>
     <heading2><pre>
 For any other issues 
          Contact us: 8923657178
          Mail us on: payeli_indra@srmap.edu.in
     </pre></heading2>



</form>


<script>
function vali(){
alert("Data Submitted Successfully");

}
</script>
</body>

</html>