@extends('admin.layout')
@section('title', 'Sản phẩm')
@section('menu-data')
    <input type="hidden" name="" class="menu-data" value="manager-group | product">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('manager/assets/css/app.min.css') }}" rel="stylesheet">
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
                        <h6 class="mb-0">Nhân viên (9)</h6>
                        <span class="text-gray font-size-13">Quản lý nhân viên</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-md-right m-v-10">
                    <div class="btn-group">
                        <button id="list-view-btn" type="button" class="btn btn-default btn-icon">
                            <i class="anticon anticon-ordered-list"></i>
                        </button>
                        <button id="card-view-btn" type="button" class="btn btn-default btn-icon active">
                            <i class="anticon anticon-appstore"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-lg-11 mx-auto">
            <!-- Card View -->
            <div class="row" id="card-view">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Erin Gonzales</h4>
                                <p>erin.gon@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Darryl Day</h4>
                                <p>darryl.d@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Marshall Nichols</h4>
                                <p>marshalln@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Virgil Gonzales</h4>
                                <p>virgil14@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Nicole Wyne</h4>
                                <p>nicolew@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Riley Newman</h4>
                                <p>rileyn93@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                </div>
                                <h4 class="m-t-30">Pamela Wanda</h4>
                                <p>pamelaw@gmail.com</p>
                            </div>
                            <div class="text-center m-t-15">
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button>
                            </div>
                            <div class="text-center m-t-30">
                                <a href="profile.html" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-mail"></i>
                                    <span class="m-l-5">Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-none" id="list-view">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Social</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Erin Gonzales</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>erin.gon@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Darryl Day</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>darryl.d@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Marshall Nichols</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>marshalln@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Virgil Gonzales</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>virgil14@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Nicole Wyne</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>nicolew@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Riley Newman</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>rileyn93@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                                    </div>
                                                    <div class="media-body m-l-15">
                                                        <h6 class="mb-0">Pamela Wanda</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>pamelaw@gmail.com</td>
                                            <td>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </td>
                                            <td class="text-right">
                                                <a href="profile.html" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
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
    </div> --}}

    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-8">
                    <div class="d-md-flex">
                        <div class="m-b-10 m-r-15">
                            <select class="custom-select" style="min-width: 180px;">
                                <option selected="">Vai trò</option>
                                <option value="all">Tất cả</option>
                                <option value="homeDeco">Admin</option>
                                <option value="eletronic">Nhân viên quản lý</option>
                                <option value="jewellery">Nhân viên kho</option>
                                <option value="jewellery">Nhân viên kế toán</option>
                            </select>
                        </div>
                        <div class="m-b-10">
                            <select class="custom-select" style="min-width: 180px;">
                                <option selected="">Trạng thái</option>
                                <option value="all">Tất cả</option>
                                <option value="inStock">Hoạt động</option>
                                <option value="outOfStock">Khóa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-member-modal">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Thêm nhân viên</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                        name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                        type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="DataTables_Table_0"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover e-commerce-table dataTable no-footer" id="DataTables_Table_0"
                                role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="
                                
                                    
                                    
                                
                            : activate to sort column descending"
                                            style="width: 48.075px;">
                                            <div class="checkbox">
                                                <input id="checkAll" type="checkbox">
                                                <label for="checkAll" class="m-b-0"></label>
                                            </div>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ID: activate to sort column ascending"
                                            style="width: 28.375px;">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Product: activate to sort column ascending"
                                            style="width: 210.825px;">Họ tên</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Category: activate to sort column ascending"
                                            style="width: 128.025px;">Vai trò</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Stock Left: activate to sort column ascending"
                                            style="width: 88.7375px;">Đăng nhập</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending"
                                            style="width: 108.688px;">Trạng thái</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label=": activate to sort column ascending" style="width: 71.475px;">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>







                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="checkbox">
                                                <input id="check-item-1" type="checkbox">
                                                <label for="check-item-1" class="m-b-0"></label>
                                            </div>
                                        </td>
                                        <td>
                                            #31
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="img-fluid rounded" src="assets/images/others/thumb-9.jpg"
                                                    style="max-width: 60px" alt="">
                                                <h6 class="m-b-0 m-l-10">David Nguyen</h6>
                                            </div>
                                        </td>
                                        <td>Admin</td>
                                       
                                        <td> 171.224.223.56</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="badge badge-success badge-dot m-r-10"></div>
                                                <div>Hoạt động</div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="checkbox">
                                                <input id="check-item-3" type="checkbox">
                                                <label for="check-item-3" class="m-b-0"></label>
                                            </div>
                                        </td>
                                        <td>
                                            #33
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="img-fluid rounded" src="assets/images/others/thumb-11.jpg"
                                                    style="max-width: 60px" alt="">
                                                <h6 class="m-b-0 m-l-10">Hoang Lee</h6>
                                            </div>
                                        </td>
                                        <td>Quản lý</td>
                                      
                                        <td>171.224.223.56</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="badge badge-success badge-dot m-r-10"></div>
                                                <div>Hoạt động</div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="checkbox">
                                                <input id="check-item-4" type="checkbox">
                                                <label for="check-item-4" class="m-b-0"></label>
                                            </div>
                                        </td>
                                        <td>
                                            #34
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="img-fluid rounded" src="assets/images/others/thumb-12.jpg"
                                                    style="max-width: 60px" alt="">
                                                <h6 class="m-b-0 m-l-10">Mike Nguyen</h6>
                                            </div>
                                        </td>
                                        <td>Nhân viên kho</td>
                                       
                                        <td>171.224.223.56</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="badge badge-danger badge-dot m-r-10"></div>
                                                <div>Khóa</div>
                                            </div>
                                        </td>
                                        <td class="text-right">
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
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                Showing 1 to 7 of 7 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                            href="#" aria-controls="DataTables_Table_0" data-dt-idx="2"
                                            tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--     <div class="container mt-3">
        <h3>Modal Example</h3>
        <p>Click on the button to open the modal.</p>
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-member-modal">
          Open modal
        </button>
      </div> --}}
      
<div class="add-member-box">
          <!-- The Modal -->
          <div class="modal" id="add-member-modal">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Thêm nhân viên</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputname" class="col-sm-2 col-form-label">Họ tên</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="inputname3" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 pt-0">Vai trò</label>
                            <div class="col-sm-10">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Admin</option>
                                    <option>Nhân viên Quản lý</option>
                                    <option>Nhân viên Kho</option>
                                    <option>Nhân viên Kế toán</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">Quyền</div>
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <input type="checkbox" id="rule0">
                                    <label for="rule0">Tất cả</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="rule1">
                                    <label for="rule1">Sản phẩm</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="rule2">
                                    <label for="rule2">Đơn hàng</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="rule3">
                                    <label for="rule3">Vận chuyển</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="rule4">
                                    <label for="rule4">Kho hàng</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="rule5">
                                    <label for="rule5">Khách hàng</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="rule">
                                    <label for="rule">Etc</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                </div>
          
              </div>
            </div>
          </div>
</div>
      
@endsection()

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection()
