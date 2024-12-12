<!DOCTYPE html>
<h1>Criar Usuário</h1>
<form method="POST" action="/usuarios">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Senha:</label>
    <input type="password" name="senha"><br>
    <button type="submit">Salvar</button>
</form>
</html>