$(document).ready(function(){
  $('#choose-size').hide();
  $('#choose-drink').hide();
});

$('input[name="option1"]').change(function(){
  var mealOption = $("input:radio[name='option1']:checked").data("label");
  if(!mealOption.includes('Ala-carte')){
    $('#choose-size').show();
    $('#choose-drink').show();
  }else{
    $('#choose-size').hide();
    $('#choose-drink').hide();
  }
});
$('#choose-meal').change(function(){
  var mealOption = $('#choose-meal').find(':selected').data('label');
  if(!mealOption.includes('Ala-carte')){
    $('#choose-size').show();
    $('#choose-drink').show();
  }else{
    $('#choose-size').hide();
    $('#choose-drink').hide();
  }
});
