@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Form Create') }}</h1>
                    <a href="{{ route('admin.boats.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.boats.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="example: platinum1">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="cabin" class="col-sm-2 col-form-label">Cabins</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="cabin" id="cabin" value="{{ old('cabin') }}" placeholder="example: 11 cabins">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="person" class="col-sm-2 col-form-label">Person</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="person" id="person" value="{{ old('person') }}" placeholder="example: 6 person">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="available" class="col-sm-2 col-form-label">Available</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="available" id="available" value="{{ old('available') }}" placeholder="example: OPEN">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
