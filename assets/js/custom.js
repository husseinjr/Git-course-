// const inputElement = document.querySelector('.counter input');
// const incrementButton = document.getElementById('increment');
// const decrementButton = document.getElementById('decrement');

// let count = 1; // Initial value

// // Function to update the count display
// function updateCount() {
//   inputElement.value = count;
// }

// // Increment function
// function increment() {
//   count++;
//   updateCount();
// }

// // Decrement function
// function decrement() {
//   if (count > 1) { // Ensure count doesn't go below 1
//     count--;
//     updateCount();
//   }
// }

// // Event listeners for increment and decrement buttons
// incrementButton.addEventListener('click', increment);
// decrementButton.addEventListener('click', decrement);

// // Initial update
// updateCount();

$(document).ready(function() {
  
  $(document).on( 'click' , '.increment-btn' ,function(e){
    e.preventDefault();
    var qty = $(this).closest('.product_data').find('.ctr-val').val();
    //  alert(qty);

    var value = parseInt(qty, 10);
    value = isNaN(value)? 0 : value;

    if(value < 10){
      value++;
      $(this).closest('.product_data').find('.ctr-val').val(value)
      $("#checkout_info").load(location.href + " #checkout_info");
    }
  });

  $(document).on( 'click' , '.decrement-btn' ,function(e){
    e.preventDefault();
    var qty = $(this).closest('.product_data').find('.ctr-val').val();
    //  alert(qty);

    var value = parseInt(qty, 10);
    value = isNaN(value)? 0 : value;

    if(value > 1){
      value--;
      $(this).closest('.product_data').find('.ctr-val').val(value)
      $("#checkout_info").load(location.href + " #checkout_info");
    }
  });

  
  $(document).on( 'click' , '.addToCartBtn' ,function(e){
    e.preventDefault();
    var qty =$(this).closest('.product_data').find('.ctr-val').val();;
    var prod_id = $(this).val();

    // alert( prod_id)
    
    $.ajax({ 
      method: "post",
      url: "functions/handelcart.php",
      data: {
        "prod_id": prod_id,
        "prod_qty": qty,
        "scope": "add"
      },
      success: function(response) {
          if(response == 201)
          {
            // alert("001");
            alertify.success('تم اضافه المنتج الى العربه');
          }
          else if(response == 401)
          {
            // alert("002");
            alertify.success('ُقم بتسجيل الدخول اولاً');
          }
          else if(response == "exsisting")
          {
            // alert("002");
            alertify.success('هذا العنصر موجود بالفعل');
          }
          else if(response == 500)
          {
            // alert("003");
            alertify.success('something went wrong');
          }
      }
    });

  });
  


  
  $(document).on( 'click' , '.updateQty' ,function(){
    // alert("hello");
    var qty =$(this).closest('.product_data').find('.ctr-val').val();;
    var prod_id =$(this).closest('.product_data').find('.prodId').val();

    // alert( prod_id);
    
    $.ajax({ 
      method: "post",
      url: "functions/handelcart.php",
      data: {
        "prod_id": prod_id,
        "prod_qty": qty,
        "scope": "update"
      },
      success: function(response) {
          // alert(response);
      }
    });
  });



  $(document).on( 'click' , '.deleteItem' ,function(){
    // alert("hello");
    var cart_id =$(this).val();

    // alert( cart_id);
    
    $.ajax({ 
      method: "post",
      url: "functions/handelcart.php",
      data: {
        "cart_id": cart_id,
        "scope": "delete"
      },
      success: function(response) {
          if(response == 200)
          {
            // alert("001");
            alertify.success('تم حذف المنتج من العربه');
            $("#my_cart").load(location.href + " #my_cart");

          }else{
            alertify.success(response);
          }
      }
    });
  });
  
});
    