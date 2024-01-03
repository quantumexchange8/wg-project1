@extends('layout.master')
@section('title')
About Us
@endsection
@section('content')
<div class="header-title ken-burn white" data-parallax="scroll" data-position="top" data-natural-height="650" data-natural-width="1920"  style="background: linear-gradient(to right, rgba(0, 0, 0, 0.367), rgba(0, 0, 0, 0)), url('{{asset('images/bg.jpg')}}'); background-size: cover; background-blend-mode: multiply;background-position: center 30%;">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>About us</h1>
            <p>Empowering the Futures : Manages Your Finances with Our Assistance</p>
        </div>
    </div>
</div>

<div class="section-empty">
    <div class="container content">
        <div class="row vertical-row">
            <div class="col-md-4">
                <div class="title-base text-left">
                    <hr />
                    <h2>About Our Company</h2>
                    <p>Who We are?</p>
                </div>
                <p class="text-normal text-justify">
                    Over the past few years, our business has grown into the well-known wealth management and investing firm that it is today. 
                    Our location in Asia, the epicenter of the world's fastest-growing private investor population, puts us in a prime position to cater to the financial demands of our global client base.
                </p>
                <hr class="space xs" />
            
            </div>
            <div class="col-md-8 text-justify">
                <p>We provide tailored financial solutions to safeguard, enhance, and better our clients' overall financial situation. Our first priority is our clients' well-being, and we go above and beyond to
                    meet and beyond their expectations in all we do.
                 </p>
                <p>
                    In both rising and falling market conditions, our strong investment management expertise and independent, integrated financial solutions 
                    generate healthy returns. We provide families and individuals with the option of discretionary or consent-based portfolios in order to help 
                    them accumulate wealth or generate a steady income stream from their existing assets.

                </p>
                <p>
                    We think that developing close personal relationships with our clients is important since it allows us to share in the good times and
                     collaborate closely to get over obstacles in our path to success. Transparency, idea sharing, and mutual respect serve as the solid pillars around which our relationships with clients are constructed.
                </p>
            </div>
           
        </div>
       <hr class="space xs">
        <div class="row">
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                    <i class="fa fa-check-square icon circle anima"></i>
                    <h3>Our Mission</h3>
                    <p>
                        To improve the efficiency of financial services in order to meet the changing needs of consumers and businesses.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                    <i class="fa fa-globe icon circle anima"></i>
                    <h3>Our Vission</h3>
                    <p>
                        To be acknowledged as a top financial institution for our steadfast dedication to excellence and transparency.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                    <i class="fa fa-users icon circle anima"></i>
                    <h3>Our Values</h3>
                    <p>
                        Place our clients first: our empathy drives us to use both qualitative and quantitative data to enthrall and thrill our clients.
                    </p>
                </div>
            </div>
        </div>
        <div class="container content">
   
            <hr class="space" />
            <div class="row proporzional-row">
                <div class="col-md-3 col-sm-6">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Expert Teams</h2>
                        <p>Meet Our Teams</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Jack Christian</h2>
                            <h4>Founder and ceo</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people2-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Zarata Afratto</h2>
                            <h4>Language expert</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people3-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Sarah Partison</h2>
                            <h4>Co-founder</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people4-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Lee Chen Tol</h2>
                            <h4>Marketing expert</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
      
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people5-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>James</h2>
                            <h4>Financial Advisor/Planner</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people6-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Sophia Masterson</h2>
                            <h4>Wealth Manager</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people7-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Jennifer</h2>
                            <h4>Investment Analyst</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="{{asset('images/users/people8-01.png')}}" alt="" />
                        </a>
                        <div class="content-box">
                            <h2>Hsu Taiyu</h2>
                            <h4>Retirement Planner</h4>
                            <hr class="e" />
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-bg-color">
    <div class="container content">
        <div class="row vertical-row">
            <div class="col-md-8 opacity-8">
                <h3>We offer the best financial planner to make your dreams come true.</h3>
                <p class="no-margins">Become one of our highly valued clients and enjoy specialized support, and a partnership focused on your success.</p>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-lg nav-justified">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-3">
                <div class="title-base text-left">
                    <hr />
                    <h2>Our Approach</h2>
                    <p>What We Provide?</p>
                </div>
            </div>
       
        </div>
        <hr class="space m" />
        <div class="row box-steps" data-anima="fade-left" data-timeline="asc">
            <div class="step-item col-md-4 anima text-justify">
                <span class="step-number">1</span>
                <h3>Creating Investment Equilibrium</h3>
                <p>
                    Our knowledgeable staff will develop a successful plan just for you in order to help you preserve portfolio balance, minimize risk, and maximize profits. Sustained prosperity necessitates not just astute investments but also persistent administration and close observation of global market, economic, and industry trends.
                </p>
            </div>
            <div class="step-item col-md-4 anima text-justify">
                <span class="step-number">2</span>
                <h3>Developing Markets</h3>
                <p>
                    We concentrate on developing markets and the potential for maximizing capital value while identifying achievable potential. By conducting thorough research and analysis on market trends, economic conditions, and investment possibilities, we reduce the risk involved in this strategy and provide our clients with low-risk, high-growth investment vehicles.
                </p>
            </div>
            <div class="step-item col-md-4 anima text-justify">
                <span class="step-number">3</span>
                <h3>Comprehensive Analysis</h3>
                <p>
                    Our sector-leading research lies at the heart of both our performance and our clients' success. By utilizing our extensive worldwide network of information, astute data interpretation, accurate predictive modeling, and meticulous analysis, we arrive at a comprehensive knowledge that guides our investing strategies. Our highly qualified team uses our analysis and research to give clients the knowledge they need to make the best decisions.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection