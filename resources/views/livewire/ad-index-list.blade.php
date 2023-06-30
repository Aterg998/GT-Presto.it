<div class="container row">
    @foreach ($ads as $ad)
    <span class="col-12 col-md-4">
        <x-card :ad="$ad"/>
    </span>
    @endforeach
</div>
