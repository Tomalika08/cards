// hide
$('#hide').click(function(){
    $('.btn_box').hide(500);
});
// show 
$('#show').click(function(){
    $('.btn_box').show(500);
});
$('#rendom').click(function(){
    $('.btn_box').toggle(500);
});
// slidUp
$('#slideup').click(function(){
    $('.btn_box').slideUp();
});
// slide down
$('#slided').click(function(){
    $('.btn_box').slideDown();
});
$('#sliderandom').click(function(){
    $('.btn_box').slideToggle()
})
// fadeout
$('#fadeout').click(function(){
    $('.btn_box').fadeOut('slow');
});
// fadein
$('#fadein').click(function(){
    $('.btn_box').fadeIn('slow')
});
$('#faderan').click(function(){
    $('.btn_box').fadeToggle('slow')
});
// add
$('#add').click(function(){
    $('.box').addClass('addbox')
});
// rem
$('#remove').click(function(){
    $('.box').removeClass('addbox')
});
$('#addrem').click(function(){
    $('.box').toggleClass('addbox')
});
// counter up js 
$(function(){
    $('.counter').counterUp({
        delay: 50,
        time: 5000
    });
});
// counter us js end 
// count down js star 
$(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    let birthday = "Jul 25, 2021 00:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
  
          let now = new Date().getTime(),
              distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
          //do something later when date is reached
          if (distance < 0) {
            let headline = document.getElementById("headline"),
                countdown = document.getElementById("countdown"),
                content = document.getElementById("content");
  
            headline.innerText = "It's my birthday!";
            countdown.style.display = "none";
            content.style.display = "block";
  
            clearInterval(x);
          }
          //seconds
        }, 0)
    }());
// count down js end 
// typed js start 
$(function(){
	$(".typed").typed({
		strings: ["My name is Sahajul Islam.", "I am a Designers.", "I am a good learner."],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 30,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: 5,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});

// team slider start
$('.team_slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    // dots:true,
    // prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    // nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
  });
  // team slider end
// typed js end


