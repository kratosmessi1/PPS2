<?php
    
    //Alex Garcia Pliego
    
    function fibonacci ($var) {

        // Inicializar array que guardala secuencia. 
        $secuencia = [0,1];

        // Bucle con el que se asigna cada valor de la secuencia a su índice en el array. Comienza en el índice 1, y se repite hasta que la diferencia entre este y el parámetro sea de uno, siendo el índice menor que el parámetro.
        for ($i = 1; $i < ($var - 1); $i++) {
            
            // Asignar a cada índice su valor.
            $secuencia[($i+1)] = $secuencia[$i] + $secuencia[($i-1)];
    
        }

        // En caso de que el parámetro sea 1, se devolverá un único valor (el 0, el primero de la secuencia).
        if ($var == 1) {
        
            $secuencia = [0];
        
        }
        if ($var <= 0 || $var - (int)$var != 0){

            return false;

        }
        // Devolver la secuencia.
        return $secuencia;
    }

    // Parámetro hasta el que se imprime la secuencia de Fibonacci.
    $valor = 6;

    // Array que guarda la secuencia de Fibonacci.
    $arr = fibonacci($valor);
    
    if ($arr == false){
        
        echo "El valor no es adecuado para la secuencia de Fibonacci.";
    
    } else {
        
        echo "La secuencia de Fibonacci hasta el valor $valor es la siguiente: <br>";
    
        for ($i = 0; $i <= $valor; $i++){
            
            echo $arr[$i] . "<br>";
            
        }
    }
    
?>