<?php
  // Generate the navigation menu
	echo "<hr />";
	echo '<a href="index.php">Home</a> ';
  if (isset($_SESSION['username'])) {
    echo '&#10084; <a href="viewprofile.php">View Profile</a> ';
    echo '&#10084; <a href="editprofile.php">Edit Profile</a> ';
    echo '&#10084; <a href="logout.php">Log Out (' . $_SESSION['username'] . ')</a>';
  } else {
    echo '&#10084; <a href="login.php">Log In</a> ';
    echo '&#10084; <a href="signup.php">Sign Up</a>';
  }
	echo "<hr />";
?>