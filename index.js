
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

        // Tự động chuyển đổi slide sau một khoảng thời gian
        let autoSlideInterval;

        function startAutoSlide() {
            autoSlideInterval = setInterval(function() {
                plusSlides(1); // Chuyển đến slide tiếp theo sau một khoảng thời gian
            }, 5000); // Đổi 5000 thành khoảng thời gian bạn muốn giữa các slide (đơn vị là mili giây)
        }

        // Bắt đầu tự động chuyển đổi slide khi trang web được tải
        startAutoSlide();

        // Dừng tự động chuyển đổi slide khi người dùng tương tác với các nút prev và next
        document.querySelector('.prev').addEventListener('click', function() {
            clearInterval(autoSlideInterval);
        });
        document.querySelector('.next').addEventListener('click', function() {
            clearInterval(autoSlideInterval);
        });
 
        // sản phẩm nổi bật
        document.getElementById('next').onclick = function(){
            const widthItem = document.querySelector('.item').offsetWidth;
            document.getElementById('formList').scrollLeft += widthItem;
        }
        document.getElementById('prev').onclick = function(){
            const widthItem = document.querySelector('.item').offsetWidth;
            document.getElementById('formList').scrollLeft -= widthItem;
        }
          