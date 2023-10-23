<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no2</title>
    <script>
        async function getDataFromAPI(){
            let response = await fetch('https://data.go.th/dataset/296f32c6-8c7e-4a54-ade0-0913d35d3168/resource/d132638d-a243-4829-aed8-10ed4fad917f/download/priv_hos.json');
            let rawData = await response.text(); //อ่านผลลัพธ์
            let OBJdata = JSON.parse(rawData);
            let result = document.getElementById('result');

            for(let i=0;i<OBJdata.features.length;i++){
                let content = 'ชื่อโรงพยาบาล : '+OBJdata.features[i].properties.name+' '+OBJdata.features[i].properties.num_bed+' เตียง';
                if(OBJdata.features[i].properties.num_bed < 100){
                    let li = document.createElement('li')
                
                    li.innerHTML = content;
                    result.appendChild(li);
                }
            }
        }
        getDataFromAPI();
    </script>
</head>
<body>
    <h1>โรงพยาบาลเอกชน ในกทม.</h1>
    <ol id="result"></ol>
</body>
</html>