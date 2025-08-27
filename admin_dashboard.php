<?php session_start(); if (!isset($_SESSION['admin'])) { header("Location: admin_login.php"); exit(); } ?>
<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
    body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
    a.btn { background: green; color: white; padding: 10px; text-decoration: none; margin-right: 10px; }
    table { width: 100%; background: white; margin-top: 20px; border-collapse: collapse; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
    .delete-btn { color: red; cursor: pointer; }
  </style>
  <script>
    function goToPage(page, id = '') {
      window.location.href = page + (id ? '?id=' + id : '');
    }
  </script>
</head>
<body>
  <h2>📋 Admin Dashboard</h2>
  <a class="btn" href="add_article.php">+ Add New Article</a>
  <a class="btn" href="logout.php" style="background:red;">Logout</a>
 
  <table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
    <?php
    $res = $conn->query("SELECT * FROM articles ORDER BY id DESC");
    while ($row = $res->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['title']}</td>
        <td>{$row['category']}</td>
        <td><span class='delete-btn' onclick=\"goToPage('delete_article.php', '{$row['id']}')\">🗑️ Delete</span></td>
      </tr>";
    }
    ?>
  </table>
</body>
</html
