<x-main>
    <form class="container-fluid w-50" action="{{route('become.revisor')}}" method="POST">
        @method('GET')
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
    
        <div class="text-center font-weight-bold m-5" style="color:#D2360F">
            <h2>Inserisci i tuoi dati per la candidatura</h2>
        </div>
        
        <div class="form-row">
            <div class=" form-group">
                <label for="first_name" class="form-label text-black">Nome</label>
                <input type="text" class="form-control" id="nome" name="first_name" value="{{old('first_name')}}">
                @error('first_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name" class="form-label text-black">Cognome</label>
                <input type="text" class="form-control" id="lastname"name="last_name" value="{{old('last_name')}}">
                @error('last_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="Email" class="form-label text-black">Email</label>
                <input type="text" class="form-control" id="Email" name="Email" value="{{Auth::User()->email}}"></input>
                @error('Email')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br>
        <div class="text-center m-4">
            <button type="submit" class="btn btn-presto">Invia candidatura</button>
        </div>
    </form>
</x-main>