<x-layout title="Usuário {!! $users->name !!}">

    <form method="post">
        @csrf
                <div class="row">
                    <div class="col-8">
                        <div>
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Nome *</label>
                                <input type="name" value="{{$users->name}}" name="name" id="name" class="form-control">
                            </div>
                        </div>

                        <div>
                            <div class="form-group mb-2">
                                <label for="email" class="form-label">E-Mail *</label>
                                <input type="email" value="{{$users->email}}" name="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password" class="form-label">Senha *</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password" class="form-label">Confirme a senha *</label>
                                    <input type="passwordconfirmed" name="passwordconfirmed" id="passwordconfirmed" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 ">
                        <div class="image-profile mb-2">
                            <div class="img-thumbnail" id="image-profile" style=" height: 180px; background-image: url(/public/img/teste.png);background-position: 50% center; background-size: contain; background-repeat: no-repeat;"></div>
                        </div>

                        <button class="btn btn-primary ripple-surface w-100" id="select-user-image">
                            <span>Selecionar foto</span>
                        </button>
                    </div>
                </div>

        <button class="btn btn-primary">Salvar</button>

        <a class="btn btn-secondary" href="{{ route('series.index') }}">Home</a>

    </form>
</x-layout>
