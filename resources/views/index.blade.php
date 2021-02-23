<html>
<head>
<title>Teste turim</title>
</head>
<body>
<div>
    <a href="#">Gravar</a>
    <a href="{{route('read')}}">Ler</a>
</div>
<form method="POST" action="{{route('add_father')}}">
@csrf
    <label for="exampleInputEmail1">Nome do Pai</label>
    <input type="text" id="" name="name_father" required>
    <input type="submit">
</form>

@foreach($father as $f)
<div>
<h1>{{$f->name_father}}</h1>
<form action="{{route('add_child',$f)}}" method="post">
 @csrf
 <label for="exampleInputEmail1">Adicionar filho</label>
<input type="text" name="name_child" />
<input type="submit">
</form>

@foreach($son as $s)
@if($s->father_id == $f->id)
<h3>{{$s->name_son}}</h3>
@endif
@endforeach
</div>

@endforeach
<textarea>
{{$table ?? ''}}
</textarea>
</body>
</html>