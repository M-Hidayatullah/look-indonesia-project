@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Web Config') }}</h1>
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
                    <div class="card">
                        <form action="{{ route('admin.web_config.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <label for="domain_web" class="col-sm-2 col-form-label">Domain Web</label>
                                    <input type="text" name="domain_web" id="domain_web"
                                           class="form-control @error('domain_web') is-invalid @enderror"
                                           placeholder="{{ __('Domain Web') }}" value="{{ old('domain_web', $config->domain_web) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('domain_web')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="link_instagram" class="col-sm-2 col-form-label">Link Instagram</label>
                                    <input type="text" name="link_instagram" id="link_instagram"
                                           class="form-control @error('link_instagram') is-invalid @enderror"
                                           placeholder="{{ __('Link Instagram') }}" value="{{ old('link_instagram', $config->link_instagram) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('link_instagram')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="link_facebook" class="col-sm-2 col-form-label">Link Facebook</label>
                                    <input type="text" name="link_facebook" id="link_facebook"
                                           class="form-control @error('link_facebook') is-invalid @enderror"
                                           placeholder="{{ __('Link Facebook') }}" value="{{ old('link_facebook', $config->link_facebook) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('link_facebook')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="link_youtube" class="col-sm-2 col-form-label">Link Youtube</label>
                                    <input type="text" name="link_youtube" id="link_youtube"
                                           class="form-control @error('link_youtube') is-invalid @enderror"
                                           placeholder="{{ __('Link Youtube') }}" value="{{ old('link_youtube', $config->link_youtube) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('link_youtube')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="linktree" class="col-sm-2 col-form-label">Linktree</label>
                                    <input type="text" name="linktree" id="linktree"
                                           class="form-control @error('linktree') is-invalid @enderror"
                                           placeholder="{{ __('Linktree') }}" value="{{ old('linktree', $config->linktree) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('linktree')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="link_twitter" class="col-sm-2 col-form-label">Link Twitter</label>
                                    <input type="text" name="link_twitter" id="link_twitter"
                                           class="form-control @error('link_twitter') is-invalid @enderror"
                                           placeholder="{{ __('link twitter') }}" value="{{ old('link_twitter', $config->link_twitter) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('link_twitter')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="link_maps" class="col-sm-2 col-form-label">Link Maps</label>
                                    <textarea class="form-control" name="link_maps" id="link_maps" cols="30" rows="7">{{ old('link_maps', $config->link_maps) }}</textarea>
                                    </div>
                                    @error('link_maps')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                                    <input type="text" name="no_telp" id="no_telp"
                                           class="form-control @error('no_telp') is-invalid @enderror"
                                           placeholder="{{ __('No Telpon') }}" value="{{ old('no_telp', $config->no_telp) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('no_telp')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="no_wa_booking" class="col-sm-2 col-form-label">No Wa Booking</label>
                                    <input type="text" name="no_wa_booking" id="no_wa_booking"
                                           class="form-control @error('no_wa_booking') is-invalid @enderror"
                                           placeholder="{{ __('No Wa Booking') }}" value="{{ old('no_wa_booking', $config->no_wa_booking) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('no_wa_booking')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="about_company" class="col-sm-2 col-form-label">About Company</label>
                                    <textarea class="form-control" name="about_company" id="about_company" cols="30" rows="7">{{ old('about_company', $config->about_company) }}</textarea>
                                    @error('about_company')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <label for="name_company" class="col-sm-2 col-form-label">Name Company</label>
                                    <input type="text" name="name_company" id="name_company"
                                           class="form-control @error('name_company') is-invalid @enderror"
                                           placeholder="{{ __('Name Company') }}" value="{{ old('name_company', $config->name_company) }}" required>
                                    <div class="input-group-append">
                                    </div>
                                    @error('name_company')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">{{ __('Update Config') }}</button>
                            </div>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('scripts')
    @if ($message = Session::get('success'))
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            toastr.success('{{ $message }}')
        </script>
    @endif
@endsection
