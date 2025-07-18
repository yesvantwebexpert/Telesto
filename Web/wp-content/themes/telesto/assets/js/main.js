// Ensure DOM is ready
$(document).ready(function () {

  // Tab Toggle (Only one active)
  $('.program-sidebar .nav-tabs li a').click(function () {
    $('.program-sidebar .nav-tabs li a').removeClass('active');
    $(this).addClass('active');
  });

  // Scroll-based Header Classes (combined logic)
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
      $("header").addClass("darkHeader");
    } else {
      $("header").removeClass("darkHeader");
    }

    if (scroll >= 1) {
      $("header").addClass("darkHeader-2");
    } else {
      $("header").removeClass("darkHeader-2");
    }
  });

$('.Count').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 9000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});

  // Owl Carousel: Logo Slider
  $('#LogoSlider').owlCarousel({
    margin: 30,
    items: 7,
    dots: false,
    loop: true,
    nav: false,
    autoplay: true, 
    autoHeight: true,
    autoplayTimeout: 4500, 
    smartSpeed: 1500,
    responsive: {
      0: { items: 2.5 },
      600: { items: 5 },
      1000: { items: 7 }
    }
  });

  // Owl Carousel: Real Slider
  $('#Real-Slider').owlCarousel({
    margin: 30,
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 4500, 
    smartSpeed: 1500,
    autoHeight: true,
    responsive: {
      0: { items: 1.2 },
      768: { items: 1 },
      1000: { items: 2.5 }
    }
  });

   // Owl Carousel: Industry Slider
  $('#industry-silder').owlCarousel({
    margin: 35,
    items: 3,
    dots: false,
    loop: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 4500, 
    smartSpeed: 1500,
    autoHeight: true,
    responsive: {
      0: { 
        items: 1 
      },
      768: { 
      items: 3
       },
      1000: {
       items: 3 
     }
    }
  });

// Owl Carousel: Service Slider
  $('#service-slider').owlCarousel({
    margin: 16,
    items: 3,
    dots: false,
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4500, 
    smartSpeed: 1500,
    autoHeight: true,
    responsive: {
      0: { 
        items: 1 
      },
      768: { 
      items: 3
       },
      1000: {
       items: 4 
     }
    }
  });

   // Owl Carousel: Blog Slider
  $('#Blog-Slider').owlCarousel({
    margin: 16,
    items: 1,
    dots: false,
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4500, 
    smartSpeed: 1500,
    autoHeight: true,
    responsive: {
      0: { items: 1.2 },
      768: { items: 3 },
      1000: { items: 4 }
    }
  });

    // Owl Carousel: Real Slider
$('#Advantage-Slider').owlCarousel({
  margin: 0,
  items: 1,
  dots: true,
  loop: true,
  nav: false,
  autoplay: true,
  autoplayTimeout: 4500, 
  smartSpeed: 1500,
  autoHeight: true,
  responsive: {
    0: { items: 1 },
    768: { items: 1 },
    1000: { items: 1 }
  },
   onInitialized: addNumberedDots,  
  onChanged: addNumberedDots,
});

function addNumberedDots(event) {
  var dotContainer = $('#Advantage-Slider .owl-dots');
  dotContainer.find('.owl-dot').each(function(index) {
    let number = (index + 1).toString().padStart(2, '0'); // 01, 02...
    $(this).html('<span>' + number + '</span>');
  });
}



  // Owl Carousel: Banner Slider
  $('#BannerSlider').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'flipInX',
    items: 1,
    margin: 30,
    dots: true,
    loop: true,
    nav: false,
    stagePadding: 30,
    smartSpeed: 450
  });

  // Bootstrap Carousel Auto-play
  $(".carousel").carousel({
    pause: "false",
  });

  // WOW.js Animation Init
  if (typeof WOW !== 'undefined') {
    new WOW().init();
  }

}); // end of jQuery ready


// Custom Cursor Code
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
  const target = e.target;

  if (
    target.tagName === 'BUTTON' ||
    target.tagName === 'A' ||
    target.closest('button') ||
    target.closest('a') ||
    target.classList.contains('no-cursor')
  ) {
    cursor.style.display = 'none';
  } else {
    cursor.style.display = 'block';
    cursor.setAttribute("style", `top: ${e.pageY - 10}px; left: ${e.pageX - 10}px;`);
  }
});

document.addEventListener('click', e => {
  const target = e.target;
  if (
    target.tagName !== 'BUTTON' &&
    target.tagName !== 'A' &&
    !target.closest('button') &&
    !target.closest('a')
  ) {
    cursor.classList.add("expand");
    setTimeout(() => {
      cursor.classList.remove("expand");
    }, 500);
  }
});


// Custom Hover Icon Swap Function
function changeIcon(isHovered) {
  var icon = document.getElementById("arrow-icon");
  icon.src = isHovered
    ? "images/icons/black-arrow.svg"
    : "images/icons/white-arrow.svg";
}


// Smooth Scroller using TweenLite
var html = document.documentElement;
var body = document.body;

var scroller = {
  target: document.querySelector("#scroll-container") || body,
  ease: 0.1,
  endY: 0,
  y: 0,
  resizeRequest: 1,
  scrollRequest: 0,
};

var requestId = null;

TweenLite.set(scroller.target, {
  rotation: 0.01,
  force3D: true
});

window.addEventListener("load", onLoad);

function onLoad() {
  updateScroller();
  window.focus();
  window.addEventListener("resize", onResize);
  document.addEventListener("scroll", onScroll);
}

function updateScroller() {
  var resized = scroller.resizeRequest > 0;

  if (resized) {
    var height = scroller.target.clientHeight;
    body.style.height = height + "px";
    scroller.resizeRequest = 0;
  }

  var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;
  scroller.endY = scrollY;
  scroller.y += (scrollY - scroller.y) * scroller.ease;

  if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
    scroller.y = scrollY;
    scroller.scrollRequest = 0;
  }

  TweenLite.set(scroller.target, {
    y: -scroller.y
  });

  requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
}

function onScroll() {
  scroller.scrollRequest++;
  if (!requestId) {
    requestId = requestAnimationFrame(updateScroller);
  }
}

function onResize() {
  scroller.resizeRequest++;
  if (!requestId) {
    requestId = requestAnimationFrame(updateScroller);
  }
}











