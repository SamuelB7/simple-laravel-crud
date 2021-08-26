@extends("index")
@section("content")
<link href="/scss/create-account.scss" rel="stylesheet">
<div class="container">
    <form action="/user" method="POST">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nome Completo</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefone</label>
            <input type="tel" name="tel" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Criar Conta</button>
    </form>
</div>
@endsection