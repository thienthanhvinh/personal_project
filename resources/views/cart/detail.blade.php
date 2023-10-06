@extends('layouts.app')
@section('title')
Giỏ hàng
@endsection

@section('content')
<h2 class="uppercase text-center font-semibold text-[34px] tracking-wider">Giỏ hàng</h2>
<table class="mt-14 cart-table">
    <thead class="cart-table-header">
        <tr>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href=""><img class="w-[150px] h-auto object-cover" src="../public/images/t-shirt-cart.png"
                        alt=""></a></td>
            <td class="hover:underline"><a href="">LIQUID POLO - BLACK</a></td>
            <td>400.000đ</td>
            <td>
                <div class="flex">
                    {{-- <span class="minus">-</span>
                    <span class="num">1</span>
                    <span class="plus">+</span> --}}
                    <button class="minus" type="button">-</button>
                    <input type="text" id="quantity" value="1" minlength="1" class="w-[60px]">
                    <button class="plus" type="button">+</button>
                </div>
            </td>
            <td>800.000đ</td>
            <td><a href="">
                    <ion-icon name="trash-outline"></ion-icon>
                </a></td>
        </tr>
    </tbody>
</table>
@endsection