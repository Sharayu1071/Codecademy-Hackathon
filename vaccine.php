<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>vaccine check</title>





<!-- bootstrap cdn link  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">



</head>
<body>

<!-- header section starts -->

<header class="fixed-top py-3">

    <div class="container d-flex align-items-center justify-content-between">

        <center>

            
            <a href="index.php" class="logo"><span class="fas fa-home"></span>Clinic</a> <br>


        </center>

       

</header>

<!-- header section end-->



         <!--  vaccintion center availability section start-->

        <div class="container">  <br> <br> <br> <br>
            
            <div class="content">
                <h3 style=" font-weight: bold; color:var(--black); font-size: 33px; margin: 47px 3px;">Check your
                    nearest vaccination center and slots availability</h3>
            </div>
            <div class="form-group">
                <label for="pin">Search By Pin--></label>
                <input type="number" maxlength="6" class="form-control" id="pin" placeholder="Enter pin" name="pin">
            </div>
            <button id="searchbtn" class="link-btn">Search</button> <br> <br>
            <!-- <button id="searchbtn1" class="link-btn">Search By District</button> -->
            <table class="table" id="session">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Pin Code</th>
                        <th>Date</th>
                        <th>18+</th>
                        <th>45+</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>



            <!-----------------------------------script-start---------------------------------------------------------------------->
            <script>
                var date = new Date();
                var today = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                $("#searchbtn").click(function () {
                    var pin = $('#pin').val();
                    if (pin == '' || pin == undefined) {
                        alert('please enter valid pin code');
                        return;
                    }
                    $.get("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=" + pin +
                        "&date=" + today,
                        function (data, status) {
                            if (status) {
                                var sessions = data.sessions ? data.sessions : [];
                                if (sessions) {
                                    for (var i = 0; i <= sessions.length; i++) {
                                        var classname = "info";
                                        if (i % 2 == 0) {
                                            classname = "success"
                                        }
                                        $('#session tbody').append("<tr class=" + classname + "><td>" + sessions[i]
                                            .name + "</td><td>" + sessions[i].pincode + "</td><td>" + sessions[i].date + "</td><td>" + sessions[i].available_capacity + "</td><td>" +
                                            sessions[i].available_capacity_dose1 + "</td></tr>")
                                    }
                                }
                            } else {
                                alert('error');
                            }
                        });
                });
            </script>

             <!-----------------------------------script-end---------------------------------------------------------------------->
        </div>
    </div>
    <!--  vaccintion center availability section ends here-->
  

</body>
</html>