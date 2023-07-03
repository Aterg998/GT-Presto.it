<div class="container row">

    {{-- Stampa cards nell'index completo --}}
    {{-- @if (empty($_GET['cat'])) 
        @foreach ($ads as $ad)
        <span class="col-12 col-md-4">
            <x-card :ad="$ad"/>
        </span>
        @endforeach
    @else --}}
    {{-- Stampa cards nell'index filtrato per categoria con query string --}}
    @forelse ($ads as $ad)
    {{-- @if ($_GET['cat'] == $ad->category_id) --}}
    <span class="col-12 col-md-4">
        <x-card :ad="$ad"/>
    </span>
    @empty
    <div class="col-12">
        <div class="alert alert-warning py-3 shadow">
            <p class="lead">Non ci sono annunci per questa ricrca. Prova a cambiare i parametri.</p>
        </div>
    </div>
    @endforelse

</div>

