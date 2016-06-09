<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\VideoRequest;
use App\Video;
use Intervention\Image\Facades\Image;

class VideosController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }
    protected function saveImage($request, $old = null)
    {
        $filename = md5(time()) . '.' . $request->file('image')->getClientOriginalExtension();
        $img = Image::make($request->file('image')->getRealPath());
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $img->save(public_path() . '/files/images/' . $filename);

        if ($old) {
            @unlink(public_path() . '/files/images/' . $old);
        }
        return $filename;
    }
	public function index()
	{
	   $videos = Video::latest()->paginate(10);
       return view('admin.video.index', compact('videos'));
	}
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest|VideoRequest $request
     *
     * @return Response
     */
    public function store(VideoRequest $request)
    {
        $data = $request->all();
        $data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request) : '';
        Video::create($data);
        flash('Create video success!', 'success');
        return redirect('admin/videos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int                         $id
     * @param QuestionRequest|VideoRequest $request
     *
     * @return Response
     */
    public function update($id, VideoRequest $request)
    {
        $video =  Video::findOrFail($id);
        $data = $request->all();
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request);
        }
        $video->update($data);
        
        flash('Edit video success!', 'success');
        return redirect('admin/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        flash('Success deleted video!');
        return redirect('admin/videos');
    }

}
