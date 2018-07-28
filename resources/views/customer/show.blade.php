@extends("layouts.master")
@section("styles")
    {!! Html::style("/assets/css/main.css") !!}
@endsection

@section('breadcrumb')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{!!URL::to('/')!!}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{!!URL::to('/customers')!!}">Clientes</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a>Detalle de cliente</a>
            </li>
        </ul>
    </div>
@endsection

@section("page-content")
    <div class="row content_container">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold">Detalle de cliente</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="horizontal-form">
                        <div class="form-body">

                            <div class="row">
                                <div class="col-md-6 form-group-container">
                                    <div class="form-group">
                                        <label class="control-label"><b>Nombre:</b></label>
                                        <label class="control-label">{{$customer->name}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group-container">
                                    <div class="form-group">
                                        <label class="control-label"><b>Dirección:</b></label>
                                        <label class="control-label">{{$customer->address}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group-container">
                                    <div class="form-group">
                                        <label class="control-label"><b>Teléfono:</b></label>
                                        <label class="control-label">{{$customer->phone}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group-container">
                                    <div class="form-group">
                                        <label class="control-label"><b>Correo electrónico:</b></label>
                                        <label class="control-label">{{$customer->email}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions left">
                        <a class="btn red" href="{{URL::route('customers.index')}}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script type="application/javascript">
        $(document).ready(function(){
            $("#liCus").addClass("active");
        });
    </script>
@endsection