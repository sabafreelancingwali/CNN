<?php include 'db.php'; ?>
<?php $cat_id = $_GET['id']; ?>
<!DOCTYPE html>
<html>
<head><title>Category</title>
<link rel="stylesheet" href="css/style.css"></head>
<body>
 
<h2>News in Category</h2>
 
<?php
  $stmt = $conn->prepare("SELECT * FROM articles WHERE category_id = ?");
  $stmt->execute([$cat_id]);
  while($article = $stmt->fetch()) {
    echo "<div>
            <h3><a href='article.php?id={$article['id']}'>{$article['title']}</a></h3>
          </div>";
  }
?>
 
</body>
