var cart = [];
var siteNo = $('#siteNo').val();
$(document).ready(function(){
  if(sessionStorage.getItem("cart") != null){
    cart = JSON.parse(sessionStorage.getItem("cart"));
    initCart();
  }
});
$(".cart").on("click", ".btn-delete", function () {
    var action = confirm("Are you sure you want to remove this item?");
    console.log(action);
    if(action == true){
      id = $(this).data('id');
      mealid = $(this).data('mealid');
      console.log('id: '+id+ ' mealid: ' + mealid);
      for(var i=0; i<cart.length; i++){
        if(id == cart[i].id && mealid == cart[i].mealid){
          console.log('before: '+cart)
          cart.splice(i,1);
          $('.cartContainer').empty();
          initCart();
          if(cart.length == 0){
            $('.cartContainer').append('<div class="col-md-12" id="emptyCart">Currently, you have no order</div>');

          }
          sessionStorage.setItem("cart",JSON.stringify(cart));
          replaced = true;
        }
      }
    }
});
$(".cart").on("click", ".btn-update", function () {
  updateCart();
  $('.cartContainer').empty();
  initCart();
});
// var item = {id:"", name:"", image:"", price:"", mealName:"", quantity:""}
$('#choose-meal').change(function(){
  changeTotal();
});
$('#quantity').keyup(function(){
  changeTotal();
});
$('.btn-add').click(function(){
  var invalidMeal = false;
  var invalidCombo = false;
  var invalidDrink = false;
  var invalidQuantity = false;
  var error = false;
  var warningMessage = "Please do not leave the following fields empty:\n";

  if($('#quantity').val() == 0){
    invalidQuantity = true;
    error = true;
  }
  if($('#choose-meal').val() == 0 && $('#choose-meal').is(':visible')){
    invalidMeal = true;
    error = true;
  }
  if($("#size-dropdown").val() == 0 && $('#choose-size').is(':visible')){
    invalidCombo = true;
    error = true;
  }
  if($('#drink-dropdown').val() == 0 && $('#choose-drink').is(':visible')){
    invalidDrink = true;
    error = true;
  }
  if(!error){
    $('#add-error').hide();
    addCart();
  }else{
    if(invalidMeal){
      warningMessage+="- Meal\n";
    }if(invalidCombo){
      warningMessage+="- Combo\n";
    }if(invalidDrink){
      warningMessage+="- Drink\n";
    }
    if(invalidQuantity){
      warningMessage = "Please Input a Valid Quantity"
    }
    $('#add-error').text(warningMessage);
    $('#add-error').show();
  }
});

function addCart(){
  var itemId = $('#itemId').val();
  var itemImage = $('#itemImage').val()
  var basePrice = $('#choose-meal').find(':selected').data("price");
  var mealId = $('#choose-meal').find(':selected').data("id");
  var label = $('#choose-meal').find(':selected').data("label");
  var quantity = $("#quantity").val();
  var itemName = $('#itemName').text();
  var isAlter = "";
  console.log(itemName)
  var item = {"id":itemId,"name":itemName, "price":basePrice,"image":itemImage,
              "mealid":mealId, "label":label ,"quantity":quantity};
  var existingItem = false;
              for(var i=0; i<cart.length; i++){
                if(item.id == cart[i].id && item.mealid == cart[i].mealid){
                  cart[i] = item;
                  existingItem = true;
                  if(i % 2 != 0){
                    isAlter = "alter";
                  }
                }
              }
  if(cart.length > 0){
    var replaced = false;
    for(var i=0; i<cart.length; i++){
      if(item.id == cart[i].id && item.mealid == cart[i].mealid){
        cart[i] = item;
        console.log('replaced item to:' + cart[i])
        replaced = true;
      }
    }
    if(!replaced){
      cart.push(item);
    }
  }else{
    console.log("pushed new item")
    cart.push(item);
  }
  $('.cartContainer').empty();
  initCart();
  console.log(cart);
  sessionStorage.setItem("cart",JSON.stringify(cart));
}

function changeTotal(){
  var basePrice = $('#choose-meal').find(':selected').data("price");
  var quantity = $("#quantity").val();
  $('.quickTotal').text("Total: PHP "+basePrice * quantity+".00");
}
function updateCart(){
  cart = [];
  $('.cart-quantity').each(function(index){
      console.log($(this).data('name'))
      var itemId = $(this).data('id');
      var itemImage = $(this).data('image');
      var quantity = $(this).val();
      var basePrice = $(this).data('price');
      var mealId = $(this).data('mealid');
      var label = $(this).data('label');

      var itemName = $(this).data('name');
      var item = {"id":itemId,"name":itemName, "price":basePrice,"image":itemImage,
                  "mealid":mealId, "label":label ,"quantity":quantity};
      cart.push(item);
  })
    sessionStorage.setItem("cart",JSON.stringify(cart));
    console.log(cart);
}
function initCart(){
  var label;
  for(var i=0; i<cart.length; i++){
    var isAlter = "";
    if(i % 2 != 0){
      isAlter = "alter";
    }
    if(cart[i].id == 1 || cart[i].id > 8){
      label = "Size"
    }else{
      label = "Meal"
    }
    var itemHTML = '<div class="item '+isAlter+'" id="cart-'+cart[i].id+'-'+cart[i].mealid+'" data-quantity="'+cart[i].quantity+'">'+
  						'<div class="col-md-2">'+
  							'<button type="button" class="btn btn-link btn-delete" data-id="'+cart[i].id+'" data-mealid="'+cart[i].mealid+'" ">'+
  								'<span class="glyphicon glyphicon-remove-sign text-danger"></span>'+
  							'</button>'+
  						'</div>'+
  						'<div class="col-md-10">'+
  							'<div>'+
  								'<a href="#">'+cart[i].name+'</a>'+
  							'</div>'+
  							'<small><table style="font-size:1em; color:grey;"><tbody><tr><td><strong>'+label+':</strong></td><td>'+cart[i].label+'</td></tr></tbody></table></small>'+
  						'</div>'+
  						'<div class="clearfix"></div>'+

  						'<div class="col-md-6">'+
  							'<div class="input-group input-group-sm">'+
  								'<span class="input-group-addon">Qty</span>'+
  								'<input type="text" class="form-control text-center digits cart-quantity" value="'+cart[i].quantity+'" name="quantity1" data-price="'+cart[i].price+'" data-name="'+cart[i].name+'" data-image="'+cart[i].image+'" data-label="'+cart[i].label+'" data-id="'+cart[i].id+'" data-mealid="'+cart[i].mealid+'">'+
  							'</div>'+
  						'</div>'+
  						'<div class="col-md-6 text-right">'+
  							'<div class="price">Php '+cart[i].price*cart[i].quantity+'.00</div>'+
  						'</div>'+
  						'<div class="clearfix"></div>'+
  					'</div>';
    if($('#emptyCart').length != 0){
      $('.cartContainer').empty();
    }
    $('.cartContainer').append(itemHTML);
  }
  var subTotal = 0.00;
  for(var i=0; i<cart.length; i++){
    subTotal += cart[i].price * cart[i].quantity;
  }
  if(subTotal > 0){
    $('.cartContainer').append('<hr>');
    $('.cartContainer').append('<div class="col-xs-5"><strong>Subtotal</strong></div>');
    $('.cartContainer').append('<div class="col-xs-7 text-right"><div id="subTotal">PHP '+parseFloat(subTotal).toFixed(2)+'</div></div>');
    $('.cartContainer').append('<div class="clearfix"></div>');
    $('.cartContainer').append('<div class="text-center marginTop bottomTotal"></div>');
    var updateBtn = '<button type="button" class="btn btn-danger btn-sm btn-update" data-action="updateOrder">'+
  					'<span class="glyphicon glyphicon-floppy-save"></span> Update Cart'+
  				'</button>'
    $('.bottomTotal').append(updateBtn);
  }

  if(cart.length != 0 && subTotal < 250){
    var error = '<div class="info alert alert-danger purchase-error"><h4>Min. purchase is Php 250.00</h4></div>'
    $('.bottomTotal').append(error);
  }else{
    $('.purchase-error').remove();
    $('.bottomTotal').append('<button type="button" class="btn btn-warning btn-sm" onclick="location.href=\'/wendys-design/public/'+siteNo+'/checkout/2\'">'+
						'<span class="glyphicon glyphicon-circle-arrow-right"></span> Proceed to Checkout'+
					'</button>');
  }
}
