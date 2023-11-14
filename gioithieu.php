<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Giới Thiệu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .slider-container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }

    .slick-slide img {
      width: 100%;
      height: 150px; /* Điều chỉnh chiều cao của slide tại đây */
      border-radius: 8px;
    }

    .slick-prev,
    .slick-next {
      font-size: 24px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 50%;
      padding: 10px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .slick-prev {
      left: 10px;
    }

    .slick-next {
      right: 10px;
    }
  </style>
</head>
<body>

<div class="slider-container">
  <div class="slider">
    <div><img src="https://placekitten.com/1200/400" alt="Slide 1"></div>
    <div><img src="https://placekitten.com/1200/401" alt="Slide 2"></div>
    <div><img src="https://placekitten.com/1200/402" alt="Slide 3"></div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      prevArrow: null, // Ẩn cả nút "prev"
      nextArrow: null, // Ẩn cả nút "next"
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true
    });
  });
</script>

</body>
</html>
