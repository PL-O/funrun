<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\regisModel;
use App\Models\UserModel;

class regisRun extends Controller {
    public function index   () {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('regisrun', $data);
    }

    public function regis(){
        $session = session();
        try{
            $db = \Config\Database::connect();
    
            $sql = "SELECT MAX(CAST(SUBSTRING(ID, 4, 10) AS UNSIGNED)) AS maxid FROM regis";
            $query = $db->query($sql);
            $row = $query->getResult();
            $maxid = $row[0]->maxid;
            $code = '';
    
           if($maxid == null)
             {
                $code = 'RUN0000001';
             }else{
                    $id = (string) $maxid + 1;
                    $fullid =   str_pad($id,7,'0',STR_PAD_LEFT);
                    $code = 'RUN'.$fullid;
    
             }
            $regisModel = new regisModel();
            $data = [
                'ID' => $code,
                'member'=>$session->get('id_card'),
                'category_run'=> $this->request->getVar('category')
            ];
            $regisModel->insert($data);
            } catch(Exception $e){
                return $e->getMessage();
            }
            return redirect()->to('/search');
    }
 }
