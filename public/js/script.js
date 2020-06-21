$(document).ready(function () {
  $('#upload').bind('change', function() {
    if (this.files[0].size > 1024 * 1024 * 5){
    alert("Файл весит больше 5Мб");
  $("upload")[0].reset()}
  });
$('#upload').on('change', function() {
  var splittedFakePath = this.value.split('\\');
  $('#fileformlabel').text(splittedFakePath[splittedFakePath.length - 1]);
});


$(function(){
  $('.input-calc').on('input', function() {
  $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''))
});
  // $( '#deletereq' ).on( 'click', function( event ) {
  //   console.log( 'clicked', $( this ).text() );
  // });
  $(".tbodyreq").on('click','#deletereq',function () {
    var attrib = $(this).attr('name');
    // alert(attrib);
    $.post("/apanel",{'deletereq': attrib}).done(function (result) {
      // alert(result);
    });
  });
  $(".tbodyusers").on('click','#deleteuser',function () {
    var attrib = $(this).attr('name');
    // alert(attrib);
    $.post("/apanel",{'deleteuser': attrib}).done(function (result) {
      // alert(result);
    });
  });
  $(".tbodyusers").on('click','#updateuser',function () {
    var newname = prompt("Введите новое имя");
    var attrib = $(this).attr('name');
    // alert(attrib);
    $.post("/apanel",{'updateuser': attrib,'newname':newname}).done(function (result) {
      // alert(result);
    });
  });
$("#form").validate({
  rules:{
  phone: "required",
  checkreq: "required",
  inputcalc: {
    digits:true,},
  },
  messages:{
    phone: "Пожалуйста введите номер телефона",
    checkreq:"Пожалуйста поставьте галочку",
    inputcalc:{
      digits:"Используйте только числа"
    }
  },
  errorElement: "label",
    errorClass: "error",
    validClass: "success",
    highlight: function(element, errorClass, validClass) {
    $(element).addClass(errorClass).removeClass(validClass);
    $(element.form).find("label[for=" + element.id + "]")
    .addClass(errorClass);
    },
    unhighlight: function(element, errorClass, validClass) {
    $(element).removeClass(errorClass).addClass(validClass);
    $(element.form).find("label[for=" + element.id + "]")
    .removeClass(errorClass);
    },

  submitHandler: function(){

  // $('#calculator-left').on('click','#send',function(e) {
    e.preventDefault();
    var $that = $(this),
        formData = new FormData($that.get(0));
    $.post("/home",formData).done(function (result) {
      $('#myModal').addClass("active");
    })
  }});
$('body').on('click','#addcolor',function () {
  var newcolor = prompt('Введите новый цвет');
  $.post("/apanel",{'newcolor':newcolor}).done(function (result) {
    // alert("Ok");
  })
})
  $('body').on('click','#deletecolor',function () {
    var deletecolor = $(this).attr('name');
    $.post("/apanel",{'deletecolor':deletecolor}).done(function (result) {
      alert("Ok");
    })
  })


  $('#calculator-right').on('change','#input-calc',function () {
    var lengthp = $("input[name='lengthp']").val();
    var lamp = $("input[name='lamp']").val();
    var chandelier = $("input[name='chandelier']").val();
    var pipe = $("input[name='pipe']").val();
    var angle = $("input[name='angle']").val();
    var glossy = $("input[id='radio1']").prop('checked');
    var matte = $("input[id='radio2']").prop('checked');
    $.post("/home",{'lengthp': lengthp,'lamp':lamp,'chandelier':chandelier,'pipe':pipe,'angle':angle,'glossy':glossy,'matte':matte}).done(function (result) {
      // alert(result);
      $('#overprice').html(result);
    })
    })









  $('#calc-select').niceSelect();

  $("#calendar").datepicker({
    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
   'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
   'Октябрь', 'Ноябрь', 'Декабрь'],
    dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    firstDay: 1,
    showOtherMonths: true,
    dateFormat: "dd.mm.yy",
   });

  $("#phone").mask("+7(999) 99-99-999");
  $("#closeModal").click(function () { 
    $("#myModal").removeClass("active");
    
  });
}); 
    

// Элементы футера
  var acc = document.getElementsByClassName("accordion");
  var i;
  for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    if ($(window).width() <= 992){
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  } 
  });
}

$('#btn-nav').click(function () {
  if ($('.burger-item').hasClass('active')){
    $('.burger-item').removeClass('active');
  }else{
  $('.burger-item').addClass('active');}
});


});

