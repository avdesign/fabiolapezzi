<?php

namespace AVD\Http\Controllers;

use AVD\Interfaces\CategoryInterface as InterModel;
use AVD\Interfaces\SectionInterface as InterSection;
use AVD\Interfaces\ConfigSiteInterface as ConfigSite;
use AVD\Interfaces\ConfigProductInterface as ConfigProduct;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\ConfigImageProductInterface as ConfigImages;
use AVD\Http\Controllers\Controller;


use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     * @param ConfigSite $configSite
     * @param InterModel $interModel
     * @param InterSection $interSection
     * @param ConfigImages $configImages
     * @param ConfigKeyword $configKeyword
     * @param ConfigProduct $configProduct
     */

    public function __construct(
        ConfigSite $configSite,
        InterModel $interModel,
        InterSection $interSection,
        ConfigImages $configImages,
        ConfigKeyword $configKeyword,
        ConfigProduct $configProduct)
    {
        $this->middleware('auth');

        $this->configProduct = $configProduct;
        $this->configSite    = $configSite;
        $this->interModel    = $interModel;
        $this->configKeyword = $configKeyword;
        $this->configImages  = $configImages;
        $this->interSection  = $interSection;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {

        $configSite    = $this->configSite->setId(1);
        $configImages  = $this->configImages->getAll();
        $configProduct = $this->configProduct->setId(1);
        $configKeyword = $this->configKeyword->random();
        $sections      = $this->interSection->getAll();

        $category      = $this->interModel->get($slug);

        if (!$category) {
            return redirect()->route('home.site');
        } else {
            if ($configSite->order_products == 'desc'){
                $products = $category->products->where('active', 1)->sortByDesc('id');
            } elseif ($configSite->order_products == 'random') {
                $products = $category->products()->where('active', 1)->inRandomOrder()->get();
            } else {
                $products = $category->products->where('active', 1);
            }
        }


        return view('categories.category-'.$configSite->page_categories, compact(
            'configKeyword',
            'configProduct',
            'configImages',
            'breadcrumbs',
            'configSite',
            'sections',
            'category',
            'products'
        ));




    }


    public function filter(Request $request)
    {
        $configKeyword  = $this->configKeyword->random();

        return view('categories.category-1', compact('configKeyword'));

    }


}
