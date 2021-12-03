<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="//code.tidio.co/rdxgrevydmdjjcr5ja4kmqisfaaakwiz.js" async></script> 
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
   

</head>

<body>
   
    <div id="app">

        <div id="reychamNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn text-info" onclick="closeNav()"><i class="fa fa-times"></i></a>
                <div class="overlay-content">
                    <a href="http://127.0.0.1:8000/"><h1>CHAMZ</h1></a>
                    <a href="#about" onclick="closeNav()">About</a>
                    <a href="#skills" onclick="closeNav()">Skills</a>
                    <a href="#services" onclick="closeNav()">Services</a>
                    <a href="#portfolio" onclick="closeNav()">Portfolio</a>
                    <a href="#contact" onclick="closeNav()">Contact</a>
                </div>
            </div>
    </div>
           
                <nav class="navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="menu-icon text-info fa fa-bars" onclick="openNav()"> </i>
                    </button>
                </nav>

            <div class="master-head pt-5 ">
                <div class="row justify-content-center pt-4">
                    <img class="profileImage img-fluid mt-4" src="{{url('/images/profile-image.png')}}" alt="Image" alt="">
                    <h1 class="greet text-white text-center mt-4">Hello<b class="text-info font-weight-bold">.</b></h1>
                    <p class="text-white text-center mt-2 mb-4 col-lg-8">My name is Reycham Pana.  Just call me Cham for short. I am a web developer from the Philippines.</p>
                    <div class="row justify-content-center col-lg-8">
                    <a class="headButton col-lg-3 col-md-4 col-sm-6 col-xsm-8 btn btn-info btn-lg text-white mb-2" href="#portfolio">PORTFOLIO</a>
                    <a class=" headButton col-lg-3 col-md-4 col-sm-6 col-xsm-8 btn btn-info btn-lg text-white mb-2 " href="">RESUME <i class="fa fa-cloud-download-alt"></i></a>
                </div>
            </div>
       </div>


                <div class="page-section" id="about"    >
                <div class="container-fluid">          
                    <h1 class="font-weight-bold mb-5 mt-4" id="page-heading">About Me.</h1>            
                        <div class="paragraph row col-lg-11 col-md-11 col-sm-12 col-xsm-12">
                        <p class=" text-left mb-4">
                                I am a multidisciplinary developer with <b class="text-info">dedication</b>, <b  class="text-info">motivation</b>, and <b class="text-info">passion</b> in web and systems development. 
                                I'm lucky I've got a chance to learn and speak some geek languages like <a class="text" style="text-decoration: none; cursor: pointer; color: white;"> <ins class="text-info" data-toggle="tooltip" data-placement="top" title="The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser."> HTML</ins>, <ins class="text-info" data-toggle="tooltip" data-placement="top" title="CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed.">CSS</ins>, <ins class="text-info" data-toggle="tooltip" data-placement="top" title="JavaScript is a scripting or programming language that allows you to implement complex features on web pages."> JavaScript</ins>, 
                                <ins class="text-info" data-toggle="tooltip" data-placement="top" title="PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages."> PHP</ins>, <ins class="text-info" data-toggle="tooltip" data-placement="top" title="Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible."> Java</ins> , and <ins class="text-info" data-toggle="tooltip" data-placement="top" title="Visual Basic, originally called Visual Basic .NET, is a multi-paradigm, object-oriented programming language, implemented on .NET, Mono, and the .NET Framework."> VB.Net</ins> </a> because it enables me to
                                help businessmen and entrepreneurs to level up their presence online by building immersive and beautiful websites and web applications through carefully 
                                crafted code and user-centric designs based on their needs and requirements. I spend a lot of time learning new techniques because there is something new and 
                                exciting to learn every day and falling in love with my job keeps myself motivated. Please do check some of my projects on my Portfolio. <br> <br>  When I'm not coding, 
                                I'm probably catching new episodes of series on Netflix or maybe doing stuff in the kitchen because I also love cooking and of course, eating. <i class="far fa-grin-wink text-info"></i> 
                            </p>
                        </div>
                    </div> 
                </div>

                <div class="page-section" id="skills">
                    <div class="container-fluid">          
                        <h1 class="font-weight-bold mb-4 mt-4" id="page-heading">Areas of Expertise.</h1> 
                            <div class="row">           
                            <div class="col-lg-3 col-md-6 col-sm-12" id="design-software">
                                <div class="jumbotron mt-4">
                                    <h4 class="font-weight-bolder" id="skill-heading">Geek Languages</h4>
                                    <ul class="text" id="skill-set">
                                    <li><i class="fab fa-html5 text-info"></i> HTML5</li>
                                    <li><i class="fab fa-css3-alt text-info"></i> CSS3</li>
                                    <li><i class="fab fa-js text-info"></i> JavaScript</li>
                                    <li><i class="fab fa-php text-info"></i> PHP</li>
                                    <li><i class="fab fa-python text-info"></i> Python</li>
                                    <li><i class="fab fa-java text-info"></i> Java</li>
                                    <li><i class="fa fa-file-code text-info"></i> VB.Net</li>
                                    <li><i class="fa fa-laptop-code text-info"></i> C++</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" id="design-software">
                                <div class="jumbotron mt-4">
                                <h4 class="font-weight-bolder" id="skill-heading">Project Management Software</h4>
                                <ul class="text" id="skill-set">
                                    <li><i class="fab fa-trello text-info"></i> Trello</li>
                                    <li><i class="fab fa-slack text-info"></i> Slack</li>
                                    <li><i class="fa fa-th-list text-info"></i> Asana</li>
                                    <li><i class="fa fa-hands-helping text-info"></i> Teamwork</li>
                                </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" id="design-software">
                                <div class="jumbotron mt-4">
                                <h4 class="font-weight-bolder" id="skill-heading">Content Management System</h4>
                                    <ul class="text" id="skill-set">
                                    <li><i class="fab fa-wordpress text-info"></i> Wordpress</li>
                                    <li><i class="fab fa-joomla text-info"></i> Joomla</li>
                                    <li><i class="fab fa-magento text-info"></i> Magento</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" id="design-software">
                                <div class="jumbotron mt-4">
                                            <h4 class="font-weight-bolder" id="skill-heading">Design Software</h4>
                                    <ul class="text" id="skill-set">
                                    <li><i class="fa fa-pencil-ruler text-info"></i> Sketch</li>
                                    <li><i class="fa fa-pen-nib text-info"></i> Adobe Photoshop</li>
                                    <li><i class="fa fa-user-edit text-info"></i> Adobe Illustrator</li>
                                    </ul>
                                </div>
                            </div>

                            </div>    <!--End row-->
                        </div> 
                    </div>
                <div class="page-section" id="services">
                    <div class="container-fluid">
                            <h1 class="font-weight-bold mb-5 mt-4" id="page-heading">Look What Can I Do.</h1> 
                                    <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                <div class="jumbotron show-hide-web" id="web-dev">      
                                <h3 class=" mb-2 text-left skill-title"> <i class="fas fa-2x fa-laptop-code text-info"></i>
                                <i class="fas fa-globe text-info"></i> Website Development</h3>
                                <p class="text-desc-webdev text-left mb-0" id="services-p">Creating, designing and building websites
                                according to clients' requirements and specifications. Assist and support the upkeep and maintainance of websites and
                                determine user needs by analyzing technical requirements.</p>
                        </div>
                    </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="jumbotron show-hide-graphic" id="show">                         
                                <h3 class=" mb-2 text-left skill-title"><i class="fas fa-2x fa-palette text-info"></i>
                                <i class="fas fa-paint-brush text-info"></i> Graphic Design</h3>
                                <p class="text-desc-graphic text-left mb-0" id="services-p"> Interpreting the brand and marketing needs of clients and branding
                                strategies into design strategies to drive sales/revenue and design visual concepts using graphic design tools and software to convey message
                                to the consumers. </p>
                            </div>
                        </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="jumbotron show-hide-system" id="show">                  
                            <h3 class=" mb-2 text-left skill-title"><i class="fa fa-2x fa-desktop text-info"></i> 
                                <i class="fa fa-1x fa-mobile text-info"></i> Web & System Applications</h3>
                                <p class="text-desc-system text-left mb-0" id="services-p">
                                Develop software solutions by understanding clients' requirements to meet their needs and to evaluate existing applications and performing updates and modifications.
                                Design creative prototypes according to specifications.</p>
                            </div>
                        </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="jumbotron show-hide-ui" id="show">                 
                                <h3 class=" mb-2 text-left skill-title">  <i class="fas fa-2x fa-edit text-info"></i>
                                <i class="fas fa-1x fa-thumbs-up text-info"></i> UI/UX Design</h3>
                                <p class="text-desc-ui text-left mb-0" id="services-p"> Research, investigation, and evaluation 
                                of user requirements to develop an outstanding designs. Identify and troubleshoot UX problems like 
                                responsiveness and conduct layout adjustments based on user feedback.</p>
                            </div>
                        </div>

                            </div> <!--End row-->
                    </div> <!--End Container-->
                </div> <!--End Section-->



                <div class="page-section" id="portfolio">
                   <div class="container-fluid">
                   <h1 class="font-weight-bold mb-5 mt-4" id="page-heading">Portfolio.</h1> 
                   <div class="card-group">
                        <div class="card bg-dark">
                        <a href="https://vimeo.com/643942404" target="_blank">
                            <img class="card-img-top" src="{{url('/images/health-system.png')}}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Health Center Information System</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in.</p>
                            </div>
                            <div class="card-footer">
                            <a  class="text-info" id="linked-profile" href="https://github.com/chammyto/health_center_information_system" target="_blank" style="text-decoration: none;"> <i class="fab fa-2x fa-github text-info"></i> View on Github </a>
                            </div>
                        </a>
                        </div>
                        <div class="card  bg-dark">
                        <a href="http://">
                            <img class="card-img-top" src="{{url('/images/tourismKiosk.png')}}" onmouseover="zoomOut()" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Web-based Tourism Interactive System</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <a  class="text-info" id="linked-profile" href="https://github.com/chammyto/tourism-interactive-kiosk/" target="_blank" style="text-decoration: none;"> <i class="fab fa-2x fa-github text-info mr-2"></i> View on Github </a>
                            </div>
                        </a>
                        </div>
                        <div class="card  bg-dark">
                            <a href="">
                            <img class="card-img-top" src="{{url('/images/website_portfolio.png')}}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Portfolio Blog Website</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional.</p>
                            </div>
                            <div class="card-footer">
                            <a  class="text-info" id="linked-profile" href="https://github.com/chammyto/porfolio" target="_blank" style="text-decoration: none;"> <i class="fab fa-2x fa-github text-info mr-2"></i> View on Github </a>
                            </div>
                        </div>
                        </a>
                        </div>
                   
                     </div> <!--End of container-->
                </div>

                <div class="page-section" id="contact">
                <div class="container-fluid">
                <h1 class="col-md-12 font-weight-bold"  id="page-heading">Let's Talk.</h1>
                    <div class="row justify-content-center">
                        <div class="paragraph col-md-6 py-5">
                        <h3 class="text-left ml-3 mb-3 font-weight-bolder action">and build something great<b class="text-info font-weight-bolder">.</b></h3>
                        <p class="text-left col-lg-12 mb-5" id="contact-p">Have you finally decided and ready to start your next project with me? Give me a call or send me an email and I will get back to you as soon as possible!</p>     
                        <h4 class=" text-left action">Call Me<b class="text-info">.</b></h4>
                        <p class="text-left col-lg-12 text-info"> <i class="fa fa-mobile"></i> +63(949-450-2350)</p>   
                        <h4 class="text-left action mb-4">Follow Me<b class="text-info">.</b></h4>
                        
                        <a class="fab fa-2x fa-facebook text-info" id="fb-profile" href="https://www.facebook.com/chamito.0725" target="_blank" style="text-decoration: none;"></a>                  
                        <a class="fab fa-2x fa-instagram text-info ml-4" id="ig-profile" href="https://www.instagram.com/chamchoiii" target="_blank" style="text-decoration: none;" ></a>
                        <a class="fab fa-2x fa-twitter text-info ml-4" id="linked-profile" href="https://www.twitter.com/chamzchoiiii" target="_blank" style="text-decoration: none;"> </a>                
                        <a class="fab fa-2x fa-linkedin text-info ml-4" id="linked-profile" href="https://www.linkedin.com/in/reycham-pana/" target="_blank" style="text-decoration: none;"> </a>   
                        <a class="fab fa-2x fa-github text-info ml-4" id="linked-profile" href="https://www.github.com/chammyto/" target="_blank" style="text-decoration: none;"> </a>                 
                    </div> <!--end row-->
                        <div class="col-md-6 py-5">
                                <h4 class="text-center mb-4 action"><i class="fa fa-envelope text-info ml-1"></i> Email Me<b class="text-info">.</b></h4>
                                    <form class="email-me my-4 pl-3 pr-3" action="https://chamito.epizy.com"  onsubmit="onsubmitFunction()" method="post">
                                        <div class="form-group">
                                        <input class="form-control text-white" id="email" type="email" oninvalid="oninvalidFunction()" onfocus="onfocusFunction(this)" onfocusout="onfocusoutFunction(this)" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                        <input class="form-control text-white" id="phone" onfocus="onfocusFunction(this)" onfocusout="onfocusoutFunction(this)" type="tel" placeholder="Phone" required="required">
                                        </div>
                                        <div class="form-group">
                                        <textarea class="form-control text-white" id="message" onfocus="onfocusFunction(this)" onfocusout="onfocusoutFunction(this)" type="text" placeholder="Message" rows="4" required="required"></textarea>
                                    </div>
                                <button id="sendMessageButton" class="btn btn-info btn-lg col-md-4 mt-4" data-text="Send Message" type="submit">Send</button>
                            </form>            
                        </div>
                    </div>
                    </div>
                </div>    

</div> <!--Closing of App-->

     
</body>
</html>
