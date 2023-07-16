<form wire:submit.prevent="store">
    @csrf

    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center m-5" role="alert">
            {{-- <svg class="bi flex-shrink-0 me-2" width="24" hight="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg> --}}
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="text-center fw-bold accenti2 m-5">
        <h2>{{ __('messages.create_your_own_ad') }}</h2>
    </div>
    
    <div class="form-row">
        <div class=" form-group">
            <label for="title" class="form-label accenti mt-2 mb-2">{{ __('messages.title') }}</label>
            <input type="text" class="form-control" id="title" wire:model="title" value="{{old('title')}}">
            @error('title')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price" class="form-label accenti mt-2 mb-2">{{ __('messages.price') }}</label>
            <input type="number" min="0" value="0" step=".01" class="form-control" id="price"
                wire:model="price" value="{{old('price')}}">
            @error('price')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-label accenti mt-2 mb-2">{{ __('messages.description') }}</label>
            <textarea rows="5" class="form-control" id="description" wire:model="description" value="{{old('description')}}"></textarea>
            @error('description')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class=" form-group">
            <label for="description" class="form-label accenti mt-2 mb-2">{{ __('messages.category') }}</label>
            <select class="form-control" id="category_id" wire:model="category_id" value="{{old('category_id')}}" placeholder="Ciao">
                <option value="">{{ __('messages.select_category') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group mt-3">
            <label for="image" class="form-labe accenti mt-2 mb-2">{{ __('messages.image') }}</label>

            <input class="form-control @error('temporary_images.*') is-invalid @enderror"  wire:model="temporary_images" type="file" name="images" multiple>
            @error('temporary_images.*')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col my-3">
                        <div class="img-preview mx-auto shadow rounded">
                            <img style="height: 300px; width: 300px" src="{{$image->temporaryUrl()}}" alt="">
                        </div>
                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

    </div>
    <br>
    <div class="text-center m-4">
        <button type="submit" class="btn btn-presto">{{ __('messages.save') }}</button>
    </div>
</form>
