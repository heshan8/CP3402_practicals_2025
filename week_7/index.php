<?php include 'header.php'; ?>

<?php
// Echo - echoing different kinds of HTML
// using Echo to print HTML
echo "<h1>Movies</h1>";
echo "<p>Here's a list of some of my favorite tv shows:</p>";


//Repetition - for, while, foreach (use an array)
//foreach loop using an array
echo "<ul>";

$favoriteShows = ["True Detective", "Fargo", "The X-Files", "Severance", "Lost"];
foreach ($favoriteShows as $show) {
    echo "<li>$show</li>";    }

echo "<ul>";

