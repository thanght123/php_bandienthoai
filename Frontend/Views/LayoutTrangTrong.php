

<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>DKT Store</title>
    <link href='../Assets/Frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../Assets/Frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../Assets/Frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../Assets/Frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../Assets/Frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <script src='../Assets/Frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='../Assets/Frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='../Assets/Frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='../Assets/Frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
    <!-- header -->    
    <header id="header">
        <!-- top header -->
        <?php include "Views/Header.php"; ?>
        <!-- end top header -->
        <!-- middle header -->        
        </header>
        <!-- end header -->
        <div class="content">
            <div class="container">
                <h1 style="display:none;">DKT Store</h1>

                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <!-- end support -->
                        <div class="online_support block">
                            <div class="new_title">
                                <h2>Hỗ trợ trực tuyến</h2>
                            </div>
                            <div class="block-content">
                                <div class="sp_1">
                                    <p>Tư vấn bán hàng 1</p>
                                    <p>Mrs. Dung: (04) 3786 8904</p>
                                </div>
                                <div class="sp_1">
                                    <p>Tư vấn bán hàng 2</p>
                                    <p>Mr. Tuấn: (04) 3786 8904</p>
                                </div>
                                <div class="sp_1">
                                    <p>Email liên hệ</p>
                                    <p>support@mail.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- end support online -->
                        <!-- box search -->
                        <div class="panel panel-default" style="margin-top:15px;">
                            <div class="panel-heading">
                                Tìm theo mức giá
                            </div>
                            <div class="panel-body">
                                <ul class="list-group" style="border:0px;">
                                    <li class="list-group-item" style="border:0px;">Giá từ &nbsp; <input type="number" min="0" value="0" id="fromPrice" /></li>
                                    <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" min="0" value="0" id="toPrice" /></li>
                                    <li class="list-group-item" style="border:0px; text-align:center">
                                        <input type="button" class="btn btn-info" value="Tìm kiếm" onclick="location.href = 'index.php?controller=products&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                                        <input type="reset" class="btn btn-danger" onclick="window.location.reload();" value="Viết lại" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end box search -->
                        <!-- box search -->
                        <div class="panel panel-default" style="margin-top:15px;">
                            <div class="panel-heading">
                                Tìm theo khoảng giá
                            </div>
                            <div class="panel-body">
                                <ul class="list-group" style="border:0px;">
                                    <li class="list-group-item" style="border:0px;">
                                        <input type="radio" checked id="findGroupPrice" name="findGroupPrice" value="1tr-5tr" onclick="location.href='index.php?controller=products&action=searchPrice&fromPrice=1000000&toPrice=5000000';" />&nbsp;&nbsp;&nbsp; Giá từ 1 triệu - dưới 5 triệu
                                    </li>
                                    <li class="list-group-item" style="border:0px;">
                                        <input type="radio" id="findGroupPrice" name="findGroupPrice" value="5tr-10tr"  onclick="location.href='index.php?controller=products&action=searchPrice&fromPrice=5000000&toPrice=10000000';" />&nbsp;&nbsp;&nbsp; Giá từ 5 triệu - dưới 10 triệu
                                    </li>
                                    <li class="list-group-item" style="border:0px;">
                                        <input type="radio" id="findGroupPrice" name="findGroupPrice" value="10tr-15tr" onclick="location.href='index.php?controller=products&action=searchPrice&fromPrice=10000000&toPrice=15000000';"/>&nbsp;&nbsp;&nbsp; Giá từ 10 triệu - dưới 15 triệu
                                    </li>
                                    <li class="list-group-item" style="border:0px;">
                                        <input type="radio" id="findGroupPrice" name="findGroupPrice" value="15tr-20tr"  onclick="location.href='index.php?controller=products&action=searchPrice&fromPrice=15000000&toPrice=20000000';" />&nbsp;&nbsp;&nbsp; Giá từ 15 triệu - dưới 20 triệu
                                    </li>
                                    <li class="list-group-item" style="border:0px;">
                                        <input type="radio" id="findGroupPrice" name="findGroupPrice" value="20tr-25tr"  onclick="location.href='index.php?controller=products&action=searchPrice&fromPrice=20000000&toPrice=25000000';" />&nbsp;&nbsp;&nbsp; Giá từ 20 triệu - dưới 25 triệu
                                    </li>
                                    <li class="list-group-item" style="border:0px;">
                                        <input type="radio" id="findGroupPrice" name="findGroupPrice" value="25tr-30tr"  onclick="location.href='index.php?controller=products&action=searchPrice&fromPrice=25000000&toPrice=30000000';" />&nbsp;&nbsp;&nbsp; Giá từ 25 triệu - dưới 30 triệu
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end box search -->
                        <!-- box search -->
                        <div class="panel panel-default" style="margin-top:15px;">
                            <div class="panel-heading">
                                Lọc theo cấu hình sản phẩm
                            </div>
                            <div class="panel-body">
                                <ul class="list-group" style="border:0px;">
                                    <?php 
                                        //lay doi tuong ket noi
                                        $conn = Connection::getInstance();
                                        $query = $conn->query("select * from parameters where parent_id = 0 order by id desc");
                                        //lay tat ca ket qua tra ve
                                        $parameters = $query->fetchAll();
                                     ?>
                                     <?php foreach($parameters as $rowsParameter): ?>
                                    <li class="list-group-item" style="border:0px; font-weight:bold">
                                        <?php echo $rowsParameter->name; ?>
                                    </li>
                                    <?php 
                                        $querySub = $conn->query("select * from parameters where parent_id = {$rowsParameter->id} order by id desc");
                                        //lay tat ca ket qua tra ve
                                        $parametersSub = $querySub->fetchAll();
                                     ?>
                                     <?php foreach($parametersSub as $rowsParameterSub): ?>
                                    <li class="list-group-item" style="border:0px; padding-left:20px;">
                                        |--- <a href="index.php?controller=search&action=searchParameter&id=<?php echo $rowsParameterSub->id; ?>">HDD <?php echo $rowsParameterSub->name; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- end box search -->
                        <!-- hot news -->
                        <div class="home-blog">
                            <h2 class="title"> <span>Tin tức</span></h2>
                            <div class="row">
                                <div class="owl-home-blog owl-home-blog-sidebar">
                                    <!-- list hot news -->
                                    <div class="item">
                                        <div class="article">
                                            <a href="index.php?controller=news_detail&id=20" class="image"> <img src="../Assets/Frontend/images/chicago.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                            <div class="info">
                                                <h3><a href="index.php?controller=news_detail&id=20">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
                                                <p class="desc">
                                                    <p>X-37B c&oacute; thể triển khai như vũ kh&iacute; ti&ecirc;u diệt vệ tinh của đối phương, hoặc thả vũ kh&iacute; động năng đến bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i Đất.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end list hot news -->
                                    <!-- list hot news -->
                                    <div class="item">
                                        <div class="article">
                                            <a href="index.php?controller=news_detail&id=19" class="image"> <img src="../Assets/Frontend/images/chicago.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                            <div class="info">
                                                <h3><a href="index.php?controller=news_detail&id=19">Mẹo in văn bản từ iPhone, iPad không phải ai cũng biết</a></h3>
                                                <p class="desc">
                                                    <p>(D&acirc;n tr&iacute;) - Nếu bạn l&agrave; mẫu người th&iacute;ch sử dụng iPhone hoặc iPad để l&agrave;m việc, ắt hẳn ch&uacute;ng ta từng c&oacute; lần muốn in văn bản hoặc t&agrave;i liệu trực tiếp từ thiết bị.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end list hot news -->
                                    <!-- list hot news -->
                                    <div class="item">
                                        <div class="article">
                                            <a href="index.php?controller=news_detail&id=17" class="image"> <img src="../Assets/Frontend/images/chicago.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                            <div class="info">
                                                <h3><a href="index.php?controller=news_detail&id=17">Samsung và Oppo tiếp tục thống trị thị trường đầu năm 2017 tại Việt Nam</a></h3>
                                                <p class="desc">
                                                    <p>(D&acirc;n tr&iacute;) - Hầu hết c&aacute;c sản phẩm nằm trong top 10 b&aacute;n chạy th&aacute;ng 2 v&agrave; nửa đầu th&aacute;ng 3 năm 2017 của c&aacute;c nh&agrave; b&aacute;n lẻ đều đến từ Samsung v&agrave; Oppo. C&aacute;c thương hiệu lớn kh&aacute;c dần dần bị thụt l&ugrave;i về sau...</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end list hot news -->
                                    <!-- list hot news -->
                                    <div class="item">
                                        <div class="article">
                                            <a href="index.php?controller=news_detail&id=16" class="image"> <img src="../Assets/Frontend/images/chicago.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                            <div class="info">
                                                <h3><a href="index.php?controller=news_detail&id=16">Những dấu hiệu cho thấy chiếc tủ lạnh nhà bạn đang gặp vấn đề</a></h3>
                                                <p class="desc">
                                                    <p>(D&acirc;n tr&iacute;) - Mặc d&ugrave; l&agrave; một thiết bị điện tử với độ bền cao, thậm ch&iacute; c&oacute; thể l&ecirc;n tới 10-20 năm, nhưng điều đ&oacute; kh&ocirc;ng c&oacute; nghĩa l&agrave; tủ lạnh kh&ocirc;ng thể hỏng h&oacute;c hay gặp sự cố.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end list hot news -->
                                    <!-- list hot news -->
                                    <div class="item">
                                        <div class="article">
                                            <a href="index.php?controller=news_detail&id=15" class="image"> <img src="../Assets/Frontend/images/chicago.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                            <div class="info">
                                                <h3><a href="index.php?controller=news_detail&id=15">Oppo khởi chạy chương trình đặt hàng trước F3 Plus tại Việt Nam</a></h3>
                                                <p class="desc">
                                                    <p>Sau ng&agrave;y ra mắt ch&iacute;nh thức v&agrave;o 23/3 tới, Oppo sẽ tiến h&agrave;nh chương tr&igrave;nh đặt h&agrave;ng trước F3 Plus từ ng&agrave;y 24/3 đến hết ng&agrave;y 31/3/2017, kh&aacute;ch h&agrave;ng đặt mua trước sản phẩm F3 Plus sẽ nhận được bộ qu&agrave; tặng d&agrave;nh hấp dẫn.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end list hot news -->
                                </div>
                            </div>
                        </div>
                        <!-- end hot news -->
                        <!-- adv -->
                        <img src="../Assets/Frontend/images/banner03d5.jpg">
                        <!-- end adv -->

                    </div>
                    <div class="col-xs-12 col-md-9">
                        <!-- main -->
                        <?php                 
                            //kiem tra xem file do co ton tai khong, neu co ton tai thi load vao day            
                            if(file_exists($fileController))
                            {
                                include $fileController;      
                                //VD: include "Controllers/UsersController.php";          
                                //tao object cua class $controller
                                if(class_exists($className))
                                {
                                    $obj = new $className(); 
                                    //$obj = new Users(); 
                                    //goi ham ben trong class
                                    $obj->$action();
                                    //$obj->Read();
                                }
                            }
                         ?>

                        <!-- end main -->
                    </div>
                </div>
                <!-- adv -->
                <div class="widebanner"> <a href="#"><img src="../Assets/Frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
                <!-- end adv -->

            </div>
        </div>
        <div class="privacy">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="image"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
                        <div class="info">
                            <h3>Giao hàng miễn phí</h3>
                            <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
                        <div class="info">
                            <h3>Khuyến mại</h3>
                            <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="image"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
                        <div class="info">
                            <h3>Hoàn trả lại tiền</h3>
                            <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <h3>Về chúng tôi</h3>
                            <ul class="list-unstyled">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="gioi-thieu">Giới thiệu</a></li>
                                <li><a href="tin-tuc">Tin tức</a></li>
                                <li><a href="gioi-thieu">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <h3>Hướng dẫn</h3>
                            <ul class="list-unstyled">
                                <li><a href="huo-ng-da-n-mua-ha-ng">Hướng dẫn mua hàng</a></li>
                                <li><a href="huong-dan">Giao nhận và thanh toán</a></li>
                                <li><a href="do-i-tra-va-ba-o-ha-nh">Đổi trả và bảo hành</a></li>
                                <li><a href="account/register">Đăng ký thành viên</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <h3>Chính sách</h3>
                            <ul class="list-unstyled">
                                <li><a href="chinh-sach">Chính sách thanh toán</a></li>
                                <li><a href="chi-nh-sa-ch-va-n-chuye-n">Chính sách vận chuyển</a></li>
                                <li><a href="chi-nh-sa-ch-do-i-tra">Chính sách đổi trả</a></li>
                                <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Chính sách bảo hành</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <h3>Điều khoản</h3>
                            <ul class="list-unstyled">
                                <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
                                <li><a href="die-u-khoa-n-giao-di-ch">Điều khoản giao dịch</a></li>
                                <li><a href="di-ch-vu-tie-n-i-ch">Dịch vụ tiện ích</a></li>
                                <li><a href="quye-n-so-hu-u-tri-tue">Quyền sở hữu trí tuệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="payments-method"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5"> © Bản quyền DKT Store</div>
                        <div class="col-xs-12 col-sm-7">
                            <ul class="list-unstyled">
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src='../Assets/Frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script>
        <script src='../Assets/Frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script>
        <script src='../Assets/Frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script>
        <script src='../Assets/Frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script>
        <script src='../Assets/Frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>        
    </body>
    </html>