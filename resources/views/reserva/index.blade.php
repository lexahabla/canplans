@extends('layouts.app')

@section('content')
<div class="container">

        <div class="card-header">
            <h1>Reservas de Can Cruz</h1>
        </div>
        <a href="{{Route('reserva.create')}}" class="btn btn-dark">CREAR RESERVA</a>

    <div class="card col-12 col-md-12" style="overflow:auto; white-space:nowrap">
        <table class="table" >

                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Teléfono</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Personas</th>
                    <th>Mascota</th>
                    <!-- <th>Desayuno</th> -->
                    <th>Creada</th>
                    <th>Actualizada</th>
                </tr>
            
                @foreach($reserva as $reservas)
                <tr>
                    <td>{{$reservas->reservation_key}}</td>
                    <td>{{$reservas->name}}</td>
                    <td>{{$reservas->mail}}</td>
                    <td>{{$reservas->phone}}</td>
                    <td>{{$reservas->check_in}}</td>
                    <td>{{$reservas->check_out}}</td>
                    <td>{{$reservas->persons}}</td>
                    <td>{{$reservas->pet}}</td>
                    <td>{{$reservas->created_at}}</td>
                    <td>{{$reservas->updated_at}}</td>
                    <td>   
                        <form action="{{Route('reserva.destroy', $reservas->id)}}" method="post">
                        @method('delete')
                        @csrf
                            <button class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                  
                        </form>
                    </td>
                    <td> 
                        <a href="{{Route('reserva.edit', $reservas->id)}}" class="btn btn-secondary" >
                        <i class="fas fa-marker"></i>
                        </a>
                    </td>                                 
                </tr>

            

            @endforeach
            </table>
       <!--  <form> -->
    </div>
<input type="date" value="{{$reservas->check_in}}" value="{{$reservas->check_out}}">

</div>
@endsection