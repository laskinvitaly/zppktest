@extends('front.layouts.main')
@section('content')
  <h1 class="entrant-title">Личный кабинет абитуриента</h1>
  
  <table class="entarnt-table">
    <thead class="table-body">
      <tr>
        <th>Фамилия:</th>
        <th>Имя:</th>
        <th>Отчество:</th>
        <th>Телефон:</th>
        <th>Эл. почта:</th>
      </tr>
    </thead>
    <tbody class="table-body">
      <tr>
        <td>{{ $user->family }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->patronymic }}</td>
        <td>{{ $user->entrants->first()->phone }}</td>
        <td>{{ $user->email }}</td>
      </tr>
    </tbody>
  </table>

  <form class="entrants" action="{{ route('front.entrant.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @if(is_null($user->entrants->first()->passport))
    <div class="form-entrant">
      <label for="">Ксерокопия паспорта</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="passport">
        </div>
      </div>
    </div>
    @endif
    <div class="form-entrant">
      <label for="">Документ государсвенного образца об образовании</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="document_on_education">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">Медицинская справка 0-8бу</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="medical_certificate">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">Сертификат о профилактических прививках</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="vaccination_certificate">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">СНИЛС</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="snils">
        </div>
      </div>
    </div>

    <button type="submit" class="btn-entrant">Отправить</button>
  </form>
@endsection