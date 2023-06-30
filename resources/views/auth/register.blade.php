<x-main> 
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Registrati</h1>
                       
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="https://images.pexels.com/photos/9496721/pexels-photo-9496721.jpeg" alt="Andrew Jones" class="img-fluid rounded-circle" width="132" height="132">
                                </div>

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                        @endif
                                <form method="post" action={{route('register')}}>
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control form-control-lg" type="text" name="name" value="{{old('name')}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" value="{{old('email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" >
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Conferma Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password_confirmation" >
                                    <div class="text-center mt-3">
                                      
                                        <button type="submit" class="btn btn-presto btn btn-lg btn-primary">Accedi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>   
</x-main>