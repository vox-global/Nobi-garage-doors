
      $('#testimonial-carousel').owlCarousel({
    center: true,
    items:3,
    loop:true,
    autoplay:true,
    margin:10,
    responsive:{
      0:{
            items:1
        },
      
        600:{
            items:2
        },
        
    }
});
      $('#trusted-carousel').owlCarousel({
    center: true,
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    responsive:{
      0:{
            items:2
        },
      
        600:{
            items:2
        },
        
    }
});


$(document).ready(function () {
    // Custom JavaScript to make the dropdown open on hover for desktop
    $('.nav-item.dropdown').hover(function () {
      if (window.innerWidth >= 768) {
        $(this).addClass('open');
      }
    }, function () {
      if (window.innerWidth >= 768) {
        $(this).removeClass('open');
      }
    });

    // Custom JavaScript to close the dropdown on tap for mobile
    $('.nav-item.dropdown').click(function () {
      if (window.innerWidth < 768) {
        $(this).toggleClass('open');
      }
    });

    // Close the dropdown when clicking outside of it
    $(document).on('click', function (e) {
      if (!$(e.target).closest('.nav-item.dropdown').length) {
        $('.nav-item.dropdown').removeClass('open');
      }
    });
  });


  let interval = 1000;
  let ValueDisplays = document.querySelectorAll(".counter-num")
  

  document.addEventListener("DOMContentLoaded", function () {
    let interval = 1000;
    let ValueDisplays = document.querySelectorAll(".counter-num");

    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                ValueDisplays.forEach((ValueDisplay) => {
                    let StartValue = 0;
                    let EndValue = parseInt(ValueDisplay.getAttribute("data-val"));
                    duration = interval / EndValue;
                    let counter = setInterval(function () {
                        StartValue += 1;
                        ValueDisplay.textContent = StartValue;
                        if (StartValue == EndValue) {
                            clearInterval(counter);
                        }
                    }, duration);
                });
            }
        });
    });

    let targetSection = document.getElementById('counter-sec');
    if (targetSection) {
        observer.observe(targetSection);
    }
});
