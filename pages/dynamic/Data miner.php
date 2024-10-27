<!DOCTYPE html>
<html>
<head>
    <title>Open Oracle App</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <button id="openOracleButton">Open Oracle App</button>
    <script>
        $(document).ready(function(){
            $("#openOracleButton").click(function(){
                $.ajax({
                    type: "GET",
                    url: "open_oracle.php",
                    success: function(response){
                        console.log(response);
                    }
                });
            });
        });
    </script>
        <script>
        $(document).ready(function(){
            $("#openOracleButton").click(function(event){
                event.preventDefault(); // Prevent the default behavior of the button
                $.ajax({
                    type: "GET",
                    url: "open_oracle.php",
                    success: function(response){
                        console.log(response);
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
// Execute command to open Oracle application
// Replace 'your-command-to-open-the-app' with the actual command to open your Oracle Database application
$command = '"C:\Users\ahmed elbakry\Downloads\Compressed\sql\sqldeveloper\sqldeveloper\bin\sqldeveloper.exe"';

// Execute the command and capture output
$output = shell_exec($command);

// Output result
echo $output;
?>