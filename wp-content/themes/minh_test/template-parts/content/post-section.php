<div data-collapse="medium" data-animation="default" data-duration="400" class="nav-bar w-nav">
    <div class="nav-top">
        <div class="wrapper nav-top-wrapper">
            <div class="nav-top-info">
                <div class="nav-top-text">Call Us: +1 213 974-5898</div>
                <div class="w-hidden-tiny">Email: <a href="#" class="link-white">toystore@template.com</a></div>
            </div>
            <div class="nav-top-social"><a href="https://elasticthemes.com" target="_blank" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5badda2935e11303a89a461e/5bae5eec5227792568635e37_twitter-icon-white.svg" alt=""/></a><a href="https://elasticthemes.com" target="_blank" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5badda2935e11303a89a461e/5bae5eec3cb36463d4cf4661_facebook-icon-white.svg" alt=""/></a><a href="https://elasticthemes.com" target="_blank" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5badda2935e11303a89a461e/5bae5eec7fe624275552217c_instagram-icon-white.svg" alt=""/></a><a href="https://elasticthemes.com" target="_blank" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5badda2935e11303a89a461e/5bae5eec6e93377c0bbdba8a_pinterest-icon-white.svg" alt=""/></a><a href="https://elasticthemes.com" target="_blank" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5badda2935e11303a89a461e/5bae5eecfff242b7c309e311_youtube-icon.svg" alt=""/></a></div>
        </div>
    </div>
    <div class="nav-main">
        <div class="wrapper nav-bar-wrapper">
            <a href="/" class="brand w-nav-brand w--current">
                <div>ToyStore</div>
            </a>
            <div class="navigation">
                <nav role="navigation" class="nav-menu w-nav-menu"><a href="/catalog" class="nav-link w-nav-link">Catalog</a><a href="/delivery" class="nav-link w-nav-link">Delivery</a><a href="/about" class="nav-link w-nav-link">About</a><a href="/contacts" class="nav-link w-nav-link">Contacts</a></nav>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
                <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="modal" data-wf-cart-query="
                    query FetchCartInfo {
                    site {
                    commerce {
                    quickCheckoutEnabled
                    defaultCountry
                    defaultCurrency
                    }
                    }
                    database {
                    commerceOrder {
                    id
                    startedOn
                    updatedOn
                    comment
                    userItemsCount
                    userItems {
                    id count rowTotal { value } sku { id f__draft_0ht f__archived_0ht f_main_image_4dr { url file { width height size variants { quality height width s3Url size error } } } f_price_ { value unit } } product { f_name_ id f__draft_0ht f__archived_0ht }
                    }
                    extraItems {
                    pluginName
                    pluginId
                    name
                    price {
                    value
                    unit
                    string
                    }
                    }
                    total {
                    value
                    unit
                    string
                    }
                    subtotal {
                    value
                    unit
                    string
                    }
                    }
                    }
                    }
                    " data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper">
                    <a href="#" data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink cart-button w-inline-block">
                        <div class="w-inline-block">Cart</div>
                        <img src="https://uploads-ssl.webflow.com/5badda2935e11303a89a461e/5baf75c3bf02346640399fec_cart-icon.svg" alt="" class="cart-icon"/>
                        <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D" data-wf-conditions="%5B%5D" class="w-commerce-commercecartopenlinkcount item-count">0</div>
                    </a>
                    <div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal">
                        <div data-node-type="commerce-cart-container" class="w-commerce-commercecartcontainer cart-container">
                            <div class="w-commerce-commercecartheader cart-header">
                                <h4 class="w-commerce-commercecartheading">Your Cart</h4>
                                <a href="#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink w-inline-block">
                                    <svg width="16px" height="16px" viewBox="0 0 16 16">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" fill="#333333">
                                                <polygon points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8"></polygon>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="w-commerce-commercecartformwrapper">
                                <form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform">
                                    <script type="text/x-wf-template" id="wf-template-9336d8a7-ba52-2880-0c69-78271ccadf80">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%255B%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%255B%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_price_%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%255B%255D%22%3E%240.00%3C%2Fdiv%3E%3Ca%20href%3D%22%23%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%255B%255D%22%20class%3D%22w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%3E%3Cdiv%20class%3D%22cart-remove-link%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20type%3D%22text%22%20required%3D%22%22%20pattern%3D%22%5B0-9%5D%2B%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%255B%255D%22%20class%3D%22w-commerce-commercecartquantity%20input%20quantity-input%22%20name%3D%22quantity%22%20min%3D%220%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                                    <div class="w-commerce-commercecartlist cart-list" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-9336d8a7-ba52-2880-0c69-78271ccadf80">
                                        <div class="w-commerce-commercecartitem">
                                            <img data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D" data-wf-conditions="%5B%5D" src="" alt="" class="w-commerce-commercecartitemimage w-dyn-bind-empty"/>
                                            <div class="w-commerce-commercecartiteminfo">
                                                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D" data-wf-conditions="%5B%5D" class="w-commerce-commercecartproductname w-dyn-bind-empty"></div>
                                                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_price_%22%7D%7D%5D" data-wf-conditions="%5B%5D">$0.00</div>
                                                <a href="#" data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" data-wf-conditions="%5B%5D" class="w-inline-block" data-wf-cart-action="remove-item" data-commerce-sku-id="">
                                                    <div class="cart-remove-link">Remove</div>
                                                </a>
                                            </div>
                                            <input type="text" required="" pattern="[0-9]+" data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" data-wf-conditions="%5B%5D" class="w-commerce-commercecartquantity input quantity-input" name="quantity" min="0" data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1"/>
                                        </div>
                                    </div>
                                    <div class="w-commerce-commercecartfooter cart-footer">
                                        <div class="w-commerce-commercecartlineitem">
                                            <div>Subtotal</div>
                                            <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D" data-wf-conditions="%5B%5D" class="w-commerce-commercecartordervalue"></div>
                                        </div>
                                        <div><a href="/checkout" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton button" data-loading-text="Hang Tight...">Continue to Checkout</a></div>
                                    </div>
                                </form>
                                <div class="w-commerce-commercecartemptystate">
                                    <div>No items found.</div>
                                </div>
                                <div style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate form-error">
                                    <div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-general-error="Something went wrong when adding this item to the cart.">Product is not available in this quantity.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>