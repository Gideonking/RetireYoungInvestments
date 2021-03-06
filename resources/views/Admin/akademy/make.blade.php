@extends('Admin.layouts.app')

@section ('title') {{ $page_title }} @stop

@section ('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><h5>Asignacion de cursos a usuarios</h5></div>
                <div class="ibox-content">
                    Seleccionar usuario
                    <form class="form-horizontal" role="form" method="post" action="{{ url('/admin/akademy/send') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Usuario</label>
                            <select name="user_id" class="chosen-select">
                                <option selected disabled>Usuario</option>
                                @foreach($users as $user )
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label>Curso</label>
                            <select name="course_id" class="chosen-select">
                                <option selected disabled>Curso</option>
                                @foreach($courses as $course )
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                          </select>
                        </div>
                        <div class="mail-body text-right tooltip-demo">
                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-reply"></i> Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection

@section('css')
  <link href="{{ asset('css/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
  <link href="{{ asset('css/iCheck/custom.css')}}" rel="stylesheet">
  <link href="{{ asset('css/datepicker/datepicker3.css')}}" rel="stylesheet">
@endsection

@section('scripts')
  <script src="{{ asset('js/chosen/chosen.jquery.js')}}"></script>
  <script src="{{ asset('js/datepicker/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/iCheck/icheck.min.js')}}"></script>
  <script>
    $('.chosen-select').chosen({
      width: "100%",
      no_results_text: "No se encontró resultados"
    });
  </script>
@endsection