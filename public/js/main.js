(function ($) {
    "use strict";

    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    new WOW().init();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });
    
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

function myFunction() {
    var input, filter, div, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementsByClassName("filterDiv");
    for (i = 0; i < div.length; i++) {
        txtValue = div[i].textContent || div[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            div[i].style.display = "";
        } else {
            div[i].style.display = "none";
        }
    }
}

document.getElementById("search").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let cards = document.querySelectorAll(".kartya");

    cards.forEach(card => {
        let title = card.querySelector(".kartya-title").innerText.toLowerCase();
        if (title.includes(filter)) {
            card.parentElement.style.display = "block";
        } else {
            card.parentElement.style.display = "none";
        }
    });
});

filterSelection("all")
function filterSelection(c) {
var x, i;
x = document.getElementsByClassName("filterDiv");
if (c == "all") c = "";
for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
}
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
});
}

document.getElementById('ingyen').addEventListener('change', function() {
    let fizetos = document.getElementById('fizet');
    let arInput = document.getElementById('ar');

    if (this.checked) {
      fizetos.checked = false;
      arInput.style.display = 'none';
      arInput.value = '';
    }
  });

  document.getElementById('fizet').addEventListener('change', function() {
    let ingyenes = document.getElementById('ingyen');
    let arInput = document.getElementById('ar');

    if (this.checked) {
      ingyenes.checked = false;
      arInput.style.display = 'inline';
    } else {
      arInput.style.display = 'none'; 
      arInput.value = '';
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    const courseContainer = document.getElementById("courses-container");
    const courseCount = document.getElementById("course-count");
    const removeAllButton = document.getElementById("remove-all");

    courseContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("remove-course")) {
            const courseCard = event.target.closest(".course-card");
            if (courseCard) {
                courseCard.remove();
                let remainingCourses = document.querySelectorAll(".course-card").length;
                courseCount.textContent = remainingCourses;
            }
        }
    });

    removeAllButton.addEventListener("click", function () {
        document.querySelectorAll(".course-card").forEach(course => course.remove()); 
        courseCount.textContent = "0";
    });
});