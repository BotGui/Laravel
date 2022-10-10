<x-layout title="Nova série">
	<form action="{{ route('series.store') }}" method="post">
    @csrf

	<div class="row mb-3">
		<div class="col-8">
			<label for="nome" class="form-label">Nome* :</label>
			<input type="text" autofocus id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
		</div>

		<div class="col-2">
			<label for="seasonQty" class="form-label">Temporadas :</label>
			<input type="text" id="seasonQty" name="seasonQty" class="form-control" value="{{ old('seasonQty') }}">
		</div>

		<div class="col-2">
			<label for="episodeQty" class="form-label">Episodeos :</label>
			<input type="text" id="episodeQty" name="episodeQty" class="form-control" value="{{ old('episodeQty') }}">
		</div>
	</div>	
    <button type="submit" class="btn btn-dark">Adicionar</button>
</form>

</x-layout>