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

    <!-- FORM START -->
    <form>
        <fieldset>
            <label for="entryTitle">Entry Title</label>
            <input type="text" name="entryTitle" required >
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

</main>
<!-- MAIN END -->


<!-- FOOTER START -->
<footer>
    <p>Designed by Rita Avota, 2016</p>
</footer>
<!-- FOOTER END -->

</body>
</html>