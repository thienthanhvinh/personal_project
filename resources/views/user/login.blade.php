@extends('layouts.app')
@section('title')
Đăng nhập
@endsection

@section('content')
<h2 class="uppercase text-center font-semibold text-[34px] tracking-wider">Đăng nhập</h2>
<div class="form-login flex flex-col items-center justify-center mt-6">
    <form action="" method="POST">
        <div class="relative">
            <label for="" class="block font-semibold mb-2">Tên tài khoản</label>
            <input type="text" placeholder="Nhập Email của bạn" class="border border-gray-400 w-[500px] pl-10 pr-3 py-[7px] outline-none">
            <ion-icon name="mail-outline" class="absolute top-[41px] left-2 text-2xl text-gray-600"></ion-icon>
        </div>
        <div class="relative mt-3">
            <label for="" class="block font-semibold mb-2">Mật khẩu</label>
            <input type="password" placeholder="Nhập mật khẩu" class="border border-gray-400 w-[500px] pl-10 pr-3 py-[7px] outline-none">
            <ion-icon name="lock-closed-outline" class="absolute top-[41px] left-2 text-2xl text-gray-600"></ion-icon>
        </div>
        <div class="mt-3">
            <a href="{{url('/account/passwordRecovery')}}" class="hover:underline">Quên mật khẩu ?</a>
        </div>
        <div class="mt-6">
            <button type="submit" class="border border-black bg-gray-300 w-[500px] py-[7px] hover:bg-black hover:text-white transition-all duration-500 font-semibold">Đăng nhập</button>
        </div>
        <div class="mt-5 text-center">
            <a href="{{url('/account/register')}}" class="hover:underline">Chưa có tài khoản? Đăng ký</a>
        </div>
    </form>
</div>
@endsection