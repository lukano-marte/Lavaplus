 <!-- Required meta tags -->

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <link rel="stylesheet" href="style.css">

 <!-- Optional JavaScript -->




 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
 </script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
 </script>


 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-1.12.0.min.js">
 </script>


 <script>
     //animação de scroll do menu
     jQuery(document).ready(function($) {
         $(".scroll").click(function(event) {
             event.preventDefault();
             $('html,body').animate({
                 scrollTop: $(this.hash).offset().top
             }, 1000);
         });
     });

 </script>


<script>
    
    //animação de sombra hover
    $(document).ready(function(){

        $('.col-md-3').hover(
            // quando bota o mouse em cima
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // quando tira o mouse de cima
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>