$(function(){
   
    var oldVal, newVal, id, field, page;
   
   $('.edit').focus(function(){
       oldVal = $(this).text();
       id = $(this).data('id');
       field = $(this).data('name');
       page = $(this).data('page');
    })
    .blur(function(){
       newVal = $(this).text();
        
        if (newVal != oldVal){
            $.ajax({
                url: 'data_edit.php?action=articles&page='+page,
                type: 'POST',
                data: {new_val: newVal, id: id, field: field, page: page},
                beforeSend: function(){
                  /**$('#loader').fadeIn();**/
                },
                success: function(res){
                    console.log(res);
                },
                error: function(){
                    alert('Error!');
                },
                complete: function(){
                   /**$('#loader').delay(300).fadeOut();**/
                }
            })
        }
    });
    
    
    
});