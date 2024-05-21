<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vin | About</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
    </ul>
    <h1>About Page</h1>

    <h3>Owner: {{ $name }}</h3>
    {{-- 
    {{  }}
    fitur dari blade template engine
    jadi bisa sanitasi data, kalo ada user yg ngirim tag html. gabakal di proses tagnya
    lebi bagus
    Opsi lain:
    
    echo $name
    = $name
    --}}
</body>

</html>
