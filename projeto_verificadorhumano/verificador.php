<?php
session_start();

if (isset($_POST['resultado']) && !empty($_POST['resultado']) && is_numeric($_POST['resultado'])) {
  if ($_POST['resultado'] == $_SESSION['r']) {
    echo "HUMANO!";
  } else {
    echo "FAKE!";
  }
} else {
  header("Location: index.php");
}
