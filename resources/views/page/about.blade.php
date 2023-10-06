<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="w-full">
        <div class="flex items-center justify-between px-20 bg-[#F1F1F1]">
            <div class="w-[100px]">
                <a href="http://localhost/unitop.vn/back-end/laravel_again/project/personal_project/">
                    <img src="../public/images/logo.png" alt="" class="w-full h-full object-cover">
                </a>
            </div>
            <div>
                <ul class="uppercase flex font-semibold gap-x-10 text-lg" id="main-menu">
                    <li class="relative active py-2"><a href="">shop</a>
                        <ul class="sub-menu absolute top-10 z-10 bg-[#434343] text-white w-[200px] text-[15px]">
                            <li class="border-b border-[#a9a4a4] py-2 pl-3 cursor-pointer hover:bg-[#323131]"><a
                                    href="#">tops</a></li>
                            <li class="border-b border-[#a9a4a4] py-2 pl-3 cursor-pointer hover:bg-[#323131]"><a
                                    href="#">bottoms</a></li>
                            <li class="border-b border-[#a9a4a4] py-2 pl-3 cursor-pointer hover:bg-[#323131]"><a
                                    href="#">accessories</a></li>
                            <li class="border-b border-[#a9a4a4] py-2 pl-3 cursor-pointer hover:bg-[#323131]"><a
                                    href="#">bags</a></li>
                        </ul>
                    </li>
                    <li class="py-2"><a href="{{url('product/sale')}}">sale</a></li>
                    <li class="py-2"><a href="{{url('post/list')}}">news</a></li>
                    <li class="py-2"><a href="{{url('page/contact')}}">contact</a></li>
                    <li class="py-2"><a href="{{url('page/about')}}">about</a></li>
                </ul>
            </div>
            <div class="flex items-center gap-x-4">
                <div class="relative">
                    <input type="text" placeholder="Tìm kiếm..."
                        class="border border-gray-400 outline-none px-3 py-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 absolute top-2 right-3 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>

                </div>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="section-body px-20 mt-16">
            <h1 class="text-center text-[52px] mb-5">About us</h1>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quibusdam vero
                autem quisquam nemo similique ipsa aliquam dignissimos, beatae unde assumenda asperiores impedit a
                corporis deleniti, hic, cum id possimus voluptatem saepe. Unde harum optio laboriosam deleniti odio,
                consectetur, doloremque sed expedita ratione, minus tempora iure saepe magnam delectus laborum est nobis
                sint repellat iusto cumque explicabo illo error? Quisquam culpa delectus reiciendis voluptates tempore
                nostrum quaerat, fugiat cumque, incidunt aspernatur voluptatem odio praesentium sunt quia similique
                eligendi a itaque quis quasi excepturi repellat neque voluptatibus ratione ab! Alias cum inventore
                quaerat exercitationem quos, minus reiciendis aliquam doloribus nostrum vel?</p>
            <div class="my-10">
                <img class="mx-auto" src="../public/images/about1.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, quam nostrum? Alias reprehenderit deleniti voluptatem nulla id in quis quae earum delectus cumque ipsum architecto odio repellat quos, corporis et odit sapiente nisi? Libero fuga suscipit ea, in ipsa deleniti, quas enim reiciendis saepe quisquam itaque, ratione fugit cumque quaerat sed quam ullam. Similique cum accusantium, laudantium inventore doloremque porro ea earum nisi eum iste culpa quo quos libero. Laboriosam vitae aspernatur esse veritatis, earum nisi quos non quaerat iusto recusandae, perspiciatis quia. Ut, alias? Voluptatem, soluta pariatur iure beatae aliquid quibusdam eveniet nostrum tempore ipsam provident necessitatibus dignissimos nulla dicta blanditiis odit suscipit molestias facilis sunt magnam alias quo ut placeat ad itaque! Veritatis tempore dolorum quam inventore velit suscipit animi facere amet minima, enim asperiores voluptatibus ullam, vero quis consequatur adipisci architecto pariatur. Fuga quis, sapiente debitis quaerat nihil doloremque voluptates ut, hic non officia deserunt ab quod, consectetur tempore eos consequuntur? Obcaecati repudiandae vel, nostrum recusandae eaque repellendus magnam quaerat, ex laboriosam quasi voluptas totam ut dignissimos.</p>
            <div class="my-10">
                <img class="mx-auto" src="../public/images/sale1.jpg" alt="">
            </div>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae dolor molestias, tempora ea aut doloremque, mollitia voluptatum id error harum quis, reiciendis iure eum! Blanditiis distinctio quas minus laboriosam veritatis repudiandae explicabo molestias doloribus magnam eaque totam nesciunt cumque, inventore, fugit ducimus necessitatibus. Sapiente beatae aliquam laudantium temporibus ea maxime. Ea odit dolor quaerat veniam, ut vero pariatur quos maxime neque blanditiis cupiditate est deserunt a autem nostrum ratione impedit sunt dignissimos omnis reprehenderit quo qui accusantium consequuntur dicta! Ipsam, possimus culpa sed ipsa, aliquid dignissimos recusandae sint, animi omnis qui sequi labore voluptas porro. Enim quia voluptatibus fuga dolore minus eaque magni cupiditate distinctio quidem totam. Facilis magni quo consectetur fugit libero? Sit earum, tempore ducimus minus facere fugiat.</p>
        </div>
        {{-- footer --}}
        <div class="px-20 mt-32">
            <div class="flex gap-x-24">
                <div>
                    <h2 class="text-[22px] font-semibold">Shop system</h2>
                    <h3 class="font-semibold flex items-center gap-x-1">
                        <ion-icon name="location-outline"></ion-icon> Ho Chi Minh Branch:
                    </h3>
                    <p>561 Su Van Hanh, Ward 13, District 10</p>
                    <p>The New Play 26 Ly Tu Trong, Ben Nghe Ward, District 1</p>
                    <h2 class="font-semibold flex items-center gap-x-1">
                        <ion-icon name="location-outline"></ion-icon> Can Tho Branch:
                    </h2>
                    <p>52 Mau Than, An Phu Ward, Ninh Kieu District</p>
                </div>
                <div class="">
                    <h2 class="text-[22px] font-semibold">Contact us</h2>
                    <p class="flex items-center gap-x-2">
                        <ion-icon name="call-outline"></ion-icon> 0933 800 190 - 1900252557
                    </p>
                    <p class="flex items-center gap-x-2">
                        <ion-icon name="mail-outline"></ion-icon> csteamdcs@gmail.com
                    </p>
                    <a href="https://www.facebook.com/DirtyCoins.VN/">
                        <p class="flex items-center gap-x-2">
                            <ion-icon name="logo-facebook"></ion-icon> Facebook
                        </p>
                    </a>
                    <a href="https://www.instagram.com/dirtycoins.vn/">
                        <p class="flex items-center gap-x-2">
                            <ion-icon name="logo-instagram"></ion-icon> Instagram
                        </p>
                    </a>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-[22px] font-semibold">Policy</h2>
                    <a href="">Privacy Policy</a>
                    <a href="">FAQ</a>
                    <a href="">Member Card Policy</a>
                    <a href="">Warranty & Return Policy</a>
                </div>
                <div>
                    <h2 class="text-[22px] font-semibold mb-2">News</h2>
                    <div class="flex flex-col gap-y-2">
                        <input type="text" class="border border-gray-500 outline-none px-2 py-1 w-[250px]"
                            placeholder="Your name">
                        <input type="text" class="border border-gray-500 outline-none px-2 py-1 w-[250px]"
                            placeholder="Your email">
                        <button class="bg-gray-700 text-white py-2 w-[250px] hover:bg-gray-800">Feedback</button>
                    </div>
                </div>
            </div>
        </div>
        <p class="mt-10 text-center py-7 border-y border-gray-300">Copyright © 2023 Dirty Coins Studio. Powered by Sapo
        </p>
        {{-- end footer --}}
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>