<h1>{{strtoupper($page)}}</h1>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                @foreach($formInputArr as $key => $values)
                    @php
                        $style = '';
                        
                        if(!is_array($values)) {
                            $inputsArr = explode("|", $values);
                            $inputId = $inputsArr[0];
                            $inputType = $inputsArr[1];
                            $maxLength = $inputsArr[2];
                        } else {
                            $inputType = 'select';
                            $optionArr = $values ?? array();
                        }
                    @endphp
                    @switch($inputType)
                        @case('text')
                            <label class="form-label" for="" style="{{$style}}">{{$key}}</label>
                            <input type="text" class="form-control" id="{{$inputId}}" name="{{$inputId}}" placeholder="Enter {{$key}}">
                        @break
                        @case('select')
                            @foreach($optionArr as $value1) 
                            @php
                            $selectAttrArr = explode("|", $value1);
                            @endphp
                            <label class="form-label" for="" style="{{$style}}">Select {{$selectAttrArr[0]}}</label>
                            @isset($dataArr[$selectAttrArr[3]])
                            <select>
                                <option value={{$selectAttrArr[1]}}> {{$selectAttrArr[2]}} </option>
                            </select>
                            @endisset
                            @endforeach
                        @break
                        @default
                        @break
                    @endswitch
                @endforeach
                {{ $errors->first('title') }}
            </div>
            <div class="card-footer">
                <button class="btn btn-primary mr-2" onclick="saveMaster('{{$page}}')">Submit</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>