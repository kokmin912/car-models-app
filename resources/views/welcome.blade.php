<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Models</title>
    @vite(['resources/js/app.js']) <!-- Ensure correct asset loading -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #ddd;
            margin: 5px;
            padding: 8px;
            border-radius: 5px;
        }
        .loading {
            font-size: 16px;
            color: #555;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Choose a Car Brand</h1>
        <div id="app">
            <fipe-models></fipe-models>
        </div>
    </div>
</body>
</html>
