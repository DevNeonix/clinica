@extends ('layouts.app')
@section ('contenido')


    <div class="container-fluid h-100">

        <div class="row h-100">
            <div class="col-12 col-lg-8 h-100 hidden-md bg-primary"></div>
            <div class="col-12 col-lg-4 h-100" style="display: flex;justify-content: center;align-items: center">
                <div class="panel w-100">
                    <div class="panel-body">
                        <div class="mb-4">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <br>
                        <div class="mb-4">
                            <label>Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <br>
                        <div class="mb-4">
                            <a class="btn btn-primary w-100" href="/almacen/categoria">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection