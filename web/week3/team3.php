<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8"/>
    <title>Team Assignment Week 3</title>
    <link href="team3.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email"><br>
        >Major:<br>
        <?php 
        $majors  = [
            'Computer Science',
            'Web Design and Development',
            'Computer Information Technology',
            'Computer Engineering'
            ];
            foreach ($major as $key => $value) {
                echo "<label><input type='radio' name='major' value='$key'>$value</label><br>";
            }
        ?>            
        <label for="comments">Comments:</label>
        Continents you have visited: <br>
        <label><input type="checkbox" name="continents[]" value="na">North America</label><br>
        <label><input type="checkbox" name="continents[]" value="sa">South America</label><br>
        <label><input type="checkbox" name="continents[]" value="eu">Europe</label><br>
        <label><input type="checkbox" name="continents[]" value="as">Asia</label><br>
        <label><input type="checkbox" name="continents[]" value="aus">Australia</label><br>
        <label><input type="checkbox" name="continents[]" value="af">Africa</label><br>
        <label><input type="checkbox" name="continents[]" value="an">Antartica</label><br>

        <textarea id="comments" name="comments" rows="3"></textarea><br>
        <input type="submit" name="submit" value="Submit">        
    </form>
</body>
</html>