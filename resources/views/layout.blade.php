
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>الصفحة الرئيسية من موقع أبراهيم للبرامج المجانية @yield('title')</title>


        <link rel="icon" href="/images/YemenPointICON.png">
        <link rel="stylesheet" href="/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/vendors/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/ebraheem_icons.css">
        <link rel="stylesheet" href="/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="/css/style2.css">
        <link rel="stylesheet" href="/css/style_rtl.css">


</head>

<body>
<header>
<nav class="navbar navbar-expand-xl">
    <div class="container">
    <a href="#" class="navbar-brand">
    <img src="/images/YemenPoint.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id='navbar'>
    <ul class="navbar-nav  ms-auto">
    <li class="nav-item">
    <a href="#" class="nav-link active">
    <img src="/images/windos.png" alt="">
    <span>ويندوز</span>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link ">
    <img src="/images/android.png" alt="">
    <span>أندرويد</span>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link  ">
    <img src="/images/Apple.png" alt="">
    <span>ماك</span>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <img src="/images/books.png" alt="">
    <span>كتب</span>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <img src="/images/Wiki.png" alt="">
    <span>كورسات</span>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <img src="/images/blog.png" alt="">
    <span>المدونة</span>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <img src="/images/ContactUs.png" alt="">
    <span>تواصل معنا</span>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </nav>
    <div class="nav-part2">
    <div class="container">
    <div class="d-flex flex-md-row flex-column justify-content-between align-items-center">
    <form action="#" class="search d-flex">
    <input type="text" name="query" autocomplete="off" placeholder="بحث" required>
    <input type="hidden" name="lang" value="ar">
    <div class="icon"><i class="fas fa-search"></i></div>
    </form>
    <div class="nav-part2-icons d-flex">
    <a href="#"><span>En</span></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
    </div>
    </div>
    </div>
    
</header>

@yield('Page')

<footer>
    <div >
    <span>
    تصميم المطورين-
    ابراهيم وعبدالوهاب
    </span>
    </div>
    </footer>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/lozad.min.js"></script>
<script src="/js/Gm-script.js"></script>
<script src="/js/rocket-loader.min.js"></script>

</body>

</html>