<?php
namespace  App\Http\Traits;

use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;


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
        Alert::success('Success', "{$this->modelName} was Created successfully");
        return redirect()->back();
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
        Alert::success('Success', "{$this->modelName} was Updated successfully");
        return redirect()->back();
    }

    
    
    public function destroy($id)
    {
        $obj = $this->model::find($id);
        $obj->delete();
        Alert::success('Success', "{$this->modelName} was Deleted successfully");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('Success', "All Data Was Deleted");
        return redirect()->back();
    }
}