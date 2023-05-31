var findex = 7;
var jagat1 = 1;
var jagat2 = 7;
var anta1 = 7;
var anta2 = 13;
var arto1 = 13;
var arto2 = 20;
var bacarita1 = 20;
var bacarita2 = 29;
var gantar1 = 29;
var gantar2 = 41;
var genta1 = 41;
var genta2 = 55;
var lawang1 = 55;
var lawang2 = 64;
var liku1 = 64;
var liku2 = 73;
var lua1 = 73;
var lua2 = 77;
var orta1 = 77;
var orta2 = 84;

$(`.slider-item:nth-child(${findex})`).css("transform", "scale(1.1,1.1)");
$(`.content-temaKonsep`).fadeIn("slow");

var cur1 = 0;
var cur2 = 0;
var temaOn = 1;

$(".slider-item").click(function () {
    var index = $(this).index() + 1;
    //Kalau logo yg di klik sama, abaikan
    if (findex == index) {
        return;
    }

    //Kecilin logo yg sebelumnya, besarin logo yg baru
    $(`.slider-item:nth-child(${index})`).css("transform", "scale(1.1,1.1)");
    $(`.slider-item:nth-child(${findex})`).css("transform", "scale(1,1)");

    //hilangin konten sebelumnya
    for (var i = cur1; i < cur2; i++) {
        $(`.content-selector:nth-child(${i})`).fadeOut("slow");
    }

    //Kalau sebelumnya ada di page tema, matiin
    if (temaOn) {
        $(`.content-temaKonsep`).fadeOut("slow");
        temaOn = 0;
    }

    //Tampilin konten baru & ubah background berdasarkan index

    switch (index - 1) {
        case 1:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #D23144 0%, rgba(146, 14, 40, 0.81) 100%)"
            );
            for (var i = anta1; i < anta2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = anta1;
            cur2 = anta2;
            break;
        case 2:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #80B353 0%, rgba(62, 109, 20, 0.79) 100%)"
            );
            for (var i = arto1; i < arto2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = arto1;
            cur2 = arto2;
            break;
        case 3:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #000000 0%, #656565 100%)"
            );
            for (var i = bacarita1; i < bacarita2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = bacarita1;
            cur2 = bacarita2;
            break;
        case 4:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #505050 0%, #C4C4C4 100%)"
            );
            for (var i = gantar1; i < gantar2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = gantar1;
            cur2 = gantar2;
            break;
        case 5:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #F3D612 0%, #E5A10E 100%)"
            );
            for (var i = genta1; i < genta2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = genta1;
            cur2 = genta2;
            break;
        case 6:
            $("body").css(
                "background-image",
                "linear-gradient(180deg, rgba(27,91,59,1) 0%, rgba(191,204,129,0.8130602582830007) 100%)"
            );
            $(`.content-temaKonsep`).fadeIn("slow");
            temaOn = 1;
            break;
        case 7:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #203162 0%, rgba(30, 109, 145, 0.91) 100%)"
            );
            for (var i = jagat1; i < jagat2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = jagat1;
            cur2 = jagat2;
            break;
        case 8:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #482400 0%, rgba(170, 67, 0, 0.79) 100%)"
            );
            for (var i = lawang1; i < lawang2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = lawang1;
            cur2 = lawang2;
            break;
        case 9:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #FB6779 0%, rgba(234, 67, 157, 0.79) 100%)"
            );
            for (var i = liku1; i < liku2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = liku1;
            cur2 = liku2;
            break;
        case 10:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #8D40DA 0%, rgba(22, 104, 184, 0.79) 100%)"
            );
            for (var i = lua1; i < lua2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = lua1;
            cur2 = lua2;
            break;
        case 11:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #FF784B 0%, #FFC146 100%)"
            );
            for (var i = orta1; i < orta2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = orta1;
            cur2 = orta2;
            break;
    }

    //index yg sekarang disimpan di findex
    findex = index;
});

swiper.on("slideChange", (sw) => {
    var index = sw.realIndex + 2;
    //Kalau logo yg di klik sama, abaikan
    if (findex == index) {
        return;
    }

    //Kecilin logo yg sebelumnya, besarin logo yg baru
    $(`.swiper-item:nth-child(${index})`).css("transform", "scale(1.1,1.1)");
    $(`.swiper-item:nth-child(${findex})`).css("transform", "scale(1,1)");

    //hilangin konten sebelumnya
    for (var i = cur1; i < cur2; i++) {
        $(`.content-selector:nth-child(${i})`).fadeOut("slow");
    }

    //Kalau sebelumnya ada di page tema, matiin
    if (temaOn) {
        $(`.content-temaKonsep`).fadeOut("slow");
        temaOn = 0;
    }

    //Tampilin konten baru & ubah background berdasarkan index

    switch (index - 1) {
        case 1:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #D23144 0%, rgba(146, 14, 40, 0.81) 100%)"
            );
            for (var i = anta1; i < anta2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = anta1;
            cur2 = anta2;
            break;
        case 2:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #80B353 0%, rgba(62, 109, 20, 0.79) 100%)"
            );
            for (var i = arto1; i < arto2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = arto1;
            cur2 = arto2;
            break;
        case 3:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #000000 0%, #656565 100%)"
            );
            for (var i = bacarita1; i < bacarita2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = bacarita1;
            cur2 = bacarita2;
            break;
        case 4:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #505050 0%, #C4C4C4 100%)"
            );
            for (var i = gantar1; i < gantar2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = gantar1;
            cur2 = gantar2;
            break;
        case 5:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #F3D612 0%, #E5A10E 100%)"
            );
            for (var i = genta1; i < genta2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = genta1;
            cur2 = genta2;
            break;
        case 6:
            $("body").css(
                "background-image",
                "linear-gradient(180deg, rgba(27,91,59,1) 0%, rgba(191,204,129,0.8130602582830007) 100%)"
            );
            $(`.content-temaKonsep`).fadeIn("slow");
            temaOn = 1;
            break;
        case 7:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #203162 0%, rgba(30, 109, 145, 0.91) 100%)"
            );
            for (var i = jagat1; i < jagat2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = jagat1;
            cur2 = jagat2;
            break;
        case 8:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #482400 0%, rgba(170, 67, 0, 0.79) 100%)"
            );
            for (var i = lawang1; i < lawang2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = lawang1;
            cur2 = lawang2;
            break;
        case 9:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #FB6779 0%, rgba(234, 67, 157, 0.79) 100%)"
            );
            for (var i = liku1; i < liku2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = liku1;
            cur2 = liku2;
            break;
        case 10:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #8D40DA 0%, rgba(22, 104, 184, 0.79) 100%)"
            );
            for (var i = lua1; i < lua2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = lua1;
            cur2 = lua2;
            break;
        case 11:
            $("body").css(
                "background-image",
                "linear-gradient(167.96deg, #FF784B 0%, #FFC146 100%)"
            );
            for (var i = orta1; i < orta2; i++) {
                $(`.content-selector:nth-child(${i})`).fadeIn("slow");
            }
            cur1 = orta1;
            cur2 = orta2;
            break;
    }

    //index yg sekarang disimpan di findex
    findex = index;
});

//Buat Tahun
var yearfindex = 1;
$(`.switch-year:nth-child(${yearfindex})`).css("font-size", "18px");
$(`.switch-year:nth-child(${yearfindex})`).css("color", "#ffffff");

// var year = 2022;
// var yearf = 2021;

// $(`.main-content-${year}`).fadeIn("slow");

// $(".switch-year").click(function () {
//     var yearindex = $(this).index() + 1;
//     if (yearfindex == yearindex) {
//         return;
//     }
//     $(`.switch-year:nth-child(${yearindex})`).css("font-size", "18px");
//     $(`.switch-year:nth-child(${yearindex})`).css("color", "#ffffff");
//     $(`.main-content-${year}`).fadeOut("slow");
//     $(`.switch-year:nth-child(${yearfindex})`).css("font-size", "10px");
//     $(`.switch-year:nth-child(${yearfindex})`).css(
//         "color",
//         "rgba(255,255,255,0.4)"
//     );
//     $(`.main-content-${yearf}`).fadeIn("slow");
//     var temp = year;
//     year = yearf;
//     yearf = temp;
//     yearfindex = yearindex;
//     if (year == 2022) {
//         $(`.swiper-item:nth-child(${findex})`).css("transform", "scale(1,1)");
//         $(`.slider-item:nth-child(${findex})`).css("transform", "scale(1,1)");
//         //hilangin konten sebelumnya
//         for (var i = cur1; i < cur2; i++) {
//             $(`.content-selector:nth-child(${i})`).fadeOut("slow");
//         }

//         //Kalau sebelumnya ada di page tema, matiin
//         if (temaOn) {
//             $(`.content-temaKonsep`).fadeOut("slow");
//             temaOn = 0;
//         }

//         findex = 7;
//         cur1 = 0;
//         cur2 = 0;
//         temaOn = 1;
//         $(`.content-temaKonsep`).fadeIn("slow");
//         $("body").css(
//             "background-image",
//             "linear-gradient(180deg, rgba(27,91,59,1) 0%, rgba(191,204,129,0.8130602582830007) 100%)"
//         );
//         $(`.slider-item:nth-child(${findex})`).css(
//             "transform",
//             "scale(1.1,1.1)"
//         );
//         $(`.swiper-item:nth-child(${findex})`).css(
//             "transform",
//             "scale(1.1,1.1)"
//         );
//     }
// });

const year = [2023, 2022, 2021];
$(`.main-content-${year[0]}`).fadeIn("slow");

$(".switch-year").click(function () {
    var yearindex = $(this).index() + 1;
    if (yearfindex == yearindex) {
        return;
    }

    $(`.switch-year:nth-child(${yearindex})`).css("font-size", "18px");
    $(`.switch-year:nth-child(${yearindex})`).css("color", "#ffffff");
    $(`.switch-year:nth-child(${yearfindex})`).css("font-size", "10px");
    $(`.switch-year:nth-child(${yearfindex})`).css(
        "color",
        "rgba(255,255,255,0.4)"
    );

    if ($(this).text() == 2023) {
        $(`.main-content-${year[0]}`).fadeIn("slow");
        $(`.main-content-${year[1]}`).fadeOut("slow");
        $(`.main-content-${year[2]}`).fadeOut("slow");
    } else if ($(this).text() == 2022) {
        $(`.main-content-${year[0]}`).fadeOut("slow");
        $(`.main-content-${year[1]}`).fadeIn("slow");
        $(`.main-content-${year[2]}`).fadeOut("slow");
    } else {
        $(`.main-content-${year[0]}`).fadeOut("slow");
        $(`.main-content-${year[1]}`).fadeOut("slow");
        $(`.main-content-${year[2]}`).fadeIn("slow");
    }

    yearfindex = yearindex;
    if ($(this).text() == 2022 || $(this).text() == 2023) {
        $(`.swiper-item:nth-child(${findex})`).css("transform", "scale(1,1)");
        $(`.slider-item:nth-child(${findex})`).css("transform", "scale(1,1)");
        //hilangin konten sebelumnya
        for (var i = cur1; i < cur2; i++) {
            $(`.content-selector:nth-child(${i})`).fadeOut("slow");
        }

        //Kalau sebelumnya ada di page tema, matiin
        if (temaOn) {
            $(`.content-temaKonsep`).fadeOut("slow");
            temaOn = 0;
        }

        findex = 7;
        cur1 = 0;
        cur2 = 0;
        temaOn = 1;
        $(`.content-temaKonsep`).fadeIn("slow");
        $("body").css(
            "background-image",
            "linear-gradient(180deg, rgba(27,91,59,1) 0%, rgba(191,204,129,0.8130602582830007) 100%)"
        );
        $(`.slider-item:nth-child(${findex})`).css(
            "transform",
            "scale(1.1,1.1)"
        );
        $(`.swiper-item:nth-child(${findex})`).css(
            "transform",
            "scale(1.1,1.1)"
        );
    }
});
