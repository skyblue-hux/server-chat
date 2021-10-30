<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Chat</title>
  <link href="index.css" rel="stylesheet" type="text/css"/>
  <link href="chat.ico" rel="icon" type="image/x-icon"/>
  <?php echo '<style>.' . $_GET['user_name'] . ' {border: 2px solid blue; width: 50%; margin-left: 45%;}</style>'; ?>
</head>
<body>

<?php
  $user_name = $_GET['user_name'];
  echo '<script>localStorage.setItem("User", "' . $user_name . '")</script>';
  if ($_GET['message']) {
  file_put_contents('chats.txt', '<p class="' . $user_name . ' msg"><span style="font-weight:bold">' . $user_name . ': </span>' . htmlentities($_GET['message']) . '</p>' . PHP_EOL, FILE_APPEND | LOCK_EX);
  echo '<script>window.location.href = "https://serverchat-123.herokuapp.com/chat.php?user_name=' . $user_name . '&message=&submit=Submit+Query";</script>';}
?>

<div id="messages"></div>

<div id="form_div">
<form method="GET" action="chat.php" id="form">
  <input type="hidden" id="user_name" name="user_name" value="<?php echo $_GET['user_name'] ?>"/>
  <input type="text" name="message" id="message" autocomplete="off" autofocus/>
  <button form="form" name="submit" id="submit">&#10145;</button>
</form>
</div>


</body>
<script src="xhr-chats.js"></script>
</html>
