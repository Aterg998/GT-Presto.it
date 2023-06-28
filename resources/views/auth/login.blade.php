<x-main> 
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Bentornato</h1>
                        <p class="lead">
                            Accedi al tuo account per continuare
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="https://images.pexels.com/photos/9496720/pexels-photo-9496720.jpeg" alt="Andrew Jones" class="img-fluid rounded-circle" width="132" height="132">
                                </div>
                                <form method="post" action={{route('login')}}>
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password">
                                       
                                    </div>
                                    <div class="row"> 
                                    <div class="text-center mt-3 col">
                                      
                                        <button type="submit" class="btn btn-lg btn-primary">Accedi</button>
                                    </div>
                                    <div class="text-center mt-3 col">
                                      
                                        <a class="btn btn-lg btn-primary" href="{{route('register')}}">Registrati</a>
                                    </div>
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