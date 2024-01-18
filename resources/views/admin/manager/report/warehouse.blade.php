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
    {{-- <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="data-table_length">
        <label>
        Hiển thị <select name="data-table_length" aria-controls="data-table" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
            </select> 
            mục
        </label>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div id="data-table_filter" class="dataTables_filter">
                <label>Search:
                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table">
                </label>
            </div>
        </div>
    </div>
        <div class="row"><div class="col-sm-12"><table id="data-table" class="table dataTable" role="grid" aria-describedby="data-table_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 15.475px;">STT</th>
                <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 267.075px;">Tên sản phẩm</th>
                <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 117.562px;">Loại sản phẩm</th>
                <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 117.562px;">Giới tính</th>
                <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 159.375px;">Tồn kho</th>
                <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150.375px;">Giá trị tồn kho</th>
            </tr>
        </thead>
        <tbody>        
          <tr role="row" class="odd">
                <td class="sorting_1">1</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>2008</td>
                <td>$162,700</td>
            </tr>
            <tr role="row" class="odd">
                <td class="sorting_1">2</td>
                <td>Nước hoa Versace</td>
                <td>150ml</td>
                <td>Nam</td>
                <td>208</td>
                <td>$30,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">3</td>
                <td>Nước hoa Chanel</td>
                <td>10ml</td>
                <td>Nam</td>
                <td>1048</td>
                <td>$70,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">4</td>
                <td>Nước hoa Dior</td>
                <td>50ml</td>
                <td>Nữ</td>
                <td>308</td>
                <td>$45,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">5</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>27</td>
                <td>$20,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">6</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>85</td>
                <td>$78,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">7</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>146</td>
                <td>$66,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">8</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>256</td>
                <td>$162,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">9</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>478</td>
                <td>$55,700</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1">10</td>
                <td>Nước hoa Dior</td>
                <td>100ml</td>
                <td>Nam</td>
                <td>48</td>
                <td>$14,700</td>
            </tr>
        </tbody>
    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div> --}}

    <div class="table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-hover e-commerce-table dataTable no-footer" id="DataTables_Table_0"
                        role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                {{-- <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label=": activate to sort column descending"
                                    style="width: 48.075px;">
                                    <div class="checkbox">
                                        <input id="checkAll" type="checkbox">
                                        <label for="checkAll" class="m-b-0"></label>
                                    </div>
                                </th> --}}
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="ID: activate to sort column ascending"
                                    style="width: 28.375px;">STT</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Product: activate to sort column ascending"
                                    style="width: 250.825px;">Tên sản phẩm</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Category: activate to sort column ascending"
                                    style="width: 70.025px;">Loại sản phẩm</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Price: activate to sort column ascending" style="width: 50.2px;">
                                    Giới tính</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Stock Left: activate to sort column ascending"
                                    style="width: 100.7375px;">Tồn kho</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Status: activate to sort column ascending"
                                    style="width: 108.688px;">Giá trị tồn kho</th>
                            </tr>
                        </thead>
                        <tbody>        
                            <tr role="row" class="odd">
                                  <td class="sorting_1">1</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>2008</td>
                                  <td>$162,700</td>
                              </tr>
                              <tr role="row" class="odd">
                                  <td class="sorting_1">2</td>
                                  <td>Nước hoa Versace</td>
                                  <td>150ml</td>
                                  <td>Nam</td>
                                  <td>208</td>
                                  <td>$30,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">3</td>
                                  <td>Nước hoa Chanel</td>
                                  <td>10ml</td>
                                  <td>Nam</td>
                                  <td>1048</td>
                                  <td>$70,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">4</td>
                                  <td>Nước hoa Dior</td>
                                  <td>50ml</td>
                                  <td>Nữ</td>
                                  <td>308</td>
                                  <td>$45,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">5</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>27</td>
                                  <td>$20,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">6</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>85</td>
                                  <td>$78,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">7</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>146</td>
                                  <td>$66,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">8</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>256</td>
                                  <td>$162,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">9</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>478</td>
                                  <td>$55,700</td>
                              </tr><tr role="row" class="odd">
                                  <td class="sorting_1">10</td>
                                  <td>Nước hoa Dior</td>
                                  <td>100ml</td>
                                  <td>Nam</td>
                                  <td>48</td>
                                  <td>$14,700</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">1</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>2008</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">2</td>
                                <td>Nước hoa Versace</td>
                                <td>150ml</td>
                                <td>Nam</td>
                                <td>208</td>
                                <td>$30,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">3</td>
                                <td>Nước hoa Chanel</td>
                                <td>10ml</td>
                                <td>Nam</td>
                                <td>1048</td>
                                <td>$70,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">4</td>
                                <td>Nước hoa Dior</td>
                                <td>50ml</td>
                                <td>Nữ</td>
                                <td>308</td>
                                <td>$45,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">5</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>27</td>
                                <td>$20,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">6</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>85</td>
                                <td>$78,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">7</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>146</td>
                                <td>$66,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">8</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>256</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">9</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>478</td>
                                <td>$55,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">10</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>48</td>
                                <td>$14,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">1</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>2008</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">2</td>
                                <td>Nước hoa Versace</td>
                                <td>150ml</td>
                                <td>Nam</td>
                                <td>208</td>
                                <td>$30,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">3</td>
                                <td>Nước hoa Chanel</td>
                                <td>10ml</td>
                                <td>Nam</td>
                                <td>1048</td>
                                <td>$70,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">4</td>
                                <td>Nước hoa Dior</td>
                                <td>50ml</td>
                                <td>Nữ</td>
                                <td>308</td>
                                <td>$45,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">5</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>27</td>
                                <td>$20,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">6</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>85</td>
                                <td>$78,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">7</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>146</td>
                                <td>$66,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">8</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>256</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">9</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>478</td>
                                <td>$55,700</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">10</td>
                                <td>Nước hoa Dior</td>
                                <td>100ml</td>
                                <td>Nam</td>
                                <td>48</td>
                                <td>$14,700</td>
                            </tr>
                          </tbody>
                       

            </div>
        </div>
    </div>

</div>



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

        <script src="{{ asset('manager/assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('manager/assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('manager/assets/js/pages/e-commerce-order-list.js') }}"></script>
        <script src="{{ asset('manager/assets/js/template.js') }}"></script>
@endsection()
