<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ChatBot </title>
   <!-- bootstrap cdn link  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">



    <style>

.chat_bot {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    position: relative;
    background: linear-gradient(#48cae4,#ecbcfd,#deec5b);
    text-align : center;
}

.box_chat {
    width: 480px;
    height: 400px;
    box-shadow: 5px 5px 20px #000;
    position: absolute;
    top: 50%;
    left: 50%;
    right: 50%;
    transform: translate(-50%, -50%);
    border-radius: 20px;
}


.mid {
    margin : 15px;
    margin-top : 60px;
    width: 80%;
    height: 110px;
    background: #b5e48c;
     border-top-right-radius: 20px;
     border-bottom-right-radius: 20px;
     border-bottom-left-radius: 40px;
     text align : center;
}

.mid .chat p {

    text align : center;
    padding-top: 40px;
    font-size: 28px;
    color: white;
}

.input_chat {
    height: 50%;
    width: 480px;
    overflow: hidden;
    margin-right : 10px;
    margin: 10px;
    color : white;

}



.input_chat input{
    width: 90%;
    height: 110px;
     border-top-left-radius: 20px;
     border-bottom-left-radius: 20px;
     border-bottom-right-radius: 40px;
    outline: none;
    border: none;
    overflow : hidden;
    text-align:center !important;
    font-size: 28px;
    background-color : #80ed99;
    color : white;
    
    
    

}





    </style>

</head>

<body>
    
<!-- header section starts -->

<header class="fixed-top py-3">

    <div class="container d-flex align-items-center">

      

            
            <a href="index.php" class="logo"><span class="fas fa-home"></span>Clinic</a> <br>


        

       

</header>

<!-- header section end-->

<body class="chat_bot">

  

    <div class="box_chat">
        
        <div class="mid">
            <div class="chat">
                <p id="chatLog">Answer</p>
            </div>
        </div>

        <br>
        <br>

        <div class="input_chat">
            <input type="text" id="userBox" onkeydown="if(event.keyCode ==13){ talk() }" placeholder="Ask Your Question ?">
        </div>
    </div>

    <script>
        function talk() {
            var know = {
                "Hi": "Hello,How are you ?",
                "hii": "Hello,How are you ?",
                "How Are You?": "Great !",
                "Hello": "Hi ,How are you ?",
                "hello": "Hi ,How are you ?",
                "i want to ask something": "How can i help you .please let us know",
                "I have headache from yesterday": "what kind of headache do you have",
                "migraine headache": "i suggest you consult a general physician first",
                "okay": "Do you want a book an appointment now?",
                "Yes": "Should i book an appointment for you?",
                "yes": "Okay,thanks",
                "what is the timing  of appointment": "Okay,so you can come between 9AM-10AM",
                "ok,thank you": "it's my pleasure",
                "Bye": "Have A Nice Day !",



            };
            var user = document.getElementById('userBox').value;
            document.getElementById('chatLog').innerHTML = user + "<br>";
            if (user in know) {
                document.getElementById('chatLog').innerHTML = know[user] + "<br>";
            } else {
                document.getElementById('chatLog').innerHTML = "I do not understand .";
            }
        }
    </script>
</body>
 

</html>