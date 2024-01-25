@extends('admin.layout')
@section('title', 'Báo cáo tài chính')
@section('menu-data')
    <input type="hidden" name="" class="menu-data" value="statistic-group | statistic">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection()


@section('body')
<div class="tab-pane fade active show" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
    <div class="row m-b-20">
        <div class="col-md-6 col-sm-6">
            <h3>Báo cáo tồn kho</h3>
        </div>
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-2 col-sm-2">
            <div id="print-report" class="font-weight-bold">
                Xuất báo cáo <i class="far fa-arrow-alt-circle-down"></i>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <div id="question-ans" class="font-weight-bold" data-toggle="modal" data-target=".bd-example-modal-lg">
                Giải thích thuật ngữ <i class="far fa-question-circle"></i>
            </div>
        </div>
    </div>
    <div class="row m-b-50">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <div class="row">
                    <label class="font-weight-bold">Thời gian:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control datepicker-input" name="end" placeholder="To">
                    </div>
                    <div class="col-md-6 col-sm-2">
                        <button class="btn btn-success m-l-5"><i class="fas fa-filter"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="m-t-25">
                <table id="data-table" class="table"> </table>
            </div>
        </div>
    </div>
    

@endsection()


@section('js')
    
    <script src="{{ asset('manager/assets/js/page/statisticInventory.js') }}"></script>

@endsection()

