<?php
    namespace App\Http\Controllers\Front;
    use App\Category;
    use App\Product;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    class MainController extends Controller{
        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function index(){
            $products = Product::all();
            $categories = Category::all();
            return view('front.index', compact('products'), compact('categories'));
        }
        public function show(Request $request){
            $product = Product::find($request->id);
            return view('front.show', compact('product'));
        }

        /**
         * @param $id_category
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function productsByCategory($id_category){
            $products =Product::where('category_id', $id_category)->get();
            return view('front.index', compact('products'));
        }
    }
