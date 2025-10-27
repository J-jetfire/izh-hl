$(function(){
   
    var oldVal, newVal, id, field, tabl, prtk;
   
   $('.edit').focus(function(){
       oldVal = $(this).text();
       id = $(this).data('id');
       prtk = $(this).data('prtk');
       field = $(this).data('name');
       tabl = $(this).data('tabl');
    })
    .blur(function(){
       newVal = $(this).text();
        if (newVal != oldVal){
            $(this).addClass('clicked');
            $.ajax({
                url: 'data_edit.php?action=game&protokol='+prtk,
                type: 'POST',
                data: {new_val: newVal, id: id, field: field, tabl: tabl, old_val: oldVal},
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
                url: 'data_edit.php?action=game&protokol='+prtk,
                type: 'POST',
                data: {new_val: newVal, id: id, field: field, tabl: tabl, old_val: oldVal},
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