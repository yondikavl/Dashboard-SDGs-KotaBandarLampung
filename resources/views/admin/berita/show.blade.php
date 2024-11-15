
@extends('layouts.admin.app')

@section('title', 'Read Berita')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Berita</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-form-label">Judul Berita</label>
                                        <input type="text" class="form-control" placeholder="Judul Berita"
                                            name="judul_berita" id="judul_berita" value="{{ $berita->judul_berita }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Konten Berita</label>
                                        <textarea class="form-control konten_berita" name="konten_berita" id="konten_berita"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Waktu Berita</label>
                                        <input type="text" class="form-control" placeholder="Waktu Berita"
                                            name="judul_berita" id="judul_berita" value="{{ $berita->waktu_berita}}" disabled>
                                    </div>
                                    <div class="">
                                        @if (auth()->user()->roles_id == 1)
                                          <a class="btn btn-success" href="/super/berita/">{{ __('Kembali') }}</a>
                                        @elseif (auth()->user()->roles_id == 2)
                                          <a class="btn btn-success" href="/admin/berita/">{{ __('Kembali') }}</a>
                                        @endif
                                      </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.card -->

    <script src="https://cdn.tiny.cloud/1/icjjp2cihw6xqy0lhyvw78k3f4u9suo4mfgmisljt20jqi5b/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
    <script type="text/javascript">
        tinymce.init({
        selector: 'textarea.konten_berita',
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        init_instance_callback(editor) {
            editor.setContent( {!! json_encode($berita->konten_berita) !!} );
            editor.setMode('readonly');
        },
        toolbar: '',
        readonly: true,
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
    </script>
@endsection
