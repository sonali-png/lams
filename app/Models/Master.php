<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Master extends Model
{
    use HasFactory;
    public function performMasterOperations(request $req) {
        $headerArr = $dataArr = array();
        $master = $req->masterName;
        $action = $req->param;
        $id = $req->param2;
        switch ($action) {
            case 'add':
                return view('master_add_edit')->with(['dataArr'=>$dataArr, 'page'=>$master]);
                break;
            case 'change-status':
                # code...
            break;

            case 'save':
                $obj = new "\App\Models\$master";
                $obj->saveData($req->all());
            break;
            
            default:
                if(!empty($id)) {
                    echo "inside";
                } else {

                }
            break;
        }
    }
}
