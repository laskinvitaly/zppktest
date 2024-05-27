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
                    <label for="spetsialnost">Специальность</label>
                    <select name="spetsialnost" class="custom-select">
                      
                      @foreach ($spets as $sp)
                      <option value="{{ $sp->id }}"@if($entrant->spetsialnost==$sp->id) selected @endif>{{ $sp->spets_name }}</option>
                      @endforeach
                      @if ($entrant->spetsialnost === null)
                        <option disabled selected hidden>Выберите специальность</option>
                      @endif
                    </select>
                  </div> 
                  
                  <div class="form-group">
                    <label for="rating">Рейтинг</label>
                    <input name="rating" type="text" class="form-control" placeholder="Введите рейтинг" value="{{ $entrant->rating }}">
                  </div> 

                  <div class="form-check">
                    <input name="sirota" type="checkbox" class="form-check-input" value="0" checked="true" style="display:none">
                    <input name="sirota" type="checkbox" class="form-check-input" value="1" {{ ($entrant->sirota === 1) ? 'checked' : '' }}>
                    <label for="sirota">Сирота</label>
                  </div>
                  <div class="form-check mb-3">
                    <input name="outregion" type="checkbox" class="form-check-input" value="0" checked="true" style="display:none">
                    <input name="outregion" type="checkbox" class="form-check-input" value="1" {{ ($entrant->outregion === 1) ? 'checked' : '' }}>
                    <label for="outregion">Другой регион</label>
                  </div>

                  <div class="form-group">
                    <label for="vkontakte">VKontakte</label>
                    <input name="vkontakte" type="text" class="form-control" placeholder="Введите отчество" value="{{ $entrant->vkontakte }}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input name="phone" type="text" class="form-control" placeholder="Введите отчество" value="{{ $entrant->phone }}">
                  </div>
                </div>
                
                <div class="tab-pane fade" id="custom-tabs-two" role="tabpanel" aria-labelledby="custom-tabs-two">
                  <div class="form-group">
                    <label for="exampleInputFile" style="font-size: 20px">Паспорт абитуриента</label>
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
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="passport_propiska">Прописка</label>
                        <input name="passport_propiska" type="text" class="form-control" placeholder="Прописка" value="{{ $entrant->passport_propiska }}">
                      </div>
                    </div> 
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="passport_dr">Дата рождения</label>
                        <input name="passport_dr" type="text" class="form-control" placeholder="00.00.0000" value="{{ $entrant->passport_dr }}">
                      </div>
                    </div> 
                  </div>

                  <div class="form-group mt-5">
                    <label for="exampleInputFile" style="font-size: 20px">Документ об образовании</label>
                    <p>
                      @if($entrant->document_on_education)
                      <a href="{{ asset('storage/'.$entrant->document_on_education) }}"  target="_blank">Скачать</a>                  
                    @endif  
                    </p>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="document_on_education" class="custom-file-input" accept=".jpg, .png, .pdf">
                        <label class="custom-file-label" for="document_on_education">Выбрать изображение</label>
                      </div>                            
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="document_on_education_name">Название</label>
                        <input name="document_on_education_name" type="text" class="form-control" placeholder="Название" value="{{ $entrant->document_on_education_name }}">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="document_on_education_year">Год выдачи</label>
                        <input name="document_on_education_year" type="text" class="form-control" placeholder="Год" value="{{ $entrant->document_on_education_year }}">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group mt-5">
                    <label for="exampleInputFile" style="font-size: 20px">СНИЛС абитуриента</label>
                    <p>
                      @if($entrant->snils)
                      <a href="{{ asset('storage/'.$entrant->snils) }}"  target="_blank">Скачать</a>                  
                    @endif  
                    </p>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="snils" class="custom-file-input" accept=".jpg, .png, .pdf">
                        <label class="custom-file-label" for="snils">Выбрать изображение</label>
                      </div>                            
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="snils_number">Номер СНИЛС</label>
                        <input name="snils_number" type="text" class="form-control" placeholder="000000000 00" value="{{ $entrant->snils_number }}">
                      </div>
                    </div>
                  </div>

                  <div class="form-group mt-5">
                    <label for="exampleInputFile" style="font-size: 20px">Медецинский сертификат</label>
                    <p>
                      @if($entrant->medical_certificate)
                      <a href="{{ asset('storage/'.$entrant->medical_certificate) }}"  target="_blank">Скачать</a>                  
                    @endif  
                    </p>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="medical_certificate" class="custom-file-input" accept=".jpg, .png, .pdf">
                        <label class="custom-file-label" for="medical_certificate">Выбрать изображение</label>
                      </div>                            
                    </div>
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputFile" style="font-size: 20px">Свидетельство о вакцинации</label>
                    <p>
                      @if($entrant->vaccination_certificate)
                      <a href="{{ asset('storage/'.$entrant->vaccination_certificate) }}"  target="_blank">Скачать</a>                  
                    @endif  
                    </p>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="vaccination_certificate" class="custom-file-input" accept=".jpg, .png, .pdf">
                        <label class="custom-file-label" for="vaccination_certificate">Выбрать изображение</label>
                      </div>                            
                    </div>
                  </div>
                </div> 
                
                <div class="tab-pane fade" id="custom-tabs-three" role="tabpanel" aria-labelledby="custom-tabs-three">
                  
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Предмет</th>
                        <th scope="col">Оценка</th>
                      </tr>
                    </thead>  
                    <tbody>
                      @foreach ($subj as $sub)
                      <tr>
                        <th scope="row">{{ $sub->id }}</th>
                        <td>
                            {{ $sub->subject_name }}
                        </td>
                        <td>
                          <div class="form-group mb-0">
                            <input name="ocenkas[]" type="text" class="form-control" placeholder="Оценка" 
                            value=
                            @foreach ($subj_ent as $sub_ent)
                              @if ($sub->id == $sub_ent->subject_id) 
                              {{ "$sub_ent->ocenka" }} 
                              @endif
                            @endforeach>
                          </div>
                        </td>
                      </tr>
                      {{-- <tr>
                        <th scope="row">{{ $sub->id }}</th>
                        <td>
                            {{ $sub->subject_name }}
                        </td>
                        <td>
                          <div class="form-group mb-0">
                            <input name="ocenka" type="text" class="form-control" placeholder="Оценка" 
                            value=
                            @foreach ($subj_ent as $sub_ent)
                              @if ($sub->id == $sub_ent->subject_id) 
                              {{ "$sub_ent->ocenka" }} 
                              @endif
                            @endforeach>
                          </div>
                        </td>
                      </tr> --}}
                      @endforeach
                    </tbody>

                  </table>
                  <a class="btn btn-block btn-success" style="max-width:150px; margin: 0 auto;" href="<?php echo e(route('entrant.ocenka',$entrant['id'])); ?>">Генерировать</a>
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