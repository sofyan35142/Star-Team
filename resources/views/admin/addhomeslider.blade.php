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
                            
                        </div>
                    </div>
                    <div class="panel-body">
                       <form class="form-horizontal" method="post" action="/insertslider" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Judul</label>
                            <div class="col-md-4">
                                <input type="text" name="judul" placeholder="Judul" class="form-control input-md" wire:model="judul"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Subjudul</label>
                            <div class="col-md-4">
                                <input type="text" name="subjudul" placeholder="Subjudul" class="form-control input-md" wire:model="subjudul"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga</label>
                            <div class="col-md-4">
                                <input type="number" name="harga" placeholder="Harga" class="form-control input-md" wire:model="harga"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Link</label>
                            <div class="col-md-4">
                                <input type="text" name="link" placeholder="Link" class="form-control input-md" wire:model="link"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Foto</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" name="foto"/>
                                {{-- @If($gambar)
                                    <img src="{{$gambar->temporaryUrl()}}" width="120" />
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control" name="status" wire:model="status">
                                    <option value="0">inactiv</option>
                                    <option value="1">activ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Submit</label>
                            <div class="col-md-4">
                                

                        <div class="form-group">
                            <label class="col-md-4 control-label">Submit</label>
                            <div class="col-md-4">
                               <button type="submit" class="btn-btn primary">Submit</button>
                            </div>
                        </div>
                       </form>
                    </div>
                </div>
            </div>

        </div>
@endsection         