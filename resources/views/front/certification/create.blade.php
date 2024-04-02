@extends('front.layouts.main')


@section('content')
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
  <div class="content-wrapper" style="margin-left: 0; background-color: unset;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style="justify-content: center;">
            <h1 class="m-0">Новое портфолио</h1>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="max-width: 100%;">
              <div class="card-header">
                <h3 class="card-title">Разместите информацию о вашей деятельности</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  <form class="p-3" enctype="multipart/form-data" action="<?php echo e(route('front.certification.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="">Имя Преподавателя</label>
                        <br>
                        <p>{{ $user["family"] }} {{ $user["name"] }} {{ $user["patronymic"] }}</p>
                      </div>
                      <div class="form-group">
                        <label for="">Стаж работы</label>
                        <input type="text" required name="experience" class="form-control" placeholder="Введите">
                      </div>
                      <div class="form-group">
                        <label for="">Специальность</label>
                        <input type="text" required name="specialization" class="form-control" placeholder="Введите">
                      </div>
                      <div class="form-group">
                        <label for="">Подробно расскажите о вашей деятельности, опыте работы, стаже и т.п.</label>
                        <textarea class="form-control" required name="content" required rows="3" placeholder="Enter ..."></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Ваша фотография</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" required id="imageInput2" name="photo" accept=".jpg, .jpeg, .png">
                            <label class="custom-file-label" for="exampleInputFile2">Фотография</label>
                          </div>
                        </div>
                        <img id="previewImage2" src="#" alt="Preview Image" style="display: none; width: 400px; margin-top: 10px">
                        <script>
                            const imageInput = document.getElementById('imageInput2');
                            const previewImage = document.getElementById('previewImage2');

                            imageInput.addEventListener('change', function() {
                                const file = this.files[0];
                                
                                if (file) {
                                    const reader = new FileReader();
                                    
                                    reader.onload = function(e) {
                                        previewImage.src = e.target.result;
                                        previewImage.style.display = 'block';
                                    }
                                    
                                    reader.readAsDataURL(file);
                                }
                        });
                        </script>
                      </div>
                      <div class="form-group">
                        <label for="">Изображения грамот, дипломов и сертификатов</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" required id="imageInput" name="images[]" multiple accept=".jpg, .jpeg, .png">
                            <label class="custom-file-label" for="exampleInputFile">Фотография</label>
                          </div>
                        </div>
                        <style>
                          #previewImages {
                            display: flex;
                            align-items: center;
                            flex-wrap: wrap;
                            margin-top: 10px;
                          }
                          #previewImages img {
                            width: 200px;
                          }
                        </style>
                        <div id="previewImages"></div>
                      </div>
                      <script>
                        document.getElementById('imageInput').addEventListener('change', function() {
                            const files = Array.from(this.files);
                            document.getElementById('previewImages').innerHTML = '';

                            files.forEach(file => {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    const img = document.createElement('img');
                                    img.src = e.target.result;
                                    document.getElementById('previewImages').appendChild(img);
                                };
                                reader.readAsDataURL(file);
                            });
                        });
                      </script>
                      <button type="submit" class="btn btn-primary">Создать</button>                    
                  </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>         
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection