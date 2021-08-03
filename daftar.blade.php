@extends('main')

@section('title', 'Biodata diri')

@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Biodata diri</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fas fa-home"></i>
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

                <blockquote class="blockquote">
                    <p>Biodata diri saya :</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Nama Lengkap : ARYA YUDHA PRATAMA
                </figcaption>
                <figcaption class="blockquote-footer">
                    Nama Panggilan : ARYA
                </figcaption>
                <figcaption class="blockquote-footer">
                    Tempat & Tanggal Lahir : Cilacap, 05 September 2003
                </figcaption>
                <figcaption class="blockquote-footer">
                    Tinggi Badan : 170 cm
                </figcaption>
                <figcaption class="blockquote-footer">
                    Berat Badan : 65 Kg
                </figcaption>
                <figcaption class="blockquote-footer">
                    Hobby : Main game
                </figcaption>
            </figure>
    </div>
@endsection