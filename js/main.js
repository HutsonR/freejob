// Маркет 
$('#order-type').change(function() {
  var selectval = $(this).val(); // Получим значение из select со значением #participation
  if( selectval == 'text') {
    $('.text-area').show();
  } else {
    $('.text-area').hide();
  }
  if (selectval == 'dev') {
    $('.dev-area').show();
  } else {
    $('.dev-area').hide();
  }
  if (selectval == 'seo') {
    $('.seo-area').show();
  } else {
    $('.seo-area').hide();
  }
  if (selectval == 'market') {
    $('.market-area').show();
  } else {
    $('.market-area').hide();
  }
  if (selectval == 'video') {
    $('.video-area').show();
  } else {
    $('.video-area').hide();
  }
  if (selectval == 'design') {
    $('.design-area').show();
  } else {
    $('.design-area').hide();
  }
});
$(document).ready(function(){
  var maxCount = 6;
  $(".max-price").html(maxCount);
  $(".max-price").keyup(function() {
  var revText = this.value.length;
      if (this.value.length > maxCount)
          {
          this.value = this.value.substr(0, maxCount);
          }
      var cnt = (maxCount - revText);
  });
});
// Карусель
$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    speed: 1000,
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 2,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });
});

// Боковая менюшка на телефоне
$("#navToggle").click(function () {
	$("#nav").toggleClass("active")
});


// Открытие боковой меню (бургер)
$("#navToggle").click(function() {
    $(this).toggleClass("active");
    $(".overlay").toggleClass("open");
    $("body").toggleClass("locked"); 
});

$(function() {
	$('.button-cat').click(function() {
		var get_id = this.id;
		var get_current = $('.users-otziv-container .' + get_id);

		$('.otziv').not(get_current).hide(500);
		get_current.show(500);
	});
});

/*Dropdown Menu*/
$('.market-right_filter').click(function () {
    $(this).attr('tabindex', 1).focus();
    $('.market-right_content').toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});


// создаем <link rel="stylesheet" href="light|dark.css">
  let head = document.head,
      link = document.createElement('link');
  link.rel = 'stylesheet';
  // проверяем значение из localStorage если dark то темная тема
  if (localStorage.getItem('themeStyle') === 'dark') {
    link.href = 'css/dark.css'; // ссылка на темный стиль
    document.getElementById('switch-1').setAttribute('checked', true); // переключаем чекбокс в положение "темная тема"
  }
  // по умолчанию светлая тема
  else {
    link.href = 'css/light.css'; // ссылка на светлый стиль
  }
  head.appendChild(link); // вставляем <link rel="stylesheet" href="light|dark.css"> в шапку страницы между темаги head

  // событие при переключении чекбокса
  document.getElementById('switch-1').addEventListener('change', ev => {
    let btn = ev.target;
    // если чекбокс включен
    if (btn.checked) {
      link.href = 'css/dark.css'; // сключаем темную тему
      localStorage.setItem('themeStyle', 'dark'); // записываем значение в localStorage
    }
    else {
      link.href = 'css/light.css'; // включаем светлую тему
      localStorage.setItem('themeStyle', 'light'); // записываем значение в localStorage
    }
  });

////////////////////////////////////////////////
//
//      Секция создания заказа                
//
////////////////////////////////////////////////
  // Прогресс в создании заказа
  var progress_val = $('progress').val();
  var progress_max = $('progress').attr('max') || 100;
  var interval = null;
  var global_step = 25;
  $('button.arrow').click(function() {
      if ($(this).hasClass('minus')){
        progress_val = (progress_val-global_step >= 0) ? progress_val-global_step : progress_val;
      } else {
        progress_val = (progress_val+global_step <= 100) ? progress_val+global_step : progress_val;
      }
      $('span#progress-val').text(progress_val);
      progress_change();
  });
  function progress_change(){
    var step = 1;
    if ($('progress').val() > progress_val){
      step = -1;
    }
    if ($('progress').val() != progress_val){
      clearInterval(interval);
      interval = setTimeout(function(){
         $('progress').val($('progress').val() + step);
         progress_change();
      }, 20);
    }
  }

// Подсчёт оставшихся символов 
$(document).ready(function(){
  var maxCount = 75;
  $("#counter").html(maxCount);
  $("#review-text").keyup(function() {
  var revText = this.value.length;
      if (this.value.length > maxCount)
          {
          this.value = this.value.substr(0, maxCount);
          }
      var cnt = (maxCount - revText);
      if(cnt <= 0){$("#counter").html('0');}
      else {$("#counter").html(cnt);}
  });
});

// Карусель на создании заказа
$(document).ready(function(){
  $('.slider-create-work').slick({
    speed: 400,
    infinite: false,
    touchMove: false,
    swipe: false,
    prevArrow: $('.arrow__left'),
    nextArrow: $('.arrow__right')
  });
});

// Деактивация кнопки при незаполненных полях
$(document).ready(function() {
  $(function() {
    $(".work-title").on('change input paste', 'input', function(e) {
      $("#btn-first_next").prop('disabled', !$("#review-text").val());
    });
  });
});

// Деактивация кнопки при незаполненных полях (описание заказа)
$(document).ready(function() {
  $(function() {
    $(".work-title").on('change input paste', 'textarea', function(e) {
      $("#btn-second_next").prop('disabled', !$("#desc-text").val());
    });
  });
});


// Активация скрытого меню при нажатии "Ещё"
let prev = null;
document.body.addEventListener("click", (e) => {
  let el = e.target;
  if (!el.classList.contains("local-cat")) return false;
  let other = el.parentElement.querySelector(".other_li");
  if (prev === other) {
    other.style.display = "none";
    prev = null;
    return false;
  }
  
  if (prev) prev.style.display = "none";
  other.style.display = "block";
  prev = el.parentElement.querySelector(".other_li");

});

// Показ кнопки "скрыть" при раскрытом меню
$('.local-cat-show').click(function() {
  $(this).css("display","none");
  $(this).closest("ul").find('.local-cat-sh').css("display","initial");
});
$('.local-cat-sh').click(function() {
  $(this).css("display","none");
  $(this).closest("ul").find('.local-cat-show').css("display","initial");
});

// Подсчёт оставшихся символов в описании работы
// Подсчёт оставшихся символов 
$(document).ready(function(){
  var maxCount = 4500;
  $("#counter-desc").html(maxCount);
  $("#desc-text").keyup(function() {
  var revText = this.value.length;
      if (this.value.length > maxCount)
          {
          this.value = this.value.substr(0, maxCount);
          }
      var cnt = (maxCount - revText);
      if(cnt <= 0){$("#counter-desc").html('0');}
      else {$("#counter-desc").html(cnt);}
  });
});

// загрузка файла
(function() {
   
  'use strict';
 
  $('.input-file').each(function() {
    var $input = $(this),
        $label = $input.next('.js-labelFile'),
        labelVal = $label.html();
     
   $input.on('change', function(element) {
      var fileName = '';
      if (element.target.value) fileName = element.target.value.split('\\').pop();
      fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
   });
  });
})();

$(".example").append( function(indx, val){
   if($('<label>'+val+'</label>').find(".input-file:contains('.has-file')").length != 0)
     return '<div class="example"><div class="form-group"><input type="file" name="file" id="file" class="input-file"><label for="file" class="btn btn-tertiary js-labelFile"><i class="icon fa fa-check"></i><span class="js-fileName">Загрузить файл</span></label></div></div>';
   else
     return "";
 });

// Ввод в input только числа
function replacer(el) {
  el.value = el.value.replace(/[^0-9]/g, ''); 
}
