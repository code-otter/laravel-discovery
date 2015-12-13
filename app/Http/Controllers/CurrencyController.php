<?php

namespace Laravel\Http\Controllers;

use Artisaninweb\SoapWrapper\Facades\SoapWrapper;


use Laravel\CurrencySoapService;
use Laravel\Http\Requests;
use Laravel\Http\Controllers\Controller;

class CurrencyController extends Controller
{

    private $currencySoapService;

    public function __construct(CurrencySoapService $currencySoapService)
    {
        $this->currencySoapService = $currencySoapService;
    }

    public function index(){
        SoapWrapper::add(function ($service) {
            $service
                ->name('currency')
                ->wsdl('http://currencyconverter.kowabunga.net/converter.asmx?WSDL')
                ->trace(true);                                                  // Optional: (parameter: true/false)
        });

        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo'   => 'EUR',
            'RateDate'     => '2014-06-05',
            'Amount'       => '1000'
        ];

        // Using the added service
        SoapWrapper::service('currency', function ($service) use ($data) {
            //var_dump($service->getFunctions());
            var_dump($service->call('GetConversionAmount', [$data])->GetConversionAmountResult);
        });
    }

    public function external(){
        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo'   => 'EUR',
            'RateDate'     => '2014-06-05',
            'Amount'       => '1000'
        ];



        $result = $this->currencySoapService->getConversionAmount($data);

        var_dump($result);
    }
}
