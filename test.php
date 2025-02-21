<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        #secret {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background-color: #ffebcd;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("button:contains('Show')").click(function(){
                $("#secret").show();
            });
            $("button:contains('Hide')").click(function(){
                $("#secret").hide();
            });
        });
    </script>
</head>
<body>
  <div> <h1>
    Welcome To Page
  </h1></div>
   <button>Show</button>
   <button>Hide</button>
   <div id="secret">I am secret....
   </div>
</body>
</html>