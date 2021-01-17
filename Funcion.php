<?php
    //variables que hemos puesto a la hora de usar los botones para que almacene lo que el usuario haya escrito.

    $id = $_POST["id"];
    $tarea = $_POST["tarea"];
    $borrado = $_POST["borrar"];
    $cambiar = $_POST["cambio"];

//Aqui es donde comprueba y escribe si dicha comparativa que introduce el usuario es la misma que la ya introducida el programa.
    $fichero1=fopen("Enprogreso.txt","rb");
    $fichero2=fopen("Enprogreso.txt","ab");

//Un bucle para realizar la lectura del fichero, el cual, luego divide la linea de texto en 2 partes, seria la ID y la tarea en si, para poder comparar la id introducida por la ID que estamos usando dentro del fichero de manera que si esta es la misma, te contestara que no puedes usarla.
    while ($linea=fgets($fichero1)){
        list ($id1,$tarea)=explode(".","$linea");
        if ($id==$id1) {
            echo "No puedes repetir ID.";
        }
    }
    if (empty($id)) { //Si la idea esta vacia, sumará a la ID, 1 para que coloque a la ID que actualmente esta introducida un numero más, si el usuario no colocara una que sea valida.
    $id1++;
     $linea1=$id1.'.'.$tarea;
    fwrite($fichero2,"$linea1".PHP_EOL);
    echo $linea1;
    }

    $id2=$id1+1;

    if ($id==$id2) {
        $linea2=$id2.'.'.$tarea.'.'."";
        echo $linea2;
    }
    else{
        echo "El numero es mayor";
    }

    fclose($fichero1);
    fclose($fichero2);


// funcion de borrado.
function borrado ($borrado){

// Los ficheros son abiertos y puestos en un modo de escritura para poder cambiar de un lugar a otro dichos elementos de un fichero a otro.

    $f1=fopen("Enprogreso.txt", "ab");
    $f2=fopen("Finalizadas.txt", "ab");
    $f3=fopen("Pendientes.txt", "ab");
    while ($lineaf1=fgets($f1){
    list($id,$tarea) = explode(".", "$lineaf1"); // aqui desglosamos de nuevo la linea
            if (isset(id)) { //comprobamos si el ID tiene valor, si tiene lo quitara y escribira una linea vacia.
             unset($id && $tarea);
             fwrite($lineaf1, "");
             global $lineaf1; // coloco la linea escrita como global para la siguiente funcion.
             } 
    }
    while ($lineaf2=fgets($f2){
    list($id2,$tarea2) = explode(".", "$lineaf2");
        if (isset(id)) {
             unset($id2 && $tarea2);
            fwrite($lineaf2, "");
            global $lineaf2;
            } 
     }

    while ($lineaf3=fgets($f1){
    list($id3,$tarea3) = explode(".", "$lineaf3");
        if (isset(id)) {
         unset($id3 && $tarea3);
         fwrite($lineaf3, "");
         global $lineaf3;
         } 
    }
}

borrado($_POST["borrar"];

function Cambiado ($cambiar){
    // Mismo proceso de la funcion anterior, esta vez vamos a intercambiar lineas de uno a otro


    $f1=fopen("Enprogreso", "ab");
    $f2=fopen("Finalizadas", "ab");
    $f3=fopen("Pendientes.txt", "ab");

    while ($lineaf1=fgets($f1)) {
        list($id,$tarea)=explode(".","$lineaf1")
            if (empty($lineaf1)) {
            return "";
            }
             else{
                fwrite($f2, $lineaf1);
                 }
    }

    while ($lineaf2=fgets($f2)) {
        list($id2,$tarea2)=explode(".","$Lineaf2")
        if (empty($lineaf2)) {
            return"";
        }
        else{
            return fwrite($f3, $lineaf2)
        }

    }
}

cambiado($_POST["cambiar"];

echo "<a href=pef=All.php> Actualizar </a>";
        