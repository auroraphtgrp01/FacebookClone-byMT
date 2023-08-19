@extends('client.masterpage.masterpage_index')
@section('content')
    <div id="user-profile">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-9 ms-5">
                <div class="card profile-header mb-2">
                    <!-- Ảnh Bìa -->
                    <div style="border-radius: 50px;"> <img class="card-img-top" style="border-radius: 8px;"
                            src="/vuexy_assets/app-assets/images/profile/user-uploads/timeline.png"
                            alt="User Profile Image" /></div>
                    <!--/ Ảnh Bìa -->
                    <div class="position-relative d-flex" style="justify-content: space-between">
                        <!-- Avatar -->
                        <div class="profile-img-container d-flex align-items-center"
                            style="position: relative; margin-top: -80px;">
                            <div class="profile-img" style="border-radius: 50%; width: 150px; height: 150px;">
                                <img v-bind:src="userInfo.avatar" class="img-fluid" style="border-radius: 50%;" />
                            </div>
                            <!-- Avatar -->
                            <div class="profile-title ms-1 mt-2">
                                <h2 class="text mt-3">@{{ userInfo.firstname }} @{{ userInfo.lastname }}</h2>
                                <h5 class="text">1.1k bạn bè</h5>
                                <div class="avatar-group" style="margin-bottom: 2.5rem;">
                                    <template v-for="(v,k) in listFriend">
                                        <a v-bind:href="'/profile/' + v.username" class="avatar" v-if="k < 5">
                                            <img v-bind:src="v.avatar" alt="Avatar" height="32" width="32">
                                        </a>
                                    </template>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex button-group--addfr me-3" style="margin-top:5rem;">
                            <template v-if="statusAdd == 3">
                                <button class="btn me-2" v-on:click="addFriend()"
                                    style="width: 150px; height: 40px; background-color: #1b74e4; color: #fff; padding: 0;">
                                    <i class="fa-solid fa-user-plus me-1"></i><b>Thêm bạn
                                        bè</b></button>
                            </template>
                            <button v-if="statusAdd == 2" class="btn me-2" v-on:click="cancelFriendRequest()"
                                style="width: 150px; height: 40px; background-color: #1b74e4; color: #fff; padding: 0;"> <i
                                    class="fa-solid fa-user-plus me-1"></i><b>Huỷ lời mời</b></button>
                            <button v-if="statusAdd == 4" class="btn me-2" v-on:click="acceptFriend()"
                                style="height: 40px; background-color: #1b74e4; color: #fff; padding: 0;">
                                <i class="fa-solid fa-user-check ms-1"></i><b class="ms-1 me-2">Chấp nhận kết bạn
                                </b></button>
                            <div class="btn-group" v-if="statusAdd == 1">
                                <button id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="btn me-2 dropdown-toggle waves-effect waves-float waves-light" v-on:click=""
                                    style="width: 150px; height: 40px; background-color: #1b74e4; color: #fff; padding: 0;">
                                    <i class="fa-solid fa-user-group me-1"></i><b>Bạn bè</b></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#removeFriend">Huỷ Kết
                                        Bạn</a>
                                </div>
                            </div>
                            <button class="btn" style="width: 120px; height: 40px;background-color: #ccc; padding: 0; ">
                                <i class="fa-brands fa-facebook-messenger me-1"></i>Nhắn tin</button>

                        </div>
                    </div>

                    <hr style="margin-top: 2rem;">
                    <!-- tabs pill -->
                    <div class="profile-header-nav">
                        <!-- navbar -->
                        <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100 ms-2"
                            style="padding: 0; margin-top: -10px;">
                            <!-- collapse  -->
                            <div class="card-body" style="padding: 0;">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                            aria-controls="home" role="tab" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                            aria-controls="profile" role="tab" aria-selected="false">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about"
                                            aria-controls="about" role="tab" aria-selected="false">Account</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" aria-labelledby="home-tab"
                                        role="tabpanel">

                                    </div>
                                    <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">

                                    </div>
                                    <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">

                                    </div>
                                </div>
                            </div>
                            <!--/ collapse  -->
                        </nav>
                        <!--/ navbar -->
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <!--/ profile header -->

        <!-- profile info section -->
        <div class="row" style="margin-top: 10px;">
            <div class="col-12" style="me-2">

            </div>
            <!-- left profile info section -->
            <div class="col-lg-4 col-12 order-2 order-lg-1 ms-5">
                <!-- about -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-75 fs-4"><b>Giới thiệu</b></h5>

                        <p class="card-text mt-2">
                            <i class="fa-solid fa-location-dot fs-3 me-1" style="margin-left: -3px;"></i> Đến Từ <b>Đà
                                Nẵng</b>

                        </p>
                        <div class="mt-2 d-flex" style="align-item: center;margin-left: -5px;">
                            <p class="card-text d-flex" style="align-item: center;">
                                <i class="fa-solid fa-graduation-cap fs-4 me-1"></i>Đã học tại: <b
                                    style="margin-left: 5px;"> Đại Học Duy Tân</b>
                            </p>
                        </div>
                        <div class="mt-2 d-flex" style="align-item: center;margin-left: -3px;">
                            <p class="card-text d-flex" style="align-item: center;">
                                <i class="fa-brands fa-instagram fs-3 me-1"></i></i>
                                <a href="">
                                    <b class="text-primary">auroraphtgrp__</b>

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ about -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-sm-center justify-content-between">
                            <h5 class="mb-0 fs-4"><b>Ảnh</b></h5>
                            <button class="btn text-primary ms-4 bg-hover" data-bs-target="#album" data-bs-toggle="modal"
                                style="padding: 0;height: 30px; width: 100px;"><b>Xem
                                    Album</b></button>
                        </div>
                        <div class="row mt-1">

                            <template v-for="(v,k) in pictureOfUser">
                                <template v-if="k < 9 && v.picture != ''">
                                    <div class="col-md-4 col-6 " style="padding: 3px;">
                                        <button class="btn" style="padding: 0;" data-bs-toggle="modal"
                                            v-on:click="detailPicture = v" data-bs-target="#showImg">
                                            <img v-bind:src="v.picture" class="img-fluid rounded"
                                                style="margin-top: 0; object-fit: cover; width: 147px; height: 145px;"
                                                alt="avatar img" />
                                        </button>
                                    </div>
                                </template>
                            </template>


                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex" style="justify-content: space-between; align-items: center;">
                            <h5 class="mb-0 fs-4" style="margin-left: -8px;">
                                <b>Bạn bè</b>
                            </h5>
                            <button class="btn text-primary ms-4 bg-hover"
                                style="padding: 0; width: 150px; height: 30px;"><b>Xem
                                    tất cả bạn
                                    bè</b></button>
                        </div>
                        <div class="row mt-1">
                            <template v-for="(v,k) in listFriend">
                                <div class="col-md-4 col-6 mb-2" style="padding:5px;" v-if="k<9">
                                    <a v-bind:href="'/profile/' + v.username">
                                        <img v-bind:src="v.avatar" class="img-fluid rounded" style="margin-top: 0;" />
                                    </a>
                                    <h6 class="" style="margin-top: 5px; margin-left: 2px;">
                                        <b>@{{ v.lastname }}</b>
                                    </h6>
                                </div>
                            </template>


                        </div>
                    </div>
                </div>
                <!--/ twitter feed card -->
            </div>
            <!--/ left profile info section -->

            <!-- center profile info section -->
            <div class="col-lg-5 col-12 order-1 order-lg-2" style="">
                <div class="card" style="height:150px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <img v-bind:src="userInfo.avatar" alt="" class="right-nav--avatar">
                            </div>
                            <div class="col-md ms-1">
                                <button class="btn status-newfeed_create--btn text-start" data-bs-toggle="modal"
                                    data-bs-target="#newStatus">@{{ userInfo.lastname }}
                                    ơi, bạn đang
                                    nghĩ
                                    gì
                                    thế
                                    ?</button>
                            </div>

                            <div class="dropdown-divider mt-2"></div>
                            <ul class="d-flex">
                                <li class="btn button_list-item d-flex">
                                    <img height="20" width="20" alt=""
                                        referrerpolicy="origin-when-cross-origin"
                                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/v1iF2605Cb5.png">
                                    <b class="" style="margin-left: 7px;font-size: 0.8rem;margin-top: 4px;">Video
                                        Trực Tiếp</b>
                                </li>
                                <li class="btn button_list-item d-flex">
                                    <img height="20" width="20" alt=""
                                        referrerpolicy="origin-when-cross-origin"
                                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png">
                                    <b class="" style="margin-left: 7px;font-size: 0.8rem;margin-top: 4px;">Ảnh
                                        /
                                        Video</b>
                                </li>
                                <li class="btn button_list-item d-flex">
                                    <img height="20" width="20" alt=""
                                        referrerpolicy="origin-when-cross-origin"
                                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png">
                                    <b class="" style="margin-left: 7px;font-size: 0.8rem;margin-top: 4px;">Cảm
                                        xúc
                                        / Hoạt động</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <template v-for="(v,k) in listNewFeed">
                    <div class="card">
                        <div class="card-body" style="padding-bottom: 0;">
                            <div class="d-flex align-items-center mb-1" style="justify-content: space-between">
                                <!-- avatar -->
                                <div class="d-flex">
                                    <a v-bind:href="'/profile/' + v.username" class="avatar me-1">
                                        <img v-bind:src="v.avatar" alt="avatar img" height="40" width="40" />
                                    </a>
                                    <!--/ avatar -->
                                    <div class="profile-user-info">
                                        <h6 class="mb-0"><b>@{{ v.lastname }}
                                                @{{ v.firstname }}</b>
                                        </h6>
                                        <small class="text">@{{ formatDate(v.created_at) }}</small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <template v-if="userInfo.id == v.id_user">
                                        <button class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i
                                                class="fa-solid fa-xmark" style="font-size: 1.2rem;"
                                                v-on:click="deleteStatus = v"></i></button>
                                    </template>

                                </div>
                            </div>
                            <b v-html="v.content" class="card-text">

                            </b>
                            <!-- post img -->
                            <template v-if="v.picture != '' ">
                                <div class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#showImg"
                                    v-on:click="detailPicture = v">
                                    <img class="img-fluid rounded mb-75"
                                        style="width: 100%; height: 350px; object-fit:cover;" v-bind:src="v.picture"
                                        alt="avatar img" />
                                </div>
                            </template>

                            <!--/ post img -->

                            <!-- like share -->
                            <div class="row d-flex justify-content-start align-items-center flex-wrap ">
                                <ul class="list-react d-flex">
                                    <li class="list-react--item" style="">
                                        <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e"
                                            width="18">
                                    </li>
                                    <li class="list-react--item" style="">
                                        <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e"
                                            width="18">
                                    </li>
                                    <li class="list-react--item" style=""><img class="x16dsc37" height="18"
                                            role="presentation"
                                            src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='10.25%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FEEA70'/%3e%3cstop offset='100%25' stop-color='%23F69B30'/%3e%3c/linearGradient%3e%3clinearGradient id='d' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23472315'/%3e%3cstop offset='100%25' stop-color='%238B3A0E'/%3e%3c/linearGradient%3e%3clinearGradient id='e' x1='50%25' x2='50%25' y1='0%25' y2='81.902%25'%3e%3cstop offset='0%25' stop-color='%23FC607C'/%3e%3cstop offset='100%25' stop-color='%23D91F3A'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0'/%3e%3c/filter%3e%3cpath id='b' d='M16 8A8 8 0 110 8a8 8 0 0116 0'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='url(%23d)' d='M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008'/%3e%3cpath fill='url(%23e)' d='M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5'/%3e%3cpath fill='%232A3755' d='M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z'/%3e%3c/g%3e%3c/svg%3e"
                                            width="18"></li>
                                    <li class="list-react--item__userlike">
                                        <div style="font-size: 0.9rem; margin-top: 3px; margin-left: 7px;">
                                            Auroraphtgrp__ và <b>@{{ v.count_react }}</b>
                                            người
                                            khác</div>
                                    </li>
                                    <li class="list-react--item__comment-count">
                                        <div style="font-size: 0.9rem; margin-top: 5px;" class="">
                                            <b>@{{ v.count_comment }}</b> bình luận
                                        </div>
                                    </li>
                                </ul>
                                <!-- share and like count and icons -->
                            </div>
                            <!-- like share -->
                            <div class="dropdown-divider" style="margin-top: -5px;"></div>
                            {{-- React Button --}}
                            <div class="row d-flex justify-content-start align-items-center flex-wrap">
                                <ul class="list-react__button d-flex">
                                    {{-- <template v-if="v.like_status == 0">
                            <li v-on:click="" class="btn ps-10 d-flex button-react">
                                <i class="fa-solid ficon fa-heart button-react--icon text-primary"></i>
                                <b class="ms-1 text-primary" style="margin-top: 1px;">Thích</b>
                            </li>
                        </template> --}}
                                    <template v-if="v.like_status == 0">
                                        <li v-on:click="changeReact(v)" class="btn ps-10 d-flex button-react">
                                            <i class="fa-solid ficon fa-heart button-react--icon text-primary"></i>
                                            <b class="ms-1 text-primary" style="margin-top: 1px;">Thích</b>
                                        </li>
                                    </template>

                                    <li v-on:click="changeReact(v)" v-else class="btn ps-10 d-flex button-react">
                                        <i class="fa-regular ficon fa-heart button-react--icon"></i>
                                        <b class="ms-1" style="margin-top: 1px;">Thích</b>
                                    </li>
                                    <li class="btn ps-10 d-flex button-react">
                                        <i class="fa-regular fa-comment button-react--icon"></i>
                                        <b class="ms-1" style="margin-top: 1px;">Bình
                                            Luận</b>
                                    </li>
                                    <li class="btn ps-10 d-flex button-react">
                                        <i class="fa-solid fa-arrow-up-from-bracket button-react--icon"></i>
                                        <b class="ms-1" style="margin-top: 1px;">Chia
                                            Sẻ</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
            <div class="col-lg-1 col-12">
            </div>
        </div>
        <div class="modal fade text-start" id="album" tabindex="-1" aria-labelledby="myModalLabel17"
            aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel17">ALBUM</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <template v-for="(v,k) in pictureOfUser">
                                        <template v-if="v.picture != ''">
                                            <div class="col-md-2 col-6 " style="padding: 3px;">
                                                <button class="btn" style="padding: 0;">
                                                    <img v-bind:src="v.picture" class="img-fluid rounded"
                                                        style="margin-top: 0; object-fit: cover; width: 147px; height: 145px;"
                                                        alt="avatar img" />
                                                </button>
                                            </div>
                                        </template>
                                    </template>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="newStatus" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="d-flex mt-1">
                        <h3 class="modal-title" style="margin: auto"><b>Tạo bài viết</b></h3>
                    </div>
                    <div class="dropdown-divider mt-1"></div>
                    <div class="modal-body">
                        <div class="d-flex mb-2">
                            <img v-bind:src="userInfo.avatar" alt="" class="newfriend-avatar">
                            <div class="modal-item--list ms-1">
                                <h5><b>@{{ userInfo.lastname }}</b></h5>
                                <div class="dropdown" style="margin-top: -5px; ">
                                    <button class="btn btn-sm" style="background-color: #ccc; padding: 5px 5px 5px 5px;"
                                        data-bs-toggle="dropdown">
                                        <span class="" style="font-size: 12px;"><i
                                                class="fa-solid fa-earth-americas"></i> Công khai</span>
                                    </button>
                                    <ul class="dropdown-menu" style="padding:0; ">
                                        <li><a class="dropdown-item" style="padding:5px; font-size: 12px;"
                                                href="#"> <i class="me-1 fa-solid fa-earth-americas"></i>Công
                                                khai</a></li>
                                        <li><a class="dropdown-item" style="padding:5px; font-size: 12px;"
                                                href="#"> <i class="me-1 fa-solid fa-user-group"></i>
                                                Bạn
                                                bè</a></li>
                                        <li><a class="dropdown-item" style="padding:5px; font-size: 12px;"
                                                href="#"> <i class="me-1 fa-solid fa-lock"></i> Chỉ mình
                                                tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <textarea name="" class="form-control" id="" cols="30" rows="5"
                            placeholder="Bạn đang nghĩ gì thế ? " style=""></textarea>
                        <div class="d-flex">
                            <button v-on:click="showUploader()" class="select-files btn mt-2 btn-outline-success"
                                style="padding:8px; margin: auto; margin-right: 4px;"><img class="x1b0d499 xl1xv1r"
                                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png" alt=""
                                    style="height: 24px; width: 24px;"> Thêm Ảnh</button>
                            <input type="file" name="" ref="fileInput" class="form-control d-none"
                                id="">
                            <button class="btn mt-2 btn-outline-primary"
                                style="padding:8px; margin: auto; margin-right: 4px;"><img class="x1b0d499 xl1xv1r"
                                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/MqTJr_DM3Jg.png" alt=""
                                    style="height: 24px; width: 24px;"> Gắn Thẻ </button>
                            <button class="btn mt-2 btn-outline-warning" style="padding:8px; margin: auto;">
                                <img class="x1b0d499 xl1xv1r"
                                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png" alt=""
                                    style="height: 24px; width: 24px;"> Cảm xúc / Hoạt
                                Động </button>
                        </div>
                    </div>
                    <div class="modal-footer d-flex">
                        <button type="button" class="btn btn-primary" style="margin: auto; width: 100%"
                            data-bs-dismiss="modal" v-on:click="uploadStatus()">Đăng
                            Bài</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="deleteModal" tabindex="-1" aria-labelledby="myModalLabel20"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel20">Cảnh Báo</h4>
                    </div>
                    <div class="modal-body">
                        Bạn đang thực hiện thao tác xoá bài viết này. Bạn có chắc chắn muốn xoá ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary me-1" data-bs-dismiss="modal"
                            aria-label="Close">Huỷ Bỏ</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                            v-on:click="deleteNewFeed(deleteStatus)">Accept</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start modal-warning" id="removeFriend" tabindex="-1"
            aria-labelledby="myModalLabel140" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel140">CẢNH BÁO !</h5>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn huỷ kết bạn ?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Huỷ Bỏ </button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"
                            v-on:click="removeFriend()">Đồng Ý</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="showImg" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex">
                        <img v-bind:src="detailPicture.picture" class="img-fluid rounded"
                            style="width: 400px; margin: auto;" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
@section('JS')
    <script src="/assets/js/profile.js"></script>
@endsection
