<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin/category', [
            "menu"      => "category"
        ]);
    }

    public function doAdd(Request $request){
        extract($request->all());

        Category::create([
            "category"  => $category
        ]);

        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Category data created successfully",
            "request"   => $request->all()
        ]);
    }

    public function doUpdate(Request $request, $id){
        extract($request->all());

        Category::where('id', $id)->update([
            "category"  => $category
        ]);

        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Update successfully",
        ]);
    }

    public function doDelete(Request $request){
        extract($request->all());

        Category::whereIn('id', $categorys_id)->delete();
        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Delete successfully",
            "req"       => $request->all()
        ]);
        
    }

    public function getById(Request $request, $id){
        extract($request->all());

        $category = Category::find($id);

        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Data Category",
            "category"  => $category
        ]);
    }



    public function getDatatable(){

        extract($_POST);

        $lists = DB::table('category')->orderBy('id','DESC');
        if(isset($length) && $length>=1) $lists = $lists->skip($start)->take($length)->get();
        $total = DB::table('category')->count();

        $data = array();
        foreach($lists as $no=>$l) {
            $d      = array();
            $d[]    = '<div class="table__checkbox table__checkbox--all">
                            <label class="checkbox">
                                <input type="checkbox" data-checkbox="kelas" class="categorys_id" value="'.$l->id.'">
                                <span class="checkbox__marker">
                                    <span class="checkbox__marker-icon">
                                        <svg viewBox="0 0 14 12">
                                            <path d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z"/>
                                        </svg>
                                    </span>
                                </span>
                            </label> '.$l->category.'
                        </div>';
            $d[]    = $l->created_at;
            $d[]    = '
                        <div class="items-more">
                            <button class="items-more__button">
                                <svg class="icon-icon-more">
                                    <use xlink:href="#icon-more"></use>
                                </svg>
                            </button>
                            <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                <div class="dropdown-items__container">
                                    <ul class="dropdown-items__list">
                                        <li class="dropdown-items__item">
                                            <a class="dropdown-items__link" href="javascript:;" onclick="showModalEdit('.$l->id.')">
                                                <span class="dropdown-items__link-icon">
                                                    <svg class="icon-icon-task-notes">
                                                      <use xlink:href="#icon-task-notes"></use>
                                                    </svg>
                                                </span> Edit
                                            </a>
                                        </li>
                                        <li class="dropdown-items__item">
                                            <a class="dropdown-items__link" href="javascript:;" onclick="hapus('.$l->id.')">
                                                <span class="dropdown-items__link-icon">
                                                    <svg class="icon-icon-trash">
                                                      <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </span> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            ';
            $data[] = $d;
        }

        return response()->json([
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $total,
            "recordsFiltered"   => isset($search['value']) && $search['value'] ? count($lists) : $total,
            "data"              => $data
        ]);    

    }

}
