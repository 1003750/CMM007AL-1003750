<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog web page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!-- HEADER START -->
<header>
    <h1>myBlog</h1>
    <h2>because the internet needs to know what I think</h2>

    <!-- NAVIGATION BAR START -->
    <nav id="nav">
        <ul>
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?category=Work">Work Blog Items</a></li>
            <li><a href="blog.php?category=University">University Blog Items</a></li>
            <li><a href="blog.php?category=Family">Family Blog Items</a></li>
            <li><a href="add.php">Insert Blog Items</a></li>
        </ul>
    </nav>
    <!-- NAVIGATION BAR END -->

</header>
<!-- HEADER END -->



<!-- MAIN START -->
<main>
    <!-- MAIN PARAGRAPH START -->
    <div id = "showblog">

        <?php
        include ("db_connect.php");

        if(isset($_GET['category'])) {
            $category = $_GET['category'];
            $sql_query = "SELECT *FROM blogview WHERE category = '$category'";
        }
        else {
            $sql_query = "SELECT * FROM blogview";
        }

        $result = $db->query($sql_query);
        while($row = $result->fetch_array()) {
            $entryTitle = $row['entryTitle'];
            $entrySummary = $row['entrySummary'];
            $category = $row['category'];
            $submitter = $row['submitter'];
            echo "<h3>{$entryTitle} by {$submitter}</h3>";
            echo "<h4>{$category}</h4>";
            echo "<p>{$entrySummary}</p>";
            echo "<hr>";
        }

        ?>
    </div>
    <!-- MAIN PARAGRAPH END -->
</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>
    <p>Designed by Rita Avota, 2016</p>
</footer>
<!-- FOOTER END -->

</body>
</html>