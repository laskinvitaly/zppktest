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

    <div class="form-entrant">
      <label for="spetsialnost">Специальность</label>
      <select name="spetsialnost" class="custom-select custom-file">
        @foreach ($spets as $sp)
          <option value="{{ $sp->id }}"@if($user->entrants->first()->spetsialnost==$sp->id) selected @endif>{{ $sp->spets_name }}</option>
        @endforeach
        @if ($user->entrants->first()->spetsialnost === null)
          <option disabled selected hidden>Выберите специальность</option>
        @endif
      </select>
    </div> 

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

    @if(is_null($user->entrants->first()->document_on_education))
    <div class="form-entrant">
      <label for="">Документ государсвенного образца об образовании</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="document_on_education">
        </div>
      </div>
    </div>
    @endif
    
    @if(is_null($user->entrants->first()->medical_certificate))
    <div class="form-entrant">
      <label for="">Медицинская справка 0-8бу</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="medical_certificate">
        </div>
      </div>
    </div>
    @endif
    
    @if(is_null($user->entrants->first()->vaccination_certificate))
    <div class="form-entrant">
      <label for="">Сертификат о профилактических прививках</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="vaccination_certificate">
        </div>
      </div>
    </div>
    @endif
    
    @if(is_null($user->entrants->first()->snils))
    <div class="form-entrant">
      <label for="">СНИЛС</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile" name="snils">
        </div>
      </div>
    </div>
    @endif
    

    <button type="submit" class="btn-entrant">Отправить</button>
  </form>
@endsection