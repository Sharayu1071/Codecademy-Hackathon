<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">

    <style>
        /* pricing section starts here  */
        /* Pricing Section Starts */
        .pricing .heading h1 {
            padding-top: 2rem;
            padding-bottom: 2rem;
            font-size: 3rem;
            background-color: rgb(171, 89, 248);
        }

        .box-container {
            display: flex;
            flex-direction: row;
            /* justify-content:space-between ; */
            gap: 2rem;
            justify-content: center;
            padding-top: 0rem;
            padding: 3rem;

        }

        .box-container .box h2 {
            font-size: 1.5rem;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 600;
        }
        

        .box-container .box {
            height: 65vh;
            width: 25vw;
            border: 3px solid #8d4ff1;
            display: flex;
            border-radius: 10%;
            flex-direction: column;
            justify-content: center;
            background-color: rgb(255, 254, 248);
        }

        .box-container .box:hover {
            background-color: #9999FF;
        }

        .box .title p {
            padding: 2rem;
        }



        @media(max-width:768px) {
            .box-container {
                display: flex;
                flex-direction: column;
            }

            .box-container .box {
                width: 70vw;
                display: flex;
                flex-direction: column;
                /* justify-content: center; */
            }

            .box-container .box .desc ul {
                padding-left: 0rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .box-container .box .desc ul li {
                /* display: none; */
                font-size: 10px;
            }

            .box-container .box .desc ul li span {
                font-size: 12px;
            }

            .price span {
                font-size: 30px;
            }

            .price span i {
                font-size: 1x;
            }

            .box-container .box .desc .btn {
                width: 30%;
                background-color: #8d4ff1;
                font-weight: bold;
                transition: 1s linear;
                font-size: 1rem;
                margin-bottom: 2rem;
                margin-left: 6.5rem;
            }

            .pricing h1 {
                margin-top: 6rem;
            }

        }
    </style>
</head>

<body>

<!-- header section starts -->

<header class="fixed-top py-3">

    <div class="container d-flex align-items-center justify-content-between">

        <center>

            
            <a href="index.php" class="logo"><span class="fas fa-home"></span>Clinic</a> <br>


        </center>

        

</div>

       

</header>

<!-- header section end-->

    <br><br><br><br>

        <div class="box-container">

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Meera Roy</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>

                        

                </div>

            </div>

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Jay Raj</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>
                </div>

            </div>


          

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Jay Raj</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>
                </div>

            </div>

        </div>
        <div class="box-container">

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Meera Roy</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a></p>

                </div>

            </div>

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Jay Raj</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>
                </div>

            </div>

           

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Jay Raj</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>

                </div>

            </div>

        </div>
        <div class="box-container">

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Meera Roy</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a></p>

                </div>

            </div>

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Jay Raj</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>
                </div>

            </div>

          

            <div class="box">
                <div class="title">
                    <h2 class="text-center">Dr. Jay Raj</h2>
                    <p>This blog was originally published on the MTaPS website by Dr. Meera Roy, Senior
                        Gender Advisor for the USAID Medicines, Technologies, and Pharmaceutical Services (MTaPS)
                        ProgramMonitoring patients who are taking a new medicine, including vaccines, is critical for
                        patient safety. This type of monitoring, also known as pharmacovigilance (PV), helps detect,
                        assess, understand, and prevent adverse effects of a medicine-related problem. PV is critical
                        for determining the true safety and efficacy of a product, including identification of good and
                        bad effects.<a href="" class="link-btn">read more</a> </p>
                </div>

            </div>

        </div>
    </section>
    <!-- pricing section ends -->
</body>

</html>