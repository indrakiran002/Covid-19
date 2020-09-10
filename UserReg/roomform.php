<!DOCTYPE html>
<html>
<head>
<title>ROOM SERVICE</title>
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
      background-image: url('rf.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
      }

form { 
      margin:20px;
      width:320px;
      color:steelblue;
      }

input[type=text],select,input[type=email],input[type=tel],
input[type=date],input[type=number],input[type=msg],textarea
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
                    color: steelblue;
                    padding: 16px 32px;
                    margin: 4px 2px;
                    cursor: pointer;
                   }


</style>
<heading1><center>ROOM SERVICE REQUEST FORM</center></heading1>
</head>


<body>

<form action="roomfom.php" method="POST">
     <br>
     
     <label for="name">NAME : </label>
     <input type="text" placeholder="First name" id="name" name="firstname" maxlength="30" size="25">
     <br><br>
     <input type="text" placeholder="Last name" id="name" name="lastname" maxlength="30" size="25">
     <br><br>
    
     <label for="id num">SRM ID NUMBER : </label>
     <input type="text" id="id num" name="srmid" placeholder="AP***********" maxlength="13" size="15">
     <br><br>
     
     <label for="mail id">ENTER E-MAIL ID :</label>
     <input type="email" placeholder="memyself.k1818@gmail.com" id="mail id" name="mailid" size="50">
     <br><br>

     <label for="phone">ENTER PHONE NUMBER : </label>
     <input type="tel" id="phone" name="phone" placeholder="phone number" maxlength="10" pattern="[0-9]{10}" required>
     <br>
     <small>[Format:0123456789]</small>
     <br><br>
    
     <label for="tower">CHOOSE TOWER NUMBER : </label>
     <select id="tower" name="towerno" placeholder="select">
             <option value="tower1">Tower-1</option>
             <option value="tower2">Tower-2</option>
             <option value="tower3">Tower-3</option>
             <option value="tower4">Tower-4</option>
     </select>
     <br><br>
     
     <label for="room num">ENTER ROOM NUMBER : </label>
     <input type="number" name="roomno" id="room num" maxlength="3">
     <br><br> 


     <label for="service">SERVICE NEEDED : </label>
     <select id="service" name="service" placeholder="select">
             <option value="Room Cleaning">Room Cleaning</option>
             <option value="Bathroom Cleaning">Bathroom Cleaning</option>
             <option value="Electrical issues">Electrical issues</option>
             <option value="Plumber work">Plumber Work</option>
             <option value="Carpenter work"> Carpenter Work</option>
     </select>
     <br><br>
   
     <label for="time"> TIME : </label>
     <select id="time" name="time" placeholder="select">
             <option value="06:00am-07:00am">06:00am-07:00am</option>
             <option value="07:00am-08:00am">07:00am-08:00am</option>
             <option value="08:00am-09:00am">08:00am-09:00am</option>
             <option value="09:00am-10:00am">09:00am-10:00am</option>
             <option value="03:00pm-04:00pm">03:00pm-04:00pm</option>
             <option value="04:00pm-05:00pm">04:00am-05:00am</option>
             <option value="05:00pm-06:00pm">05:00pm-06:00pm</option>
             <option value="06:00pm-07:00pm">06:00pm-07:00pm</option>
             <option value="07:00pm-08:00pm">07:00pm-08:00pm</option>
             <option value="08:00pm-09:00pm">08:00pm-09:00pm</option>
     </select>
     <br><br>
     
     <label for="msg">SUGGETIONS/MESSAGES : </label><br>
     <textarea id="msg"name="suggestions" style="width:900px; height:200px;">
     You can enter any other issues or suggetions here.
     </textarea>
     <br><br>
     <input type="submit" name="submit" placeholder="submit">
     <input type="reset" placeholder="reset" onclick="vali()">
     <br><br><br><br><br><br><br><br><br>
     <heading2><pre> 
For any other issues 
          Contact us: 9177542426
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