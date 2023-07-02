<form wire:submit.prevent="store">
    @csrf

    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            {{-- <svg class="bi flex-shrink-0 me-2" width="24" hight="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg> --}}
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="text-center font-weight-bold accenti m-5">
        <h2>Crea il tuo annuncio</h2>
    </div>
    
    <div class="form-row">
        <div class=" form-group">
            <label for="title" class="form-label text-black">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price" class="form-label text-black">Prezzo</label>
            <input type="number" min="0" value="0" step=".01" class="form-control" id="price"
                wire:model="price">
            @error('price')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-label text-black">Descrizione</label>
            <textarea rows="5" class="form-control" id="description" wire:model="description"></textarea>
            @error('description')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class=" form-group">
            <label for="description" class="form-label text-black">Categoria</label>
            <select class="form-control" id="category_id" wire:model="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group mt-3">
            <label for="image" class="form-labe text-black">Immagine dell'articolo</label>

            <input class="form-control" id="image" wire:model="image" type="file">
            @error('image')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <br>
    <div class="text-center m-4">
        <button type="submit" class="btn btn-presto">Salva</button>
    </div>
</form>
