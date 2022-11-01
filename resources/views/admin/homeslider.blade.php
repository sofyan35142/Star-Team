@extends('admin.index.index')
@section('content')
@include('koneksi.css')
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Slider
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('addhomeslider')}}" class="btn btn-success pull-right">add new</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Subjudul</th>
                                    <th>Harga</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $slider )
                                    <tr>
                                        <td>{{$slider->id}}</td>
                                        <td><img src="{{asset('fotoslider/'.$slider->foto)}}" width="120"/></td>
                                        <td>{{$slider->judul}}</td>
                                        <td>{{$slider->subjudul}}</td>
                                        <td>{{$slider->harga}}</td>
                                        <td>{{$slider->link}}</td>
                                        <td>{{$slider->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{$slider->created_at}}</td>
                                        <td>
                                            <a href="/edithomeslider/{{$slider->id}}" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger delete" data-id="{{$slider->id}}" data-nama="{{$slider->nama}}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
@endsection         