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
            <h2>{{ __('messages.enter your data to apply') }}</h2>
        </div>
        
        <div class="form-row">
            <div class=" form-group">
                <label for="first_name" class="form-label accenti mt-2 mb-2">{{ __('messages.first name') }}</label>
                <input type="text" class="form-control" required id="first_name" name="first_name" value="{{old('first_name')}}">
                @error('first_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name" class="form-label accenti mt-2 mb-2">{{ __('messages.last name') }}</label>
                <input type="text" class="form-control" required id="last_name" name="last_name" value="{{old('last_name')}}">
                @error('last_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="birth_date" class="form-label accenti mt-2 mb-2">{{ __('messages.date of birth') }}</label>
                <input type="date" class="form-control" required id="birth_date" name="birth_date" value="{{old('birth_date')}}">
                @error('birth_date')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label accenti mt-2 mb-2">Email</label>
                <input type="text" class="form-control" required id="email" name="email" value="{{Auth::User()->email}}">
                @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address" class="form-label accenti mt-2 mb-2">{{ __('messages.address') }}</label>
                <input type="text" class="form-control" required id="address" name="address" value="{{old('address')}}">
                @error('address')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="city" class="form-label accenti mt-2 mb-2">{{ __('messages.city') }}</label>
                <input type="text" class="form-control" required id="city" name="city" value="{{old('city')}}">
                @error('city')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="zip_code" class="form-label accenti mt-2 mb-2">{{ __('messages.zip_code') }}</label>
                <input type="text" class="form-control" required id="zip_code" name="zip_code" value="{{old('zip_code')}}">
                @error('zip_code')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="country" class="form-label accenti mt-2 mb-2">{{ __('messages.country') }}</label>
                <input type="text" class="form-control" required id="country" name="country" value="{{old('country')}}">
                @error('country')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br>
        <div class="text-center m-4">
            <button type="submit" class="btn btn-presto">{{ __('messages.submit application') }}</button>
        </div>
    </form>
</x-main>