<x-layout title="Editar série '{{ $series->nome }}'">
	<x-series.form :action="route('series.update', $series->id)" :nome="$series->nome"/>
</x-layout>