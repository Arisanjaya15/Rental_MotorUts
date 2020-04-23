@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <div class="panel-body">
            <div class="col-lg-12">
            <div class="col-lg-6">
                <blockquote col="col-md-12">
                        <b>BIODATA</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Nama
                        </div>
                        <div class="col-md-8 no-margin">
                            I Putu Ari Sanjaya
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Nim
                        </div>
                        <div class="col-md-8 no-margin">
                            1815051093
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            progrma study
                        </div>
                        <div class="col-md-8 no-margin">
                            Pendidikan Teknik Informatika
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                 <blockquote col="col-md-12">
                        <b>STUDI KASUS</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            judul
                        </div>
                        <div class="col-md-8 no-margin">
                            Sistem Rental Motor
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            penjelasan
                        </div>
                        <div class="col-md-8 no-margin">
                        Sistem rental motor ini bertujuan untuk mempermudah pelanggan dalam memilih motor yang akan disewa dan di gunakan 
                        </div>
                    </div>
            </div>
            </div>
            <div class="col-lg-12">
            <a href="{{route('rental.create')}}">Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>MOTOR</th><th>PLAT</th><th>WARNA</th><th>TAHUN</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($motor as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->merk_motor}}</td><td>{{$val->plat_motor}}</td><td>{{$val->warna_motor}}</td><td>{{$val->tahun_motor}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->id_motor)}}">update</a>
                        <form action="{{route('rental.destroy', $val->id_motor)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$motor->links()}}
            </div>
        </div>
    </div>
</div>
@endsection