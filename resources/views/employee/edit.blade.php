@extends('home')
@section('title', 'update')
@section('content')
   @if(isset($employee))
       <div class="col-12 col-md-12">
           <div class="row">
               <div class="col-12">
                   <h1>uppdate</h1>
               </div>
               <div class="col-12">
                   <form method="post" action="{{ route('employees.update',$employee->id) }}">
                       @csrf
                       <div class="form-group">
                           <label>Group</label>
                           <select class="custom-select" name="tenphongban">
                               <option selected value="{{$employee->tenphongban}}">Chon phong ban</option>
                               <option name="tenphongban" >le tan</option>
                               <option name="tenphongban">kinh doanh</option>
                               <option name="tenphongban">IT</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label>Name</label>
                           <input type="text" class="form-control" name="name" value="{{$employee->name}}">
                       </div>
                       <div class="form-group">
                           <label>Ngày sinh</label>
                           <input type="date" class="form-control" name="dob" value="{{$employee->dob}}" >
                       </div>
                       <div class="form-group">
                           <label>gioi tinh</label>
                           <select class="custom-select" name="sex">
                               <option selected value="{{$employee->sex}}">Chon gioi tinh</option>
                               <option name="sex">nam</option>
                               <option name="sex">nu</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label>so dien thoai</label>
                           <input type="text" class="form-control" name="phone" value="{{$employee->phone}}">
                       </div>
                       <div class="form-group">
                           <label>sCMT</label>
                           <input type="text" class="form-control" name="identification" value="{{$employee->identification}}">
                       </div>
                       <div class="form-group">
                           <label>email</label>
                           <input type="text" class="form-control" name="email" value="{{$employee->email}}" >
                       </div>
                       <div class="form-group">
                           <label>dia chi</label>
                           <input type="text" class="form-control" name="address" value="{{$employee->address}}">
                       </div>
                       <button type="submit" class="btn btn-primary">cap nhat</button>
                       <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                   </form>
               </div>
           </div>
       </div>
    @endif
@endsection

