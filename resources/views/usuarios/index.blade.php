<!DOCTYPE html>
<html>
<h1>Lista de Usuários</h1>
<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->nome }}</td>
        <td>{{ $usuario->email }}</td>
    </tr>
    @endforeach
</table>
</html>
