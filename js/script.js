var newVal = 0, id1 = 0;
var prtk;
$(function(){
    var oldVal; 
   $('.edit').focus(function(){
       oldVal = $(this).text();
       id1 = $(this).data('id');
       prtk = $(this).data('prtk');
    })
    .blur(function(){
       newVal = $(this).text();
        if (newVal != oldVal){
            $.ajax({
                url: 'webapp.php?league=spb&protokol='+prtk,
                type: 'POST',
                data: {new_val: newVal, id: id1},
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
    $('.edit').keypress(function(e){
       if(e.which == 13){
        return false;
       }
   });
    
});