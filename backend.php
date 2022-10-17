<?php
    $localdados = "dados/dados.xml";
    $xml = simplexml_load_file($localdados) or die ("Nao acessou o xml!");

    if (isset($_GET['signo'])) {

        $signo = $_GET['signo'];

        if ($signo == 1) {
            foreach($xml->AR as $AR){$DI = $AR->dataInicio;$DF = $AR->dataFim;$logo = $AR->logo;$signo = $AR->signoNome;$PR1 = $AR->paragrafo1;$PR2 = $AR->paragrafo2;$PR3 = $AR->paragrafo3;$color = $AR->color;
           }          
        }
        elseif ($signo == 2) {
            foreach($xml->TO as $TO){$DI = $TO->dataInicio;$DF = $TO->dataFim;$logo = $TO->logo;$signo = $TO->signoNome;$PR1 = $TO->paragrafo1;$PR2 = $TO->paragrafo2;$PR3 = $TO->paragrafo3;$color = $TO->color;
           }
        } 
        elseif ($signo == 3) {
            foreach($xml->GE as $GE){$DI = $GE->dataInicio;$DF = $GE->dataFim;$logo = $GE->logo;$signo = $GE->signoNome;$PR1 = $GE->paragrafo1;$PR2 = $GE->paragrafo2;$PR3 = $GE->paragrafo3;$color = $GE->color;
           }
        } 
        elseif ($signo == 4) {
            foreach($xml->CAN as $CAN){$DI = $CAN->dataInicio;$DF = $CAN->dataFim;$logo = $CAN->logo;$signo = $CAN->signoNome;$PR1 = $CAN->paragrafo1;$PR2 = $CAN->paragrafo2;$PR3 = $CAN->paragrafo3;$color = $CAN->color;
           }
        } 
        elseif ($signo == 5) {
            foreach($xml->LE as $LE){$DI = $LE->dataInicio;$DF = $LE->dataFim;$logo = $LE->logo;$signo = $LE->signoNome;$PR1 = $LE->paragrafo1;$PR2 = $LE->paragrafo2;$PR3 = $LE->paragrafo3;$color = $LE->color;
           }
        } 
        elseif ($signo == 6) {
            foreach($xml->VI as $VI){$DI = $VI->dataInicio;$DF = $VI->dataFim;$logo = $VI->logo;$signo = $VI->signoNome;$PR1 = $VI->paragrafo1;$PR2 = $VI->paragrafo2;$PR3 = $VI->paragrafo3;$color = $VI->color;
           }
        } 
        elseif ($signo == 7) {
            foreach($xml->LI as $LI){$DI = $LI->dataInicio;$DF = $LI->dataFim;$logo = $LI->logo;$signo = $LI->signoNome;$PR1 = $LI->paragrafo1;$PR2 = $LI->paragrafo2;$PR3 = $LI->paragrafo3;$color = $LI->color;
           }
        }
        elseif ($signo == 8) {
            foreach($xml->ES as $ES){$DI = $ES->dataInicio;$DF = $ES->dataFim;$logo = $ES->logo;$signo = $ES->signoNome;$PR1 = $ES->paragrafo1;$PR2 = $ES->paragrafo2;$PR3 = $ES->paragrafo3;$color = $ES->color;
           }
        }
        elseif ($signo == 9) {
            foreach($xml->SA as $SA){$DI = $SA->dataInicio;$DF = $SA->dataFim;$logo = $SA->logo;$signo = $SA->signoNome;$PR1 = $SA->paragrafo1;$PR2 = $SA->paragrafo2;$PR3 = $SA->paragrafo3;$color = $SA->color;
           }
        }
        elseif ($signo == 10) {
            foreach($xml->CAP as $CAP){$DI = $CAP->dataInicio;$DF = $CAP->dataFim;$logo = $CAP->logo;$signo = $CAP->signoNome;$PR1 = $CAP->paragrafo1;$PR2 = $CAP->paragrafo2;$PR3 = $CAP->paragrafo3;$color = $CAP->color;
           }
        }
        elseif ($signo == 11) {
            foreach($xml->AQ as $AQ){$DI = $AQ->dataInicio;$DF = $AQ->dataFim;$logo = $AQ->logo;$signo = $AQ->signoNome;$PR1 = $AQ->paragrafo1;$PR2 = $AQ->paragrafo2;$PR3 = $AQ->paragrafo3;$color = $AQ->color;
           }
        }
        elseif ($signo == 12) {
            foreach($xml->PE as $PE){$DI = $PE->dataInicio;$DF = $PE->dataFim;$logo = $PE->logo;$signo = $PE->signoNome;$PR1 = $PE->paragrafo1;$PR2 = $PE->paragrafo2;$PR3 = $PE->paragrafo3;$color = $PE->color;
           }
        }
        else{
            header('location:index.html');
        }
    }
    elseif (isset($_GET['nome'])){
        $nome = $_GET['nome'];
        $data = $_GET['data'];
        // echo $nome . "<br>";
        $dataastral = DateTime::createFromFormat("d-m-Y H:i", $data);
        $dia = $dataastral->format("d");
        $mes = $dataastral->format("m");
        // echo "DIA: " . $dia . "<br>";
        // echo "MES:" . $mes;      
        echo "<script>alert('SEU SIGNO É:')</script>";
        if ($mes == "03" AND $dia >= "21") { //ARIES
            foreach($xml->AR as $AR){$DI = $AR->dataInicio;$DF = $AR->dataFim;$logo = $AR->logo;$signo = $AR->signoNome;$PR1 = $AR->paragrafo1;$PR2 = $AR->paragrafo2;$PR3 = $AR->paragrafo3;$color = $AR->color;
            }
        }elseif ($mes == "04" AND $dia <= "19") { //ARIES
            foreach($xml->AR as $AR){$DI = $AR->dataInicio;$DF = $AR->dataFim;$logo = $AR->logo;$signo = $AR->signoNome;$PR1 = $AR->paragrafo1;$PR2 = $AR->paragrafo2;$PR3 = $AR->paragrafo3;$color = $AR->color;
            }
        }elseif ($mes == "04" AND $dia >= "20") {//TOURO
            foreach($xml->TO as $TO){$DI = $TO->dataInicio;$DF = $TO->dataFim;$logo = $TO->logo;$signo = $TO->signoNome;$PR1 = $TO->paragrafo1;$PR2 = $TO->paragrafo2;$PR3 = $TO->paragrafo3;$color = $TO->color;
            }
        }elseif ($mes == "05" AND $dia <= "20") {//TOURO
            foreach($xml->TO as $TO){$DI = $TO->dataInicio;$DF = $TO->dataFim;$logo = $TO->logo;$signo = $TO->signoNome;$PR1 = $TO->paragrafo1;$PR2 = $TO->paragrafo2;$PR3 = $TO->paragrafo3;$color = $TO->color;
            }
        }elseif ($mes == "05" AND $dia >= "21") {//GÊMEOS
            foreach($xml->GE as $GE){$DI = $GE->dataInicio;$DF = $GE->dataFim;$logo = $GE->logo;$signo = $GE->signoNome;$PR1 = $GE->paragrafo1;$PR2 = $GE->paragrafo2;$PR3 = $GE->paragrafo3;$color = $GE->color;
            }
        }elseif ($mes == "06" AND $dia <= "21") {//GÊMEOS
            foreach($xml->GE as $GE){$DI = $GE->dataInicio;$DF = $GE->dataFim;$logo = $GE->logo;$signo = $GE->signoNome;$PR1 = $GE->paragrafo1;$PR2 = $GE->paragrafo2;$PR3 = $GE->paragrafo3;$color = $GE->color;
            }
        }elseif ($mes == "06" AND $dia >= "22") {//CÂNCER
            foreach($xml->CAN as $CAN){$DI = $CAN->dataInicio;$DF = $CAN->dataFim;$logo = $CAN->logo;$signo = $CAN->signoNome;$PR1 = $CAN->paragrafo1;$PR2 = $CAN->paragrafo2;$PR3 = $CAN->paragrafo3;$color = $CAN->color;
            }
        }elseif ($mes == "07" AND $dia <= "22") {//CÂNCER
            foreach($xml->CAN as $CAN){$DI = $CAN->dataInicio;$DF = $CAN->dataFim;$logo = $CAN->logo;$signo = $CAN->signoNome;$PR1 = $CAN->paragrafo1;$PR2 = $CAN->paragrafo2;$PR3 = $CAN->paragrafo3;$color = $CAN->color;
            }
        }elseif ($mes == "07" AND $dia >= "23") {//LEÃO
            foreach($xml->LE as $LE){$DI = $LE->dataInicio;$DF = $LE->dataFim;$logo = $LE->logo;$signo = $LE->signoNome;$PR1 = $LE->paragrafo1;$PR2 = $LE->paragrafo2;$PR3 = $LE->paragrafo3;$color = $LE->color;
            }
        }elseif ($mes == "08" AND $dia <= "22") {//LEÃO
            foreach($xml->LE as $LE){$DI = $LE->dataInicio;$DF = $LE->dataFim;$logo = $LE->logo;$signo = $LE->signoNome;$PR1 = $LE->paragrafo1;$PR2 = $LE->paragrafo2;$PR3 = $LE->paragrafo3;$color = $LE->color;
            }
        }elseif ($mes == "08" AND $dia >= "23") {//VIRGEM
            foreach($xml->VI as $VI){$DI = $VI->dataInicio;$DF = $VI->dataFim;$logo = $VI->logo;$signo = $VI->signoNome;$PR1 = $VI->paragrafo1;$PR2 = $VI->paragrafo2;$PR3 = $VI->paragrafo3;$color = $VI->color;
            }
        }elseif ($mes == "09" AND $dia <= "22") {//VIRGEM
            foreach($xml->VI as $VI){$DI = $VI->dataInicio;$DF = $VI->dataFim;$logo = $VI->logo;$signo = $VI->signoNome;$PR1 = $VI->paragrafo1;$PR2 = $VI->paragrafo2;$PR3 = $VI->paragrafo3;$color = $VI->color;
            }
        }elseif ($mes == "09" AND $dia >= "23") {//LIBRA
            foreach($xml->LI as $LI){$DI = $LI->dataInicio;$DF = $LI->dataFim;$logo = $LI->logo;$signo = $LI->signoNome;$PR1 = $LI->paragrafo1;$PR2 = $LI->paragrafo2;$PR3 = $LI->paragrafo3;$color = $LI->color;
            }
        }elseif ($mes == "10" AND $dia <= "22") {//LIBRA
            foreach($xml->LI as $LI){$DI = $LI->dataInicio;$DF = $LI->dataFim;$logo = $LI->logo;$signo = $LI->signoNome;$PR1 = $LI->paragrafo1;$PR2 = $LI->paragrafo2;$PR3 = $LI->paragrafo3;$color = $LI->color;
            }
        }elseif ($mes == "10" AND $dia >= "23") {//ESCORPIÃO
            foreach($xml->ES as $ES){$DI = $ES->dataInicio;$DF = $ES->dataFim;$logo = $ES->logo;$signo = $ES->signoNome;$PR1 = $ES->paragrafo1;$PR2 = $ES->paragrafo2;$PR3 = $ES->paragrafo3;$color = $ES->color;
            }
        }elseif ($mes == "11" AND $dia <= "21") {//ESCORPIÃO
            foreach($xml->ES as $ES){$DI = $ES->dataInicio;$DF = $ES->dataFim;$logo = $ES->logo;$signo = $ES->signoNome;$PR1 = $ES->paragrafo1;$PR2 = $ES->paragrafo2;$PR3 = $ES->paragrafo3;$color = $ES->color;
            }
        }elseif ($mes == "11" AND $dia >= "22") {//SARGITÁRIO
            foreach($xml->SA as $SA){$DI = $SA->dataInicio;$DF = $SA->dataFim;$logo = $SA->logo;$signo = $SA->signoNome;$PR1 = $SA->paragrafo1;$PR2 = $SA->paragrafo2;$PR3 = $SA->paragrafo3;$color = $SA->color;
            }
        }elseif ($mes == "12" AND $dia <= "21") {//SARGITÁRIO
            foreach($xml->SA as $SA){$DI = $SA->dataInicio;$DF = $SA->dataFim;$logo = $SA->logo;$signo = $SA->signoNome;$PR1 = $SA->paragrafo1;$PR2 = $SA->paragrafo2;$PR3 = $SA->paragrafo3;$color = $SA->color;
            }
        }elseif ($mes == "12" AND $dia >= "22") {//CAPRICÓRNIO
            foreach($xml->CAP as $CAP){$DI = $CAP->dataInicio;$DF = $CAP->dataFim;$logo = $CAP->logo;$signo = $CAP->signoNome;$PR1 = $CAP->paragrafo1;$PR2 = $CAP->paragrafo2;$PR3 = $CAP->paragrafo3;$color = $CAP->color;
            }
        }elseif ($mes == "01" AND $dia <= "19") {//CAPRICÓRNIO
            foreach($xml->CAP as $CAP){$DI = $CAP->dataInicio;$DF = $CAP->dataFim;$logo = $CAP->logo;$signo = $CAP->signoNome;$PR1 = $CAP->paragrafo1;$PR2 = $CAP->paragrafo2;$PR3 = $CAP->paragrafo3;$color = $CAP->color;
            }
        }elseif ($mes == "01" AND $dia >= "20") {//AQUÁRIO
            foreach($xml->AQ as $AQ){$DI = $AQ->dataInicio;$DF = $AQ->dataFim;$logo = $AQ->logo;$signo = $AQ->signoNome;$PR1 = $AQ->paragrafo1;$PR2 = $AQ->paragrafo2;$PR3 = $AQ->paragrafo3;$color = $AQ->color;
            }
        }elseif ($mes == "02" AND $dia <= "18") {//AQUÁRIO
            foreach($xml->AQ as $AQ){$DI = $AQ->dataInicio;$DF = $AQ->dataFim;$logo = $AQ->logo;$signo = $AQ->signoNome;$PR1 = $AQ->paragrafo1;$PR2 = $AQ->paragrafo2;$PR3 = $AQ->paragrafo3;$color = $AQ->color;
            }
        }elseif ($mes == "02" AND $dia >= "19") {//PEIXES
            foreach($xml->PE as $PE){$DI = $PE->dataInicio;$DF = $PE->dataFim;$logo = $PE->logo;$signo = $PE->signoNome;$PR1 = $PE->paragrafo1;$PR2 = $PE->paragrafo2;$PR3 = $PE->paragrafo3;$color = $PE->color;
            }
        }elseif ($mes == "03" AND $dia <= "20") {//PEIXES
            foreach($xml->PE as $PE){$DI = $PE->dataInicio;$DF = $PE->dataFim;$logo = $PE->logo;$signo = $PE->signoNome;$PR1 = $PE->paragrafo1;$PR2 = $PE->paragrafo2;$PR3 = $PE->paragrafo3;$color = $PE->color;
            }
        }else{
            header('location:index.html');
        }
        
        
    }
?>