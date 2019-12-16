<?php
session_start();
  if (!isset($_SESSION["loggued_on_user"]) && ($_SESSION["loggued_on_user"] == ""))
    echo "<p>You are browsing as a not-logged-in visitor</p>";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>

<h2>Create or manage your account</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create an account</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="./create.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../resources/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="login"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="passwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="passwd" required>
      <input type="submit" name="submit" value="Create"/>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log in</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="./login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../resources/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="login"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="passwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="passwd" required>
      <input type="submit" name="submit" value="Log in"/>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>


<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Log out</button>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="./logout.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../resources/bye.png" alt="bye" class="bye">
    </div>

    <div class="container">
      <label for="logout"><b>Are you sure you want to log out?</b></label>
      <input type="submit" name="submit" value="Yes"/>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Delete my account</button>

<div id="id04" class="modal">
  
  <form class="modal-content animate" action="./logdel.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../resources/bye.png" alt="bye" class="bye">
    </div>

    <div class="container">
      <label for="logdel"><b>Are you sure you want to delete your account?</b></label>
      <input type="hidden" name="login" required>
      <input type="submit" name="submit" value="Yes"/>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Change password</button>

<div id="id05" class="modal">
  
  <form class="modal-content animate" action="./modif.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../resources/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="login"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="passwd"><b>Old Password</b></label>
      <input type="password" placeholder="Enter Old Password" name="oldpw" required>

      <label for="passwd"><b>New Password</b></label>
      <input type="password" placeholder="Enter New Password" name="newpw" required>

      <input type="submit" name="submit" value="Change password"/>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
