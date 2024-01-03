@extends('layout.master')
@section('title')
FAQs
@endsection
@section('content')
<div class="header-title ken-burn white" data-parallax="scroll" data-position="top" data-natural-height="650" data-natural-width="1920"  style="background: linear-gradient(to right, rgba(0, 0, 0, 0.367), rgba(0, 0, 0, 0)), url('{{asset('images/bg.jpg')}}'); background-size: cover; background-blend-mode: multiply;background-position: center 30%;">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>Frequently Ask Questions</h1>
            <p>Got A Question? Find Your Answer Here</p>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <div id="general" class="title-base text-left">
                    <hr />
                    <h2>General questions</h2>
                  
                </div>
                <div class="list-group accordion-list" data-time="1000" data-type='accordion'>
                    <div class="list-group-item">
                        <a>Is your company registered? </a>
                        <div class="panel">
                            <div class="inner">
                                Yes, the company is registered.
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a> How do I signup to participate?</a>
                        <div class="panel">
                            <div class="inner">
                                Simply complete our online application form and submit. 
                                Alternately, you may contact us and we will assist you with the various procedures.
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a> When can I start making investments?</a>
                        <div class="panel">
                            <div class="inner">
                                One of our specialists will start planning your investment immediately after reviewing your investment requirements 
                                and receiving your online application.
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a>What happens if my knowledge of the financial markets is limited?</a>
                        <div class="panel">
                            <div class="inner">
                                To help you feel at ease and comprehend everything there is to know about the trade or investment you will be making, 
                                our knowledgeable staff will assist you in every manner they can.
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a> Can I use cryptocurrency to invest? </a>
                        <div class="panel">
                            <div class="inner">
                                All of the main cryptocurrencies are accepted here.
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a>Is there an internship program available?
                        </a>
                        <div class="panel">
                            <div class="inner">
                                Please send us an email if you have any questions regarding future opportunities, 
                                as we only hire a limited number of interns each year. A member of our team will get back to you as soon as possible. 
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a> Is it essential to plan your finances?</a>
                        <div class="panel">
                            <div class="inner">
                                Yes, since it aids in goal-setting, income monitoring, and handling unforeseen financial challenges for both 
                                businesses and people. Long-term stability is guaranteed by it.
                            </div>
                        </div>
                    </div>
           
                </div>
  
            </div>
            <div class="col-md-4 boxed-inverse bg-color-2">
                <h4 class="text-normal">Send Us a Question</h4>
                <p>
                   If you have any inquiries, please feel free to drop us a question below
                </p>
                <form action="#" class="form-box form-ajax" method="post" data-email="federico@pixor.it">
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
                </form>
         
            </div>
        </div>
    </div>
</div>
@endsection