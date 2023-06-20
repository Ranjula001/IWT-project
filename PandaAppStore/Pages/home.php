<!--slide show-->
<div class="slideshow-container pt-2">

    <div class="mySlides anim">
        <div class="numbertext">1 / 3</div>
        <img src="IMAGE/carousel/appI1.png" style="width:100%" class="imgSlide">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides anim">
        <div class="numbertext">2 / 3</div>
        <img src="IMAGE/carousel/app2.png" style="width:100%" class="imgSlide">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides anim">
        <div class="numbertext">3 / 3</div>
        <img src="IMAGE/carousel/app3.png" style="width:100%" class="imgSlide">
        <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
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
    }
</script>


<!--Apps-->
<div class="topApps">
    <h3>TOP APPS</h3>
    <table border="1">
        <tr>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>
            <td><button class="app"></button></td>


        </tr>
    </table>
    <a href="" class="moreApps_text">more Apps..</a>

</div>