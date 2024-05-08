@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Form Create') }}</h1>
                    <a href="{{ route('admin.travel_packages.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                        <form method="post" action="{{ route('admin.travel_packages.store') }}">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" value="{{ old('type') }}" id="type" placeholder="example: 4D5N">
                                </div>
                            </div>
                            {{--  <div class="form-group row border-bottom pb-4">
                                <label for="boats_id" class="col-sm-2 col-form-label">Boats</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="boats_id" id="boats_id">
                                        @foreach($boat as $data)
                                            <option {{ (old('boats_id') == $data->id) ? 'selected' : '' }} value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="trips_id" class="col-sm-2 col-form-label">Jenis Trip</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="trips_id" id="trips_id">
                                        @foreach($trip as $data)
                                            <option {{ (old('trips_id') == $data->id) ? 'selected' : '' }} value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>  --}}
                            <div class="form-group row border-bottom pb-4">
                                <label for="Location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                <input text="text" class="form-control" id="Location" name="location" value="{{ old('location') }}" placeholder="example: Komodo, Waerebo, Flores, Sumba">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                <input name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" name="type" id="description" cols="30" rows="7" placeholder="Description text...">{{ old('description') }}</textarea>
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

@section('styles')
<style>
.ck-editor__editable_inline {
    min-height: 200px;
}
</style>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>

    var price = document.getElementById('price');
        price.addEventListener('keyup', function(e)
        {
            price.value = formatRupiah(this.value, 'Rp. ');
        });

        function formatRupiah(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 3,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
