var cart = [];
$(document).ready(function(){
  if(sessionStorage.getItem("cart") != null){
    cart = JSON.parse(sessionStorage.getItem("cart"));
    initCart();
  }
});

$('#termsAndConditions').change(function(){
  var disabled = $('#btn-order').attr('disabled');
  if(disabled){
    $('#btn-order').attr('disabled', false);
  }else{
    $('#btn-order').attr('disabled', true);
  }
});

$('#deliverService').change(function(){
  $('.delivery').hide();
});
$('#dineInForPickUp').change(function(){
  $('.delivery').show();
});

$('#btn-order').click(function(){
  cart = [];
  sessionStorage.setItem("cart",JSON.stringify(cart));
  window.location.href = "../"
})
$('#immediateDeliver').change(function(){
  $('.preferredDateAndTime').toggle();
})
function initCart(){
  var basePath = $('#base-path').val();
  var subTotal = 0.00;
  for(var i=0; i<cart.length; i++){
    subTotal += cart[i].price * cart[i].quantity;
    if(cart[i].id == 1 || cart[i].id > 8){
      label = "Size"
    }else{
      label = "Meal"
    }
    console.log(cart[i].name);
    var itemHTML = '<tr>'+
      '<td class="">'+
        '<div class="img">'+
          '<a href="#">'+
            '<img src="'+basePath+'images/items/'+ cart[i].image+' ">'+
          '</a>'+
        '</div>'+
        '<div class="details">'+
            cart[i].name +
          '<small><table><tbody><tr><td class=""><strong>'+label+':</strong></td><td class="">'+cart[i].label+'</td></tr></tbody></table></small>'+
        '</div>'+
      '</td>'+
      '<td class="text-center">'+parseFloat(cart[i].price).toFixed(2)+'</td>'+
      '<td class="text-center">'+cart[i].quantity+'</td>'+
      '<td class="text-right">'+parseFloat(cart[i].price * cart[i].quantity).toFixed(2)+'</td>'+
    '</tr>';
    $('.checkout-cart').append(itemHTML);
    $('#subTotal').text(parseFloat(subTotal).toFixed(2));
    $('#grandTotal').text(parseFloat(subTotal+ 28.50).toFixed(2));
  }
}
