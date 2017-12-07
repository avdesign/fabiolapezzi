<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;


class CheckoutController extends Controller
{
    /**
     * @var ConfigKeyword
     */
    private $configKeyword;

    public function __construct(ConfigKeyword $configKeyword)
    {

        $this->configKeyword = $configKeyword;
    }

    public function index()
    {
        $configKeyword  = $this->configKeyword->random();
        $user           = auth()->user();

        return view('checkouts.index-2', compact('configKeyword', 'user'));

    }


    public function update(Request $request)
    {
        $order   = view('checkouts.order-1')->render();
        $payment = view('checkouts.payment-1')->render();

        $output = array(
            "result" => "success",
            "messages" => "",
            "reload" => "false",
            "fragments" => array(
                ".woocommerce-checkout-review-order-table" => $order,
                ".woocommerce-checkout-payment" => $payment
            )
        );

        return response()->json($output);
    }
}
