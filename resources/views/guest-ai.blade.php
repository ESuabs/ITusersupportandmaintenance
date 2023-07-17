<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/styles.css" type="text/css">

  <title>AAU-Maintenance-Bot</title>

</head>

<body>
  <div class="loading">
    <div class="spinner-border" role="status"></div>
    <div class="loading-text">Loading...</div>
    <div class="loading-text">We can repair many of your computer problems remotely, from the comfort of your home.
    </div>
  </div>

  <div class="auth login" style="display: none;">
    <form>
      <h2 class="text-center">Login</h2>
      <div class="form-group">
        <input id="login_email" type="email" class="form-control" placeholder="Email" required="required">
      </div>
      <div class="form-group">
        <input id="login_password" type="password" class="form-control" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-block">Login</button>
      </div>
      <!-- <div class="clearfix">
        <p class="text-center signup_link">Sign Up</p>
      </div> -->
    </form>
  </div>

  <div class="auth signup" style="display: none;">
    <form>
      <!-- <h2 class="text-center">Sign Up</h2> -->
      <div class="form-group">
        <input id="signup_email" type="email" class="form-control" placeholder="Email" required="required">
      </div>
      <div class="form-group">
        <input id="signup_password" type="password" class="form-control" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <!-- <button type="submit" class="btn btn-block">Sign Up</button> -->
      </div>
      <!-- <div class="clearfix">
        <p class="text-center login_link">Login</p>
      </div> -->
    </form>
  </div>

  <div class="logged" style="display: none;">
    <li class="dropdown" style="list-style: none;">
      <a href="#" class="dropdown-toggle userOptions" data-toggle="dropdown"><span></span> <b class="caret"></b></a>
      <!-- <ul class="dropdown-menu">
        <li class="logout_button">Logout</li>
      </ul> -->
    </li>

    <div class="chat_window">
      <div class="top_menu">
        <div class="title">AAU Maintenance Bot</div>
        {{-- <button class="btn edit_answer">
          <i class="material-icons">edit</i>
        </button> --}}
      </div>

      <ul class="messages"></ul>

      <div class="bottom_wrapper clearfix message_area">
        <div class="message_input_wrapper">
          <input class="message_input" placeholder="Type a message" />
        </div>
        <div class="send_message">
          <div class="icon"></div>
          <div class="text">Send</div>
        </div>
      </div>

      <div class="bottom_wrapper clearfix training_area" style="display: none;">
        <div class="message_input_wrapper">
          <input class="train_input" placeholder="Type a good answer" />
        </div>
        {{-- <div class="send_train">
          <div class="icon"></div>
          <div class="text">Train</div>
        </div> --}}
        {{-- <div class="cancel">
          <div class="icon"></div>
          <div class="text">Cancel</div>
        </div> --}}
      </div>
    </div>
    <div class="hello_template">
      <li class="hello">
        {{-- <div class="edit_icon">
          <i class="material-icons">edit</i>
        </div> --}}
        <div class="hello_message">
          Welcome to AAU's Maintenance AI chat!
        </div>
      </li>
    </div>
    <div class="message_template">
      <li class="message">
        <!-- <div class="avatar"></div> -->
        <div class="text_wrapper">
          <div class="text"></div>
        </div>
      </li>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
  <script src="https://unpkg.com/brain.js@2.0.0-beta.2/dist/brain-browser.min.js"></script>
  <script type="text/javascript" src="js/config.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>
<script>
    $(document).ready(function () {
  // Initialize Firebase
  var firebaseConfig = {
    apiKey: "AIzaSyC2BqWafwfRkjo7SssA0LFQluGyfFLZ6Ek",
    authDomain: "ai-bot-bbc9e.firebaseapp.com",
    databaseURL: 'https://ai-bot-bbc9e-default-rtdb.firebaseio.com/',
    projectId: "ai-bot-bbc9e",
    storageBucket: "ai-bot-bbc9e.appspot.com",
    messagingSenderId: "660147107908",
    appId: "1:660147107908:web:7a08a5cf6600f6438b6411",
    measurementId: "G-9MXF250ND8"
  };
  firebase.initializeApp(firebaseConfig);


  // Configure brain
  var brainConfig = {
    iterations: 1000, // the maximum times to iterate the training data --> number greater than 0
    errorThresh: 0.005, // the acceptable error percentage from training data --> number between 0 and 1
    log: true, // true to use console.log, when a function is supplied it is used --> Either true or a function
    logPeriod: 1, // iterations between logging out --> number greater than 0
    learningRate: 0.6, // scales with delta to effect training rate --> number between 0 and 1
    momentum: 0.1, // scales with next layer's change value --> number between 0 and 1
    callback: null, // a periodic call back that can be triggered while training --> null or function
    callbackPeriod: 10, // the number of iterations through the training data between callback calls --> number greater than 0
    timeout: Infinity
  }


  // Authentication
  $('.login').submit(function (e) {
    e.preventDefault();
    $('.loading').show();
    var email = $('#login_email').val();
    var password = $('#login_password').val();

    firebase.auth().signInWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // Signed in
        var user = userCredential.user;
        // ...
      })
      .catch((error) => {
        // An error happened.
        $('.loading').hide();
        var errorMessage = error.message;
        alert('Error: ' + errorMessage);
      });
  });

  $('.signup').submit(function (e) {
    e.preventDefault();
    $('.loading').show();
    var email = $('#signup_email').val();
    var password = $('#signup_password').val();

    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // Signed in 
        var user = userCredential.user;
        // ...
      })
      .catch((error) => {
        // An error happened.
        $('.loading').hide();
        var errorMessage = error.message;
        alert('Error: ' + errorMessage);
      });
  });

  $('.signup_link').click(function () {
    $('.login').hide();
    $('.signup').show();
  });

  $('.login_link').click(function () {
    $('.login').show();
    $('.signup').hide();
  });

  $('.logout_button').click(function () {
    firebase.auth().signOut().then(() => {
      // Sign-out successful.
      location.reload();
    }).catch((error) => {
      // An error happened.
      var errorMessage = error.message;
      alert('Error: ' + errorMessage);
    });
  });

  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/firebase.User

      var uid = user.uid;
      var uemail = user.email;
      // console.log(uid);

      $('.userOptions span').text(uemail);

      $('.loading').show();
      $('.login').hide();
      $('.logged').show();

      helloWorld();

      function helloWorld() {
        var hello = $($('.hello_template').clone().html());

        $('.messages').append(hello);

        hello.addClass('appeared');

        $('.messages').animate({
          scrollTop: $('.messages').prop('scrollHeight')
        }, 300);
      }

      var botTalk = [];

      firebase.database().ref('users/' + uid + '/botTalk').on('value', function (snapshot) {
        botTalk = [];
        snapshot.forEach(function (childSnapshot) {
          var childData = childSnapshot.val();
          botTalk.push(childData);
        });

        if (botTalk.length == 0) {
          var botTalkRef = firebase.database().ref('users/' + uid + '/botTalk');
          botTalkRef.push().set('hello world');
        }
      });

      //***********Machine learning**************
      var net = new brain.NeuralNetwork(brainConfig);
      var trainData = [];
      var maxLength = 0;
      var remainingLength = 0;

      firebase.database().ref('users/' + uid + '/trainData').on('value', function (snapshot) {
        trainData = [];
        snapshot.forEach(function (childSnapshot) {
          var childData = childSnapshot.val();
          trainData.push(childData);
        });

        if (trainData.length == 0) {
          trainData.push({
            input: [1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0],
            output: {
              [1]: 1
            }
          });
        }

        //Commands to fill up the arrays with zeros. All arrays must be of same length
        for (j = 0; j < trainData.length; j++) {
          if (trainData[j].input.length > maxLength) {
            maxLength = trainData[j].input.length;
          }
        }
        for (q = 0; q < trainData.length; q++) {
          if (trainData[q].input.length < maxLength) {
            remainingLength = maxLength - trainData[q].input.length;
            zeroArray = Array(remainingLength).fill(0);
            trainData[q].input = trainData[q].input.concat(zeroArray);
          }
        }

        firebase.database().ref('users/' + uid + '/jsonData').on('value', function (snapshot) {
          var json = JSON.parse(snapshot.val());
          if (json) {
            net.fromJSON(json);
          } else {
            //Training
            net.train(trainData); //Using all the training data to train the AI

            var toJson = net.toJSON();
            var jsonDataRef = firebase.database().ref('users/' + uid + '/jsonData');
            jsonDataRef.set(JSON.stringify(toJson));
          }
        });

        $('.loading').hide();
      });

      var message_side = 'left';
      var hasResponse = false;

      function sendMessage(text) {
        // reset input value
        $('.message_input').val('');

        message_side = message_side === 'left' ? 'right' : 'left';

        var message = $($('.message_template').clone().html());

        message.addClass(message_side).find('.text').html(text);

        $('.messages').append(message);

        message.addClass('appeared');

        $('.messages').animate({
          scrollTop: $('.messages').prop('scrollHeight')
        }, 300);
      };

      var binary_message;

      function verifyMessage() {
        var input = $('.message_input').val();
        if (input != '') {
          binary_message = textToBinary(input);

          sendMessage(input);

          var result = brain.likely(binary_message, net);

          for (k = 1; k <= botTalk.length; k++) {
            if (result == k) {
              delayVar = k;
              setTimeout(function () {
                sendMessage(botTalk[delayVar - 1]);
                hasResponse = true;
                $('.edit_answer').show();
              }, 800);
            }
          }
        }
      };

      $('.send_message').click(function () {
        verifyMessage();
      });

      $('.message_input').keyup(function (e) {
        if (e.which === 13) {
          verifyMessage();
        }
      });


      $('.edit_answer').click(function () {
        if (hasResponse) {
          $('.messages').children().last().children().last().children().last().css('color', '#F44D3C');

          $('.training_area').show();
          $('.message_area').hide();
        } else {
          alert('First, send a message to the bot.');
        }
      })

      $('.cancel').click(function () {
        $('.messages').children().last().children().last().children().last().css('color', '#121212');
        $('.training_area').hide();
        $('.message_area').show();
      })

      function successfulTrained(input) {
        $('.messages').children().last().children().last().children().last().css('color', '#121212');
        $('.messages').children().last().children().last().children().last().text(input);
      }

      function verifyTrain() {
        var input = $('.train_input').val();
        if (input != '') {
          $('.training_area').hide();
          $('.message_area').show();

          var trainDataRef = firebase.database().ref('users/' + uid + '/trainData');
          trainDataRef.push().set({
            input: binary_message,
            output: {
              [botTalk.length + 1]: 1
            }
          });

          var botTalkRef = firebase.database().ref('users/' + uid + '/botTalk');
          botTalkRef.push().set($('.train_input').val());

          net = new brain.NeuralNetwork(brainConfig);

          //Training the AI
          net.train(trainData);

          var toJson = net.toJSON();
          var jsonDataRef = firebase.database().ref('users/' + uid + '/jsonData');
          jsonDataRef.set(JSON.stringify(toJson));

          successfulTrained(input);

          $('.message_input').val('');
          $('.train_input').val('');
        }
      };

      $('.send_train').click(function () {
        $('.loading').show();
        window.setTimeout(verifyTrain, 100);
      });

      $('.train_input').keyup(function (e) {
        if (e.which === 13) {
          $('.loading').show();
          window.setTimeout(verifyTrain, 100);
        }
      });

      function textToBinary(text) {
        //Storing all letters as binary numbers for AI
        text = text.toUpperCase();
        var data = [];

        for (i = 0; i < text.length; i++) {

          if (text[i] == 'A') {
            data = data.concat([1, 0, 0, 0, 0, 0, 0]);
          } else if (text[i] == 'B') {
            data = data.concat([1, 0, 0, 0, 0, 0, 1]);
          } else if (text[i] == 'C') {
            data = data.concat([1, 0, 0, 0, 0, 1, 0]);
          } else if (text[i] == 'D') {
            data = data.concat([1, 0, 0, 0, 0, 1, 1]);
          } else if (text[i] == 'E') {
            data = data.concat([1, 0, 0, 0, 1, 0, 0]);
          } else if (text[i] == 'F') {
            data = data.concat([1, 0, 0, 0, 1, 0, 1]);
          } else if (text[i] == 'G') {
            data = data.concat([1, 0, 0, 0, 1, 1, 0]);
          } else if (text[i] == 'H') {
            data = data.concat([1, 0, 0, 0, 1, 1, 1]);
          } else if (text[i] == 'I') {
            data = data.concat([1, 0, 0, 1, 0, 0, 0]);
          } else if (text[i] == 'J') {
            data = data.concat([1, 0, 0, 1, 0, 0, 1]);
          } else if (text[i] == 'K') {
            data = data.concat([1, 0, 0, 1, 0, 1, 0]);
          } else if (text[i] == 'L') {
            data = data.concat([1, 0, 0, 1, 0, 1, 1]);
          } else if (text[i] == 'M') {
            data = data.concat([1, 0, 0, 1, 1, 0, 0]);
          } else if (text[i] == 'N') {
            data = data.concat([1, 0, 0, 1, 1, 0, 1]);
          } else if (text[i] == 'O') {
            data = data.concat([1, 0, 0, 1, 1, 1, 0]);
          } else if (text[i] == 'P') {
            data = data.concat([1, 0, 0, 1, 1, 1, 1]);
          } else if (text[i] == 'Q') {
            data = data.concat([1, 0, 1, 0, 0, 0, 0]);
          } else if (text[i] == 'R') {
            data = data.concat([1, 0, 1, 0, 0, 0, 1]);
          } else if (text[i] == 'S') {
            data = data.concat([1, 0, 1, 0, 0, 1, 0]);
          } else if (text[i] == 'T') {
            data = data.concat([1, 0, 1, 0, 0, 1, 1]);
          } else if (text[i] == 'U') {
            data = data.concat([1, 0, 1, 0, 1, 0, 0]);
          } else if (text[i] == 'V') {
            data = data.concat([1, 0, 1, 0, 1, 0, 1]);
          } else if (text[i] == 'W') {
            data = data.concat([1, 0, 1, 0, 1, 1, 0]);
          } else if (text[i] == 'X') {
            data = data.concat([1, 0, 1, 0, 1, 1, 1]);
          } else if (text[i] == 'Y') {
            data = data.concat([1, 0, 1, 1, 0, 0, 0]);
          } else if (text[i] == 'Z') {
            data = data.concat([1, 0, 1, 1, 0, 0, 1]);
          } else if (text[i] == '?') {
            data = data.concat([1, 1, 1, 1, 1, 1, 1]);
          }
        }
        //Used the code below to be able to read long arrays
        //console.log(data.toString());

        //Fill user input array with zeros to get correct length
        if (data.length < maxLength) {
          remainingLength = maxLength - data.length;
          zeroArray = Array(remainingLength).fill(0);
          data = data.concat(zeroArray);
        }
        return data;
      }
    } else {
      // User is signed out
      $('.login').show();
      $('.logged').hide();
      $('.loading').hide();
    }
  });
});

</script>
<style>
    :root {
  --primary: #03A9F4;
  --secondary: #21D07A;
  --background: #121212;
  --gray: #BCBDC0;
  --textLeft: #121212;
  --textLeftBackground: #DCDCDC;
  --textRight: #FFF;
  --textRightBackground: #03A9F4;
  --danger: #F44D3C;
  --dark: #032541;
}

* {
  box-sizing: border-box;
}

body {
  /* background-color: var(--background); */
  background-image: url("{{asset('images/Background.jpg')}}");
  /* font-family: "Calibri", "Roboto", sans-serif; */
}

.loading {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  opacity: 0.7;
  background-color: var(--background);
  z-index: 99;
  text-align: center;
  color: #fff;
  flex-direction: column;
}

.loading-text {
  margin-top: 10px;
}

.auth {
  display: flex;
  flex-direction: column;
  position: absolute;
  width: calc(100% - 20px);
  max-width: 350px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
}

.auth form {
  margin-bottom: 15px;
  background: #f7f7f7;
  padding: 30px;
}

.auth h2 {
  margin: 0 0 15px;
}

.auth .form-control, .btn {
  min-height: 38px;
  border-radius: 2px;
}

.auth .btn {        
  font-size: 15px;
  font-weight: bold;
  color: white;
  background-color: var(--primary);
}
.auth .btn:hover {        
  opacity: 0.8;
}

.signup_link,
.login_link {
  color: var(--primary);
  cursor: pointer;
}
.signup_link:hover,
.login_link:hover {
  opacity: 0.8;
}

.userOptions {
  position: absolute;
  right: 0;
  margin: 8px 16px;
  color: var(--textRight);
}
.userOptions:hover {
  color: var(--textRight);
  opacity: 0.8;
}

.logout_button {
  font-size: 15px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  cursor: pointer;
}
.logout_button:hover {
  color: var(--danger);
}

.chat_window {
  display: flex;
  flex-direction: column;
  position: absolute;
  width: calc(100% - 20px);
  max-width: 800px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
}

.top_menu {
  display: flex;
  background-color: #fff;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}

.top_menu .title {
  text-align: center;
  color: var(--gray);
  font-size: 20px;
  flex: 1;
}

.top_menu .edit_answer {
  position: absolute;
  right: 0;
  top: 16px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background-color: var(--primary);
  margin-right: 20px;

  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.top_menu .edit_answer i {
  font-size: 1rem;
  color: #fff;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 354px;
  overflow-y: scroll;
}

.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}

.messages .message.left .avatar {
  background-color: #f5886e;
  float: left;
}

.messages .message.left .text_wrapper {
  background-color: var(--textLeftBackground);
  margin-left: 20px;
}

.messages .message.left .text_wrapper::after,
.messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: var(--textLeftBackground);
}

.messages .message.left .text {
  color: var(--textLeft);
}

.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}

.messages .message.right .text_wrapper {
  background-color: var(--textRightBackground);
  margin-right: 20px;
  float: right;
}

.messages .message.right .text_wrapper::after,
.messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: var(--textRightBackground);
}

.messages .message.right .text {
  color: var(--textRight);
}

.messages .message.appeared {
  opacity: 1;
}

.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}

.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px 30px;
  border-radius: 8px;
  max-width: 80%;
  /* width: calc(100% - 85px); */
  /* min-width: 100px; */
  position: relative;
}

.messages .message .text_wrapper::after,
.messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}

.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}

.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.bottom_wrapper {
  position: relative;
  display: flex;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  bottom: 0;
}

.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}

.bottom_wrapper .message_input_wrapper .message_input,
.bottom_wrapper .message_input_wrapper .train_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}

.bottom_wrapper .send_message,
.bottom_wrapper .send_train,
.bottom_wrapper .cancel {
  margin-left: 1rem;
  min-width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
}

.bottom_wrapper .send_message {
  background-color: var(--primary);
  border: 2px solid var(--primary);
}

.bottom_wrapper .send_message:hover {
  color: var(--primary);
  background-color: #fff;
}

.bottom_wrapper .send_train {
  background-color: var(--secondary);
  border: 2px solid var(--secondary);
}

.bottom_wrapper .send_train:hover {
  color: var(--secondary);
  background-color: #fff;
}

.bottom_wrapper .cancel {
  background-color: var(--gray);
  border: 2px solid var(--gray);
}

.bottom_wrapper .cancel:hover {
  color: var(--gray);
  background-color: #fff;
}

.bottom_wrapper .send_message .text,
.bottom_wrapper .send_train .text,
.bottom_wrapper .cancel .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.hello_template,
.message_template {
  display: none;
}

.hello {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.hello .edit_icon {
  margin-top: 5rem;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: var(--primary);

  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.hello .edit_icon i {
  font-size: 1.2rem;
  color: #fff;
}

.hello .hello_message {
  max-width: 24rem;
  padding: 2rem;
  color: var(--gray);
  text-align: center;
}

@media (max-width: 576px) {
  .chat_window {
    width: 100%;
    max-width: 100%;
    border-radius: 0;
  }

  .bottom_wrapper {
    flex-direction: column;
  }

  .bottom_wrapper .message_input_wrapper {
    width: 100%;
  }

  .bottom_wrapper .send_message,
  .bottom_wrapper .send_train,
  .bottom_wrapper .cancel {
    margin-left: 0;
    margin-top: .5rem;
  }
}

</style>