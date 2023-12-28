@extends('layout.master')
@section('title','Home')

@section('content')

<!--<nav id="fullpage-menu" class="fullpage-menu menu-dots white">
    <ul>
        <li><a data-toggle="tooltip" data-placement="left" title="Home"></a></li>
        <li><a data-toggle="tooltip" data-placement="left" title="Galler"></a></li>
        <li><a data-toggle="tooltip" data-placement="left" title="Skills"></a></li>
        <li><a data-toggle="tooltip" data-placement="left" title="Map"></a></li>
        <li><a data-toggle="tooltip" data-placement="left" title="Services"></a></li>
    </ul>
</nav>
-->
<div id="fullpage-main">
    <div class="section overlay-container white">
        <div class="background-page overlay-container" style="background-image:url('{{asset('images/header-01.jpg')}}');"> </div>
        <div class="container content box-middle text-center">
            <div class="row vertical-row">
                <div class="col-md-4 col-sm-12 text-left" >
                    <h4 class="text-light">Financial Services . Our Expert</h4>
                    <h1>Invest in Professional Financial Services to Improve Your Financial Future</h1>
                    <hr class="space m" />
                    <p style="text-align: justify; text-justify: inter-word;">
                        As a self-governing investment and wealth management firm, we offer customized financial solutions that enhance, expand, 
                        and safeguard our clients' total financial situation. Our clients' welfare is our main priority, and we go above and beyond 
                        to meet and beyond their expectations in all that we do.
                    </p>
                </div>
                <div class="col-md-8 col-sm-12" data-anima="fade-bottom" data-timeline="asc">
                    <div class="row">
                        <div class="col-md-4 boxed-inverse boxed-border white middle-content border-color small-padding anima">
                            <h4 class="text-light no-margins">Accessibility</h4>
                            <p>Our technological expertise allows us to take full advantage of opportunities to protect and increase your wealth. We have made our portfolios as easily accessible as we can.</p>
                            <hr class="space xs" />
                            <a href="#" class="btn-text">Read more</a>
                        </div>
                        <div class="col-md-4 boxed-inverse boxed-border white middle-content border-color small-padding anima">
                            <h4 class="text-color no-margins">Solutions</h4>
                            <p>Bortolo ipsum dolor sit amet consectetur adip iscing ercipiscing elitsed do eius itation arco.</p>
                            <hr class="space xs" />
                            <a href="#" class="btn-text">Read more</a>
                        </div>
                        <div class="col-md-4 boxed-inverse boxed-border white middle-content border-color small-padding anima">
                            <h4 class="text-color no-margins">Benefits</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adip iscing ercipiscing elitsed do eiusitation ullamco.</p>
                            <hr class="space xs" />
                            <a href="#" class="btn-text">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section overlay-container">
        <div class="background-page overlay-container" style="background-image:url('../images/hd-2.jpg');"> </div>
        <div class="container content box-middle">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Gallery</h2>
                        <p>Photos and videos</p>
                    </div>
                    <hr class="space s" />
                    <p class="text-color">
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ irure dolor in reprehende.
                    </p>
                    <hr class="space s" />
                    <a href="#" class="btn btn-lg">View details</a><span class="space"></span>
                    <a href="#" class="btn btn-lg btn-border">Contacts</a>
                </div>
                <div class="col-md-8 col-sm-12">
                    <hr class="space visible-sm" />
                    <div class="flexslider carousel nav-top-right" data-options="minWidth:200,itemMargin:15,numItems:3,controlNav:true,directionNav:false">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox img-border" href="../images/gallery/long-1.jpg" data-lightbox-anima="fade-right">
                                    <img src="../images/gallery/long-1.jpg" alt="">
                                </a>
                                <hr class="space s" />
                                <p class="text-color text-s">Lore sito ameto consecteture.</p>
                                <p class="text-normal text-xs">Lorem ipsum dolor sit amet consecteture.</p>
                            </li>
                            <li>
                                <a class="img-box lightbox img-border" href="../images/gallery/long-2.jpg" data-lightbox-anima="fade-right">
                                    <img src="../images/gallery/long-2.jpg" alt="">
                                </a>
                                <hr class="space s" />
                                <p class="text-color text-s">Lore sito ameto consecteture.</p>
                                <p class="text-normal text-xs">Lorem ipsum dolor sit amet consecteture.</p>
                            </li>
                            <li>
                                <a class="img-box lightbox img-border" href="../images/gallery/long-3.jpg" data-lightbox-anima="fade-right">
                                    <img src="../images/gallery/long-3.jpg" alt="">
                                </a>
                                <hr class="space s" />
                                <p class="text-color text-s">Lore sito ameto consecteture.</p>
                                <p class="text-normal text-xs">Lorem ipsum dolor sit amet consecteture.</p>
                            </li>
                            <li>
                                <a class="img-box lightbox img-border" href="../images/gallery/long-1.jpg" data-lightbox-anima="fade-right">
                                    <img src="../images/gallery/long-1.jpg" alt="">
                                </a>
                                <hr class="space s" />
                                <p class="text-color text-s">Lore sito ameto consecteture.</p>
                                <p class="text-normal text-xs">Lorem ipsum dolor sit amet consecteture.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section overlay-container white">
        <div class="background-page overlay-container" style="background-image:url('../images/hd-3.jpg');"> </div>
        <div class="container content box-middle">
            <div class="row proporzional-row">
                <div class="col-md-4 col-sm-12">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Core skills</h2>
                        <p>Top team skills</p>
                    </div>
                    <hr class="space m" />
                    <h3 class="text-m">Metal roofing</h3>
                    <div class="progress">
                        <div class="progress-bar" data-progress="90">
                            <span><span class="counter" data-to="90">90</span> %</span>
                        </div>
                    </div>
                    <hr class="space s" />
                    <h3 class="text-m">Financial consulting</h3>
                    <div class="progress">
                        <div class="progress-bar" data-progress="75">
                            <span><span class="counter" data-to="75">75</span> %</span>
                        </div>
                    </div>
                    <hr class="space s" />
                    <h3 class="text-m">Outdoor gardens</h3>
                    <div class="progress">
                        <div class="progress-bar" data-progress="100">
                            <span><span class="counter" data-to="100">100</span> %</span>
                        </div>
                    </div>
                    <hr class="space m" />
                    <a href="#" class="btn-text">Check all out skills</a>
                    <hr class="space visible-sm" />
                </div>
                <div class="col-md-8 boxed white">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fa-ul text-light">
                                <li><i class="fa-li fa fa-map-marker"></i> 184 Main Collins Street, 8007</li>
                                <li><i class="fa-li fa fa-calendar "></i> Mon - Sat 8.00 - 18.00</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h2>Contact us now</h2>
                        </div>
                    </div>
                    <hr class="space m" />
                    <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post" data-email="federico@pixor.it">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="name" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="email" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="messagge" name="messagge" placeholder="Write your message" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-sm btn" type="submit"><i class="fa fa-envelope-o"></i>Send messagge</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-map box-middle-container box-transparent">
        <div class="google-map" data-coords="40.741895,-73.989308" data-zoom="15" data-marker-pos="col-md-6-right" data-marker-pos-top="110" data-skin="gray" data-marker="http://templates.framework-y.com/yellowbusiness/images/marker-map-big.png"></div>
        <div class="overlaybox overlaybox-side">
            <div class="container content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 overlaybox-inner box-middle">
                        <h2 class="text-color text-normal">Contact.</h2>
                        <h2 class="text-normal">Collins Street<br />8007, San Francisco<br />United states</h2>
                        <hr class="space m" />
                        <p class="text-normal">
                            1-800-405-377<br />info@company.com<br />Mon - Sat: 8.00 - 19:00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section overlay-container">
        <div class="background-page overlay-container" style="background-image:url('../images/hd-4.jpg');"> </div>
        <div class="container content box-middle">
            <div class="row proporzional-row">
                <div class="col-md-3 boxed-inverse boxed-border white middle-content text-left">
                    <p>Auctor orci proin consequat magna natoque mattis nostra eiusmod esse lunga laboriosam luctus pulvinar tenetur fugito similique.</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <a class="img-box lightbox" href="../images/gallery/image-14.jpg" data-lightbox-anima="fade-right">
                        <img src="../images/image-1.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 boxed white middle-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.</p>
                </div>
                <div class="col-md-3 boxed-inverse middle-content text-left">
                    <h4>Services</h4>
                    <h2 class="text-color">Awesome</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipo.</p>
                </div>
            </div>
            <hr class="space s" />
            <hr />
            <hr class="space s" />
            <div class="row white" data-fullpage-anima="fade-left">
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="fa fa-heartbeat text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Passion</label>
                            <p class="text-s"> Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="fa fa-globe text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Dediction</label>
                            <p class="text-s"> Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="fa fa-flask text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Research</label>
                            <p class="text-s"> Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="fa fa-life-ring text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Safety</label>
                            <p class="text-s"> Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection