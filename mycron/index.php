<?php  
      
    $dev = '/';  
    $freespace = disk_free_space($dev);  
    $totalspace = disk_total_space($dev);  
    $freespace_mb = $freespace/1024/1024;  
    $totalspace_mb = $totalspace/1024/1024;  
    $freespace_percent = ($freespace/$totalspace)*100;  
    $used_percent = (1-($freespace/$totalspace))*100;  
      
    if($used_percent >= 20) // 85 cuando sea mayor de 85% de uso  
    {  
        $to = "isaacvqz@gmail.com";  
        $subject = "Espacio Libre en Disco en el Servidor ('$dev')";  
        $text = "Espacio Libre en Disco en el Servidor ('$dev')"."\n";  
        $text .= sprintf("Espacio Total: %8d MB\n", $totalspace_mb);  
        $text .= sprintf("Espacio Libre: %8d MB\n", $freespace_mb);  
        $text .= sprintf("Porcentaje de Uso:  %.2f%%\n", $used_percent);  
        $text .= sprintf("Porcentaje Libre:   %.2f%%\n", $freespace_percent);  
        $headers = "MIME-Version: 1.0\r\n";  
        $headers .= "Content-type: text/html; charset=utf-8\r\n";  
        $headers .= "From: info@miservidor.com \r\n";  
        $result = mail($to, $subject, $text, $headers);
        if (!$result) {
            echo "Error!";
        } else {
            echo "Success";
        }
    }
    else
    {
        echo "Your percent is: " . number_format($used_percent, 2) . " %";
    } 
      
?>  