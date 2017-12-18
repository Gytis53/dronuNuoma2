@extends('layouts.master')

@section('title')
    Nuomos punktai
@endsection

@section('content')
    <div class="container">

        <div>
        {{--@foreach($orders->chunk(3) as $eventsChunk)--}}
        {{--<div class="row" style="margin-bottom:320px">--}}
            @if(session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
                {{session()->forget('success')}}
            @endif
            @if(session('fail'))
                <p class="alert alert-danger">{{session('fail')}}</p>
                {{session()->forget('fail')}}
            @endif
        <div class="col-md-8">
            <table class="table">
                <thead>
                <td>ID</td>
                <td>Užsakovas</td>
                <td>Kliento ID</td>
                <td>Užrašai</td>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>

                        <td>{{$order->order_id}}</td>
                        <td>{{$order->delivery_name}}</td>
                        <td>{{$order->customer_customer_id}}</td>
                        <td>{{$order->note}}</td>
                        <td> <a href="{{route('cancelOrder',['id' => $order->order_id] )}}" class="btn btn-danger"> Atšaukti </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>


            </table>
        </div>
        </div>
        {{--@endforeach--}}
        {{--</div>--}}



    </div>


@endsection

