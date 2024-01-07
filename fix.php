<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./dash.css">
    <title>Dashbaord</title>
    <style>
        body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form containered */
.form-containered {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-containered textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-containered textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-containered .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-containered .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-containered .btn:hover, .open-button:hover {
  opacity: 1;
}
.containered {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.containered::after {
  content: "";
  clear: both;
  display: table;
}

.containered img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.containered img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
    </style>
</head>
<body>
    <div class="dash-container">
        <div class="row">
            <div class="grid-1">
                <div class="bank-logo">
                  <h4>SCANTRUST BANK</h4>
                </div>
                <ul class="agent">
                    <a href="">agent@gmail.com</a>
                    <p>Banking Agent</p>
                </ul>

                <ul class="accounts">
                    <h4>MY ACCOUNT</h4>
                    <li>
                     <a href="#" class="dash-active"><span class="material-symbols-outlined">house </span> HOME DASHBOARD</a>
                    </li>
                    <li>
                        <a href="#"> <span class="material-symbols-outlined"> manage_accounts </span> ACCOUNT DETAILS</a>
                    </li>
                    <li>
                        <a href="#"><span class="material-symbols-outlined">sort </span> ACCOUNT STATEMENT</a>
                    </li>
                </ul>

                <ul class="transfer">
                    <h4>FUND TRANSFER</h4>
                    <li>
                        <a href="#"> <span class="material-symbols-outlined">paid</span> BANK TRANSFER</a>
                    </li>
                    <li>
                        <a href="#"><span class="material-symbols-outlined">history</span> TRANSFER HISTORY</a>
                    </li>
                </ul>

                <ul class="messages">
                    <h4>MESSAGES</h4>
                    <li>
                        <a href="chat.php"><span class="material-symbols-outlined">mail</span> NEW MESSAGE (0)</a>
                    </li>
                    <!-- <li>
                        <a href="#"><span class="material-symbols-outlined">send</span> SENT MESSAGES</a>
                    </li> -->
                </ul>
                <ul class="security">
                    <h4>ACCOUNT SECURITY</h4>
                    <li>
                        <a href="#"><span class="material-symbols-outlined">lock</span> ACCOUNT PASSWORD</a>
                    </li>
                    <li>
                        <a href="#"><span class="material-symbols-outlined">pin</span> TRANSACTION PIN</a>
                    </li>
                </ul>
                <ul class="logout">
                    <h4>LOGOUT</h4>
                    <li>
                        <a href="#"><span class="material-symbols-outlined">logout</span>  LOGOUT</a>
                    </li>
                </ul>
            </div>
            <div class="grid-2">
                <div class="header-cont">
                    <div class="menu">
                        <img src="./dash-img/menu.svg" alt="" class="open">
                    </div>
                    <form action="">
                        <label for="search"><span class="material-symbols-outlined manage">manage_search</span> </label>
                        <input type="text" name="" id="search" placeholder="Type Credit or Debit to Seach">
                        <button>Search <span class="material-symbols-outlined">search</span></button>
                    </form>
                    <div class="users">
                        <div class="notification">
                            <span>(0)</span> <span class="material-symbols-outlined">notifications</span>
                        </div>
                        <div class="profile">
                            <img src="./profile.png" alt=""> <span>Name John</span>
                        </div>
                    </div>
                </div>

                <div class="account-info">
                   <div class="welcome-container">
                        <div class="welcome">
                            <h4>Welcome, Name Johnn</h4>
                            Thursday 2nd of May 2023
                        </div>
                        <div class="currency">
                             <!-- <script src="https://www.macroaxis.com/widgets/url.jsp?t=49"></script>  -->
                            <div class="blank"></div>
                        </div> 
                   </div>
                    <div class="divider">
                        <div class="indicator"></div>
                    </div>
                    
                    <h2>Chat Messages</h2>

<div class="containered">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="containered darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="containered">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="containered darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>


<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-containered">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


                </div>
            </div>
        </div>
    </div>

    <script>

        const row = document.querySelector('.row');
        const open = document.querySelector('.open');
        open.addEventListener('click', (e) =>{
           const imgAt = e.target.getAttribute('src');
           if(imgAt === './dash-img/menu.svg') {
                e.target.setAttribute('src','./dash-img/closed.svg')
           }else{
            e.target.setAttribute('src','./dash-img/menu.svg')
           }
           row.classList.toggle('activate-open');
           
        });

        const checkMedia = function(x){
            if(x.matches){
                row.classList.remove('activate-open')
                open.setAttribute('src','./dash-img/menu.svg')
                console.log("matchs", row)
            }
        }
        let x = window.matchMedia("(min-width: 1100px)")
        checkMedia(x)
        x.addListener(checkMedia)
        function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

    </script>
</body>
</html>