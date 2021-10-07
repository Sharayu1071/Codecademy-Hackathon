<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -10px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0px 0px;
}

.container {
  background-color: #eedbfa;
  padding: 5px 10px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 9px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #b442ff;
  border-radius: 9px;
}

select {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #b442ff;
  border-radius: 9px;
}

label {
  margin-bottom: 10px;
  display: block;
  
  
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #8d4ff1;
}

a {
  color: #8d4ff1;
}

hr {
  border: 1px solid white;
}

span.price {
  float: right;
  color: grey;
}

span{
    color: #8d4ff1;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
</style>

<title>appointment form</title>




</head>
<body>

<center>
<h1>Book Your Appointment Now</h1>
</center>
<div class="row"  style="padding:10px 300px;">

  <div class="col-50">
    <div class="container" >
      <form  action="pay.php" method="post" style="padding: 25px;">
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Appointment Form</h3>
          

            <label for="name"><span class="fa fa-user"></span>  Patient Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Patient Name">
            <label for="email"><span class="fa fa-envelope"></span>  Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Your Email">
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 1;?>" name="amount">
            <label for="city"><span class="fa fa-mobile"></span>  Mobile No</label>
            <input type="text" id="city" name="mobile" placeholder="Enter Your Mobile Number">
            <label for="city"><span class="fa fa-address-card-o"></span>  City</label>
            <input type="text" id="adr" name="city" placeholder="Enter Your City">
            <label for="special"><span class="fa fa-list"></span>  Select Doctor speciality</label>
           
            <!-- Dropdown options -->
            <select name="special" id="role" >
            <option value="">--Select--</option>
                <option value="Cardiologists">Cardiologists</option>
                <option value="Virus Expert">Virus Expert</option>
                <option value="Neurologist">Neurologist</option>
                <option value="Infection Specialist">Infection Specialist</option>
                <option value="Dentist">Dentist</option>
                <option value="General Physician">General Physician</option>
                <option value="General Surgeon">General Surgeon</option>
                <option value="Physiotherapist">Physiotherapist</option>
                <option value="Homopath">Homopath</option>
                <option value="Gynecologist">Gynecologist</option>
                <option value="Ear,Nose,Throat Specialist">Ear,Nose,Throat Specialist</option>
                <option value="Allergist">Allergist</option>
                <option value="Orthopedist">Orthopedist</option>
                <option value="Dentist">Dentist</option>
                <option value="Physiotherapist">Physiotherapist</option>
            
               
            </select>


            <label for="available"><span class="fa fa-user-md"></span> Doctors avalibility</label>    
            <!-- Input Type Radio Button -->
            <label for="mor">
                <input type="radio" id="mor" value="m" name="available">Morning (10 - 12)</input>
            </label>

            <label for="aft">
                <input type="radio" id="aft" value="a" name="available">Afternoon (2 - 4)</input>
            </label>

            <label for="eve">
                <input type="radio" id="eve" value="e" name="available">Evening (6 - 8)</input>
            </label>

            <!---------------------------------------------------------

            <label for="mode"><span class="fa fa-user"></span> Mode </label>    
            
            <label for="off">
                <input type="radio" id="off" value="off" name="mode">Offline</input>
            </label>

            <label for="on">
                <input type="radio" id="on" value="on" name="mode">Online</input>
            </label>
            ------------------------------>


          
             
            <center>
        <label for="pay"><span class="fa fa-bank"></span> Pay ₹100 To Book Your Appointment </label>
        </center>

          
        </div>

        
       
        <input type="submit"  value="Pay Now" class="btn">
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
