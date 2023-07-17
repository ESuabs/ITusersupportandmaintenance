<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .popup-container {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        .popup-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .popup-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        
        .popup-button {
            padding: 10px 20px;
            background-color: #4caf50;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .popup-button:hover {
            background-color: #45a049;
        }
    </style>
    
    <div id="popup" style="display: none;" class="popup-container">
        <h2 class="popup-title">Popup Title</h2>
        <input type="text" id="inputText" placeholder="Enter text" class="popup-input">
        <button onclick="submitText()" class="popup-button">Submit</button>
    </div>
    
    <script>
        // JavaScript code remains the same as before
        // ...
    </script>
    
</head>
<body>
    <div id="popup" style="display: none;">
        <input type="text" id="inputText" placeholder="Enter text">
        <button onclick="submitText()">Submit</button>
    </div>
    
    <script>
        // JavaScript code to show/hide the popup
        function showPopup() {
            document.getElementById('popup').style.display = 'block';
        }
        
        function hidePopup() {
            document.getElementById('popup').style.display = 'none';
        }
        
        // JavaScript code to handle form submission
        function submitText() {
            var text = document.getElementById('inputText').value;
            
            // You can perform further actions with the entered text, like AJAX requests, etc.
            console.log('Submitted text:', text);
            
            hidePopup(); // Hide the popup after submission
        }
    </script>
    
</body>
</html>