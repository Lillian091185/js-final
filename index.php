<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新北市觀光工廠介紹</title>
    <meta name="title" content="新北市觀光工廠介紹">
    <meta name="description" content="新北市觀光工廠介紹">

    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="新北市觀光工廠介紹">
    <meta property="og:description" content="新北市觀光工廠介紹">
    <meta property="og:image" content="./img/bg.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="新北市觀光工廠介紹">
    <meta property="twitter:description" content="新北市觀光工廠介紹">
    <meta property="twitter:image" content="./img/bg.jpg">

    <link rel="shortcut" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/animate.css">
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154727118-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154727118-2');
</script>

<body>
    <div id="particles"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <h3><span class="navbar-brand text-light font-weight-bold">新北市觀光工廠介紹</span></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active pl-4">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-igloo"></i> 首頁 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link" href="text.php">
                            <i class="fas fa-envelope-open-text"></i> 簡介 <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid align-self-center" id="loading">
        <div class="row h-100">
            <div class="col-12 align-self-center text-center">
                <img src="./img/loading.svg" alt="">
            </div>
        </div>
    </div>
    <div class="container" id="content">
        <div class="row wow fadeInUp">
            <div class="col-12 my-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/3.jpg" class="d-block w-100 h-100 object-fit">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/4.jpg" class="d-block w-100 h-100 object-fit">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/5.jpg" class="d-block w-100 h-100 object-fit">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/6.jpg" class="d-block w-100 h-100 object-fit">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/7.jpg" class="d-block w-100 h-100 object-fit">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="wow fadeInUp">
            <div class="row">
                <div class="col-12 my-3">
                    <h1 class="text-center text-white font-weight-bold ">觀光工廠一覽</h1>
                    <hr class="bg-white">
                </div>
                <div class="col-12 my-3">
                    <table class="table table-hover text-center table-dark text-light shadow-lg p-3" id="tab">
                        <thead class="thead-light font-weight-bold">
                            <tr>
                                <th>名稱</th>
                                <th>特色</th>
                                <th>電話</th>
                                <th>地址</th>
                                <th>介紹</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:16px">
                            <?php
                            include "opendata.php";
                            ?>
                        </tbody>
                    </table>         
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-danger text-white text-center" id="footer">
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.facebook.com/newtaipeicity16899/">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://tour.ntpc.gov.tw/zh-tw/Attraction/Search?wnd_id=60&theme=7">
                        <i class="fas fa-route"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.youtube.com/watch?v=yp-M_pgpVqw">
                        <i class="fab fa-youtube-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary font-weight-bold"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-info">
                    <div id="map"></div>
                    <h6>
                        <i class="fas fa-map-marker-alt text-success"></i>地址:
                        <span></span>
                    </h6>
                    <h6>
                        <i class="fas fa-phone-alt text-success"></i>電話:
                        <span></span>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap4.min.js"></script>
<script src="./js/particles.min.js"></script>

<script>
    // .load(div的id,設定擋路徑,載入完成時的 function)
    particlesJS.load('particles', 'particlesjs-config.json', function() {
        console.log('callback - particles.js config loaded');
    });
    $(window).on('load', function() {
        $("#loading").fadeOut(1000, function() {
            $("#content").fadeIn();
            $("#footer").fadeIn();
        })
    })
    new WOW().init()
    $("#tab").DataTable({
        language: {
                url: './datatables-chinese.json'
            },
            columnDefs: [{
                targets: 3,
                orderable: false,
                searchable: false
            }]
        })

    $("#tab button").on("click", function() {
        let title = $(this).parents("tr").find("td").eq(0).text()
        $("#modal .modal-title").text(title)

        let addr = $(this).parents("tr").find("td").eq(3).text()
        $("#modal .modal-body span").eq(0).text(addr)

        let tel = $(this).parents("tr").find("td").eq(2).text()
        $("#modal .modal-body span").eq(1).text(tel)

        $("#modal").modal("show")

        $("#map").html(`
        <iframe width="100%" height="300" src="https://maps.google.com/maps?hl=zh-tw&amp;q=${addr}&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        `)
    })
</script>