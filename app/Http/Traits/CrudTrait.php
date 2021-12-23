<?php
namespace  App\Http\Traits;

use Illuminate\Support\Facades\Schema;

trait CrudTrait
{
    public function index()
    {
        $all = $this->model::get();
        $columns = Schema::getColumnListing($this->model->getTable());
        $model = $this->modelName;
        return view("admin.pages.{$this->modelName}.index",compact('all','columns','model'));
    }

    public function create()
    {
        $model = $this->modelName;
        return view("admin.pages.{$this->modelName}.create",compact('model'));
    }

    public function show()
    {
        //
    }

    public function store()
    {
        $this->validation();
        $this->model::create($this->attReq());
        return redirect()->back()->with('success', "{$this->modelName} was Created successfully");
    }

    public function edit($id)
    {
        $model = $this->modelName;
        $obj = $this->model::find($id);
        return view("admin.pages.{$this->modelName}.edit",compact('obj','model'));
    }


   
    public function update($id)
    {
        $this->validation();
        $obj = $this->model::find($id);
        $obj->update($this->attReq());
        return redirect()->back()->with('success', "{$this->modelName} was Updated successfully");
    }

    
    
    public function destroy($id)
    {
        $obj = $this->model::find($id);
        $obj->delete();
        return redirect()->back()->with('success', "{$this->modelName} was Deleted successfully");
    }
}