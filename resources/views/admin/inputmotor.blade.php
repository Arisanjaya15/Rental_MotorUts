@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($motor))?route('rental.update',$motor->id_motor):route('rental.store')}}" method="POST">
        @csrf
        @if(isset($motor))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Merk Motor</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($motor))?$motor->merk_motor:old('merk_motor')}}" name="merk_motor" class="form-control">
                    @error('merk_motor')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Plat Motor</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($motor))?$motor->plat_motor:old('plat_motor')}}" name="plat_motor" class="form-control">
                    @error('plat_motor')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Warna Motor</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($motor))?$motor->warna_motor:old('warna_motor')}}" name="warna_motor" class="form-control">
                    @error('warna_motor')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tahun Motor</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($motor))?$motor->tahun_motor:old('tahun_motor')}}" name="tahun_motor" class="form-control">
                    @error('tahun_motor')<small style="color:red">{{$message}}</small>@enderror
                </div>
            </div>
            
            
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
@endsection