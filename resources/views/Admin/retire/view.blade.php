@extends('Admin.layouts.app')

@section ('title') {{ $page_title }} @stop

@section('content')

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                <fieldset class="form-horizontal">
                    <form role="form" method="post" action="{{ url('admin/retire/submit/' . $retire->id ) }}">
                        {{ csrf_field() }}
                        <legend>Solicitud de retiro</legend>
                        <div class="form-group">
                            <label>Fecha de generacion</label>
                            <input type="text" class="form-control" value="{{ $retire->created_at }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Plan</label>
                            <input type="text" class="form-control" value="{{ $plan->plan }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Monto</label>
                            <input type="text" class="form-control" value="{{ $retire->amount }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>BTC</label>
                            <input type="text" class="form-control" value="{{ $usuario->btc }}" readonly>
                        </div>
                        @if($retire->done == 0)
                        <div>
                            <button class="btn btn-primary m-t-n-xs" type="submit"><strong>Solicitud completada</strong></button>
                            <a class="btn btn-danger m-t-n-xs" href="{{ url('admin/retire/cancel/' . $retire->id ) }}">Cancelar solicitud</a>
                        </div>
                        @endif
                    </form>
                </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('css')
    <link href="{{ asset('backoffice/css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('backoffice/js/jasny/jasny-bootstrap.min.js')}}"></script>
@endsection