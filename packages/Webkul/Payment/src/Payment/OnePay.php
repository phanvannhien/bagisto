<?php

namespace Webkul\Payment\Payment;

/**
 * Money Transfer payment method class
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class OnePay extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'onepay';

    public function getRedirectUrl()
    {
        
    }
}