@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Tickets</span>
                    @if(Auth::user()->role==1)
                        <a href="{{route('tickets.create')}}" class="btn btn-primary btn-sm float-right">Nuevo</a>
                    @endif
                </div>

                <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Ticket</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->user->email}}</td>
                            <td>
                                @if($ticket->ticket_pedido)
                                    Sí
                                @else
                                    No
                                @endif
                            </td>
                            <td>{{$ticket->created_at}}</td>
                            <td>
                                @if(Auth::user()->role==1)
                                    <a href="{{route('tickets.show',$ticket->id)}}" class="btn btn-primary btn-sm">Ver</a>
                                    <a href="{{route('tickets.edit',$ticket->id)}}" class="btn btn-primary btn-sm">Editar</a>
                                    <form action="{{route('tickets.destroy',$ticket->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @else
                                    <form action="{{route('tickets.pedirTicket',$ticket->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Pedir</button>
                                    </form>
                                @endif
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
