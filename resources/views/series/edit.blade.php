<x-layout title="Editar série '{!! $series->nome !!}'">
	<!-- <x-series.form :action="route('series.update', $series->id)" :nome="$series->nome" :update="true"/> -->
	<form action="{{ route('series.update', $series->id) }}" method="post" update="{{ $update = true }}" >
    @csrf
	
    @if($update)
    @method('PUT')
    @endif
    <div class="row mb-3">
		<div class="col-8">
			<label for="nome" class="form-label">Nome* :</label>
			<input type="text" autofocus id="nome" name="nome" class="form-control" value="{{ $series->nome }}">
		</div>

		<div class="col-2">
			<label for="seasonQty" class="form-label">Temporadas :</label>
			<input type="text" id="seasonQty" name="seasonQty" class="form-control" value="{{ $series->seasons->count() }}">
		</div>

		<div class="col-2">
			<label for="episodeQty" class="form-label">Episodeos :</label>
			<input type="text" id="episodeQty" name="episodeQty" class="form-control">
		</div>
	</div>	
    <button type="submit" class="btn btn-dark">Editar</button>
</x-layout>