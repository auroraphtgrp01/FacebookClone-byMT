<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="">
            <nav class="navbar navbar-expand-lg bg-white d-flex" style="box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.096);">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="fa-brands fa-facebook text-primary fs-2"></i></a>
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul> -->
                        <form class="d-flex" role="search">
                            <div class="search-box align-middle">
                                <i class="fa-solid fa-magnifying-glass search-box--icon align-middle"></i>
                                <input class="form-control me-2"
                                    style="outline: none;background-color: #f0f2f5; border: none;border-radius: 20px;"
                                    type="search" placeholder="Search on Facebook" aria-label="Search">
                            </div>
                        </form>
                        <div class="route-social d-flex">
                            <button class="route-button btn">
                                <i class="route-social--icon text-primary fa-solid fa-house"></i>
                            </button>
                            <button class="route-button btn ">
                                <i class="route-social--icon fa-solid fa-film"></i>
                            </button>
                            <button class="route-button btn ">
                                <i class="route-social--icon fa-solid fa-store"></i>
                            </button>
                            <button class="route-button btn ">
                                <i class="route-social--icon fa-solid fa-people-group"></i>
                            </button>
                            <button class="route-button btn ">
                                <i class="route-social--icon fa-solid fa-gamepad"></i>

                            </button>
                        </div>
                        <div class="right-nav text-end">
                            <button class="right-nav-btn">
                                <i class="right-nav--icon fa-solid fa-bars"></i>

                            </button>
                            <button class="right-nav-btn">
                                <i class="right-nav--icon fa-brands fa-facebook-messenger"></i>

                            </button>
                            <button class="right-nav-btn">
                                <i class="right-nav--icon fa-solid fa-bell"></i>
                            </button>
                            <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                alt="" class="right-nav--avatar">
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="row mt-4">
            <div class="col-md-3 scrollable-panel hide-scrollbar" style="height:1000px;" id="leftPanel">
                <!--  -->
            </div>
            <div class="col-md-6" id="centerPanel">
                <div class="container">
                    <div id="carouselExampleRide" class="carousel slide" style="width: 650px; margin-left: 45px;"
                        data-bs-ride="true">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="d-flex">
                                    <div class="story-main me-2">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-main--img">

                                        <div class="story--create_title">
                                            <button class="story--create-btn">
                                                <i class="story-main--create-icon fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="story-main--title">
                                            <b>Tạo Tin</b>
                                        </div>
                                    </div>
                                    <div class="story-item me-2">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                    <div class="story-item me-2">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                    <div class="story-item">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex">
                                    <div class="story-item me-2">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                    <div class="story-item me-2">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                    <div class="story-item me-2">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                    <div class="story-item">
                                        <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                            alt="" class="story-img">
                                        <div class="story-item--avatar">
                                            <img class="story-item--avatar-img"
                                                src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="">
                                        </div>
                                        <div class="story-item--username">
                                            <b>Minh Tuấn</b>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                            data-bs-slide="prev">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                    <div class="status-newfeed_create">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                    alt="" class="right-nav--avatar mt-3 ms-3">
                            </div>
                            <div class="col-md">
                                <button class="btn status-newfeed_create--btn mt-3 ms-3 text-start">Tuấn ơi, bạn đang
                                    nghĩ
                                    gì
                                    thế
                                    ?</button>
                            </div>
                            <div>

                            </div>
                            <div class=""
                                style="transform: translateY(10px);width:570px;border-bottom: 1px solid #cccccc8c;margin-left: 38px;">
                            </div>
                            <ul class="button_list mt-3">
                                <li class="btn button_list-item d-flex">
                                    <img height="24" width="24" alt=""
                                        referrerpolicy="origin-when-cross-origin"
                                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/v1iF2605Cb5.png">
                                    <b class="ms-2"
                                        style="margin-top: 4px;;font-size:0.8rem; color:#0000007a;">Video
                                        Trực Tiếp</b>
                                </li>
                                <li class="btn button_list-item d-flex">
                                    <img height="24" width="24" alt=""
                                        referrerpolicy="origin-when-cross-origin"
                                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png">
                                    <b class="ms-2" style="margin-top: 4px;;font-size:0.8rem; color:#0000007a;">Ảnh
                                        /
                                        Video</b>
                                </li>
                                <li class="btn button_list-item d-flex">
                                    <img height="24" width="24" alt=""
                                        referrerpolicy="origin-when-cross-origin"
                                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png">
                                    <b class="ms-2" style="margin-top: 4px;;font-size:0.8rem; color:#0000007a;">Cảm
                                        xúc
                                        / Hoạt động</b>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="newfeed-status">
                        <template v-for="(v,k) in listNewFeed">
                            <div class="newfeed-status_item d-flex row" style="height: 970px;">
                                <div class="newfeed-status-item--header d-flex">
                                    <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                        alt=""
                                        class="right-nav--avatar newfeed-status_item--avatar mt-3 ms-1">
                                    <div class="newfeed-status_item-name" style="margin-top: 12px; margin-left: 7px;">
                                        <b style="font-size: 0.8rem;">
                                            @{{ v.username }}
                                        </b>
                                        <div class="newfeed-status_item-time" style="font-size: 0.7rem;">1 giờ
                                            <span aria-hidden="true"> · </span>
                                            <svg fill="currentColor" viewBox="0 0 16 16" width="1em"
                                                height="1em"
                                                class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1kpxq89 xsmyaan">
                                                <g fill-rule="evenodd" transform="translate(-448 -544)">
                                                    <g>
                                                        <path
                                                            d="M109.5 408.5c0 3.23-2.04 5.983-4.903 7.036l.07-.036c1.167-1 1.814-2.967 2-3.834.214-1 .303-1.3-.5-1.96-.31-.253-.677-.196-1.04-.476-.246-.19-.356-.59-.606-.73-.594-.337-1.107.11-1.954.223a2.666 2.666 0 0 1-1.15-.123c-.007 0-.007 0-.013-.004l-.083-.03c-.164-.082-.077-.206.006-.36h-.006c.086-.17.086-.376-.05-.529-.19-.214-.54-.214-.804-.224-.106-.003-.21 0-.313.004l-.003-.004c-.04 0-.084.004-.124.004h-.037c-.323.007-.666-.034-.893-.314-.263-.353-.29-.733.097-1.09.28-.26.863-.8 1.807-.22.603.37 1.166.667 1.666.5.33-.11.48-.303.094-.87a1.128 1.128 0 0 1-.214-.73c.067-.776.687-.84 1.164-1.2.466-.356.68-.943.546-1.457-.106-.413-.51-.873-1.28-1.01a7.49 7.49 0 0 1 6.524 7.434"
                                                            transform="translate(354 143.5)"></path>
                                                        <path
                                                            d="M104.107 415.696A7.498 7.498 0 0 1 94.5 408.5a7.48 7.48 0 0 1 3.407-6.283 5.474 5.474 0 0 0-1.653 2.334c-.753 2.217-.217 4.075 2.29 4.075.833 0 1.4.561 1.333 2.375-.013.403.52 1.78 2.45 1.89.7.04 1.184 1.053 1.33 1.74.06.29.127.65.257.97a.174.174 0 0 0 .193.096"
                                                            transform="translate(354 143.5)"></path>
                                                        <path fill-rule="nonzero"
                                                            d="M110 408.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0zm-1 0a7 7 0 1 0-14 0 7 7 0 0 0 14 0z"
                                                            transform="translate(354 143.5)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="newfeed-status_item-header d-flex"
                                        style="margin-left: 400px; margin-top: 20px;">
                                        <div style="color: #9b9393;" aria-expanded="false" aria-haspopup="menu"
                                            aria-label="Hành động với bài viết này" class="ms-4 me-4" role="button"
                                            tabindex="0"><svg fill="currentColor" viewBox="0 0 20 20"
                                                width="1em" height="1em"
                                                class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1qx5ct2 xw4jnvo">
                                                <g fill-rule="evenodd" transform="translate(-446 -350)">
                                                    <path
                                                        d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0">
                                                    </path>
                                                </g>
                                            </svg>
                                            <div class="x1ey2m1c xds687c xg01cxk x47corl x10l6tqk x17qophe x13vifvy x1ebt8du x19991ni x1dhq9h x1wpzbip x14yjl9h xudhj91 x18nykt9 xww2gxu"
                                                data-visualcompletion="ignore" style="inset: -8px;"></div>
                                        </div>
                                        <i class="fa-solid fa-xmark fs-4" style="color:#000000a0;"></i>
                                    </div>
                                </div>
                                <div v-html="v.content" class="newfeed-status_item--content mt-2"
                                    style="z-index: 1;font-size: 0.9rem;">

                                </div>
                                <div class="newfeed-status_item-list-img d-flex pb-2">
                                    {{-- <template v-for="(v,k) in imgNewFeed">
                                        <template v-for="(v1, k1) in loadImg(v.link)">

                                        </template>
                                    </template> --}}
                                    <div class="col-md-6" style="">
                                        <img style="width: 600px; height: 490px; background-size: cover;"
                                            v-bind:src="v.hinh_anh" class="newfeed-status_item-list" alt="">
                                    </div>


                                </div>
                                <div class="newsfeed-status-item-react">
                                    <ul class="list-react">
                                        <li class="list-react--item" style="transform: translateX(-15px);">
                                            <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e"
                                                width="18">
                                        </li>
                                        <li class="list-react--item" style="transform: translateX(-15px);">
                                            <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e"
                                                width="18">
                                        </li>
                                        <li class="list-react--item" style="transform: translateX(-15px);"><img
                                                class="x16dsc37" height="18" role="presentation"
                                                src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='10.25%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FEEA70'/%3e%3cstop offset='100%25' stop-color='%23F69B30'/%3e%3c/linearGradient%3e%3clinearGradient id='d' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23472315'/%3e%3cstop offset='100%25' stop-color='%238B3A0E'/%3e%3c/linearGradient%3e%3clinearGradient id='e' x1='50%25' x2='50%25' y1='0%25' y2='81.902%25'%3e%3cstop offset='0%25' stop-color='%23FC607C'/%3e%3cstop offset='100%25' stop-color='%23D91F3A'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0'/%3e%3c/filter%3e%3cpath id='b' d='M16 8A8 8 0 110 8a8 8 0 0116 0'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='url(%23d)' d='M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008'/%3e%3cpath fill='url(%23e)' d='M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5'/%3e%3cpath fill='%232A3755' d='M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z'/%3e%3c/g%3e%3c/svg%3e"
                                                width="18"></li>
                                        <li class="list-react--item__userlike">
                                            <div style="font-size: 0.8rem; margin-top: 5px;transform: translateX(-15px);"
                                                class="ms-1">
                                                Auroraphtgrp__ và @{{ v.count_react }}
                                                người
                                                khác</div>
                                        </li>
                                        <li class="list-react--item__comment-count">
                                            <div style="font-size: 0.8rem; margin-top: 4px; margin-left: 180px;"
                                                class="">@{{ v.count_comment }}
                                                bình luận</div>
                                        </li>
                                    </ul>
                                    <hr style="transform: translateY(-5px);">
                                    <ul class="list-react__button" style="transform: translateY(-15px);">
                                        <template v-if="v.like_status == 0">
                                            <li class="btn ps-10 button_list-item d-flex"
                                                style="transform: translateX();;">
                                                <i style="font-size: 1.2rem;"
                                                    class="fa-solid fa-heart text-primary"></i>
                                                <b class="ms-2 text-primary"
                                                    style="margin-top: 1px;font-size:0.8rem;">Thích</b>
                                            </li>
                                        </template>
                                        <li v-else class="btn ps-10 button_list-item d-flex"
                                            style="transform: translateX();">
                                            <i style="font-size: 1.2rem;" class="fa-regular fa-heart "></i>
                                            <b class="ms-2"
                                                style="margin-top: 1px;font-size:0.8rem; color:#0000007a;">Thích</b>
                                        </li>

                                        <li class="btn ps-10 button_list-item d-flex"
                                            style="transform: translateX(120px);">
                                            <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1"
                                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/YfS72vr1mwv.png&quot;); background-position: 0px -140px; background-size: 26px 502px; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                            <b class="ms-2"
                                                style="margin-top: 1px;font-size:0.8rem; color:#0000007a;">Bình
                                                Luận</b>
                                        </li>
                                        <li class="btn ps-10 button_list-item d-flex"
                                            style="transform: translateX(220px);">
                                            <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1"
                                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/YfS72vr1mwv.png&quot;); background-position: 0px -200px; background-size: 26px 502px; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                            <b class="ms-2"
                                                style="margin-top: 1px;font-size:0.8rem; color:#0000007a;">Chia
                                                Sẻ</b>
                                        </li>
                                    </ul>
                                    <hr style="transform: translateY(-25px);">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="col-md-3 scrollable-panel hide-scrollbar" id="rightPanel">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/api.js"></script>

    <script></script>
</body>

</html>
