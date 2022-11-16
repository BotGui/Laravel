<x-layout title="Cadastro de usuário">

    <form method="post">
        @csrf
        <div class="form-group mb-2">
            <label for="name" class="form-label">Nome:</label>
            <input type="name" name="name" id="name" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="email" class="form-label">E-Mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary">Cadastrar</button>
    </form>
</x-layout>
