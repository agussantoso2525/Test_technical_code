<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Coding</title>
</head>
<body>
    <input type="number" id="inputAngka" placeholder="Input Angka">
    <br>
    <br>
    <button id="generateSetigiga" style="float:left">Generate Segitiga</button>
    <button id="generateBilanganGanji" style="float:left">Generate Bilangan Ganjil</button>
    <button id="generateBilanganPrima" style="float:left">Generate Bilangan Prima</button>
    <br>
    <br>
    <h4>Result:</h4>
    <br>
    <div id="hasil"></div>
</body>
<script src="jquery/jquery.js"></script>
<script>
    $('#generateSetigiga').on('click', function(){
        let angka = $('#inputAngka').val();
        if (angka == ''){
            alert('angka tidak boleh kosong.');
        }else{
            var str = angka.toString();
            var digit = angka.length;
            let hasil = '';

            for(let i=0; i < digit; i++){
                hasil += str.substring(i,i+1);
                for(let j=0; j <= i; j++){
                    hasil += '0';
                }
                hasil += '<br>';
            }
            $('#hasil').html(hasil);
        }
    })

    $('#generateBilanganGanji').on('click', function(){
        let angka = $('#inputAngka').val();
        if (angka == ''){
            alert('angka tidak boleh kosong.');
        }else{
            const tampung = [];
            for(let i=1; i <= angka; i++){
                if (i%2 === 1){
                    tampung.push(i);
                }
            }
            $('#hasil').html(tampung.toString());
        }
    })

    $('#generateBilanganPrima').on('click', function(){
        let angka = $('#inputAngka').val();
        const tampung = [];
        if (angka == ''){
            alert('angka tidak boleh kosong.');
        }else{
            for(let i=2; i <= angka; i++){
                prima = true;
                for (let j=2; j < i; j++){
                    if (i%j == 0){
                        prima = false
                    }
                }

                if (prima){
                    tampung.push(i);
                }
            }
            $('#hasil').html(tampung.toString());
        }
    })
</script>
</html>
