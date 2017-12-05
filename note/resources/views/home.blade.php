@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <a href="{{ route('Acara.create') }}" class="btn btn-primary">Tambah Acara</a>
                        <a href="{{ route('Notulensi.create')}}" class="btn btn-primary"> Tambah Notulensi </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
