<?php

namespace App\Controllers;

use App\Models\Machine as ModelsMachine;
use App\Models\Machine;

class Main extends BaseController
{
    public function index(): string
    {
        return view('formulaire');
    }

    public function inserer(): string
    {
        $mac = $this->request->getPost("mac");
        $ip = $this->request->getPost("ip");
        $serie = $this->request->getPost("serie");
        $pan = $this->request->getPost("pan");
        $etat = $this->request->getPost("etat");
        $host = $this->request->getPost("host");

        $pc = new Machine();
        $data["info"] = $pc->Like(["mac" => $mac])
                            ->orLike(["ip" => $ip])
                            ->orLike(["serie" => $serie])
                            ->orLike(["pan" => $pan])
                            ->findAll();
        if (count($data["info"])==0){
            $pc->insertion($mac, $ip, $serie, $pan, $etat, $host);
            $data["message"] = "Enregistrer";
        }else{
            $data["message"] = "Pas Enregistrer";
        }
        return view("formulaire", $data);
    }

    public function afficherList():string
    {
        $pc = new Machine();

        $pager = \Config\Services::pager();
        $data["machine"] = $pc->paginate(4);
        $data['pager'] = $pc->pager;
        return view("affichage", $data); 
    }

    public function supprimer($id):string
    {
        $pc = new Machine();
        $pc->delete($id);

        $pager = \Config\Services::pager();
        $data["machine"] = $pc->paginate(4);
        $data['pager'] = $pc->pager;

        return view("affichage", $data); 
    }

    public function modifier($id):string
    {
        $pc = new Machine();
        $data['pc'] = $pc->where(["id"=>$id])->findAll();

        return view("Modification", $data); 
    }
    public function modification($id):string
    {
        $mac = $this->request->getPost("mac");
        $ip = $this->request->getPost("ip");
        $serie = $this->request->getPost("serie");
        $pan = $this->request->getPost("pan");
        $etat = $this->request->getPost("etat");
        $host = $this->request->getPost("host");
        $pc = new Machine();
        $data["info"] = $pc->where("id!=$id")
                            ->orLike(["mac" => $mac])
                            ->orLike(["ip" => $ip])
                            ->orLike(["serie" => $serie])
                            ->orLike(["pan" => $pan])
                            ->findAll();
        if (count($data["info"])==0){
            $pc->modification($id,$mac, $ip, $serie, $pan, $etat, $host);
            $data["message"] = "Modifier";
            return "modifier";
        }
        else{
            return "aona";
        }
    }

}

