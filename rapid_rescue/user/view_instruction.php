
<?php include "header.php";?>
        <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #d0e1f4;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1000px; /* Set maximum width to prevent container from being too wide */
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 16px;
            outline: none;
        }

        .questions {
            display: block;
            width: 100%; /* Full width of the container */
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .questions li {
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .questions li:last-child {
            border-bottom: none;
        }

        .questions li:hover {
            background-color: #e0f0ff;
        }
        a{
            text-decoration: none;
            font-weight: 100;
        }
    </style>
    <div class="container">
        <div class="search-bar">
            <input type="text" placeholder="Search Google or type a URL">
        </div>
        <ul class="questions">
            <li><a href="test.php">Q1. What should we do when someone get heart attack in emergency?</a></li>
            <li><a href="test2.php">Q2. What should we do when someone faint in front of us in emergency?</a></li>
            <li><a href="test3.php">Q3. What should we do in-case to stop any infection from spreading?</a></li>
            <li><a href="test4.php">Q4. What should we do when someone get labor pain in emergency?</a></li>
            <li><a href="test5.php">Q5. What should we do when someone get injured badly on the road?</a></li>
            <li><a href="test6.php">Q6. What should we do when someone got bitten by snake in emergency?</a></li>
        </ul>
    </div>
<?php include "footer.php"; ?>


    