<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use DB;

class applications extends Model
{
    protected $fillable = ['app_code', 'app_name', 'cuser', 'uuser'];
    use HasFactory;
    public function performAppMasterOperations(request $req) {
        $headerArr = $dataArr = array();
        $action = $req->param;
        $id = $req->param2;
        switch ($action) {
            case 'add':
                return view('master_add_edit')->with(['dataArr'=>$dataArr, 'page'=>'applications']);
                break;
            case 'change-status':
                # code...
            break;

            case 'save':
                // Setup the validator
                $rules = array('app_code'=>'required|unique:applications', 'app_name'=>'required');
                $validator = Validator::make($req->all(), $rules);
                if($validator->fails()) {
                    return response()->json(array(
                        'status' => 'input-error',
                        'errors' => $validator->getMessageBag()->toArray()
                    ));
                } else {
                    $inputArr['app_code'] = $req->get('app_code');
                    $inputArr['app_name'] = $req->get('app_name');
                    $inputArr['cuser'] = 'sonali';
                    $inputArr['uuser'] = 'sonali';
                    $check = $this->create($inputArr);
                    $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' =>'error');
                    if($check){ 
                        $arr = array('msg' => 'Successfully Form Submit', 'status' => 'ok');
                    }
                    return response()->json($arr);
                }
            break;
            
            default:
                if(!empty($id)) {
                    echo "inside";
                } else {

                }
            break;
        }
    }
    public function getApplicationList() {
        $applications = applications::find(1)->mappedModules->toArray();
    }
    public function mappedModules() {
        return $this->hasMany(AppModule::class, 'app_id');
    }
}
