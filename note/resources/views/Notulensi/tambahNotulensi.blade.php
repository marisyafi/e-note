@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Notulensi</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     {!! Form::open(array('route' => 'Notulensi.store', 'class' => 'form')) !!}

                    <div class="form-group">
                        {!! Form::label('Judul Notulensi') !!}
                        {!! Form::text('judul', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Judul Notulendi')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Tanggal') !!}
                        {!! Form::date('tanggal', null, 
                            array('required', 
                                'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Tempat') !!}
                        {!! Form::text('tempat', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Tempat')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Moderator') !!}
                        {!! Form::text('moderator', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'moderator')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Topik Rapat') !!}
                        {!! Form::text('topik', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Topik Rapat')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Jumlah Peserta') !!}
                        {!! Form::number('jumlah', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Jumlah Peserta')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Kesimpulan') !!}
                        {!! Form::textarea('kesimpulan', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Kesimpulan')) !!}
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
