<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Chat Homepage</title>
  <link href="chat.ico" rel="icon" type="image/x-icon"/>
  <style>
    h1, h2, form {text-align: center;}
  </style>
</head>
<body>
<h1>Chat</h1>
<h2>What's Your Name?</h2>
<form method="GET" action="chat.php">
  <input type="text" name="user_name" required/>
</form>

<div id="user_list">
  <h2>Users Online Right Now</h2>
  <div id="list"></div>
</div>
<script src="xhr-index.js"></script>
<body>
</html>
