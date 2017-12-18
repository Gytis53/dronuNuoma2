@extends('layouts.master')

@section('title')
    Pardavimų ataskaita
@endsection

@section('content')
    <h2 style="padding-bottom: 10px; padding-top: 20px;">Pardavimų ataskaita (<strong>{{$date_from}} - {{$date_to}}</strong>)</h2>
    <hr>
    @foreach($orders as $order)
        <p><strong>ID: {{$order->order_id}}</strong> </p>
        <p>Užrašai: {{$order->note}} </p>
        <p>Gavėjo vardas: {{$order->delivery_name}} </p>
        <p>Užsakymas priklauso vartotojui:  (id: {{$order->customer_id}}): {{$order->first_name}} {{$order->last_name}}</p>
        <p>Kurjeris:  (id: {{$order->courier_id}}): {{$order->description}}</p>

        <hr>
    @endforeach


@endsection




    {{--{{App\Http\Controllers\NuomaController::getStateByProductStatusId($order->product_status_product_status_id)}}</strong></p>--}}