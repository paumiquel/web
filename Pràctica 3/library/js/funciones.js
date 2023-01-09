function afegir_dades(){

    var dades=$('#form_actualitzar').serialize();

    $.ajax({

        method:"POST",
        url:"insertar.php",
        data:dades,
        success: function(e){

            if(e==1){
                alert("Actualització exitosa");
                
                

            }else{
                alert("Error en la actualització");
            }


        }
    });

    return false;

}


function omplirModal_actualitzar(dades){


    d=dades.split('||');
    $("#id").val(d[0]);
    $("#nom").val(d[1]);
    $("#direccio").val(d[2]);
    $("#telefon").val(d[3]);
    $("#correu").val(d[4]);
    $("#data").val(d[5]);
    $("#pais").val(d[6]);
    $("#mobil").val(d[7]);
    $("#estat").val(d[8]);
    $("#vehicle").val(d[9]);
    $("#perfil1").val(d[10]);
    $("#hab1").val(d[11]);
    $("#per1").val(d[12]);
    $("#hab2").val(d[13]);
    $("#per2").val(d[14]);
    $("#hab3").val(d[15]);
    $("#per3").val(d[16]);
    $("#hab4").val(d[17]);
    $("#per4").val(d[18]);
    $("#hab5").val(d[19]);
    $("#per5").val(d[20]);
    $("#idi1").val(d[21]);
    $("#idi2").val(d[22]);
    $("#idi3").val(d[23]);
    $("#idi4").val(d[24]);
    $("#per11").val(d[25]);
    $("#per12").val(d[26]);
    $("#per13").val(d[27]);
    $("#per14").val(d[28]);
    $("#inf1").val(d[29]);
    $("#inf2").val(d[30]);
    $("#inf3").val(d[31]);
    $("#inf4").val(d[32]);
    $("#inf5").val(d[33]);
    $("#per21").val(d[34]);
    $("#per22").val(d[35]);
    $("#per23").val(d[36]);
    $("#per24").val(d[37]);
    $("#per25").val(d[38]);
    $("#comp1").val(d[39]);
    $("#comp2").val(d[40]);
    $("#expdata1").val(d[41]);
    $("#expdata2").val(d[42]);
    $("#expdata3").val(d[43]);
    $("#exptraj1").val(d[44]);
    $("#exptraj2").val(d[45]);
    $("#exptraj3").val(d[46]);
    $("#edudata1").val(d[47]);
    $("#edudata2").val(d[48]);
    $("#edutraj1").val(d[49]);
    $("#edutraj2").val(d[50]);
}


function actualitzar_dades(){


    var dades= $("#form_actualitzar").serialize();

$.ajax({
    method:"POST",
    url:"actualitzar.php",
    data:dades,
    success: function(e){
        
    }
});
return false;
}