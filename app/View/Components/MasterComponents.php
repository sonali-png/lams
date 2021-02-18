<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MasterComponents extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $page;
    public $formInputArr;
    public $masterInputArr;
    public function __construct($title='', $page='')
    {
        $this->title = $title;
        $this->page = $page;
        $this->masterInputArr = [
                                    'applications' => ['Application code' =>'app_code|text|30', 'Application Name' => 'app_name|text|100'],
                                    'designation' => ['Designation code' =>'designation_code|text|30', 'Designation name' => 'designation_name|text|100'],
                                    'department' => ['Department code' =>'department_code|text|30', 'Department name' => 'department_name|text|100', 'Applications'=>'application|select||app_arr'],
                                    'app-modules' => ['Module code' =>'module_code|text|30', 'Module name' => 'module_name|text|100', 'selectArr'=> [0 =>'Applications|app_code|app_name|app_arr']]
                                ];                     
        $this->formInputArr = $this->masterInputArr[$this->page];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form_content');
    }
}
