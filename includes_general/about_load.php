    <style>
        .our-team {
            padding: 30px 0 40px;
            margin-bottom: 30px;
            background-color: #f7f5ec;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .our-team .picture {
            display: inline-block;
            height: 130px;
            width: 130px;
            margin-bottom: 50px;
            z-index: 1;
            position: relative;
        }

        .our-team .picture::before {
            content: "";
            width: 100%;
            height: 0;
            border-radius: 50%;
            background-color: #1e3f73;
            position: absolute;
            bottom: 135%;
            right: 0;
            left: 0;
            opacity: 0.9;
            transform: scale(3);
            transition: all 0.3s linear 0s;
        }

        .our-team:hover .picture::before {
            height: 100%;
        }

        .our-team .picture::after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #184152;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .our-team .picture img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;
        }

        .our-team:hover .picture img {
            box-shadow: 0 0 0 14px #f7f5ec;
            transform: scale(0.7);
        }

        .our-team .title {
            display: block;
            font-size: 15px;
            color: #4e5052;
            text-transform: capitalize;
        }

        .our-team .social {
            width: 100%;
            padding: 0;
            margin: 0;
            background-color: #ff8300;
            position: absolute;
            bottom: -100px;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .our-team:hover .social {
            bottom: 0;
        }

        .our-team .social li {
            display: inline-block;
        }

        .our-team .social li a {
            display: block;
            padding: 10px;
            font-size: 17px;
            color: white;
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }

        .our-team .social li a:hover {
            color: #1369ce;
            background-color: #f7f5ec;
        }


        h1 {
            color: hsla(0, 0%, 0%, .9);
            font: normal 140px Varela Round, sans-serif;
            height: 140px;
            left: 0;
            letter-spacing: 3px;
            margin: 80px 0 0 0;
            position: absolute;
            text-align: center;
            text-transform: uppercase;
            top: 50%;
            width: 100%;
            animation: move linear 2000ms infinite;
        }

        @keyframes move {
            0% {
                text-shadow:
                        4px -4px 0 hsla(0, 100%, 50%, 1),
                        3px -3px 0 hsla(0, 100%, 50%, 1),
                        2px -2px 0 hsla(0, 100%, 50%, 1),
                        1px -1px 0 hsla(0, 100%, 50%, 1),
                        -4px 4px 0 hsla(180, 100%, 50%, 1),
                        -3px 3px 0 hsla(180, 100%, 50%, 1),
                        -2px 2px 0 hsla(180, 100%, 50%, 1),
                        -1px 1px 0 hsla(180, 100%, 50%, 1)
            ;
            }
            25% {
                text-shadow:
                        -4px -4px 0 hsla(180, 100%, 50%, 1),
                        -3px -3px 0 hsla(180, 100%, 50%, 1),
                        -2px -2px 0 hsla(180, 100%, 50%, 1),
                        -1px -1px 0 hsla(180, 100%, 50%, 1),
                        4px 4px 0 hsla(0, 100%, 50%, 1),
                        3px 3px 0 hsla(0, 100%, 50%, 1),
                        2px 2px 0 hsla(0, 100%, 50%, 1),
                        1px 1px 0 hsla(0, 100%, 50%, 1)
            ;
            }
            50% {
                text-shadow:
                        -4px 4px 0 hsla(0, 100%, 50%, 1),
                        -3px 3px 0 hsla(0, 100%, 50%, 1),
                        -2px 2px 0 hsla(0, 100%, 50%, 1),
                        -1px 1px 0 hsla(0, 100%, 50%, 1),
                        4px -4px 0 hsla(180, 100%, 50%, 1),
                        3px -3px 0 hsla(180, 100%, 50%, 1),
                        2px -2px 0 hsla(180, 100%, 50%, 1),
                        1px -1px 0 hsla(180, 100%, 50%, 1)
            ;
            }
            75% {
                text-shadow:
                        4px 4px 0 hsla(180, 100%, 50%, 1),
                        3px 3px 0 hsla(180, 100%, 50%, 1),
                        2px 2px 0 hsla(180, 100%, 50%, 1),
                        1px 1px 0 hsla(180, 100%, 50%, 1),
                        -4px -4px 0 hsla(0, 100%, 50%, 1),
                        -3px -3px 0 hsla(0, 100%, 50%, 1),
                        -2px -2px 0 hsla(0, 100%, 50%, 1),
                        -1px -1px 0 hsla(0, 100%, 50%, 1)
            ;
            }
            100% {
                text-shadow:
                        4px -4px 0 hsla(0, 100%, 50%, 1),
                        3px -3px 0 hsla(0, 100%, 50%, 1),
                        2px -2px 0 hsla(0, 100%, 50%, 1),
                        1px -1px 0 hsla(0, 100%, 50%, 1),
                        -4px 4px 0 hsla(180, 100%, 50%, 1),
                        -3px 3px 0 hsla(180, 100%, 50%, 1),
                        -2px 2px 0 hsla(180, 100%, 50%, 1),
                        -1px 1px 0 hsla(180, 100%, 50%, 1)
            ;
            }
        }

    </style>
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-sm p-3">
                <!-- content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="../recursos/avatars/chris.jpg">
                                </div>
                                <div class="team-content">
                                    <h5 class="name">Christian RCSG</h5>
                                    <h6 class="title">Analista del sistema</h6>
                                    <h6 class="title">Full Stack Web Developer</h6>
                                </div>
                                <ul class="social">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-github"></i>
                                    <i class="fab fa-linkedin"></i>
                                    <i class="far fa-envelope"></i>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="../recursos/avatars/emma.jpg">
                                </div>
                                <div class="team-content">
                                    <h5 class="name">Emmanuel Martinez</h5>
                                    <h6 class="title">Data Base Dev</h6>
                                    <h6 class="title">Front End Web Developer</h6>
                                </div>
                                <ul class="social">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-github"></i>
                                    <i class="fab fa-linkedin"></i>
                                    <i class="far fa-envelope"></i>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="../recursos/avatars/zur.jpg">

                                </div>
                                <div class="team-content">
                                    <h5 class="name">Zuri Sadai</h5>
                                    <h6 class="title">Front End Web Developer</h6>
                                    <h6 class="title">Documentación</h6>
                                </div>
                                <ul class="social">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-github"></i>
                                    <i class="fab fa-linkedin"></i>
                                    <i class="far fa-envelope"></i>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="../recursos/avatars/fer.jpg">
                                </div>
                                <div class="team-content">
                                    <h5 class="name">Fernando Hernández</h5>
                                    <h6 class="title">Back End Developer</h6>
                                </div>
                                <ul class="social">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-github"></i>
                                    <i class="fab fa-linkedin"></i>
                                    <i class="far fa-envelope"></i>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->
                <div class="container">
                    <h1>Gracias</h1>
                </div>
            </div>
        </div>
    </div>