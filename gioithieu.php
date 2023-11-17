<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meme Slider</title>
    <!-- Thêm Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- Chèn ảnh meme hoặc nội dung meme của bạn vào đây -->
                <iframe width="560" height="315" src="https://video.search.yahoo.com/video/play;_ylt=Awr.0snwiVZlzHQbI2X7w8QF;_ylu=c2VjA3NyBHNsawN2aWQEZ3BvcwMyMA--?p=meme+m%C3%A8o&vid=cc14ea1772827e62c525d7c035ecef2f&turl=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOVP.c__GmUkzOunrTqHXW2cQ8gJYIy%26pid%3DApi%26h%3D562%26w%3D600%26c%3D7%26rs%3D1&rurl=https%3A%2F%2Fwww.tiktok.com%2F%40nyc.jav3%2Fvideo%2F7231962955221323051&tit=Huh+%23huhcatmeme+%23huh+%23%3Cb%3Ememe%3C%2Fb%3E+%23fyp+%23xyzbca+%7C+huh+%3Cb%3Ememe%3C%2Fb%3E+sound+original+video&c=19&sigr=AJwh2.p84_o1&sigt=8MF87orgXwdj&sigi=hW24mmbA9mWU&fr=p%3As%2Cv%3Av&h=562&w=600&l=13&age=1683822618&fr=mcafee&type=E210US885G0&tt=b" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="swiper-slide">
                <img src="path/to/meme-image-2.jpg" alt="Meme 2">
            </div>
            <!-- Thêm các slide khác tùy ý -->
        </div>
        <!-- Thêm nút điều hướng nếu bạn muốn -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Thêm Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Khởi tạo Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
