<!-- Footer Container    Start -->
<div class="container footer-text">
    <!-- About Us Section Start -->
    <div class="col-sm-4">
        <h4>Nosotros</h4>

        <p>
            Gestión empaques es una agrupación de estudiantes de educación superior que se desempeñan como empaquetadores de supermercado y se ha dispuesto a entregar soluciones integrales a través de esta plataforma para así mejorar y facilitar esta labor llena de sacrificio y entrega que permite a miles de estudiantes de educación superior generar ingreso económico para así costear sus carreras y mantener a sus
            familias.
        </p>
        <h4>Siguenos</h4>
        <ul class="list-inline">
            <li>
                <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc"
                                data-hc="#ccc"></i>
                </a>
            </li>
            <li>
                <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc"
                                data-hc="#ccc"></i>
                </a>
            </li>
            <li>
                <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc"
                                data-hc="#ccc"></i>
                </a>
            </li>
            <li>
                <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc"
                                data-hc="#ccc"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- //About Us Section End-->
    <!-- Contact Section Start -->
    <div class="col-sm-4">
        <h4>Contactanos</h4>
        <ul class="list-unstyled">
            <li>35,Lorem Lis Street, Park Ave</li>
            <li>Lis Street, India.</li>
            <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc"
                   data-hc="#ccc"></i>Phone:9140 123 4588
            </li>
            <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc"
                   data-hc="#ccc"></i> Fax:400 423 1456
            </li>
            <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc"
                   data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:{{ Config::get('contact.email') }}">{{ Config::get('contact.email') }}</a></span>
            </li>
            <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc"
                   data-hc="#ccc"></i> Skype:
                <span class="success">Gestionempaques</span>
            </li>
        </ul>
        {{--<div class="news">--}}
        {{--<h4>News letter</h4>--}}

        {{--<p>subscribe to our newsletter and stay up to date with the latest news and deals</p>--}}

        {{--<div class="form-group">--}}
        {{--<input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2">--}}
        {{--<a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
    <!-- //Contact Section End -->
    <!-- Recent post Section Start -->
    <div class="col-sm-4">
        <h4>Comentarios</h4>

        <div class="media">
            <div class="media-left media-top">
                <a href="#">
                    <img class="media-object" src="{{ asset('frontend/images/image_14.jpg') }}" alt="image">
                </a>
            </div>
            <div class="media-body">
                <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry
                    dummy.
                    <br/>

                <div class="pull-right"><i>John Doe</i></div>
                </p>
            </div>
        </div>
        <div class="media">
            <div class="media-left media-top">
                <a href="#">
                    <img class="media-object" src="{{ asset('frontend/images/image_15.jpg') }}" alt="image">
                </a>
            </div>
            <div class="media-body">
                <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry
                    dummy.
                    <br/>

                <div class="pull-right"><i>John Doe</i></div>
                </p>
            </div>
        </div>
        <div class="media">
            <div class="media-left media-top">
                <a href="#">
                    <img class="media-object" src="{{ asset('frontend/images/image_13.jpg') }}" alt="image">
                </a>
            </div>
            <div class="media-body">
                <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry
                    dummy.
                    <br/>

                <div class="pull-right"><i>John Doe</i></div>
                </p>
            </div>
        </div>
    </div>
    <!-- //Recent Post Section End -->
</div>
<!-- Footer Container Section End -->