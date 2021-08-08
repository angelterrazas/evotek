document.querySelector("#form-renta").addEventListener("submit", function(e){
     e.preventDefault();


     let data = new FormData();
     data.append("inicio", document.querySelector("#entrada").value);
     data.append("final", document.querySelector("#salida").value);
    



     let xml = new XMLHttpRequest();

     xml.open("POST", "modelo-renta.php", true);

     xml.onload = function(){
          if(this.status == 200){
          let respuesta = JSON.parse(xml.responseText);
          if(respuesta.cuc == "yes"){
               swal(
                    `${respuesta.respuesta}`,
                    `la rentarón ${respuesta.res} veces`,
                    "success"
               )
          }
          }
     }

     xml.send(data);



});