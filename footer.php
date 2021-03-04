<script src="assets/jquery.js"></script>
 <script src="assets/js/bootstrap.js"></script>
 <!-- for sweet alert -->
 <script src="assets/sweetalert.min.js"></script>
<script src="assets/feather.min.js"></script>
 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<script>

$(document).ready(function(){         
    $('#register1').submit(function(event){
        //alert('document id ready');    
        event.preventDefault();
        var formData = $('#register1').serialize();              
        $.ajax({
          type:"post",
          url:"register.php",
          data: formData,
          dataType: "text",
          success: function(response){

            if (response === 'success') {
                    swal('CrollChat', 'You have successfully registered in crollchat.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php');
                    });
                } else if (response === 'failed') {
                    swal('CrollChat', 'We could not registered in crollchat',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php');
                    });
                }
          }
        });
    });
  });
  </script>