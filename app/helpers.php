<?php

use Illuminate\Support\Facades\Request;

if(!function_exists('form_text'))
{
    function form_text($name,$old = "")
    {
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$name</label>
                <input type="text" class="form-control" id="$name" placeholder="$name" name="$name" value="$old">
            </div>
        </div>
        END;
    }
}


if(!function_exists('form_textarea'))
{
    function form_textarea($name,$old = "")
    {
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$name</label>
                <textarea type="text" class="form-control" id="$name" placeholder="$name" name="$name">$old</textarea>
            </div>
        </div>
        END;
    }
}


if(!function_exists('form_select'))
{
    function form_select($name,$selected = 0)
    {
        $x = explode('_',$name);
        $model = ucwords($x[0]);
        $class = "App\\Models\\$model";
        $all = $class::get();
        $result = <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$model</label>
                <select class="form-control" name="$name" id="$name">
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
    function form_select_array($name,$arr,$selected = "")
    {
        $result = <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$name</label>
                <select class="form-control" name="$name" id="$name">
        END;

        foreach($arr as $item)
        {
            if($item == $selected){
                $result .= <<<END
                    <option selected value="{$item}">{$item}</option>
                END;
            }
            else
            {
                $result .= <<<END
                    <option value="{$item}">{$item}</option>
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
    function form_check($name,$checked = 0)
    {
        $checked = $checked == 0 ? '' : 'checked';
        echo <<<END
            <div class="card-body">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="$name" name="$name" value="1" $checked>
                    <label for="$name" class="form-check-label">$name</label>
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
    function form_date($name,$date = '')
    {
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$name</label>
                <input type="date" class="form-control" id="$name" placeholder="$name" name="$name" value="$date">
            </div>
        </div>
        END;
    }
}


if(!function_exists('form_time'))
{
    function form_time($name,$old = "")
    {
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$name</label>
                <input type="time" class="form-control" id="$name" placeholder="$name" name="$name" value="$old">
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