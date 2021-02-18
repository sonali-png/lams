<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\applications;

class AppModule extends Model
{
    use HasFactory;
    public function performAppModuleMasterOperations(request $req) {
        $headerArr = $dataArr = array();
        $action = $req->param;
        $id = $req->param2;
        switch ($action) {
            case 'add':
                $dataArr['app_arr'] = applications::all()->toArray();
                return view('form_content')->with(['dataArr'=>$dataArr, 'page'=>'app-modules']);
                break;
            case 'change-status':
            break;

            case 'save':
            break;
            default:
                if(!empty($id)) {
                    echo "inside";
                } else {

                }
            break;
        }
    }
    public function getModulesList() {
        $modules = AppModule::find(1);
        echo "<table border='1px'>";
        echo "<th>Module Id</th><th>Module Name</th><th>Application Name</th>";
        echo "<tr>";
        echo "<td>".$modules->module_id."</td>";
        echo "<td>".$modules->module_name."</td>";
        echo "<td>".$modules->mappedApplications->app_name."</td>";
        echo "</tr>";
        echo "</table>";
    }
    public function mappedApplications() {
        return $this->belongsTo(applications::class, 'app_id');
    }
}
