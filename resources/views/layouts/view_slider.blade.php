<div class="slider-container">
    <div class="slider" id="slider">
        <div class="slide"><img src="{{asset('img/1.jpg')}}" alt="Imagen 1"></div>
        <div class="slide"><img src="{{asset('img/2.jpg')}}" alt="Imagen 1"></div>
        <div class="slide"><img src="{{asset('img/3.jpg')}}" alt="Imagen 1"></div>
        <div class="slide"><img src="{{asset('img/4.jpg')}}" alt="Imagen 1"></div>
        <div class="slide"><img src="{{asset('img/5.jpg')}}" alt="Imagen 1"></div>

    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
    <div class="dots">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
</div>