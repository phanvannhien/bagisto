<div class="footer">
    <div id="footer-top">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-4">
                    {!! DbView::make(core()->getCurrentChannel())->field('footer_content')->render() !!}
                </div>
                
                <div class="col">
                    <h4>Sumi Shop</h4>
                    <ul class="menu-manager-menu menu-type-vertical footer-about">
                        <li class="level "><a href="/gioi-thieu-ve-hoang-phuc-quoc-te"><span>Giới thiệu</span></a></li>
                        <li class="level "><a href="/he-thong-cua-hang"><span>Hệ thống cửa hàng</span></a></li>
                        <li class="level "><a href="/khanh-thanh-trung-tam-hau-can-hoang-phuc-quoc-te"><span>Trung tâm hậu cần</span></a></li>
                        <li class="level "><a href="/trung-tam-bao-hanh-hoang-phuc"><span>Dịch vụ giặt và sửa giày</span></a></li>
                        <li class="level "><a href="/tin-tuc"><span>Tin tức sự kiện</span></a></li>
                        <li class="level "><a href="/tuyen-dung"><span>Tuyển dụng</span></a></li>
                        <li class="level "><a href="/contacts"><span>Liên hệ</span></a></li>
                    </ul>
                </div>
    
                <div class="col">
                    <h4>Hỗ trợ khách hàng</h4>
                    <ul class="menu-manager-menu menu-type-vertical footer-about">
                        <li class="level "><a href="/gioi-thieu-ve-hoang-phuc-quoc-te"><span>Giới thiệu</span></a></li>
                        <li class="level "><a href="/he-thong-cua-hang"><span>Hệ thống cửa hàng</span></a></li>
                        <li class="level "><a href="/khanh-thanh-trung-tam-hau-can-hoang-phuc-quoc-te"><span>Trung tâm hậu cần</span></a></li>
                        <li class="level "><a href="/trung-tam-bao-hanh-hoang-phuc"><span>Dịch vụ giặt và sửa giày</span></a></li>
                        <li class="level "><a href="/tin-tuc"><span>Tin tức sự kiện</span></a></li>
                        <li class="level "><a href="/tuyen-dung"><span>Tuyển dụng</span></a></li>
                        <li class="level "><a href="/contacts"><span>Liên hệ</span></a></li>
                    </ul>
                </div>
    
                <div class="col">
                    <h4>Kết nối</h4>
                </div>  
            </div>
        </div>

    </div>
    <div id="footer-middle">
        <div class="container">
            <div class="row align-items-startap">
                <div class="col-lg-4">
                   
                    <div class="footer-payment-method">
                        <h4>Phương thức thanh toán</h4>
                        <ul class="list-inline payment-method-list">
                            <li class="list-inline-item"><img title="" alt="visa" src="{{ bagisto_asset('images/visa.png' )}}"></li>
                            <li class="list-inline-item"><img title="" alt="mastercard" src="{{ bagisto_asset('images/mastercard.png' )}}"></li>
                            <li class="list-inline-item"><img title="" alt="cod" src="{{ bagisto_asset('images/cod.png' )}}"></li>
                            <li class="list-inline-item"><img title="" alt="onpay" src="{{ bagisto_asset('images/onepay.png' )}}"></li>
                            <li class="list-inline-item"><img title="" alt="bank-transfer" src="{{ bagisto_asset('images/bank-transfer.png' )}}"></li>
                        </ul>
                    </div>
                
                </div>
                <div class="col-lg-4">
                    
                    <div class="footer-delivery-services">
                        <h4>Dịch vụ giao hàng</h4>
                        <ul class="payment-method-list list-inline">
                            <li class="list-inline-item"><img style="max-height: 39px;" alt="logo quantium" src="{{ bagisto_asset('images/quantium-logo.png' )}}"></li>
                            <li class="list-inline-item"><img style="max-height: 39px;" alt="logo dhl" src="{{ bagisto_asset('images/logo-DHL-1.png' )}}"></li>
                        </ul>
                    </div>
                
                </div>
                <div class="col-lg-4">
                   
                    <div class="footer-verified-services">
                        <h4>Verified services</h4>
                        <div class="flex-container-justify-inline hp-protection">
                            
                            <div class="flex-item-inline">
                                <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=35884">
                                    <img alt="Đã đăng ký bộ công thương" src="{{ bagisto_asset('images/icon-bct2.png') }}"></a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        
    </div>
    <div id="footer-bottom">
        <div class="container">
            <div class="copyright text-center">COPYRIGHT © 2019. All rights reserved </div>
        </div>
        
    </div>
    
</div>
