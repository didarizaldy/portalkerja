<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use UxWeb\SweetAlert\SweetAlert;
use Yajra\DataTables\Facades\DataTables;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $user_role = Auth::user()->roles;

        if ($user_role == "user") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.post.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }

        $test = User::select('name')->get();
        $user_role = Auth::user()->roles;
        $categories = Post::select('categories')->distinct()->get();
        $graduates = Post::select('graduate')->orderBy('graduate', 'asc')->distinct()->get();
        $experiences = Post::select('experience')->distinct()->get();
        $positions = Post::select('position')->distinct()->get();
        $skills = Post::select('skills')->distinct()->get();
        $work_types = Post::select('work_type')->distinct()->get();
        // $worksites = Post::select('worksite')->distinct()->get();
        $worksites = DB::select("SELECT id, name FROM cities");
        $companies = DB::select("SELECT id, name FROM companies");

        // convert data readable
        $data_exp = $experiences;
        $data_grad = $graduates;

        $arrval_exp = [];
        $arrval_grad = [];

        foreach ($data_exp as $itemexp) {
            $arrval_exp[] = $itemexp->experience;
        }

        foreach ($data_grad as $itemgrad) {
            $arrval_grad[] = $itemgrad->graduate;
        }

        $val_exp = $arrval_exp;
        $val_edu = $arrval_grad;

        function convertExp($val_exp)
        {
            $results = [];

            foreach ($val_exp as $val) {
                if ($val == 'fresh_graduate') {
                    $freshgrad = [
                        'value'    => 'fresh_graduate',
                        'option'   => 'Fresh Graduate'
                    ];

                    $results[] = $freshgrad;
                } else if ($val == 'oneyear') {
                    $oneyear = [
                        'value'    => 'oneyear',
                        'option'   => '1 Tahun'
                    ];

                    $results[] = $oneyear;
                } else if ($val == 'twoyear') {
                    $twoyear = [
                        'value'     => 'twoyear',
                        'option'    => '2 Tahun'
                    ];

                    $results[] = $twoyear;
                } else if ($val == 'advanced') {
                    $advanced = [
                        'value'     => 'advanced',
                        'option'    => 'Mahir'
                    ];

                    $results[] = $advanced;
                }
            }

            return $results;
        }

        function convertEdu($val_edu)
        {
            $results = [];

            foreach ($val_edu as $val) {
                if ($val == 'sma') {
                    $sma = [
                        'value'    => 'sma',
                        'option'   => 'SMA'
                    ];

                    $results[] = $sma;
                } else if ($val == 'smk') {
                    $smk = [
                        'value'    => 'smk',
                        'option'   => 'SMK'
                    ];

                    $results[] = $smk;
                } else if ($val == 'diploma') {
                    $d3 = [
                        'value'     => 'diploma',
                        'option'    => 'D3 (Diploma)'
                    ];

                    $results[] = $d3;
                } else if ($val == 'sarjana') {
                    $s1 = [
                        'value'     => 'sarjana',
                        'option'    => 'S1 (Sarjana)'
                    ];

                    $results[] = $s1;
                } else if ($val == 'megister') {
                    $s2 = [
                        'value'     => 'megister',
                        'option'    => 'S2 (Megister)'
                    ];

                    $results[] = $s2;
                }
            }

            return $results;
        }

        $experience = convertExp($val_exp);
        $education = convertEdu($val_edu);

        if ($user_role == "user") {
            return view('errors.403', compact('user'));
        }

        // return response()->json(
        //     $categories
        // );

        return view('contents.admin.post.create', compact(
            'user',
            'categories',
            'experience',
            'education',
            'positions',
            'skills',
            'work_types',
            'worksites',
            'companies'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $author = Auth::user()->id;

        $this->validate(
            $request,
            [
                'title'         => 'required|unique:posts,title',
                'categories'    => 'required',
                'companies'     => 'required',
                'graduate'      => 'required',
                'experience'    => 'required',
                'position'      => 'required',
                'skills'        => 'required',
                'work_type'     => 'required',
                'worksite'      => 'required',
                'salary'        => 'required',
                'quota'         => 'required',
                'jobdesk'       => 'required',
                'expireddate'   => 'required'
            ],
            [
                'title.unique'  => 'Judul Lowongan Telah Digunakan !'
            ]
        );

        function convertToSlug($string)
        {
            $string = strtolower($string);
            $string = preg_replace('/[^\p{L}\p{N}]+/u', ' ', $string);
            $string = trim($string);
            $string = str_replace(' ', '-', $string);
            $string = preg_replace('/-+/', '-', $string);

            return $string;
        }

        function convertToFloat($formattedValue)
        {
            $numericValue = str_replace(["Rp. ", "."], "", $formattedValue);
            $numericValue = str_replace(",", ".", $numericValue);
            $floatValue = (float) $numericValue;
            return $floatValue;
        }

        $data = Post::create([
            'slug'             => convertToSlug($request->title),
            'title'            => ucwords(strtolower($request->title)),
            'categories'       => $request->categories,
            'author'           => $author,
            'companies'        => $request->companies,
            'token'            => str_random(32),
            'graduate'         => $request->graduate,
            'experience'       => $request->experience,
            'position'         => ucwords(strtolower($request->position)),
            'skills'           => ucwords(strtolower($request->skills)),
            'work_type'        => $request->work_type,
            'worksite'         => ucwords(strtolower($request->worksite)),
            'salary'           => convertToFloat($request->salary),
            'quota'            => $request->quota,
            'jobdesk'          => $request->jobdesk,
            'expireddate'      => Carbon::createFromFormat('m/d/Y', $request->expireddate)->format('Y-m-d'),
        ]);


        // return response()->json(
        //     $data
        // );
        // return view('contents.admin.post.index', compact('user'));

        // return redirect()->route('admin.job-create')->with('success', 'Lowongan Berhasil Dibuat...');
        // return redirect()->back()->with('success', 'Lowongan Berhasil Dibuat...');
        return redirect()->route('admin.job-list')->with('success', 'Lowongan Berhasil Dibuat...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Post::select(
            'posts.id',
            'posts.slug',
            'posts.title',
            'posts.companies',
            'posts.work_type',
            'cities.name AS worksite',
            'posts.created_at'
        )
            ->join('cities', 'posts.worksite', '=', 'cities.id')
            ->orderBy('created_at', 'DESC')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return '
                <div class="btn-group">
                    <form action="' . route('admin.job-edit', $data->id) . '" id="edit-form">
                        ' . method_field('put') . csrf_field() . '
                        <button type="submit" class="btn btn-default" id="edit-button">
                        <i class="fas fa-edit" style="color: #0d4cba;"></i>
                        </button>
                    </form>
                    <form action="' . route('admin.job-delete', $data->id) . '" method="post" id="delete-form">
                        ' . method_field('delete') . csrf_field() . '
                        <button type="submit" class="btn btn-default" id="delete-button">
                        <i class="fas fa-trash" style="color: red;"></i>
                        </button>
                    </form>
                </div>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postid = Post::with('author', 'editby')->findOrFail($id);

        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        // $author = User::select('name')->where('id', $postid->author)->first();
        // $editor = User::select('name')->where('id', $postid->editby)->first();
        $author = User::select('name')->where('id', $postid->author)->first();
        $editor = User::select('name')->where('id', $postid->editby)->first();
        $user_role = Auth::user()->roles;
        $categories = Post::select('categories')->distinct()->get();
        $graduates = Post::select('graduate')->orderBy('graduate', 'asc')->distinct()->get();
        $experiences = Post::select('experience')->distinct()->get();
        $positions = Post::select('position')->distinct()->get();
        $skills = Post::select('skills')->distinct()->get();
        $work_types = Post::select('work_type')->distinct()->get();
        // $worksites = Post::select('worksite')->distinct()->get();
        $worksites = DB::select("SELECT id, name FROM cities");
        $companies = DB::select("SELECT id, name FROM companies");

        // convert data readable
        $data_exp = $experiences;
        $data_grad = $graduates;

        $arrval_exp = [];
        $arrval_grad = [];

        foreach ($data_exp as $itemexp) {
            $arrval_exp[] = $itemexp->experience;
        }

        foreach ($data_grad as $itemgrad) {
            $arrval_grad[] = $itemgrad->graduate;
        }

        $val_exp = $arrval_exp;
        $val_edu = $arrval_grad;

        function editConvertExp($val_exp)
        {
            $results = [];

            foreach ($val_exp as $val) {
                if ($val == 'fresh_graduate') {
                    $freshgrad = [
                        'value'    => 'fresh_graduate',
                        'option'   => 'Fresh Graduate'
                    ];

                    $results[] = $freshgrad;
                } else if ($val == 'oneyear') {
                    $oneyear = [
                        'value'    => 'oneyear',
                        'option'   => '1 Tahun'
                    ];

                    $results[] = $oneyear;
                } else if ($val == 'twoyear') {
                    $twoyear = [
                        'value'     => 'twoyear',
                        'option'    => '2 Tahun'
                    ];

                    $results[] = $twoyear;
                } else if ($val == 'advanced') {
                    $advanced = [
                        'value'     => 'advanced',
                        'option'    => 'Mahir'
                    ];

                    $results[] = $advanced;
                }
            }

            return $results;
        }

        function editConvertEdu($val_edu)
        {
            $results = [];

            foreach ($val_edu as $val) {
                if ($val == 'sma') {
                    $sma = [
                        'value'    => 'sma',
                        'option'   => 'SMA'
                    ];

                    $results[] = $sma;
                } else if ($val == 'smk') {
                    $smk = [
                        'value'    => 'smk',
                        'option'   => 'SMK'
                    ];

                    $results[] = $smk;
                } else if ($val == 'diploma') {
                    $d3 = [
                        'value'     => 'diploma',
                        'option'    => 'D3 (Diploma)'
                    ];

                    $results[] = $d3;
                } else if ($val == 'sarjana') {
                    $s1 = [
                        'value'     => 'sarjana',
                        'option'    => 'S1 (Sarjana)'
                    ];

                    $results[] = $s1;
                } else if ($val == 'megister') {
                    $s2 = [
                        'value'     => 'megister',
                        'option'    => 'S2 (Megister)'
                    ];

                    $results[] = $s2;
                }
            }

            return $results;
        }

        $experience = editConvertExp($val_exp);
        $education = editConvertEdu($val_edu);

        $datevalue = Carbon::createFromFormat('Y-m-d', $postid->expireddate)->format('m/d/Y');

        $floatData = $postid->salary;
        $formattedData = number_format($floatData, 0, ',', '.');
        $salaryvalue = 'Rp. ' . $formattedData;

        if ($user_role == "user") {
            return view('errors.403', compact('user'));
        }

        // return response()->json(
        //     $postid
        // );

        return view('contents.admin.post.edit', compact(
            'postid',
            'user',
            'author',
            'editor',
            'categories',
            'experience',
            'education',
            'positions',
            'skills',
            'work_types',
            'worksites',
            'datevalue',
            'salaryvalue',
            'companies'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $editor = Auth::user()->id;
        $postdata = Post::findOrFail($id);

        function editConvertToSlug($string)
        {
            $string = strtolower($string);
            $string = preg_replace('/[^\p{L}\p{N}]+/u', ' ', $string);
            $string = trim($string);
            $string = str_replace(' ', '-', $string);
            $string = preg_replace('/-+/', '-', $string);

            return $string;
        }

        function editConvertToFloat($formattedValue)
        {
            $numericValue = str_replace(["Rp. ", "."], "", $formattedValue);
            $numericValue = str_replace(",", ".", $numericValue);
            $floatValue = (float) $numericValue;
            return $floatValue;
        }

        $data = $postdata->update([
            'slug'             => editConvertToSlug($request->title),
            'title'            => ucwords(strtolower($request->title)),
            'categories'       => $request->categories,
            'editby'           => $editor,
            'companies'        => $request->companies,
            'graduate'         => $request->graduate,
            'experience'       => $request->experience,
            'position'         => ucwords(strtolower($request->position)),
            'skills'           => ucwords(strtolower($request->skills)),
            'work_type'        => $request->work_type,
            'worksite'         => ucwords(strtolower($request->worksite)),
            'salary'           => editConvertToFloat($request->salary),
            'quota'            => $request->quota,
            'jobdesk'          => $request->jobdesk,
            'expireddate'      => Carbon::createFromFormat('m/d/Y', $request->expireddate)->format('Y-m-d'),
        ]);

        return redirect()->route('admin.job-list')->with('success', 'Lowongan Berhasil Di Update...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrfail($id)->delete();

        return redirect()->back()->with('error', 'Data berhasil dihapus.');
    }
}
