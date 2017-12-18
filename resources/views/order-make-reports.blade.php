@extends('layouts.master')

@section('title')
    Nuomos ataskaita
@endsection

@section('content')
    <h1 style="padding-bottom: 20px;">Nuomos ataskaita</h1>
    <hr>
    <p>Viso prekių:<strong> {{$totalCount}} </strong>
    <hr>


    <p><strong>Detali ataskiata</strong></p>
    <form class="form-horizontal" action="{{route('order-report')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-md-4 control-label" for="date_from">Laikotarpis (nuo pasirinktos dienos)</label>
            <div class="col-md-4">
                <input id="date_from" name="date_from" value="{{old('date_from')}}" type="date" class="form-control input-md" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="date_to">Laikotarpis (iki pasirinktos dienos)</label>
            <div class="col-md-4">
                <input id="date_to" name="date_to" value="{{old('date_to')}}" type="date" class="form-control input-md" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-success">Kurti ataskaitą</button>
            </div>
        </div>
    </form>

    <hr>

@endsection



