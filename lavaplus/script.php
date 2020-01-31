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

