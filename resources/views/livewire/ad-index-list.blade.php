<div class="container row">

    {{-- Stampa cards nell'index completo --}}
    @if (empty($_GET['cat'])) 
        @foreach ($ads as $ad)
        <span class="col-12 col-md-4">
            <x-card :ad="$ad"/>
        </span>
        @endforeach
    @else
    {{-- Stampa cards nell'index filtrato per categoria con query string --}}
        @foreach ($ads as $ad)
        @if ($_GET['cat'] == $ad->category_id)
        <span class="col-12 col-md-4">
            <x-card :ad="$ad"/>
        </span>
        @else
        @continue 
        @endif
        @endforeach
    @endif

</div>

