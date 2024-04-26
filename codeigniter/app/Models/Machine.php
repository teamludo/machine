<?php 
namespace App\Models;
use CodeIgniter\Model;
class Machine extends Model
{
    protected $table = "information";
    protected $allowedFields = ["mac", "ip", "serie", "pan", "etat", "hostname"];
    protected $primaryKey = "id";
    public function insertion($mac, $ip, $serie, $pan, $etat, $hostname)
    {
        $data =[
            "mac" => $mac,
            "ip" => $ip,
            "serie" => $serie,
            "pan" => $pan,
            "etat" => $etat,
            "hostname" => $hostname
        ];
        $this->insert($data);
    }
    public function modification($id,$mac, $ip, $serie, $pan, $etat, $hostname)
    {
        $data =[
            "mac" => $mac,
            "ip" => $ip,
            "serie" => $serie,
            "pan" => $pan,
            "etat" => $etat,
            "hostname" => $hostname
        ];
        $this->update($id,$data);
    }
}
?>