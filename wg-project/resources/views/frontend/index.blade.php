@extends('layout.master')
@section('title')
Home
@endsection
@section('additional_head')
    <!-- Additional styles specific to this page -->
    <link rel="stylesheet" href="{{ asset('HTWF/scripts/jquery.fullPage.css') }}">
@endsection

@section('additional_scripts')
    <!-- Additional scripts specific to this page -->
    <script src="{{ asset('HTWF/scripts/jquery.fullPage.min.js') }}"></script>
@endsection
@section('content')
<div id="fullpage-main">
    <div class="section overlay-container white">
        <div class="background-page overlay-container" style="background-image:url('{{asset('images/home/advisor-01.png')}}');"> </div>
        <div class="container content box-middle text-center">
            <div class="row vertical-row">
                <div class="col-md-4 col-sm-12 text-left">
                    <h4 class="text-light">Financial Planning Service</h4>
                    <h1>Plan Your Financial Future With Us</h1>
                    <hr class="space m" />
                    <p>
                        As a self-governing investment and wealth management firm, we offer customized financial solutions that enhance, expand, and 
                        safeguard our clients' total financial situation. Our clients' welfare comes first, and we go above and beyond to meet and beyond 
                        their expectations in all we do.
                    </p>
                </div>
                <div class="col-md-8 col-sm-12" data-anima="fade-bottom" data-timeline="asc">
                    <div class="row">
                      
                        <div class="col-md-4 boxed-inverse boxed-border white middle-content border-color small-padding anima">
                            <h4 class="text-gray no-margins">Professional Advisor</h4>
                            <p>Our team consists of financial experts who offer knowledgeable guidance in financial.</p>
                            <hr class="space xs" />
                           
                        </div>
                        <div class="col-md-4 boxed-inverse boxed-border white middle-content border-color small-padding anima">
                            <h4 class="text-gray no-margins">Tailored Strategy</h4>
                        <hr/>
                            <p> Financial solutions that are specifically designed to meet your own objectives and desires.</p>
                            <hr class="space xs" />
                         
                        </div>
                        <div class="col-md-4 boxed-inverse boxed-border white middle-content border-color small-padding anima">
                            <h4 class="text-gray no-margins">Client-Centered Approach</h4>
                            <p>We prioritize meeting our clients' goals and satisfaction.</p>
                            <hr class="space xs" />
                         
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Client Example-->
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-3">
                <div class="title-base text-left">
                    <hr />
                    <h2>Records</h2>
                    <p>Track</p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="flexslider carousel outer-navs png-boxed png-over text-center" data-options="numItems:5,minWidth:100,itemMargin:30,controlNav:false,directionNav:true">
                    <ul class="slides">
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_1.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_2.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_3.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_4.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_5.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_6.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_7.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_8.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_1.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box" href="#">
                                <img src="{{asset('images/logos/logo_2.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Client Example-->

<!--Who We Are-->
<div class="section-empty no-paddings-y">
    <div class="container content">
        <div class="row">
            <div class="col-md-5" data-anima="fade-left" data-timeline="asc" data-time="1000" data-timeline-time="400">
                <hr class="space" />
                <h2 class="text-blue anima text-m">Bringing your dreams to realities</h2>
                <h1 class="text-xl text-normal anima">Financial Planning Services</h1>
                <p class="anima text-justify">
                    Greetings. We are a collection of distinguished financial professionals who are all acknowledged as authorities in our domains.
                    Our very advanced trading tactics are driven by our unique blend of human and artificial intelligence (AI).
                </p>
                <hr class="space s" />
                <div class="anima">
                    <a href="#" class="btn btn-lg ">Meet Our Team</a><span class="space"></span>
                    <a href="#" class="btn btn-lg">Join Us Now</a><span class="space"></span>
                   <!-- <a href="#" class="btn btn-lg btn-border hidden-xs">Join Us</a> -->
                </div>
            </div>
            <div class="col-md-7" data-anima="fade-right" data-time="1100">
                <img src="{{asset('images/home/meeting.jpg')}}" alt="" />
            </div>
        </div>
    </div>
</div>
<!--End of Who We Are-->

<!--
<div class="section-bg-color">
    <div class="container content">
        <div class="row">
            <h1>Our Services</h1>
            <div class="col-md-3">
                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                    <a class="img-box lightbox img-scale-up" href="#">
                        <span><img src="../images/gallery/image-1.jpg" alt=""></span>
                    </a>
                    <div class="advs-box-content">
                        <h3>Wealth Management</h3>
                        <p>
                            Interdum iusto pulvinar consequuntur augue optione repellate fugause expeta.
                        </p>
                        <a href="#" class="btn-text">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                    <a class="img-box lightbox img-scale-up" href="#">
                        <span><img src="../images/gallery/image-2.jpg" alt=""></span>
                    </a>
                    <div class="advs-box-content">
                        <h3>Real estate</h3>
                        <p>
                            Interdum iusto pulvinar consequuntur augue optione repellate fugause expeta.
                        </p>
                        <a href="#" class="btn-text">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                    <a class="img-box lightbox img-scale-up" href="#">
                        <span><img src="../images/gallery/image-6.jpg" alt=""></span>
                    </a>
                    <div class="advs-box-content">
                        <h3>Retirement Planning</h3>
                        <p>
                            Interdum iusto pulvinar consequuntur augue optione repellate fugause expeta.
                        </p>
                        <a href="#" class="btn-text">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                    <a class="img-box lightbox img-scale-up" href="#">
                        <span><img src="../images/gallery/image-3.jpg" alt=""></span>
                    </a>
                    <div class="advs-box-content">
                        <h3>Private Equity</h3>
                        <p>
                            Interdum iusto pulvinar consequuntur augue optione repellate fugause expeta.
                        </p>
                        <a href="#" class="btn-text">Read more</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
-->
<div class="section-bg-color bg-color white">
    <div class="container content">
        <div class="row">
            <div class="col-md-3">
                <div class="icon-box counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="fa fa-group text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="counter text-l" data-speed="5000" data-to="17">17</label>
                        <p>Client</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="fa fa-bar-chart text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="counter text-l" data-speed="5000" data-to="100">200</label>
                        <p>Project Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="fa fa-user-md text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="counter text-l" data-speed="5000" data-to="10">12</label>
                        <p>Expert Consultants</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="fa fa-map-o text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="counter text-l" data-speed="5000" data-to="10">12</label>
                        <p>Project in Queue</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <div class="title-base text-left">
                    <hr />
                    <h2>Company Overview</h2>
                    <p>About Us</p>
                </div>
                <a class="img-box lightbox" href="{{asset('images/office.jpg')}}" data-lightbox-anima="fade-left">
                    <img src="{{asset('images/office.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-8 mt-40">
          
                <p class="text-justify">
                    We are known for being forward-thinking, proactive, and reliable. Our goal is to set a new benchmark for financial advising 
                    by offering significant value to our clients. You can challenge the status quo with us.
                </p>
                <p class="text-justify">
                    We have compassion for those who tend to you. Making our staff more capable is the goal of every effort we make to upgrade 
                    our programs, infrastructure, training materials, and technology. It helps and motivates them to advance, enabling them to 
                    customize special solutions for your financial success and consistently exceeding your expectations.

                </p>
            </div>
            <div class="col-md-4 mt-40">
                <p>
                    As a single entity, we evolve. Cohesion and faith foster brilliance and growth. The tight bond between our management, advisers, 
                    and support staff demonstrates this. There are never any dull moments. Feel our method, and let our zeal to move you.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="section-bg-image parallax-window" data-natural-height="650" data-natural-width="1980" data-parallax="scroll" data-image-src="../images/bg-2.jpg">
    <div class="container content">
        <div class="row vertical-row">
            <div class="col-md-8 opacity-8 white">
                <h3>We offer the best financial planner to make your dreams come true.</h3>
                <p class="no-margins">Become one of our highly valued clients and enjoy specialized support, and a partnership focused on your success.</p>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn-border2 btn1 btn-lg nav-justified">Contact us</a>
            </div>
       
        </div>
    </div>
</div>

<div class="section-empty">
    <div class="content container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="title-base text-left">
                    <hr />
                    <h2>Our Services</h2>
                    <p>What We Do?</p>
                </div>
                <p>
                   Offering a range of excellent amenities to help you achieve your objectives
                </p>
                <hr class="space m" />
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="text-s text-bold">
                            A summary of the services we offered is as follows: 
                        </h4>
                        <hr class="space xs" />
                    </div>
                    <div class="col-md-9">
                        <div class="list-group accordion-list">
                            <div class="list-group-item">
                                <a href="#">Wealth Management</a>
                                <div class="panel">
                                    <div class="inner">
                                        We can identify areas for immediate improvement and those you may want to consider modifying in the future by taking a comprehensive look at your financial status.
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <a href="#">Retirement Planning</a>
                                <div class="panel">
                                    <div class="inner">
                                        You can enjoy your golden years by simply sitting back and relaxing if you have the correct retirement plan. Get into investing as soon as possible because you have more time to grow and amass cash the younger you are. Not only that, but by investing early and consistently, you can also benefit from the compounding effect.
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <a href="#">Real Estate</a>
                                <div class="panel">
                                    <div class="inner">
                                        Our staff focuses on tax approaches and keeps you informed at every turn to optimize the tax benefits of your estate. Expert guidance on investments, risk management, tax planning, and enhancing property performance are among the services offered to help clients reach their financial objectives.
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <a href="#">Private Equity</a>
                                <div class="panel">
                                    <div class="inner">
                                        Investing in or purchasing private businesses that are not listed on a public stock exchange is known as private equity, which is an alternative investment class.
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <a href="#">Hedge Funds</a>
                                <div class="panel">
                                    <div class="inner">
                                        Our team is dedicated to ensuring your success and we provide our clients unparalleled prospects through our global network of hedge funds.
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <a href="#">Corporate Service</a>
                                <div class="panel">
                                    <div class="inner">
                                        In order to minimize risks for all parties involved in any merger or acquisition, we provide a wide range of unique solutions to manage financial difficulties.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 boxed-inverse shadow-1 text-left" data-anima="fade-right">
                <h4 class="text-l">Send Us Question</h4>
                <p>Contact us for any inquiries or questions.</p>
                <hr class="space s" />
                <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post" data-email="federico@pixor.it">
                    <div class="row">
                        <div class="col-md-12">
                            <input id="name" name="name" placeholder="name" type="text" class="form-control form-value" required>
                        </div>
                        <hr class="space xs" />
                        <div class="col-md-12">
                            <input id="email" name="email" placeholder="email" type="email" class="form-control form-value" required>
                        </div>
                    </div>
                    <hr class="space xs" />
                    <div class="row">
                        <div class="col-md-12">
                            <input id="phone" name="phone" placeholder="phone" type="text" class="form-control form-value">
                            <hr class="space xs" />
                            <textarea id="messagge" name="messagge"  placeholder="messages" class="form-control form-value" required></textarea>
                            <hr class="space s" />
                            <button class="btn-sm btn" type="submit"><i class="fa-envelope-open-o fa"></i>Send messagge</button>
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


<!--
<div class="section-bg-color">
    <div class="container content">
        <div class="tab-box" data-tab-anima="fade-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">All projects</a></li>
                <li><a href="#">Renovation</a></li>
                <li><a href="#">Interior design</a></li>
                <li><a href="#">Outdoor</a></li>
                <li><a href="#">Architecture</a></li>
                <li><a href="#">Gardening</a></li>
            </ul>
            <div class="panel active">
                <div class="flexslider carousel outer-navs" data-options="minWidth:250,itemMargin:30,controlNav:false">
                    <ul class="slides">
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-5.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        November 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-6.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Tech building</h2>
                                    <p>
                                        April 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-7.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Lighting rooms</h2>
                                    <p>
                                        December 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-8.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Interior garden</h2>
                                    <p>
                                        March 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,controlNav:false" data-trigger="manual">
                    <ul class="slides">
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-5.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        November 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-6.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        April 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-7.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        December 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-8.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        March 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,controlNav:false" data-trigger="manual">
                    <ul class="slides">
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-5.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        November 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-6.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        April 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-7.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        December 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-8.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        March 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,controlNav:false" data-trigger="manual">
                    <ul class="slides">
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-5.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        November 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-6.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        April 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-7.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        December 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-8.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        March 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,controlNav:false" data-trigger="manual">
                    <ul class="slides">
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-5.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        November 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-6.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        April 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-7.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        December 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-8.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        March 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,controlNav:false" data-trigger="manual">
                    <ul class="slides">
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-5.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        November 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-6.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        April 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-7.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        December 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-box adv-img adv-img-half-content text-left">
                                <a href="#" class="img-box img-scale-up">
                                    <img src="../images/gallery/image-8.jpg" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Modern bathroom</h2>
                                    <p>
                                        March 2018
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
-->


<div class="section-bg-image parallax-window white" data-natural-height="650" data-natural-width="1920" data-parallax="scroll" data-image-src="../images/bg-12.jpg">
    <div class="container content">
        <div class="row proporzional-row">
            <div class="col-md-4 col-sm-12 boxed">
                <h2>Our philosophy</h2>
                <p>Considerate. Rigid. Throughout.</p>
                <hr class="space xs" />
           <a href="#" class="btn-text">Join Us</a>
            </div>
            <div class="col-md-8 boxed boxed-border white">
                <p>
                    Our company creates comprehensive, methodical, and well-thought-out customized financial strategies. 
                    We are able to give you a long-term roadmap by thoroughly reviewing your goals and priorities at the start of every collaboration.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-empty">
    <div class="container content">
        <div class="title-base text-left">
            <hr />
            <h2>Testimonial</h2>
            <p>What did our clients say?</p>
        </div>
        <div class="flexslider carousel outer-navs" data-options="numItems:3,itemMargin:15,controlNav:true,directionNav:true">
            <ul class="slides">
                <li>
                    <div class="advs-box niche-box-testimonails-cloud">
                        <p>
                            Partnering with this firm was a pivotal move from me. Their expert guidance and tailored strategies transformed my investment experience.
                        </p>
                        <div class="name-box vertical-row">
                            <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('images/users/people-01.png')}}')"></i>
                            <h5 class="vertical-col subtitle">Federico Schiocchet <span class="subtxt">Senior Manager</span></h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="advs-box niche-box-testimonails-cloud">
                        <p>
                         I heartily urge anyone looking for a reliable partner to help them realize their financial goals to use their services."
                        </p>
                        <div class="name-box vertical-row">
                            <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('images/users/people2-01.png')}}')"></i>
                            <h5 class="vertical-col subtitle">Frenk Mettius <span class="subtxt">Project Manager</span></h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="advs-box niche-box-testimonails-cloud">
                        <p>
                            For me, partnering with this company was a crucial decision. My experience investing was completely changed by their professional advice and customized tactics.
                        </p>
                        <div class="name-box vertical-row">
                            <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('images/users/people3-01.png')}}')"></i>
                            <h5 class="vertical-col subtitle">Albert Ottawia <span class="subtxt">Lecturer</span></h5>
                        </div>
                    </div>
                </li>
             
            </ul>
        </div>
    </div>
</div>
@endsection