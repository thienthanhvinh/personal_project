@extends('layouts.app')
@section('title')
Giỏ hàng
@endsection

@section('content')
<h2 class="uppercase text-center font-semibold text-[34px] tracking-wider">Giỏ hàng</h2>
<div class="flex mt-14 gap-x-10">
    <table class="cart-table">
        <thead class="cart-table-header">
            <tr>
                <th class="!pr-[50px]">Ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="pl-0"><a href="" class=""><img class="max-w-[200px] h-auto object-cover"
                            src="../public/images/t-shirt-cart.png" alt=""></a></td>
                <td class="hover:underline"><a href="" class="uppercase">LIQUID POLO - BLACK</a></td>
                <td>400.000đ</td>
                <td>
                    <div class="flex border-2 rounded-2xl">
                        {{-- <span class="minus">-</span>
                        <span class="num">1</span>
                        <span class="plus">+</span> --}}
                        <button class="minus disabled w-[30px] text-xl" type="button">-</button>
                        <input type="text" id="quantity-0" value="1" class="w-[50px] border-x-2" disabled>
                        <button class="plus w-[30px] text-xl" type="button">+</button>
                    </div>
                </td>
                <td>800.000đ</td>
                <td><a href="">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a></td>
            </tr>
            <tr>
                <td class="pl-0 ml-[-15px]"><a href="" class=""><img class="max-w-[200px] h-auto object-cover"
                            src="../public/images/t-shirt-cart.png" alt=""></a></td>
                <td class="hover:underline"><a href="" class="uppercase">LIQUID POLO - BLACK</a></td>
                <td>400.000đ</td>
                <td>
                    <div class="flex border-2 rounded-2xl">
                        <button class="minus disabled w-[30px] text-xl" type="button">-</button>
                        <input type="text" id="quantity-1" value="1" class="w-[50px] border-x-2" disabled>
                        <button class="plus w-[30px] text-xl" type="button">+</button>
                    </div>
                </td>
                <td>800.000đ</td>
                <td><a href="">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a></td>
            </tr>
        </tbody>
    </table>

    <div class="border border-gray-300 w-[30%] flex flex-col h-[150px]">
        <div class="flex justify-between px-5 py-3 border-b-2 border-gray-200 flex-1">
            <p class="inline-block">Tổng tiền</p>
            <span class="text-gray-500 font-semibold">450.000đ</span>
        </div>
        <div class="flex-[3] flex justify-center items-center">
                <a href="{{url('cart/checkout')}}" class="bg-black text-white px-6 py-3 rounded-3xl hover:bg-[#2d3436] uppercase text-[13px]">Thanh toán</a>
        </div>
    </div>
</div>
<div class="button-home mt-14">
    <a href="http://localhost/unitop.vn/back-end/laravel_again/project/personal_project/"
        class="bg-black text-white px-6 py-3 rounded-3xl hover:bg-[#2d3436] uppercase text-[13px]">Tiếp tục mua sắm</a>
</div>

@endsection