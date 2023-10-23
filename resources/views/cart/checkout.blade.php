@extends('layouts.app')
@section('title')
Thanh toán
@endsection
@section('content')

<form action="" method="POST">
    <div class="flex gap-x-20">
        <div class="form-information flex flex-col gap-y-5">
            <h2 class="text-xl font-semibold !m-0 !p-0">Thông tin nhận hàng</h2>
            <div class="form-group relative">
                <input type="text" required
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-2 hover:border-blue-400">
                <label for=""
                    class="absolute top-2 left-3 text-gray-500 pointer-events-none transition-all duration-300">Email</label>
            </div>
            <div class="form-group relative">
                <input type="text" required
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-2 hover:border-blue-400 transition-all duration-300">
                <label for="" class="absolute top-2 left-3 text-gray-500">Họ và tên</label>
            </div>
            <div class="form-group relative">
                <input type="text" required
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-2 hover:border-blue-400 transition-all duration-300">
                <label for="" class="absolute top-2 left-3 text-gray-500">Số điện thoại</label>
            </div>
            <div class="form-group">
                <select name="" id=""
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-2 hover:border-blue-400 text-gray-500">
                    <option value="" class="">-- Chọn tỉnh thành phố --</option>
                    <option value="" class="text-black">Hà Giang</option>
                </select>
            </div>

            <div class="form-group">
                <select name="" id=""
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-2 hover:border-blue-400 text-gray-500">
                    <option value="" class="">-- Chọn quận huyện --</option>
                    <option value="" class="text-black">Hà Giang</option>
                </select>
            </div>
            <div class="form-group">
                <select name="" id=""
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-2 hover:border-blue-400 text-gray-500">
                    <option value="" class="">-- Chọn phường xã --</option>
                    <option value="" class="text-black">Hà Giang</option>
                </select>
            </div>
            <div class="form-group relative">
                <textarea name="" id="" cols="60" rows="3" required
                    class="outline-none border border-gray-300 rounded-[4px] w-[350px] px-3 py-1"></textarea>
                <label for="" class="absolute top-2 left-3 text-gray-500 transition-all duration-300">Ghi chú</label>
            </div>
        </div>
        <div class="form-payment">
            <h2 class="text-xl font-semibold mb-5">Thanh toán</h2>
            <div class="shadow-md border border-gray-300 rounded-md flex flex-col">
                <div
                    class="border-b border-gray-400 px-3 pt-4 pb-6 w-[400px]  h-[80px] flex items-center justify-between text-[15px]">
                    <div class="flex items-center gap-x-3">
                        <input type="radio" id="vnpay" name="pay">
                        <label for="vnpay">Thanh toán qua VNPAY-QR</label>
                    </div>
                    <img src="https://bizweb.dktcdn.net/assets/themes_support/vnpayqr-icon.png" alt="">

                </div>
                <div class="px-3 pt-4 pb-6 w-[400px] h-[80px] flex items-center justify-between text-[15px]">
                    <div class="flex items-center gap-x-3">
                        <input type="radio" id="cod" name="pay">
                        <label for="cod">Thanh toán khi nhận hàng</label>
                    </div>
                    <img src="../public/images/cod.png" alt="" class="w-[52px] h-[26px]">

                </div>
            </div>
        </div>
        <div class="form-order shadow-md border border-gray-300 bg-gray-50 pt-4 pb-4 h-[380px]">
            <h2 class="text-xl font-semibold mb-5 px-4">Đơn hàng (1 sản phẩm)</h2>
            <div class="border-b border-gray-300 mb-5"></div>
            <div class="flex flex-col gap-y-5">
                <div class="px-4 flex items-center gap-x-12">
                    <div class="flex gap-x-4">
                        <div class="w-[60px] h-auto border border-gray-300 rounded-lg p-1 relative">
                            <img src="../public/images/t-shirt-cart.png" alt="" class="w-full h-full object-cover">
                            <span
                                class="absolute bg-[#2a9dcc] text-[#fff] rounded-full w-[25px] h-[25px] text-center top-[-10px] right-[-8px]">2</span>
                        </div>
                        <div>
                            <p>Logo Washed Hoodie - Green</p>
                            <span class="text-gray-500 text-sm">Size M</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-[15px] text-gray-700">650.000đ</p>
                    </div>
                </div>
                <div class="px-4 flex items-center gap-x-12">
                    <div class="flex gap-x-4">
                        <div class="w-[60px] h-auto border border-gray-300 rounded-lg p-1 relative">
                            <img src="../public/images/t-shirt-cart.png" alt="" class="w-full h-full object-cover">
                            <span
                                class="absolute bg-[#2a9dcc] text-[#fff] rounded-full w-[25px] h-[25px] text-center top-[-10px] right-[-8px]">2</span>
                        </div>
                        <div>
                            <p>Logo Washed Hoodie - Green</p>
                            <span class="text-gray-500 text-sm">Size M</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-[15px] text-gray-700">650.000đ</p>
                    </div>
                </div>
                <div class="border-b border-gray-300"></div>
                <div class="px-4 flex justify-between">
                    <p class="text-[#717171] font-semibold">Tổng cộng</p>
                    <p class="text-[#2a9dcc] font-semibold text-xl">2.760.000đ</p>
                </div>
                <div class="px-4 flex justify-center">
                    <button type="submit"
                        class="bg-[#357ebd] text-[#fff] border border-[#2f71a9] rounded-md px-4 py-2 uppercase hover:bg-[#3498db]">Đặt
                        hàng</button>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection