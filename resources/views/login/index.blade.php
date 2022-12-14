<x-layout title="Login">

    <form method="post">
        @csrf
        <div class="form-group mb-2">
            <label for="email" class="form-label">E-Mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary">Entrar</button>
        <a href="{{ route('user.create') }}" class="btn btn-secondary">Registrar</a>
    </form>
</x-layout>
