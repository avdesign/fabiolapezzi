<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;

use AVD\Interfaces\ProductInterface as InterModel;
use AVD\Interfaces\SectionInterface as InterSection;
use AVD\Interfaces\ConfigSiteInterface as ConfigSite;
use AVD\Interfaces\CategoryInterface as InterCategory;
use AVD\Interfaces\ImageColorInterface as InterImageColor;
use AVD\Interfaces\ConfigProductInterface as ConfigProduct;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\ConfigImageProductInterface as ConfigImages;

use AVD\Models\Related;


use AVD\Http\Controllers\Controller;


class ProductController extends Controller
{

    /**
     * ProductControllerController constructor.
     * @param ConfigKeyword $configKeyword
     */
    public function __construct(
        InterModel $interModel,
        ConfigSite $configSite,
        ConfigImages $configImages,
        InterSection $interSection,
        InterCategory $interCategory,
        ConfigKeyword $configKeyword,
        ConfigProduct $configProduct,
        InterImageColor $interImageColor)
    {
        $this->middleware('auth');

        $this->interImageColor = $interImageColor;
        $this->configKeyword   = $configKeyword;
        $this->interCategory   = $interCategory;
        $this->configProduct   = $configProduct;
        $this->interSection    = $interSection;
        $this->configImages    = $configImages;
        $this->interModel      = $interModel;
        $this->configSite      = $configSite;
    }
    
    
    public function index(Request $request, $slug)
    {
        $image = $this->interImageColor->get($slug);
        //$request->session()->forget('related');
        //dd($request->session()->get('related'));

        if (!$image) {
            return redirect()->route('home.site');
        }
        $product       = $image->product;
        $sections      = $this->interSection->getAll();
        $configSite    = $this->configSite->setId(1);
        $configImages  = $this->configImages->getAll();
        $configProduct = $this->configProduct->setId(1);
        $configKeyword = $this->configKeyword->random();

        $configImg = [];
        foreach ($configImages as $i){
            if ($i->default == 'T') {
                $configImg['thumb'][$i->type]['path'] = $i->path;
                $configImg['thumb'][$i->type]['width'] = $i->width;
                $configImg['thumb'][$i->type]['height'] = $i->height;
            }
            if ($i->default == 'N') {
                $configImg['normal'][$i->type]['path'] = $i->path;
                $configImg['normal'][$i->type]['width'] = $i->width;
                $configImg['normal'][$i->type]['height'] = $i->height;
            }
            if ($i->default == 'G') {
                $configImg['large'][$i->type]['path'] = $i->path;
                $configImg['large'][$i->type]['width'] = $i->width;
                $configImg['large'][$i->type]['height'] = $i->height;
            }
            if ($i->default == 'Z') {
                $configImg['zoom'][$i->type]['path'] = $i->path;
                $configImg['zoom'][$i->type]['width'] = $i->width;
                $configImg['zoom'][$i->type]['height'] = $i->height;
            }
        }

        //Products Related
        $related = new Related;
        foreach ($sections as $section) {
            foreach ($section->categories as $category){
                if ($category->id == $product->category_id) {
                    $related->add($category);
                }
            }
        }
        $request->session()->put('related', $related);


        ($product->kit == 1 ? $template = 2 : $template = 1 );

        return view("products.index-{$template}", compact(
            'configSite',
            'configProduct',
            'configKeyword',
            'configImg',
            'sections',
            'product',
            'image'
        ));

    }

    public function package(Request $request)
    {
        //dd($request->all());
    }


}
