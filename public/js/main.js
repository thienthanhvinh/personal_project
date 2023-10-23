$(document).ready(function () {
    $(".image-slider").slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        dots: true,
        prevArrow:
            "<button type='button' class='slick-prev pull-left'><ion-icon name='arrow-back-outline'></ion-icon></button>",
        nextArrow:
            "<button type='button' class='slick-next pull-right'><ion-icon name='arrow-forward-outline'></ion-icon></button>",
    });
    $(".sale-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        prevArrow:
            "<button type='button' class='slick-sale-prev pull-left'><ion-icon name='arrow-back-outline'></ion-icon></button>",
        nextArrow:
            "<button type='button' class='slick-sale-next pull-right'><ion-icon name='arrow-forward-outline'></ion-icon></button>",
    });
    $(".product-related-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        prevArrow:
            "<button type='button' class='slick-sale-prev pull-left'><ion-icon name='arrow-back-outline'></ion-icon></button>",
        nextArrow:
            "<button type='button' class='slick-sale-next pull-right'><ion-icon name='arrow-forward-outline'></ion-icon></button>",
    });

    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: ".slider-nav",
        prevArrow:
            "<button type='button' class='slick-thumbnail-prev pull-left'><ion-icon name='arrow-back-outline'></ion-icon></button>",
        nextArrow:
            "<button type='button' class='slick-thumbnail-next pull-right'><ion-icon name='arrow-forward-outline'></ion-icon></button>",
    });
    $(".slider-nav").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
    });

    $("li").on("click", function () {
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
    });

    const priceBtn = document.querySelector(".price-btn");
    priceBtn.addEventListener("click", () => {
        priceBtn.classList.toggle("open");
    });
});

// const plus = document.querySelector(".plus");
// const minus = document.querySelector(".minus");
// const num = document.querySelector(".num");

// let a = 1;
// plus.addEventListener("click", () => {
//     a++;
//     num.innerText = a;
// });
// minus.addEventListener("click", () => {
//     if(a > 1) {
//         a--;
//         num.innerText = a;
//     }
// });

// document.querySelectorAll(".minus").forEach((button) => {
//     button.setAttribute("disabled", "disabled");
// })

document.querySelectorAll(".plus").forEach((button, index) => {
    button.addEventListener("click", function () {
        let valueCount = document.getElementById(`quantity-${index}`).value;
        valueCount++;
        document.getElementById(`quantity-${index}`).value = valueCount;
        if (valueCount > 1) {
            document.querySelectorAll(".minus")[index].removeAttribute("disabled");
            document.querySelectorAll(".minus")[index].classList.remove("disabled");
        }
    });
});

document.querySelectorAll(".minus").forEach((button, index) => {
    button.addEventListener("click", function () {
        let valueCount = document.getElementById(`quantity-${index}`).value;
        if (valueCount == 1) {
            button.setAttribute("disabled", "disabled");
        } else {
            valueCount--;
            document.getElementById(`quantity-${index}`).value = valueCount;
        }
    });
});
