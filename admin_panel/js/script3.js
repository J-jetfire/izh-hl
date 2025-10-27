$(function(){
   
    var oldVal, newVal, id, field;
   
   $('.edit').focus(function(){
       oldVal = $(this).text();
       id = $(this).data('id');
       field = $(this).data('name');
    })
    .blur(function(){
       newVal = $(this).text();
        
        if (newVal != oldVal){
            $(this).addClass('clicked');
            $.ajax({
                url: 'data_edit.php?action=players',
                type: 'POST',
                data: {new_val: newVal, id: id, field: field},
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
            });
        }
    });
    $('.edit').keypress(function(e){
       if(e.which == 13){
        newVal = $(this).text();
        
        if (newVal != oldVal){
            $(this).addClass('clicked');
            $.ajax({
                url: 'data_edit.php?action=players',
                type: 'POST',
                data: {new_val: newVal, id: id, field: field},
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
            });
        }
        return false;
       }
   });
    
});