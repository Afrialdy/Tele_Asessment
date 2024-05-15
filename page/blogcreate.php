<?php
// Include the database connection file
require 'koneksi.php';

// Retrieve form data
$name = $_POST["name"];
$content = $_POST["content"];
$shortDescription = $_POST["short_description"];
$description = $_POST["description"];
$status = isset($_POST["status"]) ? 1 : 0; // Convert checkbox value to boolean

// Insert new blog post into the database
$query_sql = "INSERT INTO blog_posts (`name`, `content`, `short_description`, `description`, `status`, `created_at`, `created_id`)
              VALUES ('$name', '$content', '$shortDescription', '$description', $status, NOW(), 1)"; // Assuming Created ID is 1 for now
$result = mysqli_query($conn, $query_sql);
//var_dump($conn);exit;

// Check if the insertion was successful
if ($result) {
    // Redirect to a success page or wherever appropriate
    header("Location: Tele_Asessment/page/blog.html");
} else {
    // Display an error message and handle accordingly
    echo "<script>
            alert('Failed to create blog post. Please try again.');
            window.location.href = 'blogcreate.php'; // Redirect back to the form page
          </script>";
}
?>
