@extends('layouts.client')



@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Panel Principal</div>



                <div class="card-body">

                    @if(session('status'))

                        <div class="row">

                            <div class="col-12">

                                <div class="alert alert-success" role="alert">

                                    {{ session('status') }}

                                </div>

                            </div>

                        </div>

                    @endif

                    Consulte las secciones disponibles en el menú superior a la izquierda:</br></br>

                    <b>Inicio:</b> Podrá encontrar algunas tablas y nomenclaturas de ayuda de nuestros productos.</br>
                    <b>Productos:</b> Consulte por modelo o características y encontrará su costo y el precio de lista.</br>
                    <b>Manuales/Catálogos:</b> Permite visualizar la documentación de los productos como manuales, catálogos, dimensiones, etc.</br>
                    <b>Existencias:</b> Podrá encontrar las piezas disponibles en cada almacén activo.</br></br>
                    Para soporte o fallas en el portal envíe un correo a info@tramec.mx
                    



                    <!--You are logged in!-->

                </div>

            </div>

        </div>

    </div>

</div>

@endsection