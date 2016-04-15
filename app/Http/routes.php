<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Post;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Facades\Image;

Route::get('/', 'MainController@index');
//Route::get('fix', 'MainController@fix');

Route::get('recover', function(){
    $posts = Post::all();
    foreach ($posts as $post) {
        $content = $post->content;
        $avatars = [];
        preg_match_all('/<img [^>]*src=["|\']([^"|\']+)/i', $content, $matches);
        foreach ($matches[1] as $key=>$value) {
            $avatars[] = $value;
        }
        $done = false;
        foreach ($avatars as $avatar) {

            if (!$done) {
                try {
                    $image = url($avatar);
                    $image = str_replace('local.viemgan2.com', 'www.viemgan.com.vn', $image);
                    $ext = pathinfo($image, PATHINFO_EXTENSION);
                    $imagePath = md5(time()).'.'.$ext;
                    Image::make($image)->save(public_path('files/images/' . $imagePath));
                    $post->image = $imagePath;
                    $post->save();
                    $done = true;
                }  catch (NotReadableException $e) {
                    $done = false;
                }
            }
        }
    }
});

Route::get('/landingpage.html', 'MainController@landing');
Route::post('/landing', 'MainController@sendmail');

Route::get('/hoi-dap', 'MainController@faq');
Route::get('/lien-he', 'MainController@contact');
Route::get('/video', 'MainController@video');
Route::get('admin', 'AdminController@index');
Route::get('chuyen-muc/{tag}', 'MainController@categoryDetails');
Route::get('tu-khoa/{tag}', 'MainController@tag');

/*
 * for searching
 */
Route::get('search/{tag}', function ($tag) {
    if (preg_match('/tag-([a-z0-9\-]+)/', $tag, $matches)) {
        $keyword = $matches[1];
        $keyword = str_replace('-', ' ', $keyword);
        if (strlen($keyword) > 2) {
            $posts = Post::where('status', true)->tagged($keyword)->latest()->paginate(20);
        } else {
            $posts = Post::where('status', true)->latest()->paginate(20);
        }
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Kết quả tìm kiếm từ khóa ' . $keyword . ' tại Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }
});


Route::resource('admin/banners', 'BannersController');
Route::resource('admin/videos', 'VideosController');
Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/posts', 'PostsController');
Route::resource('admin/questions', 'QuestionsController');
Route::resource('admin/contacts', 'ContactsController');
Route::post('saveContact', ['as' => 'saveContact', 'uses' => 'MainController@saveContact']);
Route::post('registerEmail', ['as' => 'registerEmail', 'uses' => 'MainController@registerEmail']);
Route::post('increaseLikes', ['as' => 'increaseLikes', 'uses' => 'MainController@increaseLikes']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/{value}', function ($value) {
    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
        $origin = $post = Post::where('slug', $matches[1])->first();
        $origin->views = $origin->views + 1;
        $origin->save();

        $post_tag = $post->tags->lists('id')->all();

        $related = Post::where('status', true)
            ->whereHas('tags', function($q) use ($post_tag){
               $q->whereIn('id', $post_tag);
           })
            ->where('id', '!=', $post->id)
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();      

        $additionPost = null;

        if ($related->count() < 5) {
            $categoryLimit = 5- $related->count();
            $additionPost = Post::where('category_id', $post->category_id)
                ->where('status', true)
                ->where('id', '!=', $post->id)
                ->latest('updated_at')
                ->limit($categoryLimit)
                ->get();
        }
        

        return view('frontend.post_details', compact('post', 'related', 'additionPost'))->with([
            'meta_title' => ($post->tieude)? $post->tieude : $post->title . ' | Viemgan.com.vn',
            'meta_desc' => $post->desc,
            'meta_keywords' => ($post->tagList) ? implode(',', $post->tagList) : 'viemgan, huongdan, bai viet',
        ]);
    }
});


