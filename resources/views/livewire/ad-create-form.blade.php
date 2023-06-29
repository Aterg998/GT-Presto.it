<form wire:submit.prevent="store">
    @csrf

    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" hight="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

   
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" wire:model="title">
        @error('title')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" wire:model="price">
        @error('price')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea rows="5" class="form-control" id="description" wire:model="description"></textarea>
        @error('description')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="form-floating mb-3">
            <select class="form-control"  id="category_id" wire:model="category_id">
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach


    <div class="mb-3">
        <label for="image">Immagine dell'articolo</label>
        <input class="form-control" id="image" wire:model="image" type="file">
        </div>
        @error('image')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        
        
<button type="submit" class="btn btn-primary">Salva</button>
</form>
