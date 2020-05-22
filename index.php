<?php
    header("Content-Type:application/json");
    
    $nombrePlaneta = $_GET['nombrePlaneta'];
    if(!empty($nombrePlaneta))
    {
        //Nombre valido
        $peso = $_GET['peso'];
        if(!empty($peso))
        {
          switch ($nombrePlaneta)
          {/*El peso de una persona que en la tierra pesa X kg, es de Y kg en el planeta Z"*/
            case "MERCURIO":
			case "Mercurio":
			case "mercurio":	  
              $pesoplaneta = $peso * 3.70;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "VENUS":
			case "Venus":
			case "venus":	  
              $pesoplaneta = $peso * 8.87;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "MARTE":
			case "marte":
			case "Marte":	  
              $pesoplaneta = $peso * 3.71;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "JUPITER":
			case "Jupiter":
			case "jupiter":	  
              $pesoplaneta = $peso * 23.12;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "SATURNO":
			case "saturno":
			case "Saturno":	  
              $pesoplaneta = $peso * 8.96;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "URANO":
			case "Urano":
			case "Urano":	  
              $pesoplaneta = $peso * 8.69;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "NEPTUNO":
			case "Neptuno":
			case "neptuno":	  
              $pesoplaneta = $peso * 11;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            case "PLUTON":
			case "Pluton":
			case "Plutón":
			case "pluton":	  
              $pesoplaneta = $peso * 0.81;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "El peso de una persona que en la tierra pesa $peso kg es de $pesoplaneta kg en el planeta $nombrePlaneta", $pesoplaneta);
            break;
            default:
            echo "Ops, Hay un problema!";
          }
        }
        else
        {
            deliver_response(200, "peso no valido", null);
        }
    }
    else
    {
        deliver_response(200, "Nombre de planeta no valido", null);
    }

    function deliver_response($status, $status_message, $data)
    {
        header("HTTP/1.1 $status $status_message");
        $response['status'] = $status;
        $response['status_message'] = $status_message;
        $response['data'] = $data;
        $json_response = json_encode($response);
        echo $json_response;
    }
?>
