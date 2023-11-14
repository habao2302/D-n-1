
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

        // 
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            // Check if the clicked dropdown does not have the 'show' class
            if (!$(this).next().hasClass('show')) {
                // Remove the 'show' class from other dropdowns within the same parent
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
        
            // Get the submenu of the clicked dropdown
            var $subMenu = $(this).next(".dropdown-menu");
        
            // Toggle the 'show' class on the submenu
            $subMenu.toggleClass('show');
        
            // When a dropdown is hidden, remove the 'show' class from submenus
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });
        
            // Prevent the default link behavior (e.g., navigating to a new page)
            return false;
        });


        // 
     
  function initMap() {
    // Tọa độ trung tâm bản đồ
    var center = { lat: 10.7769, lng: 106.7009 };

    // Tạo một bản đồ với tọa độ trung tâm
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: center
    });

    // Tạo một đánh dấu trên bản đồ
    var marker = new google.maps.Marker({
      position: center,
      map: map,
      title: 'Hello World!'
    });
  }
  $( document ).ready( function() {

    $('body').noisy({
        intensity: 0.2,
        size: 200,
        opacity: 0.28,
        randomColors: false, // true by default
        color: '#000000'
    });
      
        //Google Maps JS
        //Set Map
        function initialize() {
                var myLatlng = new google.maps.LatLng(53.3333,-3.08333);
                var imagePath = 'http://m.schuepfen.ch/icons/helveticons/black/60/Pin-location.png'
                var mapOptions = {
                    zoom: 11,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
    
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            //Callout Content
            var contentString = 'Some address here..';
            //Set window width + content
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 500
            });
    
            //Add Marker
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: imagePath,
                title: 'image title'
            });
    
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
    
            //Resize Function
            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
        }
    
        google.maps.event.addDomListener(window, 'load', initialize);
    
    });


    // 
   

    document.addEventListener('DOMContentLoaded', function () {
        // Lấy tất cả các nút "Mua Ngay"
        var buyNowButtons = document.querySelectorAll('.buy-now');
  
        // Lặp qua từng nút và thêm sự kiện click
        buyNowButtons.forEach(function (button) {
           button.addEventListener('click', function () {
              // Lấy thông tin sản phẩm từ thuộc tính data-*
              var productName = button.getAttribute('data-product-name');
              var productPrice = button.getAttribute('data-product-price');
              var productImage = button.getAttribute('data-product-image');
  
              // Thêm sản phẩm vào giỏ hàng
              addToCart(productName, productPrice, productImage);
           });
        });
     });