@extends('layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Абитуриенты</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>             
              <li class="breadcrumb-item"><a href="{{ route('entrant.index')}}">Абитуриенты</a></li>             
              <li class="breadcrumb-item active">Редактирование</li>
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
                <h3 class="card-title">Редактирование данных абитуриентов</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif                
          <div class="card card-primary card-outline card-tabs">
            <form class="p-3" action="{{ route('entrant.update',  $entrant->id ) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('patch')
            <div class="card-header p-0 pt-1 border-bottom-0">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#custom-tabs-one" role="tab" aria-controls="custom-tabs-one" aria-selected="true">Основные сведения</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#custom-tabs-two" role="tab" aria-controls="custom-tabs-two" aria-selected="false">Документы</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#custom-tabs-three" role="tab" aria-controls="custom-tabs-three" aria-selected="false">Сведения об успеваемости</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-one" role="tabpanel" aria-labelledby="custom-tabs-one">
                 <div class="form-group">
                    <label for="family">Фамилия</label>
                    <input name="family" type="text" class="form-control" placeholder="Введите фамилию" value="{{ $entrant->user->family }}">
                  </div>
                  <div class="form-group">
                    <label for="name">Имя</label>
                    <input name="name" type="text" class="form-control" placeholder="Введите имя" value="{{ $entrant->user->name }}">
                  </div>
                  <div class="form-group">
                    <label for="patronymic">Отчество</label>
                    <input name="patronymic" type="text" class="form-control" placeholder="Введите отчество" value="{{ $entrant->user->patronymic }}">
                  </div>
                  <div class="form-group">
                    <label for="spetsialnost_id">Специальность</label>
                    <select name="spetsialnost_id" class="custom-select">
                      <option value="">--Выберите значение из списка--</option>
                      {{-- @foreach ($categoryes as $category)
                      <option value="{{ $category->id }}" @if($category->id==$product->category_id) selected @endif>{{ $category->name }}</option>
                      @endforeach --}}
                    </select>
                  </div> 
                  <div class="form-group">
                    <label for="rating">Рейтинг</label>
                    <input name="rating" type="text" class="form-control" placeholder="Введите рейтинг" value="0">
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two" role="tabpanel" aria-labelledby="custom-tabs-two">
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Паспорт абитуриента</label>
                    <p>
                      @if($entrant->passport)
                      <a href="{{ asset('storage/'.$entrant->passport) }}"  target="_blank">Скачать</a>                  
                    @endif  
                    </p>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="passport" class="custom-file-input" accept=".jpg, .png, .pdf">
                        <label class="custom-file-label" for="passport">Выбрать изображение</label>
                      </div>                            
                    </div>
                  </div> 
                  <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="passport_seria">Серия</label>
                      <input name="passport_seria" type="text" class="form-control" placeholder="0000" value="{{ $entrant->passport_seria }}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="passport_number">Номер</label>
                      <input name="passport_number" type="text" class="form-control" placeholder="000000" value="{{ $entrant->passport_number }}">
                    </div>
                  </div> 
                  </div>
                </div> 
                <div class="tab-pane fade" id="custom-tabs-three" role="tabpanel" aria-labelledby="custom-tabs-three">
                  
                  Добавлю поля
                 
                                          
                 </div>                     
              </div>
            </div>
            <div class="card-footer">                    
              <div>
                <button type="submit"  class="btn btn-primary my-3">Изменить</button>
              </div>                 
              
            </div>
          </form>
            <!-- /.card -->
          </div> 
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