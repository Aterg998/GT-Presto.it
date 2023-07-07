<x-main>
    <form class="container-fluid w-50" action="{{route('revisor.send', Auth::User())}}" method="POST">
        @method('PUT')
        @csrf
    
        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
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
                <input type="text" class="form-control" required id="nome" name="first_name" value="{{old('first_name')}}">
                @error('first_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name" class="form-label text-black">Cognome</label>
                <input type="text" class="form-control" required id="lastname"name="last_name" value="{{old('last_name')}}">
                @error('last_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label text-black">Email</label>
                <input type="text" class="form-control" required id="email" name="email" value="{{Auth::User()->email}}">
                @error('email')
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