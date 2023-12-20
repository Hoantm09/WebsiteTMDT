@extends('admin.layout')
@section('title', 'Sản phẩm')
@section('menu-data')
    <input type="hidden" name="" class="menu-data" value="manager-group | product">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('manager/assets/css/app.min.css') }}" rel="stylesheet">

    <link href="{{ asset('manager/assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">

@endsection()

@section('body')


<div class="page-header no-gutters">
    <div class="row align-items-md-center">
        <div class="col-md-6">
            <div class="media m-v-10">
                <div class="avatar avatar-cyan avatar-icon avatar-square">
                    <i class="anticon anticon-star"></i>
                </div>
                <div class="media-body m-l-15">
                    <h6 class="mb-0">Vận chuyển</h6>
                    <span class="text-gray font-size-13">Quản lý vận đơn</span>
                </div>
            </div>
        </div>

    </div>
</div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-8">
                    <div class="d-md-flex">
                        <div class="m-b-10">
                            <select class="custom-select" style="min-width: 180px;">
                                <option selected="">Status</option>
                                <option value="all">All</option>
                                <option value="approved">Approved</option>
                                <option value="pending">Pending</option>
                                <option value="rejected">Rejected</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <button class="btn btn-primary">
                        <i class="anticon anticon-file-excel m-r-5"></i>
                        <span>Export</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover e-commerce-table dataTable no-footer" id="DataTables_Table_0"
                                role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ID: activate to sort column ascending"
                                            style="width:10%;">Mã vận đơn</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Customer: activate to sort column ascending"
                                            style="width: 10%;">Mã đơn hàng</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Date: activate to sort column ascending"
                                            style="width: 15%;">Khách hàng</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Amount: activate to sort column ascending"
                                            style="width: 15%;">Đơn vị vận chuyển</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending"
                                            style="width: 15%;">COD và Phí trả</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ID: activate to sort column ascending"
                                            style="width:10%;">Trạng thái</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label=": activate to sort column ascending" style="width: 10%;">
                                        </th>
                                               
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="even">
                                        <td>
                                            #5331
                                        </td>
                                        <td>
                                            #5375
                                        </td>
                                        <td>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-blue m-r-10">Nguyễn Công Quyền</span>
                                            </div>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-green m-r-10">0866888222</span>
                                            </div>
                                        </td>
                                        <td>Giao hàng nhanh</td>
                                        <td>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-green m-r-10">Phí trả ĐVVC: 40,000</span>
                                            </div>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-red m-r-10">Thu hộ COD: 0</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="badge badge-success badge-dot m-r-10"></div>
                                                <div>Chờ lấy hàng</div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <a class="view-data " style="cursor: pointer" href="#"><i class="anticon anticon-eye"></i></a>
                                            </button>   
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td>
                                            #12
                                        </td>
                                        <td>
                                            #14
                                        </td>
                                        <td>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-blue m-r-10">Nguyễn Văn Huy</span>
                                            </div>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-green m-r-10">0866888222</span>
                                            </div>
                                        </td>
                                        <td>Bk-eShop</td>
                                        <td>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-green m-r-10">Phí trả ĐVVC: 40,000</span>
                                            </div>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-red m-r-10">Thu hộ COD: 0</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="badge badge-danger badge-dot m-r-10"></div>
                                                <div>Hủy giao hàng</div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <a class="view-data " style="cursor: pointer" href="#"><i class="anticon anticon-eye"></i></a>
                                            </button>                                            
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection()

@section('js')
    <script src="{{ asset('manager/assets/js/page/staff_customer.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core Vendors JS -->
    <script src="{{ asset('manager/assets/js/vendors.min.js') }}"></script>

    <!-- page js -->
    <script src="{{ asset('manager/assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('manager/assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('manager/assets/js/pages/e-commerce-order-list.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('manager/assets/js/app.min.js') }}"></script>

@endsection()
