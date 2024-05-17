<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevent Tilde Character</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textarea = document.getElementById("myTextarea");

            textarea.addEventListener("input", function(event) {
                // Get the current value of the textarea
                const currentValue = textarea.value;
                
                // Check if the value contains the tilde character
                if (currentValue.includes("~")) {
                    // Remove all tilde characters
                    textarea.value = currentValue.replace(/~/g, "");
                }
            });
        });
    </script>
</head>
<body>
    <textarea id="myTextarea" rows="10" cols="30"></textarea>
</body>
</html>
