<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id','!=',Auth::id())->get();
        return view('ticket.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create(['id_user'=>$request->user]);        
        
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.show',['ticket'=>$ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id','!=',Auth::id())->get();
        $ticket = Ticket::find($id);
        return view('ticket.edit',['ticket'=>$ticket,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Ticket::where('id',$id)->update(['id_user'=>$request->user]);        
        
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::where('id',$id)->delete();
        
        return redirect('home');
    }
    
    /**
     * Request the ticket.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pedirTicket($id)
    {
        Ticket::where(['id'=>$id,'id_user'=>Auth::id()])->update(['ticket_pedido'=>1]);

        return redirect('home');
    }

}
