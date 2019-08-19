@extends('home')
@section('title', 'Danh sach nhan vien')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Nhan vien</h1>
            </div>
            <form class="form-inline" action="{{route('employees.search')}}">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Phong ban nhan vien</th>
                    <th scope="col">name</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">gioi tinh</th>
                    <th scope="col">phone</th>
                    <th scope="col">identification</th>
                    <th scope="col">Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($employees) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($employees as $key => $employee)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $employee->gruop }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->sex }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->identification }}</td>
                            <td>{{ $employee->email }}</td>
                            <td><a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-primary">sửa</a></td>
                            <td><a href="{{ route('employees.destroy', $employee->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('employees.create') }}">Thêm mới</a>
            {{$employees->appends(request()->query())}}
        </div>
    </div>

@endsection
