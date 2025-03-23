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

echo "</ul>";

// For loop
echo "<h3>Counting with For Loop:</h3>";
for ($i = 1; $i <= 6; $i++) {
    echo "$i <br>";
}

// While loop
echo "<h3>Counting with While Loop:</h3>";
$count = 1;
while ($count <= 6) {
    echo "$count <br>";
    $count++;
}

//Decisions - if/else statements
echo "<h3>Greeting based on time of day</h3>";
date_default_timezone_set("Australia/Brisbane");
$hour = date("H");

if ($hour < 12) {
    echo "<p>Good morning!</p>";
} elseif ($hour < 18) {
    echo "<p>Good afternoon!</p>";
} else {
    echo "<p>Good evening!</p>";
}

//Functions - with parameters
echo "<h3>Greeting</h3>";
function greet($name): string{
    return "Hello, $name!";
}
echo "<p>" . greet("Heshan") . "</p>";
