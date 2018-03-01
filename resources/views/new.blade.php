@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="form-group">
            <a href="{{route('home')}}" class="btn btn-sm"> <- REGRESAR A MIS PRODUCTOS</a>
        </div>
    </div>
</div>
{!! Form::open(['route'=>'store', 'method'=>'POST']) !!}
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col-md-12">
                        <h3 align="center">Información general de tu producto</h3>
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('name','El nombre de tu producto') !!}
                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ej. Monitor LG DE 23"','required']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('category','Categoría de tu producto') !!}
                        {!! Form::text('category',null,['class'=>'form-control','placeholder'=>'ej. Electrónicos','required']) !!}
                    </div>

                    <div class="col-md-12">
                        {!! Form::label('description','Descripción del producto') !!}
                        {!! Form::text('description',null,['class'=>'form-control','placeholder'=>'ej. Monitor Full HD LG, 23 pulgadas, Resolución 1920x1080 px','required']) !!}
                    </div>

                    <div class="col-md-6">
                        {!! Form::label('amount','¿Cuántos productos quieres vender?') !!}
                        {!! Form::text('amount',null,['class'=>'form-control','placeholder'=>'ej. 1','required']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('expiration_date','¿Hasta cuando estará disponible?') !!}
                        {!! Form::date('expiration_date',\Carbon\Carbon::now(),['class'=>'form-control','required']) !!}
                    </div>

                    <div class="col-md-12">
                        {!! Form::label('cost','¿Qué precio tiene tu producto?') !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::number('cost',null,['class'=>'form-control','placeholder'=>'ej. 3000 (Usa sólo números)','required']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::button(' PUBLICAR', array('class'=>'btn btn-sm', 'type'=>'submit')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@endsection
