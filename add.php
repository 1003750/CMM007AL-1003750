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
    <section id="blogform">
        <?php
        //includes connection to the database
            include ("db_connect.php");

            // logic for dealing with form
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ?>
            <!-- FORM START -->
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <label for="entryTitle">Entry Title</label>
                    <input type="text" name="entryTitle" required>
                    <br>
                    <label for="entrySummary">Entry Summary</label>
                    <textarea name="entrySummary" maxlength="500" required></textarea>
                    <br>
                    <label for="category">Category</label>
                    <select name="category" required>
                        <option value="">Select Category</option>
                        <option value="Work">Work</option>
                        <option value="University">University</option>
                        <option value="Family">Family</option>
                    </select>
                    <br>
                    <label for="submitter">Submitted By</label>
                    <input type="text" name="submitter">
                    <br>
                    <input type="submit" value="Submit" id="submit">
                </fieldset>
            </form>
            <!-- FORM END -->
            <?
            }

            // gathers and sends the information from the form to the database
            elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $entryTitle = $_POST['entryTitle'];
                $entrySummary = $_POST['entrySummary'];
                $category = $_POST['category'];
                $submitter = $_POST['submitter'];

                // submitting the information into the database
                $sql = "INSERT INTO blogview (entryTitle, entrySummary, category, submitter) VALUES ('$entryTitle', '$entrySummary', '$category', '$submitter')";

                if ($result = $db->query($sql)) {
                    printf("New blog added");
                }
                else printf("Couldn't add blog");

                // redirect to blog.php
                header('Location:blog.php');
            }

            // otherwise redirect to index.php
            else {
                header('Location:index.php');
            }

        ?>
    </section>
</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>
    <p>Designed by Rita Avota, 2016</p>
</footer>
<!-- FOOTER END -->

</body>
</html>