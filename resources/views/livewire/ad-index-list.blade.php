<div class="container d-flex justify-content-center">
    @foreach ($ads as $ad)
    <x-card :ad="$ad"/>
    @endforeach
</div>
