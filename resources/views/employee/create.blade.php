@extends('home')
@section('title', 'Thêm mới Nhan vien')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Group</label>
                        <select class="custom-select" name="tenphongban">
                            <option selected>Chon phong ban</option>
                            <option name="tenphongban" >le tan</option>
                            <option name="tenphongban">kinh doanh</option>
                            <option name="tenphongban">IT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label>gioi tinh</label>
                        <select class="custom-select" name="sex">
                            <option selected>Chon gioi tinh</option>
                            <option name="sex">nam</option>
                            <option name="sex">nu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>so dien thoai</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label>sCMT</label>
                        <input type="text" class="form-control" name="identification" required>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>dia chi</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
