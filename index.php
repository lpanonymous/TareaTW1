<?php
    header("Content-Type:application/json");
    $nombre = $_GET['nombre'];
    $nombrePlaneta = $_GET['nombrePlaneta'];
    if(!empty($nombre) && !empty($nombrePlaneta))
    {
        //Nombre valido
        $peso = $_GET['peso'];
        if(!empty($peso))
        {
          switch ($nombrePlaneta)
          {
            case "MERCURIO":
              $pesoplaneta = $peso * 3.70;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Mercurio es de $pesoplaneta", $pesoplaneta);
            break;
            case "VENUS":
              $pesoplaneta = $peso * 8.87;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Venus es de $pesoplaneta", $pesoplaneta);
            break;
            case "MARTE":
              $pesoplaneta = $peso * 3.71;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Marte es de $pesoplaneta", $pesoplaneta);
            break;
            case "JUPITER":
              $pesoplaneta = $peso * 23.12;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Jupiter es de $pesoplaneta", $pesoplaneta);
            break;
            case "SATURNO":
              $pesoplaneta = $peso * 8.96;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Saturno es de $pesoplaneta", $pesoplaneta);
            break;
            case "URANO":
              $pesoplaneta = $peso * 8.69;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Urano es de $pesoplaneta", $pesoplaneta);
            break;
            case "NEPTUNO":
              $pesoplaneta = $peso * 11;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Neptuno es de $pesoplaneta", $pesoplaneta);
            break;
            case "PLUTON":
              $pesoplaneta = $peso * 0.81;
              $pesoplaneta = round($pesoplaneta, 2);
              deliver_response(200, "$nombre tu peso en el planeta Pluton es de $pesoplaneta", $pesoplaneta);
            break;
            default:
            echo "Your favorite color is neither red, blue, nor green!";
          }
        }
        else
        {
            deliver_response(200, "peso no valido", null);
        }
    }
    else
    {
        //Nombre no valido
        deliver_response(200, "Nombre no valido y nombre de planeta no valido", null);
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
