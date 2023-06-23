(function($) {
    showSwal = function(type) {
      'use strict';
       if (type === 'success-message') {
        swal({
          title: 'Congratulations!',
          text: 'You entered the correct answer',
          type: 'success',
          button: {
            text: "Continue",
            value: true,
            visible: true,
            className: "btn btn-primary"
          }
        })
  
      }else{
          swal("Error occured !");
      } 
    }
  
  })(jQuery);