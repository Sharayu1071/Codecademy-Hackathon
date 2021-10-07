<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeClinic Login</title>

    <!-- bootstrap cdn link  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

 <!-- custom css file link  -->
 <link rel="stylesheet" href="css/style.css">



</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        height: 95%;
    
        align-items: center;
        flex-direction: column;
    }

</style>
<body>

<!-- header section starts -->

<header class="fixed-top py-3">

    <div class="container d-flex align-items-center justify-content-between">

        <center>

            
            <a href="index.php" class="logo"><span class="fas fa-home"></span>Clinic</a> <br>


        </center>

       

</header>

<!-- header section end-->


<br>
<br>
<br>
<br>


     <div class="container">

         <h1>Passwordless Login Page</h1>
         <br>
         <br>
         <div id="sawo-container" style="height: 400px; width: 400px; border: radius 30px;"></div>
        </div>
    <script src="https://websdk.sawolabs.com/sawo.min.js"></script>    
<script>
    var config = {
        // should be same as the id of the container created on 3rd step
        containerID: "sawo-container",
        // can be one of 'email' or 'phone_number_sms'
        identifierType: "email",
        // Add the API key copied from 2nd step
        apiKey: "9fa4d0a2-43f5-498f-9049-907d16f878a3",
        // Add a callback here to handle the payload sent by sdk
        onSuccess: (payload) => {
           // console.log(payload)
            
            alert("succesful");
      
        },
    };
    var sawo = new Sawo(config);
    sawo.showForm();
</script>
    
</body>
</html>