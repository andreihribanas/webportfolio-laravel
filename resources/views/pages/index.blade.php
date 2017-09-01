@extends('layouts.main')

@section('title', ' | Home page')

@section('stylesheets')

@endsection

@section('content')

        <!-- Header Jumbotron -->
          <div class="jumbotron jumbotron-fluid img-fluid" id="jumbotron-top">
                  <p class="nameText"> Constantin Andrei Hribanas </p>
                  <p class="subText"> Nothing is impossible! </p>
          </div>

            <div class="container disclaimer">
              <div class="alert alert-info" role="alert">
                <strong>
                  <p> You might encounter some responsiveness issues if the page is viewed on mobile devices, work is being undertaken to ensure every display error is corrected. </p>
                  <p> If you encounter a bug while navigating on the website, please report it using the contact form or at andrei.hribanas@gmail.com . Much apreciated. </p>
                 </strong>
              </div>
            </div>

        <!-- Back to top button -->
        <a href="#" class="top"><i class="fa fa-chevron-circle-up fa-5x" aria-hidden="true"></i></a>

      <!---   QUOTE   ------------------------------------------------------->
          <section id="quote" class="grey-background">
              <div class="container">
                  <div class="row text-center">
                      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                          <blockquote class="blockquote ">
                          <!--    <p class="mb-0"> Try not to become a man of success, but rather try to become a man of value. </p>  Albert Einnstein
                              <p class="mb-0"> Nothing is impossible, the word itself says 'I'm possible'! Audrey Hepburn</p>-->
                              <p class="mb-0" id="quote-text"> Give a man a fish and you feed him for a day; teach a man to fish and you feed him for a lifetime.</p>

                               <footer class="blockquote-footer"> Chinese proverb </footer>
                          </blockquote>
                      </div>
                  </div>
              </div>
          </section>


            <!--  ABOUT SECTION    ------------------------------------------------------->
            <section id="about">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <br> <h1 class="section-heading"> About me</h1>
                            <h3 class="section-subheading text-muted"> Fun facts and hobbies </h3> <br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="https://www.andreihribanas.co.uk/images/personal-min.jpg" alt="The image could not be loaded ..." class="img-circle img-responsive personal-image">
                        </div>

                        <div class="col-md-8 offset-md-1 text-center">
                            <h4 class="section-subheading text-justify" id="about-description">
                                I am a Computer Science graduate from City University London, looking forward to kickstart my career in the IT industry and develop myself in a true professional. <br><br>
                                My interest lies primarily in the Web development, trying to acquire and develop new coding skills at any time, on the path to gain a Full Stack Developer knowledge. Currently working with HTML, CSS, JavaScript & jQuery,
                                  Bootstrap and PHP with Laravel framework. <br><br>
                                My short term goal is to enrich my "young" portfolio by tackling a different range of projects that calls for a different skill set. <br><br>

                                More a backend developer at heart rather than a web designer, but I do not pass the opportunity to create something beautiful and pleasing to the eye. Currently looking to improve my Front-End skills by gaining knowledge in
                                JavaScript frameworks such as Angular and VUE.
                                <br><br>

                                Find out more below!
                            </h4>

                        </div>
                    </div>


                    <br> <br> <br>


                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                            <div id="card1" class="fun-facts-cards text-center">
                                <div class="front">  </div>
                                <div class="back fun-facts-format"> Beside the software side, also have an interest in the computer hardware - evidence lies in building computers from scratch. <br> Check out the latest and current <a href="#" id="build"> build! </a></div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                            <div id="card2" class="fun-facts-cards text-center">
                                <div class="front">  </div>
                                <div class="back fun-facts-format"> I played football for over a decade, joined the local club when I was 6 years old. Played professionally for the youth team before commiting to studies. </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                            <div id="card3" class="fun-facts-cards text-center">
                                <div class="front"> </div>
                                <div class="back fun-facts-format"> Big fan of the SciFi genre, love watching movies and TV shows especially those ones that can be included in this category and not only. <p> May the Force be with me!</p> </div>
                            </div>
                        </div>

                    </div>

                <div class="row ">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div id="card4" class="fun-facts-cards text-center">
                            <div class="front"> </div>
                            <div class="back fun-facts-format"> I have completed a spell of couple years working in Accounting & Finance, before dedicating completely to my true professional interest - the IT industry. </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div id="card5" class="fun-facts-cards text-center">
                            <div class="front">  </div>
                            <div class="back fun-facts-format"> I avoid performing any activity that involves heights since I manifest a very acute fear. <br> Scare of heights: really?! Unfortunately yes ! </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div id="card6" class="fun-facts-cards text-center">
                            <div class="front"> </div>
                            <div class="back fun-facts-format"> Not a fan of the social media, I am more the type of person that appreciates privacy. However, I manage a LinkedIn account for the professional contacts.  </div>
                        </div>
                    </div>
                </div>

              </div>
            </section>

            <!---  SERVICES SECTION    ------------------------------------------------------->
                    <section id="services" class="grey-background">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                   <br> <h1 class="section-heading"> Services </h1>
                                    <h3 class="section-subheading text-muted"> Services currently offering   </h3> <br><br>
                                </div>
                            </div>

                             <div class="row text-center">
                                    <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-puzzle-piece fa-stack-1x fa-inverse"></i>

                                        </span>

                                        <h4 class="service-heading"> Custom web apps </h4>
                                        <p class="text-muted text-justify"> Full-cycle software development services designed to respond to individual clients needs generating extra value for your business. Build custom applications that grows with the clients. </p>
                                    </div>

                                  <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                                        </span>
                                        <h4 class="service-heading">Responsive Design</h4>
                                        <p class="text-muted text-justify"> My mission is to ensure your web application displays adequately on every device: desktop, phone or tablet in order to achieve an optimal viewing experience and ease navigation.</p>
                                    </div>

                                    <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                                        </span>

                                        <h4 class="service-heading">E-Commerce</h4>
                                        <p class="text-muted text-justify"> Build a web application to reduce hassle with your commercial activity, make it easier to sell your products or services and process payments for your business. </p>
                                    </div>

                            </div>

                             <div class="row text-center">

                                    <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                                        </span>

                                        <h4 class="service-heading">Web Security</h4>
                                        <p class="text-muted text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                                    </div>


                                    <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                                        </span>

                                        <h4 class="service-heading"> Training </h4>
                                        <p class="text-muted text-justify"> The client will always get the most out of their website by offering them a detailed briefing of all functionality. A client should be
                                            the experts of their own tool in order to boost the company productivity. </p>
                                    </div>


                                      <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-wrench fa-stack-1x fa-inverse" ></i>
                                        </span>

                                        <h4 class="service-heading"> Troubleshooting and support </h4>
                                        <p class="text-muted text-justify"> Wether your computer is failing or require software support (not necessarilly related to your website) do not hesitate to contact to receive a consultation.</p>
                                    </div>

                                </div>

                            <!--
                             <div class="row text-center">
                                     <div class="col-md-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x fa-inverse"></i>
                                        </span>

                                        <h4 class="service-heading"> Requirements analysis </h4>
                                        <p class="text-muted"> Always client focused, listen in great depth all the details and provide advice for best action course. </p>
                                    </div>

                                   <div class="col-md-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
                                        </span>

                                        <h4 class="service-heading"> Deployment </h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                                    </div>

                                    <div class="col-md-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                                        </span>

                                        <h4 class="service-heading"> Database design </h4>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                                    </div>
                            </div>    -->


                        </div>
                    </section>





                    <!---   SKILLS SECTION    ------------------------------------------------------->
                    <div class="container">
                        <section id="skills" >
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                   <br> <h1 class="section-heading"> Skills </h1>
                                    <h3 class="section-subheading text-muted"> Main skills and future aspirations </h3> <br><br>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> <strong> Programming languages, libraries, frameworks and techniques </strong></h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Java SE </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> PHP </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> PHP Laravel </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> JavaScript </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> JQuery</li>
                                            <li> <i class="fa-li fa fa-check-square"></i> JSON </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> AJAX </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Parsley.js (validation) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> TinyMCE (WYSIWYG editor) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Stripe.js (payments processor) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> HTML </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> CSS </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Bootstrap 4</li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Wordpress </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> MySQL </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> <strong>Development tools</strong> </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> NetBeans IDE </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Eclipse IDE </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Visual Studio (casual) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Notepad++ </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Brackets </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> SublimeText </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Atom </li>

                                        </ul>
                                    </h6>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> <strong>DevOps tools</strong> </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> XAMPP (local development) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> FileZilla </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Amazon Web Services (EC2 instances, ElasticBeanStalk deployment, AWS RDS, Route 53 for DNS configuration, Certificate Manager to import SSL) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Google Cloud tools </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Microsoft Azure </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Virtual Box </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> VMWare Workstation </li>
                                            <li> <i class="fa-li fa fa-square"></i> Docker </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Git / Github </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>
{{--
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"><strong> Operating systems</strong> </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Windows 7 / 8 / 10 </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Linux / Unix (basic commands) </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div> --}}

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> <strong>To learn stack </strong> </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-square"></i> Node.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> Angular.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> VUE.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> d3.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> Google Chart API </li>
                                            <li> <i class="fa-li fa fa-square"></i> Python </li>
                                            <li> <i class="fa-li fa fa-square"></i> Django </li>
                                            <li> <i class="fa-li fa fa-square"></i> NoSQL databases/MongoDB </li>
                                            <li> <i class="fa-li fa fa-square"></i> Windows Server administration / Active Directory / Hyper-V </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>
                        </section>
                        <!-- <section id="skills" >
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                   <br> <h1 class="section-heading"> Skills </h1>
                                    <h3 class="section-subheading text-muted"> Main skills and future aspirations </h3> <br><br>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> <strong>Programming and scripting languages </strong></h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Java SE </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> PHP </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> JavaScript </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Web development and frameworks </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> HTML </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> CSS </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Bootstrap </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Wordpress </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> JQuery</li>
                                            <li> <i class="fa-li fa fa-check-square"></i> PHP Laravel </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>


                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Database handling </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> MySQL </li>

                                        </ul>
                                    </h6>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Text editors and IDE used </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> NetBeans IDE (primarily used) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Eclipse IDE </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Visual Studio (casual) </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Notepad++ </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Brackets </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> SublimeText </li>

                                        </ul>
                                    </h6>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Deployment tools </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> XAMPP server </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> FileZilla </li>

                                        </ul>
                                    </h6>
                                </div>
                            </div>

                           <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Versioning tools </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Git / Github </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>

                           <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Cloud technologies </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Google Cloud tools / Google Developers Console </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Microsoft Azure </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>


                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Operating systems </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Windows 7 / 8 / 10 </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Linux / Unix (basic commands) </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> Virtualization and administration </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-check-square"></i> Virtual Box </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> VMWare Workstation </li>
                                            <li> <i class="fa-li fa fa-check-square"></i> Docker </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>


                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6 class="skills-format"> To learn stack </h6>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="skills-format">
                                        <ul class="fa-ul">
                                            <li> <i class="fa-li fa fa-square"></i> JSON </li>
                                            <li> <i class="fa-li fa fa-square"></i> AJAX </li>
                                            <li> <i class="fa-li fa fa-square"></i> Node.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> Angular.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> d3.js </li>
                                            <li> <i class="fa-li fa fa-square"></i> Google Chart API </li>
                                            <li> <i class="fa-li fa fa-square"></i> Python </li>
                                            <li> <i class="fa-li fa fa-square"></i> Django </li>
                                            <li> <i class="fa-li fa fa-square"></i> NoSQL databases/MongoDB </li>
                                            <li> <i class="fa-li fa fa-square"></i> Windows Server / Active Directory / Hyper-V </li>
                                            <li> <i class="fa-li fa fa-square"></i> Amazon Web Services </li>
                                        </ul>
                                    </h6>
                                </div>
                            </div>
                        </section> -->
                    </div>




                    <!--------------------------------------------   EDUCATION SECTION    ------------------------------------------------------->

                    <section id="education" class="grey-background">

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <br> <h1 class="section-heading "> Education </h1>
                                    <h3 class="section-subheading text-muted"> Details of all study and qualifications undertaken </h3> <br><br>
                                </div>
                            </div>


                            <div class="row">
                                <div class="container">

                                   <ul class="timeline">

                                       <li class="timeline-inverted">
                                           <div class="timeline-badge warning"><i class="fa fa-university" aria-hidden="true"></i></div>
                                           <div class="timeline-panel">
                                               <div class="timeline-heading">
                                                   <h2 class="timeline-title"> freeCodeCamp </h2>
                                                   <p class="text-muted">
                                                       <br> Road to Full Stack Developer

                                                        <br> 2016 - 2017

                                                       <br><br> <strong>  ... IN PROGRESS ... </strong>

                                                   </p><br>
                                               </div>
                                               <div class="timeline-body">
                                                    <h4> Modules covered </h4> <br>

                                                    <ul class="modules">
                                                        <li> <strong> Front End Development Certification  </strong> </li>
                                                            <ul>
                                                                <li> HTML5 and CSS  </li>
                                                                <li> Responsive Design with Bootstrap  </li>
                                                                <li> JavaScript  </li>
                                                                <li> Object Orientated and Functional Programming  </li>
                                                                <li> jQuery  </li>
                                                                <li> Algorithm Scripting  </li>
                                                                <li> JSON and Ajax  </li>
                                                            </ul>

                                                        <br>

                                                        <li> <strong> Data Visualization Certification  </strong>  </li>
                                                            <ul>
                                                                <li> Sass </li>
                                                                <li> React </li>
                                                                <li> D3 </li>
                                                            </ul>

                                                        <br>

                                                        <li> <strong> Back End Development Certification  </strong>  </li>
                                                            <ul>
                                                                <li> Automated Testing and Debugging </li>
                                                                <li> Node.js and Express.js </li>
                                                                <li> Git </li>
                                                                <li> Advanced API </li>
                                                            </ul>

                                                        <br>

                                                        <li> <strong> Full Stack Development Certification  </strong>  </li>
                                                            <ul>
                                                                <li> Nonprofit projects </li>
                                                            </ul>

                                                   </ul>
                                               </div>
                                           </div>
                                       </li>




                                       <li class="timeline">
                                           <div class="timeline-badge info"><i class="fa fa-university" aria-hidden="true"></i></div>
                                           <div class="timeline-panel">
                                               <div class="timeline-heading">
                                                   <h2 class="timeline-title"> City University London </h2>
                                                   <p class="text-muted">  Bachelor of Science (BSc)
                                                       <br> Computer Science with Software Engineering
                                                       <br> Degree class: 2:1 (Second upper)
                                                       <br> London, Uk - 2013 – 2016 <br>
                                                        <br>'Focuses on developing large complex, reliable, software systems'. </p><br>
                                               </div>
                                               <div class="timeline-body">
                                                   <h4> Modules covered </h4> <br>

                                                   <ul class="modules">
                                                        <li> <strong> Part 1 </strong> </li>
                                                            <ul class="modules">
                                                                <li>	Programming in Java	</li>
                                                                <li>	Systems Architecture	</li>
                                                                <li>	Mathematics for Computing	</li>
                                                                <li>	Business Systems	</li>
                                                                <li>	Computation and Reasoning	</li>
                                                                <li>	Software Engineering 	</li>
                                                            </ul>
                                                        <br>

                                                        <li> <strong> Part 2 </strong> </li>
                                                           <ul>
                                                                <li>	Programming in C++   </li>
                                                                <li>	Object Oriented Analysis and Design  </li>
                                                                <li>	Data Structures and Algorithms  </li>
                                                                <li>	Professional Development in IT </li>
                                                                <li>	Networks and Operating Systems </li>
                                                                <li>	Language Processors </li>
                                                            </ul>
                                                       <br>

                                                       <li> <strong> Part 3 </strong> </li>
                                                            <ul>
                                                                <li>	Functional Programming;	</li>
                                                                <li>	IT Security;	</li>
                                                                <li>	Theory of Computation;	 </li>
                                                                <li>	Advanced Databases	  </li>
                                                                <li>	Cloud Computing	</li>
                                                                <li>	Individual Dissertation Project    </li>
                                                            </ul>
                                                   </ul>
                                               </div>
                                           </div>
                                       </li>


                                       <li class="timeline-inverted">
                                           <div class="timeline-badge danger"><i class="fa fa-university" aria-hidden="true"></i></div>
                                           <div class="timeline-panel">
                                               <div class="timeline-heading">
                                                   <h2 class="timeline-title"> IELTS diploma (Internationational English Language Testing System)  </h2>
                                                   <p class="text-muted">  Academic examination
                                                        <br> Overall band score 7 out of maximum 9
                                                        <br> February 2013

                                                   </p><br>
                                               </div>
                                               <div class="timeline-body">
                                                    <h4> Modules covered </h4> <br>

                                                    <ul class="modules">
                                                                <li> Listening  </li>
                                                                <li> Reading </li>
                                                                <li> Writing  </li>
                                                                <li> Speaking  </li>

                                                        <br>
                                                   </ul>
                                               </div>
                                           </div>
                                       </li>



                                       <li class="timeline">
                                           <div class="timeline-badge warning"><i class="fa fa-university" aria-hidden="true"></i></div>
                                           <div class="timeline-panel">
                                               <div class="timeline-heading">
                                                   <h2 class="timeline-title"> University of Economic Sciences Vasile Alecsandri </h2>
                                                   <p class="text-muted">  Bachelor of Science (BSc)
                                                       <br> Accounting and Management Information Systems
                                                       <br> Degree class: 1st (First class)
                                                       <br> Bacau, Romania - 2008 – 2011

                                                   </p><br>
                                               </div>
                                               <div class="timeline-body">
                                                    <h4> Modules covered </h4> <br>


                                                    <ul class="modules">
                                                        <li> <strong> Part 1 </strong> </li>
                                                            <ul class="modules">
                                                                <li> Applied Mathematics in Economics  </li>
                                                                <li> Economic Statistics	  </li>
                                                                <li> Business Communication in English Language  </li>
                                                                <li> Microeconomics and Macroeconomics	 </li>
                                                                <li> Accounting Basics	 </li>
                                                                <li> Management </li>
                                                                <li> Public Finance	 </li>
                                                                <li> Politology </li>
                                                                <li> Community and Business Law  </li>
                                                            </ul>
                                                        <br>

                                                        <li> <strong> Part 2 </strong> </li>
                                                           <ul>
                                                               <li> Basic Computer Programming </li>
                                                               <li> Currency and Credit	  </li>
                                                               <li> Credit Institutions Accounting  </li>
                                                               <li> Accounting and Tax Management  </li>
                                                               <li> Marketing and Management Accounting  </li>
                                                               <li> Intermediate Accounting  </li>
                                                               <li> Public Sector Accounting </li>
                                                                <li> Financial Management and Consolidated Accounting   </li>
                                                            </ul>
                                                       <br>

                                                       <li> <strong> Part 3 </strong> </li>
                                                            <ul>

                                                                <li> Advanced Accounting </li>
                                                                <li> Expertise and Accounting Practices  </li>
                                                                <li> Financial Audit  </li>
                                                                <li> Economic and Financial Analysis  </li>
                                                                <li> Accounting Policies </li>
                                                                <li> Ethics of the Accounting Profession </li>
                                                                <li> Individual Dissertation Project </li>
                                                            </ul>
                                                   </ul>
                                               </div>
                                           </div>
                                       </li>

                                       <li class="timeline-inverted">
                                           <div class="timeline-badge danger"><i class="fa fa-university" aria-hidden="true"></i></div>
                                           <div class="timeline-panel">
                                               <div class="timeline-heading">
                                                   <h2 class="timeline-title"> Economic College Ion Ghica </h2>
                                                   <p class="text-muted">
                                                        Accounting and Finance
                                                       <br> Qualification gained: Accounting Technician Diploma (AAT qualified equivalent – Qualified Bookkeeper)
                                                       <br> Bacau, Romania - 2004 – 2008
                                                   </p> <br>
                                               </div>
                                               <div class="timeline-body">
                                                   <h4> Modules covered </h4> <br>
                                                   <ul class="modules">
                                                        <li> Insurance;  </li>
                                                        <li> Financial Reporting; </li>
                                                        <li> Business Law and Contracts;	 </li>
                                                        <li> International Accounting (IAS);  </li>
                                                        <li> Financial Management;	 </li>
                                                        <li> Business Management; </li>
                                                        <li> Advanced Accounting;  </li>
                                                        <li> Audit; </li>
                                                        <li> Economic Statistics;	  </li>
                                                        <li> Mathematics and Statistics.  </li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </li>

                                   </ul>

                           </div></div>

                    </section>


                    <section id="testimonials">
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <br> <h1 class="section-heading "> Testimonials </h1>
                                    <h3 class="section-subheading text-muted"> Short description of past contact experiences </h3> <br><br>
                                </div>
                            </div>

                            <div class="row">
                                  @foreach($testimonials as $testimonial)
                                          <div class="col-md-4 ">
                                              <h4 class="section-subheading text-muted text-center"> {{ $testimonial->description }} </h4>
                                              <p class="text-justify"> <i class="fa fa-quote-left" aria-hidden="true"></i> {{ $testimonial->message }}  <i class="fa fa-quote-right" aria-hidden="true"> </i> </p> <br>
                                              <h6 class="text-center"> <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i> </h6> <br>
                                              <h6 class="text-center"> <strong>{{ $testimonial->author }} </strong> </h6>
                                              <h6 style="color:purple" class="text-center"> <strong>{{ $testimonial->role }} </strong> </h6> <br>
                                          </div>
                                  @endforeach
                            </div>

                        </div>
                    </section>

              @section('scripts')
                <script type="text/javascript">


                            // Flip the about cards functionality // no of cards as argument
                            flipCards(6);

                            // Scroll back to top functionality
                            scrollToTop();

                            // Show/hide map container
                            toggleMap();

                            // JS validation for the contact form
                            validateContactForm();


                        </script>

              @endsection

@stop
