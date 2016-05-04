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

    <!-- If viewing blog posts by specific category, then this statement is added in header -->
    <?php
    include ("db_connect.php");

    if(isset($_GET['category'])) {
        $category = $_GET['category'];
        echo "<h3>Currently viewing all blog posts in category: {$category}</h3>";
    }
    ?>
</header>
<!-- HEADER END -->



<!-- MAIN START -->
<main>
    <!-- MAIN PARAGRAPH START -->
    <div id = "showblog">

        <!-- Code that deals with fetching information from database -->
        <?php
        include ("db_connect.php");

        // if specific category is requested, then only that information is filtered and displayed
        if(isset($_GET['category'])) {
            $category = $_GET['category'];
            $sql_query = "SELECT *FROM blogview WHERE category = '$category'";
        }
        // if no specific category is requested, all items are fetched
        else {
            $sql_query = "SELECT * FROM blogview";
        }

        // all of the fetched information is printed though the use of a while loop
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