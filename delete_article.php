<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}
include "db.php";
$id = $_GET['id'];
$conn->query("DELETE FROM articles WHERE id=$id");
echo "<script>window.location.href='admin_dashboard.php';</script>";
?>
