@extends('layouts.master')

@section('title')
    Nuomos punktai
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <h1>Nuomos punktai</h1>
        <div style="height:700px; width:1000px">
            {!! Mapper::render()  !!}}
        </div>
    </div>
</div>


@endsection

