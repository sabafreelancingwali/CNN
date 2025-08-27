<?php
// Show all errors on screen for debugging
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Connect to the database
include "db.php";
 
// Check if form is submitted
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $category = $_POST['category'];
 
    // SQL to insert article
    $sql = "INSERT INTO articles (title, summary, content, category)
            VALUES ('$title', '$summary', '$content', '$category')";
 
    // Run the query
    if ($conn->query($sql)) {
        echo "<script>alert('✅ Article added successfully!'); window.location.href='home.php';</script>";
        exit();
    } else {
        echo "<script>alert('❌ Failed to add article: " . $conn->error . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Article</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f1f1f1;
      padding: 30px;
    }
 
    form {
      background: white;
      max-width: 600px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
 
    h2 {
      text-align: center;
      color: #cc0000;
      margin-bottom: 20px;
    }
 
    input[type="text"], textarea, select {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }
 
    button {
      background-color: #cc0000;
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #990000;
    }
 
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 6px;
    }
  </style>
</head>
<body>
 
  <form method="post">
    <h2>📝 Add New Article</h2>
 
    <label>Article Title</label>
    <input type="text" name="title" placeholder="Enter title" required>
 
    <label>Short Summary</label>
    <textarea name="summary" rows="3" placeholder="Write a short summary" required></textarea>
 
    <label>Full Content</label>
    <textarea name="content" rows="6" placeholder="Write full article content" required></textarea>
 
    <label>Category</label>
    <select name="category" required>
      <option value="">Select Category</option>
      <option>World</option>
      <option>Technology</option>
      <option>Entertainment</option>
      <option>Sports</option>
    </select>
 
    <button type="submit" name="submit">➕ Add Article</button>
  </form>
 
</body>
</html
