<html>
<head>
<title>COVID-19  FORM</title>
<style>
          h1{color:deeppink;font-size:25px;text-decoration:underline;}
	h2{color:#8A0829;font-size:20px;}
	input[type=text] {
                         width: 15%; 
                          border: 3px solid silver;
                          border-radius: 4px;
                         }
input[type=text]:focus{
        width:50%;
}
body {
  background-image: url('hf.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

body {
      margin:5%;
      padding:5%; 
      border:5px inset steelblue;
     
      }

                 



</style>
             <h1><center>COVID-19 FORM</center></h1>
</head>
<body bgcolor ="#F6FFEE" text ="#DD9BCF">
          


<form action="covid19.php" method="POST">
         <br>
         <lable for = "name">NAME:</label>
                                 <br> <br> <input type="text"placeholder="FIRST NAME" id="name" name="firstname" maxlength="30"  size="25"> 
                                 <br> <br> <input type="text"placeholder="LAST NAME" id="name" name="lastname" maxlength="30"  size="25"> 
         <br>
         <br>
          <label for ="mail id">Enter E-mail id:</label>
                                    <br>  <input type="text" placeholder="memyself.k1818@gmail.com" id="mail id" name="mailid" size="50">
         <br>
         <br>
         <label for  ="phone">Enter a phone number:</label>
                                   <br> <input type="text" id="phone" name="phone" placeholder="phone number(123456789)" maxlength="10" pattern="[0-9]{10}" required>
                                           
         <br>
         <br>
         <lable for = "AGE">AGE:</label>
                             <br>  <input type="text" placeholder="AGE" id="name" name="age" maxlength="30"  size="25" >
         <br>
         <br>
         <label for ="GENDER">GENDER: </label>
                         <br>  <input type="radio" name="gender" value="male"> Male
                        <br>  <input type="radio" name="gender" value="female"> Female
                         <br> <input type="radio" name="gender" value="other"> Other
          <br>
           <br>
          <label for ="PLACE">PLACE:</label>
                             <br> <input type="text"placeholder=" ENTER PLACE  " id="name" name="place" maxlength="30"  size="25">
           <br>
            <br>
           <label for =" ARRIVAL DATE  ">ARRIVAL DATE(when did u arrive the collage):</lable>
                            <br> <input type ="date" name="arrival"/>
           <br>
            <br>
           <lable for =" SYMPTOMS">DO YOU HAVE ANY OF THE FOLLOWING SYMPTOMS:</lable>
                      <br>  Fever
                      <br> Cold
                      <br>  Cough
                      <br> ThroatPain
                      <br> TiredNess
                      <br>  Difficult In Breathing
                      <br> <input type="radio" name="symptoms" value="yes" > yes
			   <input type="radio" name="symptoms" value="no" > no	
               <br>
               <br>
               <label for =" HOW MANY DAYS"> SINCE HOW MANY DAYS DO U HAVE THESE SYMPTOMS?</label>
                              <br> <input type ="text"placeholder="No.Of.Days " id="name" name="sympdays" maxlength="30"  size="25">
              <br>
              <br>
             <lablel for ="FORIGEN TRIPS"> DID YOU VIST ANY FROIGEN  TRIPS IN RECENT DAYS?</lable>
                              <br> <input type ="radio" name = "fvisit" value="yes"> yes 
                               <br> <input type ="radio" name = "fvisit" value="no"> no
              <br>
              <br>
              <lable for ="LOCALITY"> DO ANY OF YOU LOCALITY SUFFERED FROM COVID-19</lable>
                               <br> <input type ="radio" name = "locatity" value="yes"> yes 
                               <br> <input type ="radio" name = "locatity" value="no"> no
                                <br> <input type ="radio" name = "locatity" value="maybe"> may be 
               <br>
               <br>
              <lable for ="QUESTIONS / COMMENTS" > QUESTIONS / COMMENTS </lable>
                               <br> <textarea id="QUESTIONS / COMMENTS"  name="suggestions" style="width:700px; height:100px;" >
                                    You can enter any QUESTIONS / COMMENTS
                                     </textarea>
            <br>
           <br>
                  
                   <input type="submit" name="submit" onclick="vali()">

                            
           <br>
           <br>
          <br>
          
        

               
</form>
  <h2>NOTE: IF YOU WANT HOSPITAL APPOINTMENT VIST THE THIS PAGE
 <a href="hospitalform.php">CLICK HERE </a></h2>
<script>
function vali(){
alert("Data Submitted Successfully");

}
</script>

</body>
<img src ="imgc.jpeg" height="100%" width="50%">
</html>
