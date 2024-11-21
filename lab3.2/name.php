<html>
<head>
    <title> Name</title>
</head>
<body>

        <form >
            <head>Name</head> <br>
            <input type="Text" name=""/> <br>
            <input type="submit" name="" value="submit"/>
        </form>
        <?php
    // PHP validation
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $errorMessages = [];

        if (empty($name) ) {
            $errorMessages[] = "Name cannot be empty.";
        }

        else if (str_word_count($name) < 2) {
            $errorMessages[] = "Name must contain at least two words.";
        }

        if (strtoupper($name[0]) !== 'A') {
            $errorMessages[] = "Name must start with the letter 'A'.";
        }

        $validCharacters = true;
        for ($i = 0; $i < strlen($name); $i++) {
            $char = $name[$i];
            if (!(
                ($char >= 'a' && $char <= 'z') || 
                ($char >= 'A' && $char <= 'Z') || 
                $char == '.' || 
                $char == '-'
            )) {
                $validCharacters = false;
                break;
            }
        }

        if (!$validCharacters) {
            $errorMessages[] = "Name can only contain letters, periods, and dashes.";
        }
        
        if (!empty($errorMessages)) {
            echo "<ul>";
            foreach ($errorMessages as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
           
            echo "<p>Name is valid!</p>";
        }
    }
    ?>

</body>
</html>
