@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Ticket</span>
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <table class="table table-hover">
                                <p><strong>id: </strong>{{$ticket->id}}</p>
                                <p><strong>Propietario: </strong>{{$ticket->user->email}}</p>
                                <p><strong>Pedido: </strong>
                                    @if($ticket->ticket_pedido)
                                        Sí
                                    @else
                                        No
                                    @endif
                                </p>
                                <p><strong>Fecha: </strong>{{$ticket->created_at}}</p>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
