<?php

namespace Laravel;
use Artisaninweb\SoapWrapper\Extension\SoapService;

class CurrencySoapService extends SoapService {

    /**
     * @var string
     */
    protected $name = 'currency';

    /**
     * @var string
     */
    protected $wsdl = 'http://currencyconverter.kowabunga.net/converter.asmx?WSDL';

    /**
     * @var boolean
     */
    protected $trace = true;

    /**
     * Get all the available functions
     *
     * @return mixed
     */
    public function functions()
    {
        return $this->getFunctions();
    }

    public function getConversionAmount($data)
    {
        return $this->call('GetConversionAmount', [$data])->GetConversionAmountResult;
    }

}