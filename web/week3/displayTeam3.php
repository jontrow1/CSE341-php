<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8"/>
    <title>Team Assignment Week 3</title>
    <link href="team3.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php
    echo $_POST["name"] . "<br>";
    echo "<a href='mailto: . $_POST[email]'>Send Email</a><br>";

    $majors  = [
        'Computer Science',
        'Web Design and Development',
        'Computer Information Technology',
        'Computer Engineering'
        ];


    echo $majors[$_POST["major"]] . "<br>";
    echo $_POST["comments"] . "<br>";

    $continents  = [
        'na' => 'North America',
        'sa' => 'South America',
        'eu' => 'Europe',
        'as' => 'Asia',
        'aus' => 'Australia',
        'af' => 'Africa',
        'an' => 'Antarctica'
        ];        

    foreach ($_POST['continents'] as $key) {echo "$continents[$key], ";}
?>
</body>
</html>
