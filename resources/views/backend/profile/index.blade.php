@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Thông tin cá nhân</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Thông tin cá nhân</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group mb-3">
                        <label for="name">Họ Và Tên</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ Auth::user()->name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-primary px-5">Lưu Thay Đổi</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Đổi Mật Khẩu</h4>
            </div>

            <div class="card-body">
                <form action="">
                    <div class="form-group mb-3">
                        <label for="current_password">Mật khẩu hiện tại</label>
                        <input type="password" name="current_password" id="current_password" class="form-control">
                        <span class="text-danger">
                            @error('current_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Mật Khẩu Mới</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password_confirmation">Nhập lại mật khẩu mới</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        <span class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-primary px-5">Lưu Thay Đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
