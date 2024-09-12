<?php 
class AppApi
{
    function __construct()
    {
        $this->db = new Mysqli("localhost", "root", "root", "apiwork");
    }
    function ApiRequest($Params)
    {
        $data = json_decode($Params['Request'],true);
        $RequestName = $data["_parts"][0][1];

        if($RequestName == "")
            return ("Invalid Request Type");
        
        switch ($RequestName) {
            case 'InsertApi':
                $Return = $this->InsertApi();
                break;
            case 'FetchApi':
                $Return = $this->FetchApi();
                break;
            case 'UpdateApi':
                $Return = $this->UpdateApi();
                break;
            case 'DeleteApi':
                $Return = $this->DeleteApi();
                break;
            default:
                $Return = "Invalid Request Params";
        }
        return ($Return);
    }
    function InsertApi()
    {   
        $Params = array(
            'Request' => $_POST['data'],
        );
        $data = json_decode($Params['Request'],true);
        $FirstName = $data["_parts"][1][1];
        $LastName = $data["_parts"][2][1];
        $Address = $data["_parts"][3][1];
        $City = $data["_parts"][4][1];
        $ZipCode = $data["_parts"][5][1];
        $Cnic = $data["_parts"][6][1];
        $Mobile = $data["_parts"][7][1];
        $Date = $data["_parts"][8][1];

        $Data = array(
            'firstName' => $FirstName,
            'lastName' => $LastName,
            'address' => $Address,
            'townCity' => $City,
            'zipCode' => $ZipCode,
            'cnic' => $Cnic,
            'mobile' => $Mobile,
            'SelectedDate' => $Date,
        );

        $Insert = $this->db->query("INSERT INTO customerdata (`firstname`, `lastname`, `address`, `townCity`, `zipCode`, `cnic`, `mobile`, `AddedOn`) VALUES ('".$Data['firstName']."','".$Data['lastName']."','".$Data['address']."','".$Data['townCity']."','".$Data['zipCode']."','".$Data['cnic']."','".$Data['mobile']."','".$Data['SelectedDate']."')");

        if($Insert)
        {
            echo json_encode(['status'=>true,'msg'=>'Data Submitted']);
        }
        else{
            echo json_encode(['status'=>false,'msg'=>'Data Not Submitted']);
        }
    }
    function FetchApi()
    {
        $fetch = $this->db->query("SELECT * FROM customerdata");

        $array = array();
        $i=1;
        while($row = mysqli_fetch_assoc($fetch))
        {
            $Data = array(
                'customerid' => $row['customerid'],
                'firstName' => $row['firstname'],
                'lastName' => $row['lastname'],
                'address' => $row['address'],
                'townCity' => $row['townCity'],
                'zipCode' => $row['zipCode'],
                'cnic' => $row['cnic'],
                'mobile' => $row['mobile'],
                'SelectedDate' => $row['AddedOn'],
            );
            $array[$i] = $Data;
            $i++;
        }
        echo json_encode($array);
    }
    function UpdateApi()
    {   
        $Params = array(
            'Request' => $_POST['data'],
        );
        $data = json_decode($Params['Request'],true);
        $CustomerId = $data["_parts"][1][1];
        $FirstName = $data["_parts"][2][1];
        $LastName = $data["_parts"][3][1];
        $Address = $data["_parts"][4][1];
        $City = $data["_parts"][5][1];
        $ZipCode = $data["_parts"][6][1];
        $Cnic = $data["_parts"][7][1];
        $Mobile = $data["_parts"][8][1];
        $Date = $data["_parts"][9][1];

        $Data = array(
            'CustomerId' => $CustomerId,
            'firstName' => $FirstName,
            'lastName' => $LastName,
            'address' => $Address,
            'townCity' => $City,
            'zipCode' => $ZipCode,
            'cnic' => $Cnic,
            'mobile' => $Mobile,
            'SelectedDate' => $Date,
        );

        $Updated = $this->db->query("UPDATE customerdata SET `firstname`='".$Data['firstName']."', `lastname`='".$Data['lastName']."', `address`='".$Data['address']."', `townCity`='".$Data['townCity']."', `zipCode`='".$Data['zipCode']."', `cnic`='".$Data['cnic']."', `mobile`='".$Data['mobile']."', AddedOn='".$Data['AddedOn']."' WHERE `customerid` = '".$Data['SelectedDate']."'");

        if($Updated)
        {
            echo json_encode(['status'=>true,'msg'=>'Data Updated Successfully']);
        }
        else{
            echo json_encode(['status'=>false,'msg'=>'Data Not Updated']);
        }
    }
    function DeleteApi()
    {
        $Params = array(
            'Request' => $_POST['data'],
        );
        $data = json_decode($Params['Request'],true);

        $CustomerId = $data["_parts"][1][1];

        $fetch = $this->db->query("DELETE FROM customerdata WHERE customerid = '$CustomerId'");
        
        if($fetch)
        {
            echo json_encode(['status'=>true,'msg'=>'Data Deleted Successfully']);
        }
        else{
            echo json_encode(['status'=>false,'msg'=>'Data not Deleted']);
        }
    }
}
?>