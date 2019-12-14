<?php

return [
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Không có gì để xoá',

    'layouts' => [
        'my-account' => 'Tài khoản của tôi',
        'profile' => 'Hồ sơ',
        'address' => 'Địa chỉ',
        'reviews' => 'Đánh giá',
        'wishlist' => 'Yêu thích',
        'orders' => 'Đơn hàng',
        'downloadable-products' => 'Sản phẩm được tải về',
    ],

    'common' => [
        'error' => 'Có lỗi xảy ra',
        'no-result-found' => 'Không tìm thấy.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Sản phẩm nổi bật',
        'new-products' => 'Sản phẩm mới',
        'verify-email' => 'Xác nhận email của bạn',
        'resend-verify-email' => 'Gửi lại mã xác nhận'
    ],

    'header' => [
        'title' => 'Tài khoản',
        'dropdown-text' => 'Quản lý giỏ hàng, Đơn hàng',
        'sign-in' => 'Đăng nhập',
        'sign-up' => 'Đăng ký',
        'account' => 'Tài khoản',
        'cart' => 'Giỏ hàng',
        'profile' => 'Hồ sơ',
        'wishlist' => 'yêu thích',
        'cart' => 'Giỏ hàng',
        'logout' => 'Đăng xuất',
        'search-text' => 'tìm kiếm'
    ],

    'minicart' => [
        'view-cart' => 'Xem giỏ hàng',
        'checkout' => 'Thanh toán',
        'cart' => 'Giỏ hàng',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Subscribe Newsletter',
        'subscribe' => 'Theo dõi',
        'locale' => 'Ngôn ngữ',
        'currency' => 'Tiền tệ',
    ],

    'subscription' => [
        'unsubscribe' => 'Bỏ theo dõi',
        'subscribe' => 'Theo dõi',
        'subscribed' => 'You are now subscribed to subscription emails.',
        'not-subscribed' => 'You can not be subscribed to subscription emails, please try again later.',
        'already' => 'You are already subscribed to our subscription list.',
        'unsubscribed' => 'You are unsubscribed from subscription mails.',
        'already-unsub' => 'You are already unsubscribed.',
        'not-subscribed' => 'Error! Mail can not be sent currently, please try again later.'
    ],

    'search' => [
        'no-results' => 'Không tìm thấy',
        'page-title' =>  'tìm kiếm',
        'found-results' => 'Không tìm thấy',
        'found-result' => 'Không tìm thấy'
    ],

    'reviews' => [
        'title' => 'Tiêu đề',
        'add-review-page-title' => 'Thêm đánh giá',
        'write-review' => 'Viết đánh giá',
        'review-title' => 'Tiêu đề',
        'product-review-page-title' => 'Đánh giá sản phẩm',
        'rating-reviews' => 'Bình chọn và đánh giá',
        'submit' => 'GỬI',
        'delete-all' => 'Tất cả đánh giá đã được xoá',
        'ratingreviews' => ':rating Ratings & :review Reviews',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Tên'
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Bạn đã có tài khoản',
            'title' => 'Đăng nhập'
        ],

        'signup-form' => [
            'page-title' => 'Đăng ký',
            'title' => 'Đăng ký',
            'firstname' => 'Họ',
            'lastname' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'confirm_pass' => 'Xác nhận mật khẩu',
            'button_title' => 'Đăng ký',
            'agree' => 'Đồng ý',
            'terms' => 'Điều khoản',
            'conditions' => 'Điều kiện',
            'using' => 'by using this website',
            'agreement' => 'Đồng ý',
            'success' => 'Tạo tài khoản thành công.',
            'success-verify' => 'Tạo tài khoản thành công. Bạn nhận được email để xác thực tài khoản.',
            'success-verify-email-unsent' => 'Tài khoản chưa được xác thực.',
            'failed' => 'Error! Không thể tạo tài khoản. Vui lòng thử lại',
            'already-verified' => 'Tài khoản của bạn đã được xác thực.',
            'verification-not-sent' => 'Error! Gửi email xác thực lỗi. Vui lòng thử lại.',
            'verification-sent' => 'Email xác thực đã gửi đi',
            'verified' => 'Tài khoản đã được xác thực. Đăng nhập ngay.',
            'verify-failed' => 'Không thể xác thực email này.',
            'dont-have-account' => 'Tài khoản không tồn tại.',
            'success' => 'Tài khoản tạo thành công',
            'success-verify' => 'Tài khoản đã được tạo, một email xác thực đã gửi tới email của bạn.',
            'success-verify-email-unsent' => 'Tài khoản đã được tạo, Gửi Email xác thực thất bại',
            'failed' => 'Error! Không thể tạo tài khoản của bạn. Vui lòng thử lại',
            'already-verified' => 'Your Account is already verified Or Please Try Sending A New Verification Email Again',
            'verification-not-sent' => 'Error! Problem In Sending Verification Email, Try Again Later',
            'verification-sent' => 'Verification Email Sent',
            'verified' => 'Your Account Has Been Verified, Try To Login Now',
            'verify-failed' => 'We Cannot Verify Your Mail Account',
            'dont-have-account' => 'You Do Not Have Account With Us',
            'customer-registration' => 'Customer Registered Successfully'
        ],

        'login-text' => [
            'no_account' => 'Bạn chưa có tài khoản',
            'title' => 'Đăng ký',
        ],

        'login-form' => [
            'page-title' => 'Đăng nhập',
            'title' => 'Đăng nhập',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'forgot_pass' => 'Quên mật khẩu?',
            'button_title' => 'Đăng nhập',
            'remember' => 'Ghi nhớ',
            'footer' => '© Copyright :year, All rights reserved',
            'invalid-creds' => 'Đăng nhập không đúng.',
            'verify-first' => 'Vui lòng xác thực email của bạn trước khi tiếp tục.',
            'not-activated' => 'Tài khoản của bạn đã bị khoá',
            'resend-verification' => 'Gửi lại email xác thực'
        ],

        'forgot-password' => [
            'title' => 'Phục hồi mật khẩu',
            'email' => 'Email',
            'submit' => 'Gửi email phục hồi mật khẩu',
            'page_title' => 'Phục hồi mật khẩu'
        ],

        'reset-password' => [
            'title' => 'Phục hồi mật khẩu',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'confirm-password' => 'Xác nhận mật khẩu',
            'back-link-title' => 'Đăng nhập',
            'submit-btn-title' => 'Đặt lại mật khẩu'
        ],

        'account' => [
            'dashboard' => 'Cập nhật hồ sơ',
            'menu' => 'Menu',

            'profile' => [
                'index' => [
                    'page-title' => 'Cập nhật hồ sơ',
                    'title' => 'Hồ sơ cá nhân',
                    'edit' => 'Sửa',
                ],

                'edit-success' => 'Cập nhật thành công.',
                'edit-fail' => 'Error! Không thể cập nhật hồ sơ. Vui lòng thử lại',
                'unmatch' => 'Mật khẩu cũ không đúng.',

                'fname' => 'Họ',
                'lname' => 'Tên',
                'gender' => 'Giới tính',
                'dob' => 'Ngày sinh',
                'phone' => 'Số điện thoại',
                'email' => 'Email',
                'opassword' => 'Mật khẩu cũ',
                'password' => 'Mật khẩu',
                'cpassword' => 'Nhắc lại mật khẩu',
                'submit' => 'Cập nhật hồ sơ',

                'edit-profile' => [
                    'title' => 'Sửa hồ sơ',
                    'page-title' => 'Sửa hồ sơ'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Sổ địa chỉ',
                    'title' => 'Địa chỉ',
                    'add' => 'Thêm địa chỉ mới',
                    'edit' => 'Sửa',
                    'empty' => 'Bạn chưa có địa chỉ nào. Thêm mới địa chỉ',
                    'create' => 'Thêm địa chỉ',
                    'delete' => 'Xoá',
                    'make-default' => 'Đặt làm mặc định',
                    'default' => 'Mặc định',
                    'contact' => 'Liên hệ',
                    'confirm-delete' =>  'Bạn chắc chắn muốn xoá địa chỉ này?',
                    'default-delete' => 'Địa chỉ mặc định không thể xoá.',
                    'enter-password' => 'Nhập mật khẩu.',
                ],

                'create' => [
                    'page-title' => 'Thêm địa chỉ',
                    'title' => 'Thêm địa chỉ',
                    'street-address' => 'Tên đường',
                    'country' => 'Quốc gia',
                    'state' => 'Quận/ Huyện',
                    'select-state' => 'Select a region, state or province',
                    'city' => 'Thành phố',
                    'postcode' => 'Postal Code',
                    'phone' => 'Số điện thoại',
                    'submit' => 'Lưu địa chỉ',
                    'success' => 'Lưu địa chỉ thành công.',
                    'error' => 'Lưu địa chỉ không thành công.'
                ],

                'edit' => [
                    'page-title' => 'Sửa địa chỉ',
                    'title' => 'Sửa địa chỉs',
                    'street-address' => 'Đường',
                    'submit' => 'Lưu địa chỉ',
                    'success' => 'Địa chỉ được cập nhật thành công.',
                ],
                'delete' => [
                    'success' => 'Xoá thành công',
                    'failure' => 'Địa chỉ không thể xoá',
                    'wrong-password' => 'Lỗi mật khẩu !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Đơn hàng',
                    'title' => 'Đơn hàng',
                    'order_id' => 'Mã đơn hàng',
                    'date' => 'Ngày',
                    'status' => 'Trạng thái',
                    'total' => 'Tổng',
                    'order_number' => 'Mã đơn hàng'
                ],

                'view' => [
                    'page-tile' => 'Đơn hàng #:order_id',
                    'info' => 'Thông tin',
                    'placed-on' => 'Ngày đặt',
                    'products-ordered' => 'Sản phẩm đã đặt',
                    'invoices' => 'Hoá đơn',
                    'shipments' => 'Giao hàng',
                    'SKU' => 'SKU',
                    'product-name' => 'Tên sản phẩm',
                    'qty' => 'Số lượng',
                    'item-status' => 'Trạng thái',
                    'item-ordered' => 'Đã đặt (:qty_ordered)',
                    'item-invoice' => 'Invoiced (:qty_invoiced)',
                    'item-shipped' => 'đã giao (:qty_shipped)',
                    'item-canceled' => 'đã huỷ (:qty_canceled)',
                    'item-refunded' => 'đã trả lại (:qty_refunded)',
                    'price' => 'Giá',
                    'total' => 'Tổng cộng',
                    'subtotal' => 'Tổng',
                    'shipping-handling' => 'Giao hàng',
                    'tax' => 'Thuế',
                    'discount' => 'Giảm',
                    'tax-percent' => '% thuế',
                    'tax-amount' => 'Tổng thuế',
                    'discount-amount' => 'Tổng gỉảm',
                    'grand-total' => 'Tổng tạm tính',
                    'total-paid' => 'Tổng phải trả',
                    'total-refunded' => 'Tổng hoàn tiền',
                    'total-due' => 'Total Due',
                    'shipping-address' => 'Địa chỉ giao hàng',
                    'billing-address' => 'Địa chỉ thanh toán',
                    'shipping-method' => 'Hình thức giao hàng',
                    'payment-method' => 'Hình thức thanh toán',
                    'individual-invoice' => 'Hoá đơn #:invoice_id',
                    'individual-shipment' => 'Giao hàng #:shipment_id',
                    'print' => 'In',
                    'invoice-id' => 'Mã hoá đơn',
                    'order-id' => 'Mã đơn hàng',
                    'order-date' => 'Ngày đặt',
                    'bill-to' => 'Bill to',
                    'ship-to' => 'Giao đến',
                    'contact' => 'Liên hệ',
                    'refunds' => 'Refunds',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Adjustment Refund',
                    'adjustment-fee' => 'Adjustment Fee',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Customer - Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Customer - Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Lọc theo',
        'price-label' => 'Giá từ',
        'remove-filter-link-title' => 'Xoá tất cả',
        'sort-by' => 'Sắp xếp theo',
        'from-a-z' => 'Từ A-Z',
        'from-z-a' => 'Từ Z-A',
        'newest-first' => 'Mới nhất',
        'oldest-first' => 'Cũ nhất',
        'cheapest-first' => 'Giá thấp nhất',
        'expensive-first' => 'Giá cao nhất',
        'show' => 'Hiển thị',
        'pager-info' => 'Hiển thị :showing / :total',
        'description' => 'Mô tả',
        'specification' => 'Đặc điểm',
        'total-reviews' => ':total đánh giá',
        'total-rating' => ':total_rating & :total_reviews đánh giá',
        'by' => 'bởi :name',
        'up-sell-title' => 'Bạn có thể thích!',
        'related-product-title' => 'Sản phẩm liên quan',
        'cross-sell-title' => 'Lựa chọn thêm',
        'reviews-title' => 'Bình chọn & Đánh giá',
        'write-review-btn' => 'Viết đánh giá',
        'choose-option' => 'Chọn',
        'sale' => 'Sale',
        'new' => 'Mới',
        'empty' => 'Không có sản phẩm nào',
        'add-to-cart' => 'Thêm vào giỏ',
        'buy-now' => 'Mua ngay',
        'whoops' => 'Whoops!',
        'quantity' => 'Số lượng',
        'in-stock' => 'Còn hàng',
        'out-of-stock' => 'Hết hàng',
        'view-all' => 'Xem tất cả',
        'select-above-options' => 'Vui lòng lựa chọn.',
        'less-quantity' => 'Số lượng phải lớn hơn 1.',
        'samples' => 'Samples',
        'links' => 'Links',
        'sample' => 'Sample',
        'name' => 'Tên',
        'qty' => 'Số lượng',
        'starting-at' => 'Bắt đầu tại',
        'customize-options' => 'Tuỳ chỉnh',
        'choose-selection' => 'Chọn',
        'your-customization' => 'Tuỳ chỉnh của bạn',
        'total-amount' => 'Tổng cộng',
        'none' => 'None'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Vui lòng chọn trước khi mua.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Atleast one product should have more than 1 quantity.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Giỏ hàng',
            'empty' => 'Giỏ hàng rỗng',
            'update-cart' => 'Cập nhật giỏ hàng',
            'continue-shopping' => 'Continue Shopping',
            'proceed-to-checkout' => 'Proceed To Checkout',
            'remove' => 'Remove',
            'remove-link' => 'Remove',
            'move-to-wishlist' => 'Move to Wishlist',
            'move-to-wishlist-success' => 'Item moved to wishlist.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Please select option before adding to cart.',
            'quantity' => [
                'quantity' => 'Quantity',
                'success' => 'Cart Item(s) successfully updated.',
                'illegal' => 'Quantity cannot be lesser than one.',
                'inventory_warning' => 'The requested quantity is not available, please try again later.',
                'error' => 'Cannot update the item(s) at the moment, please try again later.'
            ],

            'item' => [
                'error_remove' => 'No items to remove from the cart.',
                'success' => 'Item was successfully added to cart.',
                'success-remove' => 'Item was removed successfully from the cart.',
                'error-add' => 'Item cannot be added to cart, please try again later.',
            ],
            'quantity-error' => 'Requested quantity is not available.',
            'cart-subtotal' => 'Cart Subtotal',
            'cart-remove-action' => 'Do you really want to do this ?',
            'partial-cart-update' => 'Only some of the product(s) were updated',
            'link-missing' => ''
        ],

        'onepage' => [
            'title' => 'Checkout',
            'information' => 'Information',
            'shipping' => 'Shipping',
            'payment' => 'Payment',
            'complete' => 'Complete',
            'billing-address' => 'Billing Address',
            'sign-in' => 'Sign In',
            'first-name' => 'First Name',
            'last-name' => 'Last Name',
            'email' => 'Email',
            'address1' => 'Street Address',
            'city' => 'City',
            'state' => 'State',
            'select-state' => 'Select a region, state or province',
            'postcode' => 'Zip/Postcode',
            'phone' => 'Telephone',
            'country' => 'Country',
            'order-summary' => 'Order Summary',
            'shipping-address' => 'Shipping Address',
            'use_for_shipping' => 'Ship to this address',
            'continue' => 'Continue',
            'shipping-method' => 'Select Shipping Method',
            'payment-methods' => 'Select Payment Method',
            'payment-method' => 'Payment Method',
            'summary' => 'Order Summary',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'billing-address' => 'Billing Address',
            'shipping-address' => 'Shipping Address',
            'contact' => 'Contact',
            'place-order' => 'Place Order',
            'new-address' => 'Add New Address',
            'save_as_address' => 'Save as Address',
            'apply-coupon' => 'Apply Coupon',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Free',
            'coupon-used' => 'Coupon Used',
            'applied' => 'Applied',
            'back' => 'Back',
            'cash-desc' => 'Cash On Delivery',
            'money-desc' => 'Money Transfer',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'This is a free shipping',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Password',
            'login-exist-message' => 'You already have an account with us, Sign in or continue as guest.'
        ],

        'total' => [
            'order-summary' => 'Order Summary',
            'sub-total' => 'Items',
            'grand-total' => 'Grand Total',
            'delivery-charges' => 'Delivery Charges',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'price' => 'price',
            'disc-amount' => 'Amount discounted',
            'new-grand-total' => 'New Grand Total',
            'coupon' => 'Coupon',
            'coupon-applied' => 'Coupon Applied',
            'remove-coupon' => 'Remove Coupon',
            'cannot-apply-coupon' => 'Cannot Apply Coupon'
        ],

        'success' => [
            'title' => 'Order successfully placed',
            'thanks' => 'Thank you for your order!',
            'order-id-info' => 'Your order id is #:order_id',
            'info' => 'We will email you, your order details and tracking information'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'New Order Confirmation',
            'heading' => 'Order Confirmation!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Thanks for your Order :order_id placed on :created_at',
            'greeting-admin' => 'Order Id :order_id placed on :created_at',
            'summary' => 'Summary of Order',
            'shipping-address' => 'Shipping Address',
            'billing-address' => 'Billing Address',
            'contact' => 'Contact',
            'shipping' => 'Shipping Method',
            'payment' => 'Payment Method',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Shipping & Handling',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'grand-total' => 'Grand Total',
            'final-summary' => 'Thanks for showing your interest in our store we will send you tracking number once it shipped',
            'help' => 'If you need any kind of help please contact us at :support_email',
            'thanks' => 'Thanks!',
            'cancel' => [
                'subject' => 'Order Cancel Confirmation',
                'heading' => 'Order Cancelled',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Shipping Address',
                'billing-address' => 'Billing Address',
                'contact' => 'Contact',
                'shipping' => 'Shipping Method',
                'payment' => 'Payment Method',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Shipping & Handling',
                'tax' => 'Tax',
                'discount' => 'Discount',
                'grand-total' => 'Grand Total',
                'final-summary' => 'Thanks for showing your interest in our store',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Thanks!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Summary of Invoice',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Summary of Shipment',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Thanks!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'New Customer Registration',
                'password' => 'Password',
                'summary' => 'Your account has been created.
                Your account details are below: ',
                'thanks' => 'Thanks!',
            ],

            'registration' => [
                'subject' => 'New Customer Registration',
                'customer-registration' => 'Customer Registered Successfully',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Welcome and thank you for registering with us!',
                'summary' => 'Your account has now been created successfully and you can login using your email address and password credentials. Upon logging in, you will be able to access other services including reviewing past orders, wishlists and editing your account information.',
                'thanks' => 'Thanks!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Verification Mail',
                'verify' => 'Verify Your Account',
                'summary' => 'This is the mail to verify that the email address you entered is yours.
                Kindly click the Verify Your Account button below to verify your account.'
            ],

            'subscription' => [
                'subject' => 'Subscription Email',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name thêm mới thành công.',
        'update-success' => ':name sửa thành công.',
        'delete-success' => ':name xoá thành công.',
        'submit-success' => ':name gửi đi thành công.'
    ],
];
