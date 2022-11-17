<x-layout title="Séries">

	<a href="{{ route('series.create') }}" class="btn btn-secondary mb-2">Adicionar</a>
    <a href="{{ route('user.index') }}" class="btn btn-primary mb-2">Usuário</a>

	<ul class="list-group mb-2">
		@foreach ($series as $serie)
		<li class="list-group-item d-flex justify-content-between align-items-center">
			<a href="{{ route('seasons.index', $serie->id) }}">{{ $serie->nome }}</a>

			<span class="d-flex">
				<a href="{{ route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm">E</a>

				<form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
					@csrf
					@method ('DELETE')
					<button class="btn btn-danger btn-sm">X</button>
				</form>
			</span>
		</li>
		@endforeach
	</ul>

    <a href="{{ route('logout') }}" class="btn btn-danger mb-2">Sair</a>

</x-layout>
