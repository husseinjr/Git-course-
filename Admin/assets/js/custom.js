$(document).ready(function() {

    $(document).on( 'click' , '.delete_product_btn' ,function(e){
        e.preventDefault();
        var id = $(this).val();

        swal({
            title: "Are you sure ?",
            text: "Once deleted, you will not be able to recover it!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "POST",
                    url: "code.php",
                    data: {
                        'product_id' : id,
                        'delete_product_btn' : true 
                    },
                    success: function(response) {
                        if( response == 200 )
                        {
                            swal("Success!", "Product Deleted successfully", "success");
                            $("#product_table").load(location.href + " #product_table");
                        }
                        else if (response == 500)
                        {
                            swal("Erorr!", "something went wrong", "error");

                        }
                    }
                });

            } 
          });

    });
 
    // >>>>>>>>>>>>>>>>>>>>>

    $(document).on( 'click' , '.delete_category_btn' ,function(e){
        e.preventDefault();
        var id = $(this).val();

        swal({
            title: "Are you sure ?",
            text: "Once deleted, you will not be able to recover it!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "POST",
                    url: "code.php",
                    data: {
                        'category_id' : id,
                        'delete_category_btn' : true 
                    },
                    success: function(response) {
                        if( response == 200 )
                        {
                            swal("Success!", "Category Deleted successfully", "success");
                            $("#category_table").load(location.href + " #category_table");
                        }
                        else if (response == 500)
                        {
                            swal("Erorr!", "something went wrong", "error");

                        }
                    }
                });

            } 
          });

    });

});
