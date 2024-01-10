@extends('admin.layout')
@section('title', 'Báo cáo tài chính')
@section('menu-data')
    <input type="hidden" name="" class="menu-data" value="statistic-group | statistic">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('manager/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #print-report:hover, #question-ans:hover{
            cursor: pointer;
            color: #070572;
        }
        .explain{
        white-space: pre-line;
        }
    </style>
@endsection()

@section('body')
aa
@endsection()


@section('sub_layout')


@endsection()
@section('js')

    <script src="{{ asset('manager/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('manager/assets/js/pages/dashboard-project.js') }}"></script>

    <script src="{{ asset('manager/assets/vendors/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('manager/assets/js/pages/dashboard-default.js') }}"></script>

        <!-- Core Vendors JS -->
        <script src="{{asset('manager/assets/js/vendors.min.js')}}"></script>

        <!-- page js -->
        <script src="{{asset('manager/assets/vendors/select2/select2.min.js')}}"></script>
        <script src="{{asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('manager/assets/vendors/quill/quill.min.js')}}"></script>
        <script src="{{asset('manager/assets/js/pages/form-elements.js')}}"></script>
        {{-- <script src="{{asset('manager/assets/js/app.min.js')}}"></script> --}}
@endsection()
