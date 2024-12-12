Página de Produtos
<br><br>

<table border="1">
    <tr>
        <td>Nome</td>
        <td>Quantidade</td>
    </tr>
    @foreach($produtos as $valor)
    <tr>
        <td>{{$valor->nome}}</td>
        <td>{{$valor->quantidade}}</td>
    </tr>
    @endforeach
</able>
