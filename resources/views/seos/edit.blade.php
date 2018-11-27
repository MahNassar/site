@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($seo, ['route' => ['seos.update', $seo->id], 'method' => 'patch',"files"=>true]) !!}

                    @include('seos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection