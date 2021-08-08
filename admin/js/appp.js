if(document.getElementById("crear-movie-form")){
document.getElementById("crear-movie-form").addEventListener("submit", function(e){
     e.preventDefault();
     let genn = document.getElementById("gene");

     let data = new FormData();
     data.append("nombre", document.getElementById("pelicula").value );
     data.append("genero", genn.options[genn.selectedIndex].value );
     data.append("tipo", document.getElementById("tipoo").value )


     var xml = new XMLHttpRequest();

     xml.open("POST", "modulo-movie.php" , true );

     xml.onload = function(){
       if(xml.status == 200){
        let resp = JSON.parse(xml.responseText);

        if(resp.respuesta == "correcto"){
          swal(
               "correcto",
               "se guardo correctamente",
               "success"
          ).then(result => {
           if(result.value == true){
                  window.location.href = "crear-movie.php";
            }
            })

        } 

       }
     }

     xml.send(data);

});
}


if(document.getElementById("editar-movie-form")){
document.getElementById("editar-movie-form").addEventListener("submit", function(e){
     e.preventDefault();
     let genn = document.getElementById("gene");

     let data = new FormData();
     data.append("nombre", document.getElementById("pelicula").value );
     data.append("genero", genn.options[genn.selectedIndex].value );
     data.append("tipo", document.getElementById("tipoo").value );
     data.append("idi", document.getElementById("idi").value);
     


     var xml = new XMLHttpRequest();

     xml.open("POST", "modulo-movie.php" , true );

     xml.onload = function(){
       if(xml.status == 200){
        let resp = JSON.parse(xml.responseText);

        console.log(resp);

        if(resp.respuesta == "correcto"){
          swal(
               "correcto",
               "Editado correctamente",
               "success"
          )

        } 



         


       }
     }

     xml.send(data);

});
}


document.querySelector(".table").addEventListener("click", function(e){
     let id = e.target.getAttribute("data-id");

     let data = new FormData();
     data.append("idi", id);
     data.append("tipo", "borrar" );


     var xml = new XMLHttpRequest();

     xml.open("POST", "modulo-movie.php" , true );

     xml.onload = function(){
       if(xml.status == 200){
        let resp = JSON.parse(xml.responseText);

        if(resp.respuesta == "correcto"){
          swal(
               "correcto",
               "se borro correctamente",
               "success"
          )

          console.log(e.target.parentElement.parentElement.remove())

        } 

       }
     }

     xml.send(data);


})

