<?php

namespace AVD\Http\Controllers;

use AVD\Interfaces\ImageColorInterface as InterModel;
use Illuminate\Http\Request;

class ImageColorController extends Controller
{
    /**
     * @var InterModel
     */
    private $interModel;

    public function __construct(InterModel $interModel)
    {
        $this->middleware('auth');

        $this->interModel = $interModel;
    }


    public  function grids(Request $request)
    {
        if ($request->load_grid == 'color_sizes') {
            $color = $this->interModel->setId($request->color_id);
            $grids = $color->grids;
            $code  = $color->code;

            $html =  view('ajax.grids-sizes-1', compact('grids'))->render();
        }

        if ($request->load_grid == 'kit_sizes') {
            $image   = $this->interModel->setId($request->color_id);
            $product = $image->product;
            $code    = $image->code;

            $html = view('ajax.grids-sizes-2', compact('image', 'product'))->render();
        }

        $out = array(
            "code" => $code,
            "grid" => $html
        );

        return response()->json($out);


    }
}
