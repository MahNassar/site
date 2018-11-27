@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Careers
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($careers, ['route' => ['careers.update', $careers->id], 'method' => 'patch',"files"=>true]) !!}

                    @include('careers.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection