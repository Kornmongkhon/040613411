<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function calculate(){
            httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = showResult;

            let m  = document.getElementById('mango').value;
            let o = document.getElementById('orange').value;
            let b = document.getElementById('banana').value;

            let url = "no1-2.php?m="+m+"&o="+o+"&b="+b;

            httpRequest.open("GET",url);
            httpRequest.send();
        }
        function showResult(){
            if(httpRequest.readyState == 4 && httpRequest.status == 200){
                document.getElementById('result').innerHTML = httpRequest.responseText;
            }
        }
    </script>
</head>
<body>
    <h1>บันทึกการขาย</h1><br>
    <label>มะม่วง กก.ละ 30 บาท ขายได้</label> <input type="number" name="mango" id="mango"> กก.<br>
    <label>ส้ม กก.ละ 70 บาท ขายได้</label> <input type="number" name="orange" id="orange"> กก.<br>
    <label>กล้วย หวี.ละ 30 บาท ขายได้</label> <input type="number" name="banana" id="banana" onkeyup="calculate()"> หวี.<br>
    <span id="result"></span>
</body>
</html>