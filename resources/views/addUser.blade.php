<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="">Nome do usuário</label>
        <input type="text" name="name" id="">

        <label for="">Email do usuário</label>
        <input type="text" name="email" id="">

        <label for="">Senha do usuário</label>
        <input type="text" name="password" id="">

        <input type="submit" value="Cadastrar Usuário">
    </form>
</body>
</html>