<?php
// Show errors for debugging
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Database connection
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>📰 CNN Clone - Home</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
 
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }
 
    header {
      background-color: #cc0000;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
    }
 
    nav {
      background: #fff;
      padding: 10px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
 
    nav a {
      color: #cc0000;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }
 
    .container {
      padding: 30px;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 20px;
    }
 
    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: 0.3s ease;
      padding: 20px;
      cursor: pointer;
    }
 
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
 
    .card h3 {
      font-size: 20px;
      color: #cc0000;
      margin-bottom: 10px;
    }
 
    .card p {
      font-size: 15px;
      color: #444;
      line-height: 1.6;
    }
 
    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #777;
      background-color: #eee;
      margin-top: 40px;
    }
  </style>
  <script>
    function openArticle(id) {
      window.location.href = 'article.php?id=' + id;
    }
  </script>
</head>
<body>
 
  <header>📰 CNN Clone – Home</header>
 
  <nav>
    <a href="home.php">Home</a>
    <a href="add_article.php">Add Article</a>
    <a href="logout.php">Logout</a>
  </nav>
 
  <div class="container">
    <?php
    $res = $conn->query("SELECT * FROM articles ORDER BY id DESC");
 
    if ($res && $res->num_rows > 0) {
      while ($row = $res->fetch_assoc()) {
        echo "
          <div class='card' onclick='openArticle({$row['id']})'>
            <h3>{$row['title']}</h3>
            <p>{$row['summary']}</p>
          </div>
        ";
      }
    } else {
      echo "<p style='text-align:center; font-size:16px;'>No articles found.</p>";
    }
    ?>
  </div>
 
  <footer>
    &copy; <?php echo date("Y"); ?> CNN Clone | Created by Saba 🧕🏻💻
  </footer>
 
</body>
</html>
