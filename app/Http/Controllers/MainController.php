<?php namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Http\Requests;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterEmailRequest;
use App\Post;
use App\Question;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function index()
    {
        $page = 'index';

        $latestPost = Post::where('status', true)->hot(true)->latest()->take(5)->get();
        
        $idArrays = [];
        foreach ($latestPost as $post) {
            $idArrays[] = $post->id;
        }
        $categories = Category::latest()->get();

        $rootBlock = [];
        $top1Block = [];
        $top2Block = [];


        foreach ($categories as $category) {
            $cateIds = Category::where('parent_id', $category->id)->lists('id');
            $whereIn = ($cateIds) ? $cateIds : [$category->id];
            if ($category->display_homepage_0) {
                $rootBlock['category'] = $category;
                $rootBlock['posts'] = Post::where('status', true)
                    ->hot(true)
                    ->whereIn('category_id', $whereIn)
                    ->whereNotIn('id', $idArrays)
                    ->latest()
                    ->take(5)
                    ->get();

            }
            if ($category->display_homepage_1) {
                $top1Block['category'] = $category;
                $top1Block['posts'] = Post::where('status', true)
                    ->hot(true)
                    ->whereIn('category_id', $whereIn)
                    ->whereNotIn('id', $idArrays)
                    ->latest()
                    ->take(9)
                    ->get();
            }

            if ($category->display_homepage_2) {
                $top2Block['category'] = $category;
                $top2Block['posts'] = Post::where('status', true)
                    ->hot(true)
                    ->whereIn('category_id', $whereIn)
                    ->whereNotIn('id', $idArrays)
                    ->latest()
                    ->take(6)
                    ->get();
            }
        }
        return view('frontend.index', compact('page', 'latestPost', 'rootBlock', 'top1Block', 'top2Block'))->with([
            'meta_title' => ' Trang chủ Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => '',
        ]);
    }

    public function landing()
    {
        return view('landing1');
    }

    public function sendmail(Request $request){
        Mail::send('emails.landing', ['data' => $request->all()], function ($message) {
            $message->from(env('EMAIL_FROM_EMAIL'), env('EMAIL_FROM_NAME'));

            $message->to('duoctuelinh@gmail.com')
                ->cc('thienkimlove@gmail.com')
                ->subject('Câu hỏi tư vấn');
        });
       return redirect('landingpage.html');
    }

    public function fix()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            if (!file_exists(public_path('files/images/' . $post->image))) {
                if (file_exists(public_path('files/images/600_' . $post->image))) {
                    copy(public_path('files/images/600_' . $post->image), public_path('files/images/' . $post->image));
                }
            }
            if (file_exists(public_path('files/images/600_' . $post->image))) {
                unlink(public_path('files/images/600_' . $post->image));
            }
            if (file_exists(public_path('files/images/500_' . $post->image))) {
                unlink(public_path('files/images/500_' . $post->image));
            }
            if (file_exists(public_path('files/images/400_' . $post->image))) {
                unlink(public_path('files/images/400_' . $post->image));
            }
            if (file_exists(public_path('files/images/300_' . $post->image))) {
                unlink(public_path('files/images/300_' . $post->image));
            }
            if (file_exists(public_path('files/images/200_' . $post->image))) {
                unlink(public_path('files/images/200_' . $post->image));
            }
            if (file_exists(public_path('files/images/100_' . $post->image))) {
                unlink(public_path('files/images/100_' . $post->image));
            }
        }

        dd('Done');
    }

    public function categoryDetails($slug)
    {

        $isExist = Category::where('slug', $slug)->get();

        if ($isExist->count() > 0) {
            $category = $isExist->first();
            $page = $category->id;
            $latestPost = null;
            $cateIds = Category::where('parent_id', $category->id)->lists('id');
            $whereIn = ($cateIds) ? $cateIds : [$category->id];
            //viemgan virus.
            if ($category->template == 1 | $category->template == 2) {
                $latestPost = Post::where('status', true)->whereIn('category_id', $whereIn)->latest()->take(5)->get();
                $idArrays = [];
                foreach ($latestPost as $post) {
                    $idArrays[] = $post->id;
                }
                $posts = Post::where('status', true)
                    ->whereIn('category_id', $whereIn)
                    ->whereNotIn('id', $idArrays)->latest()
                    ->paginate(10);
                $view = 'frontend.virus';
            }
            else {
                //best_product.html
                $posts = Post::where('status', true)->whereIn('category_id', $whereIn)->orderBy('updated_at', 'desc')->paginate(10);
                $view = 'frontend.category_details';
            }

            $related = Post::where('status', true)
                ->where('category_id', $category->id)
                ->where('related', true)
                ->orderBy('updated_at', 'desc')
                ->limit(5)
                ->get();
            
            return view($view, compact('category', 'posts', 'latestPost', 'page', 'related'))->with([
                'meta_title' => $category->name,
                'meta_desc' => '',
                'meta_keywords' => $category->name,
            ]);
        }

    }

    public function faq()
    {
        $page = 'faq';
        $questions = Question::latest()->paginate(10);
        return view('frontend.faq', compact('page', 'questions'))->with([
            'meta_title' => ' Hỏi Đáp | Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => 'hỏi đáp',
        ]);
    }

    /**
     * @param null $value
     * @return mixed
     */
    public function video($value = null)
    {
        $page = 'video';
        $mainVideo = null;
        if ($value) {
            $mainVideo = Video::whereSlug($value)->get();
            
            if ($mainVideo->count() > 0) {
                $mainVideo = $mainVideo->first();
                $mainVideo->increment('views', 1);
            }
        }
        $latestPost = Post::where('status', true)->hot(true)->latest()->take(5)->get();
        $videos = Video::latest()->paginate(10);
        return view('frontend.video', compact('page', 'videos', 'latestPost', 'mainVideo'))->with([
            'meta_title' => ' Video | Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => 'video',
        ]);
    }

    public function contact()
    {
        $page = 'contact';
        return view('frontend.contact', compact('page'))->with([
            'meta_title' => ' Liên hệ | Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => 'liên hệ',
        ]);
    }

    public function tag($keyword)
    {
        $tag = Tag::where('slug', $keyword)->first();
        $posts = $tag->posts();
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn ' . $keyword . ' tại Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }

    /**
     * save contact form.
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect('/');
    }

    public function registerEmail(RegisterEmailRequest $request)
    {
        Mail::send('emails.register', ['email' => $request->input('email')], function ($message) {
            $message->from(env('EMAIL_FROM_EMAIL'), env('EMAIL_FROM_NAME'));

            $message->to(env('EMAIL_TO_EMAIL'))
                ->cc('thienkimlove@gmail.com')
                ->subject('Email đăng ký nhận tin!');
        });
        return redirect('/');
    }

    /**
     * ajax increase likes.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function increaseLikes(Request $request)
    {
        $post = Post::findOrFail($request->input('post_id'));
        $post->likes = $post->likes + 1;
        $post->save();

        return \Response::json([]);
    }

}
