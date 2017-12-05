@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Acara</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     {!! Form::open(array('route' => 'Acara.store', 'class' => 'form')) !!}

                    <div class="form-group">
                        {!! Form::label('Nama Acara') !!}
                        {!! Form::text('name', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Acara')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Nama Ketua') !!}
                        {!! Form::text('ketua', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Ketua')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Nama Sekretaris I') !!}
                        {!! Form::text('sekretaris1', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Sekretaris I')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Nama Sekretaris II') !!}
                        {!! Form::text('sekretaris2', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Sekretaris II')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Nama Bendahara I') !!}
                        {!! Form::text('bendahara1', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Bendahara I')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Nama Bendahara II') !!}
                        {!! Form::text('bendahara2', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Nama Bendahara II')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Divisi') !!}
                        {!! Form::select('divisi', array('Acara' => 'Acara', 'Logstran' => 'Logstran', 'Humas' => 'Humas', 'Konsumsi' => 'Konsumsi')) !!}
                    </div>                    

                    <div class="form-group">
                        {!! Form::submit('Tambah', 
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
