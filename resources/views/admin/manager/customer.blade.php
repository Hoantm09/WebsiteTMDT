@extends('admin.layout')
@section('title', 'Sản phẩm')
@section('menu-data')
    <input type="hidden" name="" class="menu-data" value="manager-group | product">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
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
                        <h6 class="mb-0">Khách hàng (9)</h6>
                        <span class="text-gray font-size-13">Quản lý Khách hàng</span>
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
                                <option selected="">Sắp xếp</option>
                                <option value="all">Tất cả</option>
                                <option value="homeDeco">Khách hàng thân thiết</option>
                                <option value="eletronic">Chi tiêu nhiều trong tháng</option>
                            </select>
                        </div>
                        <div class="m-b-10">
                            <select class="custom-select" style="min-width: 180px;">
                                <option selected="">Trạng thái</option>
                                <option value="all">Tất cả</option>
                                <option value="inStock">Hoạt động</option>
                                <option value="outOfStock">Vô hiệu hóa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                  
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
                                            style="width: 128.025px;">Số điện thoại</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Price: activate to sort column ascending" style="width: 52.2px;">
                                            Chi tiêu</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Stock Left: activate to sort column ascending"
                                            style="width: 88.7375px;">Địa chỉ</th>
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



                                 {{--Customer information --}}
                                 @foreach ($customerInfor as $user)
                                 <tr role="row" class="odd">
                                     <td class="sorting_1">
                                         <div class="checkbox">
                                             <input id="check-item-{{$user->customer_id}}" type="checkbox">
                                             <label for="check-item-{{$user->customer_id}}" class="m-b-0"></label>
                                         </div>
                                     </td>
                                     <td>
                                         {{ $user->customer_id }}
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <img class="img-fluid rounded" src="assets/images/others/thumb-9.jpg"
                                                 style="max-width: 60px" alt="">
                                             <h6 class="m-b-0 m-l-10">{{ $user->name }}</h6>
                                         </div>
                                     </td>
                                     <td>
                                        {{$user->phone}}
                                     </td>

                                     <td>
                                        {{ $user->company }}
                                     </td>
                                     <td>
                                        {{ $user->address }}
                                     </td>
                                     <td>

                                     </td>
                                     <td class="text-right">
                                        <button data-user-id={{$user->customer_id}}  id="view-member-btn" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right " data-bs-toggle="modal" data-bs-target="#edit-member-modal">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                        <button data-user-id={{$user->customer_id}} id="delete-member-btn" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right " data-bs-toggle="modal" data-bs-target="#delete-member-modal">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                     </td>
                                 </tr>
                             @endforeach
                               

                    </div>
                </div>
            </div>
        </div>
    </div>



        {{-- Delete customer --}}
        <div class="modal fade" id="delete-member-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="member-name"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button id="delete-member-submit" type="button" class="btn btn-danger">Xóa khách hàng</button>
                    </div>
                </div>
            </div>
        </div>


    {{-- Hiển thị thông tin khách hàng --}}
    <div class="edit-member-box">
        <!-- The Modal -->
        <div class="modal" id="view-member-modal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin khách hàng</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="member-name"></div>
                        <form id="edit-member-form" action="" method="POST">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Tiêu đề</th>
                                    <th>Giá trị</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Tên</td>
                                    <td><input type="text" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                    <td>Số điện thoại</td>
                                    <td><input type="text" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                    <td>Chi tiêu</td>
                                    <td><input type="text" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                    <td>Địa chỉ</td>
                                    <td><input type="text" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                    <td>Giới tính</td>
                                    <td><input type="text" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                    <td>Ngày sinh</td>
                                    <td><input type="text" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                    <td>Hình ảnh</td>
                                    <td><img src="" class="img-fluid" alt=""></td>
                                  </tr>
                                </tbody>
                              </table>



                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Edit member --}}
    <div class="edit-member-box">
        <!-- The Modal -->
        <div class="modal" id="edit-member-modal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm nhân viên</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection()

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/customer.js') }}"></script>
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
