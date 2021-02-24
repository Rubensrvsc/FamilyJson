<html>
<head>
<title>Teste turim</title>
<link rel="stylesheet" type="text/css" href="../sass/app.scss">
</head>
<body>
<style>
    .flex{
    display: flex;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: 0 auto;
}

.flex > div{
    flex: 1 1;
    margin: 10px;
}

</style>

<div>
    <a href="#">Gravar</a>
    <a href="{{route('read')}}">Ler</a>
</div>
<section class="flex">
<div>
<form method="POST" action="{{route('add_father')}}">
@csrf
    <label for="exampleInputEmail1">Nome do Pai</label>
    <input type="text" id="" name="name_father" required>
    <input type="submit">
</form>

@foreach($father as $f)

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
<form  action="{{route('deleteSon',$s->id)}}" method="post">
            @csrf
            @method('DELETE')
        <input type="submit" value="delete " >
    </form>
@endif
@endforeach


@endforeach
</div>
<div class="textarea">
<textarea>
{{$table ?? ''}}
</textarea>
</div>
</section>
</body>
</html>