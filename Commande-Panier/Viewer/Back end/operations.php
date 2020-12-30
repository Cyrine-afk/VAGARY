<?php

require_once ('configp.php') ; 
$db = new dbconfig() ; 


class operations extends dbconfig 
{
    public function mask_credit_card ($number)

    {
            return str_repeat("*",12) . substr($number,-4) ; 
    }


    public function Store_Record ()
    {
        global $db ; 
        if (isset($_POST['btn_save'])) 
        {

            $NameOnCard = $db->check($_POST['NameOnCard']) ; 
            $CardNumber =  $db->check($_POST['CardNumber'])   ; 
            $ExpiryDate = $db->check($_POST['ExpiryDate']) ; 
            $CVV = $db->check($_POST['CVV']) ; 
            $ZIP = $db->check($_POST['ZIP']) ; 

            if ($this->insert_record($NameOnCard,$CardNumber,$ExpiryDate,$CVV,$ZIP)) 
            {

                echo "Succes your data has been saved!!"; 
            }
            else
            {

                echo "Erreur" ; 
            }
        }
    }

    function insert_record($a,$b,$c,$d,$e)
    {
        global $db;
        $query = "insert into pay (NameOnCard,CardNumber,ExpiryDate,CVV,ZIP) values('$a','$b','$c','$d','$e')";
        $result = mysqli_query($db->connection,$query);

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function view_record()
    {
        global $db;
        $query = "select * from paiment";
        $result = mysqli_query($db->connection,$query);
        return $result;
    }

    public function get_record($id)
    {
        global $db;
        $sql = "select * from paiment where id='$id'";
        $data = mysqli_query($db->connection,$sql);
        return $data;

    }

  








    public function masknumber($number)
    {
           $number ="PAID" ; 
           return $number ; 


            
        
    }
        

}