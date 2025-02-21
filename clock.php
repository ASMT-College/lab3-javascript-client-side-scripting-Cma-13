<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    CLOCK: <span id="clock"></span>
    <style>
        #clock{
color: purple;

        }
    </style>
    <script>
        function updateDate(){
        var myDate = new Date();
        var hours = myDate.getHours();
        var minutes = myDate.getMinutes();
        var seconds = myDate.getSeconds();
        document.getElementById('clock').innerHTML = hours +':'+minutes+':' + seconds;
       setInterval(updateDate,1000) 
        }

        updateDate()
    </script>

</body>
</html>