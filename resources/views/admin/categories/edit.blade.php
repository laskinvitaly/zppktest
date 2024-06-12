 @extends('layouts.main')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{ route('category.index')}}">Категории</a></li>
              <li class="breadcrumb-item active">Изменение</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Изменение категорий</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <form class="p-3" action="{{ route('category.update', $category->id) }}" method="POST">
                  @csrf
                  @method('patch')
                    <div class="form-group">
                      <label for="categori">Название категории</label>
                      <input name="categori" type="text" class="form-control" value="{{ $category->categori }}" placeholder="Введите название">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Обновить</button>                    
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