<html>
<head>
<title>Teste turim</title>
</head>
<body>
<div>
    <a href="#">Gravar</a>
    <a href="#">Ler</a>
</div>
<form method="POST" action="{{route('add_father')}}">
@csrf
    <label for="exampleInputEmail1">Nome do Pai</label>
    <input type="text" id="" name="name_father" required>
</form>

@foreach($father as $f)
<div>
<h1>{{$f->name_father}}</h1>
<form action="{{route('add_child',$f)}}" method="post">
 @csrf
<input type="text" name="name_child" />
<input type="submit">
</form>

</div>

@endforeach

</body>
</html>