<?php include "header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Questions</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #d0e1f4;
            height: 100vh;
        }

        .container {
            width: 60%;
            max-width: 800px;
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center; /* Center align text inside the container */
        }

        .question {
            font-weight: bold;
            text-align: left; /* Align question text to the left */
            margin-bottom: 20px;
            padding-left: 20px; /* Add padding to match the style in the image */
        }

        .answer {
            background-color: white;
            padding: 40px 20px; /* Padding to create space around the text */
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 20px;
            text-align: center; /* Center align text inside the answer box */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow for the answer box */
        }

        .answer p {
            margin: 0; /* Remove default margin */
            line-height: 1.6; /* Increase line height for better readability */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="question">
        Q6. What should we do when someone got bitten by snake in emergency?
        </div>
        <div class="answer">
            <p>Keep the person calm and still to slow the spread of venom.
Call emergency services immediately.
Keep the affected limb below heart level and immobilized.
Do not apply a tourniquet, ice, or try to suck out the venom.
Remove any tight clothing or jewelry around the bite area to allow for swelling.
Monitor the person’s vital signs and be prepared to perform CPR if necessary.
                <br>
                <a href="view_instruction.php">Back</a>
            </p>
        </div>
    </div>

</body>
</html>
<?php include "footer.php";?>
