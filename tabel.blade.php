@extends('main')

@section('title', 'Galeri')

@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Galeri</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fas fa-table"></i>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="content mt-3">
        <figure class="figure">
            <img width="200" height="200" src="{{ asset('style/images/arya.jpg') }}" class="img-thumbnail" alt="Hallo">
            <img width="200" height="200" src="{{ asset('style/images/aku2.jpg') }}" class="img-thumbnail" alt="Hallo">
            <img width="200" height="200" src="{{ asset('style/images/aku4.jpg') }}" class="img-thumbnail" alt="Hallo">
            <img width="200" height="200" src="{{ asset('style/images/aku6.jpg') }}" class="img-thumbnail" alt="Hallo">
            <img width="200" height="200" src="{{ asset('style/images/lala.jpg') }}" class="img-thumbnail" alt="Hallo">
        </figure>

    </div>

@endsection