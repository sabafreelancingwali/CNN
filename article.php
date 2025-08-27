<?php include 'db.php'; ?>
<?php $id = $_GET['id']; ?>
<!DOCTYPE html>
<html>
<head><title>Article</title>
<link rel="stylesheet" href="css/style.css"></head>
<body>
 
<?php
  $stmt = $conn->prepare("SELECT * FROM articles WHERE id = ?");
  $stmt->execute([$id]);
  $article = $stmt->fetch();
 
  echo "<h1>{$article['title']}</h1>";
  echo "<img src='{$article['image_url']}' width='400'>";
  echo "<p>{$article['content']}</p>";
?>
 
<a href="index.php">← Back to Home</a>
 
</body>
</html>
