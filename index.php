<!DOCTYPE html>
<html>
<head>
    <title>Php Search</title>
</head>
<body>
    <form action="https://www.google.co.il/search" method="get">
        <input type="text" name="q" placeholder="Search term">
        <input type="submit" value="Search">
    </form>

    <?php
    if (isset($_GET['q'])) {
        $searchTerm = urlencode($_GET['q']);
        $searchURL = "https://www.google.co.il/search?q=" . $searchTerm;
        echo "<iframe src=\"$searchURL\"></iframe>";
    }
    ?>

</body>
</html>
