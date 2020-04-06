$(function () {
    $("p").hide();
    $("#span1").click(function () {
        $("#p1").fadeToggle(500);
        $("#p3,#p2").fadeOut(500);
    });
    $("#span2").click(function () {
        $("#p2").fadeToggle(500);
        $("#p3,#p1").fadeOut(500);
    });
    $("#span3").click(function () {
        $("#p3").fadeToggle(500);
        $("#p1,#p2").fadeOut(500);
    });
});

var slideIndex, slides, dots, captionText;

function initGallery() {
    slideIndex = 0;
    slides = document.getElementsByClassName("imageHolder");
    slides[slideIndex].style.opacity = 1;

    //disable nextPrevBtn if slide count is one
    // if (slides.length < 2) {
    //     var nextPrevBtns = document.querySelector(".leftArrow,.rightArrow");
    //     nextPrevBtns.style.display = "none";
    //     for (i = 0; i < nextPrevBtn.length; i++) {
    //         nextPrevBtn[i].style.display = "none";
    //     }
    // }

    //add dots
    dots = [];
    var dotsContainer = document.getElementById("dotsContainer");
        // console.log(slides.length)
    for (var i = 0; i < slides.length; i++) {
        var dot = document.createElement("div");
        dot.classList.add("dots");
        dot.setAttribute("onclick", "moveSlide(" + i + ")");
        dotsContainer.append(dot);
        dots[i] = dot;
    }
    dots[slideIndex].classList.add("active");
}
initGallery();



function moveSlide(n) {
    var i;
    var current, next;
    var moveSlideAnimClass = {
        forCurrent: "",
        forNext: ""
    };
    var slideTextAnimClass;
    if (n > slideIndex) {
        if (n >= slides.length) {
            n = 0;
        }
        moveSlideAnimClass.forCurrent = "moveLeftCurrentSlide";
        moveSlideAnimClass.forNext = "moveLeftNextSlide";
        slideTextAnimClass = "slideTextFromTop";
    } else if (n < slideIndex) {
        if (n < 0) {
            n = slides.length - 1;
        }
        moveSlideAnimClass.forCurrent = "moveRightCurrentSlide";
        moveSlideAnimClass.forNext = "moveRightPrevSlide";
        slideTextAnimClass = "slideTextFromBottom";
    }

    if (n != slideIndex) {
        next = slides[n];
        current = slides[slideIndex];
        for (i = 0; i < slides.length; i++) {
            slides[i].className = "imageHolder";
            slides[i].style.opacity = 0;
            dots[i].classList.remove("active");
        }
        current.classList.add(moveSlideAnimClass.forCurrent);
        next.classList.add(moveSlideAnimClass.forNext);
        dots[n].classList.add("active");
        slideIndex = n;
        captionText.className = "captionText " + slideTextAnimClass;
        captionText.innerText = slides[n].querySelector(".captionText").innerText;
        captionText.style.display = "block";
    }

}
var timer = null;

// JS animation

function abc()
{
  document.write("Javascript Training");
};

