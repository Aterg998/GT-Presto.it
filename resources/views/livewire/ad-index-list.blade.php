@foreach ($ads as $ad)
<x-card :title="$ad->title" :price="$ad->price" :description="$ad->description"/>
@endforeach