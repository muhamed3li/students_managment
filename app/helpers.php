<?php

use Illuminate\Support\Facades\Request;

if(!function_exists('form_text'))
{
    function form_text($name,$label ="",$old = "")
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <input type="text" class="form-control" id="$name" name="$name" value="$old">
            </div>
        </div>
        END;
    }
}


if(!function_exists('form_textarea'))
{
    function form_textarea($name,$label ="",$old = "")
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <textarea type="text" class="form-control" id="$name" name="$name">$old</textarea>
            </div>
        </div>
        END;
    }
}


if(!function_exists('form_select'))
{
    function form_select($name,$label ="",$selected = 0)
    {
        $label = $label == "" ? $name : $label;
        $x = explode('_',$name);
        $model = ucwords($x[0]);
        $class = "App\\Models\\$model";
        $all = $class::get();
        $result = <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <select class="form-control" name="$name" id="$name">
                <option selected disabled>اختر</option>
        END;

        foreach($all as $item)
        {
            if($item->id == $selected){
                $result .= <<<END
                    <option selected value="{$item->id}">{$item->name}</option>
                END;
            }
            else
            {
                $result .= <<<END
                    <option value="{$item->id}">{$item->name}</option>
                END;
            }
        }
        $result .= <<<END
                </select>
            </div>
        </div>
        END;
        echo $result;
    }
}


if(!function_exists('form_select_array'))
{
    function form_select_array($name,$label = "",$arr,$selected = "")
    {
        $label = $label == "" ? $name : $label;
        $result = <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <select class="form-control" name="$name" id="$name">
        END;

        foreach($arr as $key=>$item)
        {
            if($key == $selected){
                $result .= <<<END
                    <option selected value="{$key}">{$item}</option>
                END;
            }
            else
            {
                $result .= <<<END
                    <option value="{$key}">{$item}</option>
                END;
            }
        }
        $result .= <<<END
                </select>
            </div>
        </div>
        END;
        echo $result;
    }
}



if(!function_exists('form_check'))
{
    function form_check($name,$label ="",$checked = 0)
    {
        $label = $label == "" ? $name : $label;
        $checked = $checked == 0 ? '' : 'checked';
        echo <<<END
            <div class="card-body">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="$name" name="$name" value="1" $checked>
                    <label for="$name" class="form-check-label">$label</label>
                </div>
            </div>
        END;
    }
}

if(!function_exists('form_radio'))
{
    function form_radio()
    {

    }
}



if(!function_exists('form_date'))
{
    function form_date($name,$label ="",$date = '')
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <input type="date" class="form-control datepicker" id="$name"  name="$name" value="$date">
            </div>
        </div>
        END;
    }
}


if(!function_exists('form_time'))
{
    function form_time($name,$label ="",$old = "")
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <input type="time" class="form-control" id="$name"  name="$name" value="$old">
            </div>
        </div>
        END;
    }
}


if(!function_exists('currentRequest'))
{
    function currentRequest($name)
    {
        return Request::is("$name","$name/*");
    }
}


if(!function_exists('is_time_zero'))
{
    function is_time_zero($time)
    {
        return strtotime($time) == strtotime('00:00');
    }
}


if(!function_exists('format_time_to_twelve'))
{
    function format_time_to_twelve($time)
    {
        return date_format(date_create($time),'h:i A');
    }
}


if(!function_exists('render_time'))
{
    function render_time($time)
    {
        $is_zero = is_time_zero($time) ? 'bg-success' : '';
        $renderString = is_time_zero($time) ? '' : format_time_to_twelve($time);
        return <<<END
        <td class="$is_zero">
        $renderString
        </td>
        END;
    }
}


if(!function_exists('render_time_in_table'))
{
    function render_time_in_table($time,$lable)
    {
        
        if(is_time_zero($time))
        {
            return "";
        }
        else
        {
            $renderString = format_time_to_twelve($time);
            return <<<END
            <tr>
                <td>$lable</td>
                <td>$renderString</td>
            </tr>
            END;
        }
        
    }
}