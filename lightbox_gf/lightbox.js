jQuery(document).ready(function($){
  $(".entry-content a").click(function(e){
    e.preventDefault();
    
    var $body = $('body');

    var $conteneur = $("<div id='conteneur'>");
    
    
    $conteneur.prepend('<div id="imagebox"><img id="image" src=" '+ $(this).attr('href') + '"></div></div>');
   
    $body.prepend($conteneur);
    $conteneur.fadeIn();

    $conteneur.click(function(){

      $conteneur.fadeOut(function(){
      $conteneur.remove();
     
      })
    });
  });
});

