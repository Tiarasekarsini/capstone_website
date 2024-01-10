<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        return view('admin/post', [
            "menu"      => "mypost",
            "categorys" => Category::get()
        ]);
    }

    public function doAdd(Request $request){
        extract($request->all());

        $this->validate($request, [
			'thumbnail'     => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'title'         => 'required',
            'harga'         => 'required',
            'category_id'   => 'required',
            'body'          => 'required'
		]);

        $upload     = $request->file('thumbnail');
		$nama_file  = time()."_".$upload->getClientOriginalName();
        $dir        = 'post';
        $upload->move($dir, $nama_file);
        $thumbnail  = $dir.'/'.$nama_file;

        Post::create([
            "category_id"   => $category_id,
            "title"         => $title,
            "harga"         => $harga,
            "thumbnail"     => $thumbnail,
            "body"          => $body,
        ]);

        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Post data created successfully",
            "post"      => $_POST
        ]);
    }

    public function doUpdate(Request $request, $id){
        extract($request->all());

        $this->validate($request, [
			'thumbnail'     => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'title'         => 'required',
            'harga'         => 'required',
            'category_id'   => 'required',
            'body'          => 'required'
		]);

        $data = [
            "category_id"   => $category_id,
            "title"         => $title,
            "harga"         => $harga,
            "body"          => $body
        ];

        if(isset($_FILES['thumbnail']['tmp_name']) && $_FILES['thumbnail']['tmp_name']){
            $upload     = $request->file('thumbnail');
            $nama_file  = time()."_".$upload->getClientOriginalName();
            $dir        = 'post';
            $upload->move($dir, $nama_file);
            $data['thumbnail']  = $dir.'/'.$nama_file;
        }

        Post::where('id', $id)->update($data);

        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Update successfully",
        ]);
    }

    public function doDelete(Request $request){
        extract($request->all());

        Post::whereIn('id', $posts_id)->delete();
        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Delete successfully",
        ]);
        
    }

    public function getById(Request $request, $id){
        extract($request->all());

        $post = Post::find($id);

        return response()->json([
            "status"    => "berhasil",
            "pesan"     => "Data Post",
            "post"      => $post
        ]);
    }



    public function getDatatable(){

        extract($_POST);

        $lists = DB::table('post')->
                    select('post.*', 'category.category')->
                    leftJoin('category', function($join) {
                        $join->on('category.id', '=', 'post.category_id');
                    })->orderBy('post.id','DESC');

        if(isset($length) && $length>=1) $lists = $lists->skip($start)->take($length)->get();
        $total = DB::table('post')->count();

        $data = array();
        foreach($lists as $no=>$l) {
            $d      = array();
            $d[]    = '<div class="table__checkbox table__checkbox--all">
                            <label class="checkbox">
                                <input type="checkbox" data-checkbox="post" class="posts_id" value="'.$l->id.'">
                                <span class="checkbox__marker">
                                    <span class="checkbox__marker-icon">
                                        <svg viewBox="0 0 14 12">
                                            <path d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z"/>
                                        </svg>
                                    </span>
                                </span>
                            </label> '.$l->title.'
                        </div>';
            $d[]    = "Rp ".number_format($l->harga, 0, ".", ".");
            $d[]    = $l->category;
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
