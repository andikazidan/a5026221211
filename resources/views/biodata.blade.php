<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <p>
        Nama : {{ $nama }} <br>
        Lagu Favorit : {{ $lagufav }}<br>
        Usia : {{ $usia }}<br>
        Album Favorit :
        <ul>
        @foreach ( $album as $album_tiap_array )
            <li>{{$album_tiap_array}}</li>
        @endforeach
        </ul>
    </p>
    <a href="tampilkan/{{ date('G:i:s') }}"> klik disini </a>

</body>
</html>
