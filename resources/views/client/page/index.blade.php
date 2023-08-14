@extends('client.masterpage.masterpage_index')
@section('content')
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"
        style="background: linear-gradient(180deg, rgb(255 255 255 / 0%) 44%, rgb(22 29 49 / 0%) 73%, rgba(22, 29, 49, 0));">
    </div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-body" id="app">
            <div>
                <!-- profile info section -->
                <section>
                    <div class="row">
                        <!-- left profile info section -->
                        <div class="col-lg-3 col-12 order-2 order-lg-1 scrollable-panel hide-scrollbar left-panel"
                            id="leftPanel">
                            <!-- about -->
                            <div class="card">
                                <div class="card-body" style="padding-left: 0;padding-bottom: 0;">
                                    <ul class="left-panel__list">
                                        <li class="btn left-panel__list-item">
                                            <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="" class="right-nav--avatar">
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Minh Tuấn</b></h6>
                                        </li>
                                        <li class="btn left-panel__list-item">
                                            <i data-visualcompletion="css-img" class=""
                                                style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/MXx87JcFKzH.png');background-position:0 -304px;background-size:38px 570px;width:36px;height:36px;background-repeat:no-repeat;display:inline-block"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Bạn Bè</b></h6>

                                        </li>
                                        <li class="btn left-panel__list-item">
                                            <i data-visualcompletion="css-img" class=""
                                                style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/MXx87JcFKzH.png');background-position:0 -190px;background-size:38px 570px;width:36px;height:36px;background-repeat:no-repeat;display:inline-block"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Đã Lưu</b></h6>

                                        </li>
                                        <li class="btn left-panel__list-item">
                                            <i data-visualcompletion="css-img" class=""
                                                style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/MXx87JcFKzH.png');background-position:0 -456px;background-size:38px 570px;width:36px;height:36px;background-repeat:no-repeat;display:inline-block"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Kỉ Niệm</b></h6>

                                        </li>
                                        <li class="btn left-panel__list-item"><i data-visualcompletion="css-img"
                                                class=""
                                                style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/MXx87JcFKzH.png');background-position:0 -38px;background-size:38px 570px;width:36px;height:36px;background-repeat:no-repeat;display:inline-block"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Nhóm</b></h6>

                                        </li>

                                        <li class="btn left-panel__list-item">
                                            <img draggable="false" height="36" width="36" alt=""
                                                referrerpolicy="origin-when-cross-origin"
                                                src="https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/3dN1QwOLden.png">
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Video</b></h6>

                                        </li>

                                        <li class="btn left-panel__list-item">
                                            <i data-visualcompletion="css-img" class=""
                                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/mBH5oR81DT5.png&quot;); background-position: -724px -176px; background-size: 942px 338px; width: 36px; height: 36px; background-repeat: no-repeat; display: inline-block;"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Hiến Máu</b></h6>

                                        </li>
                                        <li class="btn left-panel__list-item">
                                            <i data-visualcompletion="css-img" class=""
                                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/h3PaFxa04y3.png&quot;); background-position: 0px 0px; background-size: 38px 148px; width: 36px; height: 36px; background-repeat: no-repeat; display: inline-block;"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Messenger</b></h6>

                                        </li>
                                        <li class="btn left-panel__list-item">
                                            <i data-visualcompletion="css-img" class=""
                                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/MXx87JcFKzH.png&quot;); background-position: 0px -114px; background-size: 38px 570px; width: 36px; height: 36px; background-repeat: no-repeat; display: inline-block;"></i>
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Trang</b></h6>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ about -->

                            <!-- suggestion pages -->
                            <div class="card">
                                <div class="card-body" style="padding-left: 0;padding-bottom: 0;">
                                    <h5 class="ms-2"><b>Lối Tắt Của Bạn</b></h5>
                                    <ul class="left-panel__list">
                                        <li class="btn left-panel__list-item">
                                            <img draggable="false" height="36" width="36" alt=""
                                                referrerpolicy="origin-when-cross-origin"
                                                src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/tx2VFwUKc-K.png">
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Trình Quản Lý Quảng Cáo</b>
                                            </h6>
                                        </li>
                                        <li class="btn left-panel__list-item">
                                            <img draggable="false" height="36" width="36" alt=""
                                                referrerpolicy="origin-when-cross-origin"
                                                src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/tKwWVioirmj.png">
                                            <h6 class="mb-0 left-panel__list-item--label"><b>Trung Tâm Khoa Học</b></h6>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--/ suggestion pages -->

                            <!-- twitter feed card -->

                            <!--/ twitter feed card -->
                        </div>
                        <!--/ left profile info section -->

                        <!-- center profile info section -->
                        <div class="col-lg-6 col-12 order-1 order-lg-2 center-panel" id="centerPanel">
                            {{-- Create NewFeed  --}}
                            <div class="card" style="height:150px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                alt="" class="right-nav--avatar">
                                        </div>
                                        <div class="col-md">
                                            <button class="btn status-newfeed_create--btn text-start">Tuấn
                                                ơi, bạn đang
                                                nghĩ
                                                gì
                                                thế
                                                ?</button>
                                        </div>
                                        <div class="dropdown-divider mt-2"></div>
                                        <ul class="d-flex">
                                            <li class="btn button_list-item d-flex">
                                                <img height="24" width="24" alt=""
                                                    referrerpolicy="origin-when-cross-origin"
                                                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/v1iF2605Cb5.png">
                                                <b class="ms-1" style="margin-top: 4px;">Video
                                                    Trực Tiếp</b>
                                            </li>
                                            <li class="btn button_list-item d-flex">
                                                <img height="24" width="24" alt=""
                                                    referrerpolicy="origin-when-cross-origin"
                                                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png">
                                                <b class="ms-1" style="margin-top: 4px;">Ảnh
                                                    /
                                                    Video</b>
                                            </li>
                                            <li class="btn button_list-item d-flex">
                                                <img height="24" width="24" alt=""
                                                    referrerpolicy="origin-when-cross-origin"
                                                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png">
                                                <b class="ms-1" style="margin-top: 4px;">Cảm
                                                    xúc
                                                    / Hoạt động</b>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- end --}}

                            <!-- post -->
                            <template v-for="(v, k) in listNewFeed">
                                <div class="card">
                                    <div class="card-body" style="padding-bottom: 0;">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <!-- avatar -->
                                            <div class="avatar me-1">
                                                <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-18.jpg"
                                                    alt="avatar img" height="40" width="40" />
                                            </div>
                                            <!--/ avatar -->
                                            <div class="profile-user-info">
                                                <h6 class="mb-0"><b>@{{ v.username }}</b></h6>
                                                <small class="text">@{{ v.time_create }}</small>
                                            </div>
                                        </div>
                                        <p v-html="v.content" class="card-text">

                                        </p>
                                        <!-- post img -->
                                        <img class="img-fluid rounded mb-75"
                                            style="width: 100%; height: 350px; background-size: cover"
                                            v-bind:src="v.hinh_anh" alt="avatar img" />

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
                                                <li class="list-react--item" style=""><img class="x16dsc37"
                                                        height="18" role="presentation"
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
                                                <template v-if="v.like_status == 0">
                                                    <li class="btn ps-10 d-flex button-react">
                                                        <i class="fa-solid ficon fa-heart button-react--icon text-primary"></i>
                                                        <b class="ms-1 text-primary" style="margin-top: 1px;">Thích</b>
                                                    </li>
                                                </template>

                                                <li class="btn ps-10 d-flex button-react">
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
                                            <!-- share and like count and icons -->
                                        </div>
                                        <!-- comments -->

                                        <!--/ comments -->

                                        <!-- comment box -->
                                    </div>
                                </div>
                            </template>


                            <!--/ post -->

                        </div>
                        <!--/ center profile info section -->

                        <!-- right profile info section -->
                        <div class="col-lg-3 col-12 order-3 scrollable-panel hide-scrollbar right-panel" id="rightPanel">
                            <!-- latest profile pictures -->
                            <div class="card">
                                <div class="card-body" style="padding: 0;">
                                    <h5 style="padding: 15px 0 0 15px;" class="mb-0"><b>Lời Mời Kết Bạn</b></h5>
                                    <ul class="newfriend-list" style="padding-right: 30px;">
                                        <li class="newfriend-list-item">
                                            <div class="row ">
                                                <div class="col-md-3" style="margin: auto;">
                                                    <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                        alt="" class="newfriend-avatar">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row d-flex" style="justify-content: space-between;">
                                                        <div class="col-md-7" style=" padding-left: 0;">
                                                            <h6 class="mb-0" style="width: 100%;"><b>Lê
                                                                    Minh Tuấn</b>
                                                            </h6>
                                                        </div>
                                                        <div class="col-md">
                                                            <h6 class="mb-0 text-muted text-end" style="width: 100%;">
                                                                22 giờ
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex " style="margin-top:7px;">
                                                        <button class="btn btn-primary btn-newfriend me-2">Chấp
                                                            Nhận</button>
                                                        <button class="btn btn-danger btn-newfriend">Từ Chối</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="dropdown-divider mt-2 mb-2"></div>

                                        <li class="newfriend-list-item">
                                            <div class="row ">
                                                <div class="col-md-3" style="margin: auto;">
                                                    <img src="https://scontent.fdad3-6.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX-XhZPr&_nc_ht=scontent.fdad3-6.fna&oh=00_AfCoqXOB-bsRrMuSis4l5c2_B8iBxd2yrVPOrPPeyYAFXg&oe=64DDB486"
                                                        alt="" class="newfriend-avatar">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row d-flex" style="justify-content: space-between;">
                                                        <div class="col-md-7" style=" padding-left: 0;">
                                                            <h6 class="mb-0" style="width: 100%;"><b>Lê
                                                                    Minh Tuấn</b>
                                                            </h6>
                                                        </div>
                                                        <div class="col-md">
                                                            <h6 class="mb-0 text-muted text-end" style="width: 100%;">
                                                                22 giờ
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex " style="margin-top:7px;">
                                                        <button class="btn btn-primary btn-newfriend me-2">Chấp
                                                            Nhận</button>
                                                        <button class="btn btn-danger btn-newfriend">Từ Chối</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ latest profile pictures -->

                            <!-- suggestion -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="margin-top: 8px;"><b>Người liên hệ</b></h5>
                                        </div>
                                        <div class="col text-end">
                                            <button class="btn btn-search"><i data-feather='search'></i></button>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider "></div>

                                    <div class="d-flex justify-content-start align-items-center person-contact">
                                        <span class="avatar me-1"><img class="round"
                                                src="/vuexy_assets/app-assets//images/portrait/small/avatar-s-11.jpg"
                                                alt="avatar" height="40" width="40"><span
                                                class="avatar-status-online"></span></span>
                                        <div class="profile-user-info">
                                            <h6 class="mb-0 text-hover">Auroraphtgrp</h6>
                                            <small class="text">Đang hoạt động</small>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-start align-items-center person-contact">
                                        <span class="avatar me-1"><img class="round"
                                                src="/vuexy_assets/app-assets//images/portrait/small/avatar-s-11.jpg"
                                                alt="avatar" height="40" width="40"><span
                                                class="avatar-status-online"></span></span>
                                        <div class="profile-user-info">
                                            <h6 class="mb-0 text-hover">Auroraphtgrp</h6>
                                            <small class="text">Đang hoạt động</small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--/ suggestion -->

                            <!-- polls card -->

                            <!--/ polls card -->
                        </div>
                        <!--/ right profile info section -->
                    </div>


                </section>
                <!--/ profile info section -->
            </div>
        </div>
    </div>
@endsection