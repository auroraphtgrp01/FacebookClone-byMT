<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/components.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/vendors/css/extensions/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pages/authentication.css">
    <title>Facebook - Đăng Nhập vào Facebook</title>
</head>

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="blank-page">
    <div id="app" class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="container">
                <div class="content-body">
                    <div class="auth-wrapper auth-basic" style="padding-right: 100px;">
                        <div class="d-flex flex-column col-md-5" style="margin-top: -100px; padding-right: 40px;">
                            <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" style="width: 300px;"
                                alt="">
                            <h3 class="content" style="padding-left: 30px;">
                                <b>Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</b>
                            </h3>
                        </div>
                        <div class="auth-inner my-2" style="">
                            <div class="card mb-0" style="border-radius: 20px;">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-center fs-3">Đăng Nhập Vào Facebook</h4>
                                    <p class="card-text mb-2">
                                    </p>
                                    <div class="auth-login-form mt-2">
                                        <div class="mb-1">
                                            <label for="login-email" class="form-label">Email</label>
                                            <input type="text" class="form-control" v-model="loginData.email"
                                                placeholder="Nhập Email của bạn vào đây..." tabindex="1" autofocus />
                                        </div>
                                        <div class="mb-1">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label">Password</label>
                                            </div>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input v-model="loginData.password" type="password"
                                                    class="form-control form-control-merge" tabindex="2"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                            </div>
                                        </div>
                                        <button class="btn w-100 mt-2" v-on:click="login()"
                                            style="background-color: #1877f2; color: #fff; height: 50px;"
                                            tabindex="4">Đăng Nhập</button>
                                    </div>
                                    <div class="divider my-2">
                                        <div class="divider-text">Chưa có tài khoản ?</div>
                                    </div>
                                    <div class="col text-center"><button class="btn" data-bs-toggle="modal"
                                            data-bs-target="#registerModal"
                                            style="width:
                                            200px; background-color: #42b72a; color: #fff;">Đăng
                                            Ký</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="registerModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-white">
                        <h3 class="modal-title fs-3" style="margin: auto;"><b>Đăng Ký</b></h3>
                    </div>
                    <div class="modal-body row">
                        <div class="col-md-6"><label>First Name: </label>
                            <div class="mb-1">
                                <input type="text" placeholder="" class="form-control"
                                    v-model="registerData.firstname" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Last Name: </label>
                            <div class="mb-1">
                                <input type="text" placeholder="" class="form-control"
                                    v-model="registerData.lastname" />
                            </div>
                        </div>
                        <label>Email: </label>
                        <div class="mb-1">
                            <input type="text" placeholder="" class="form-control"
                                v-model="registerData.email" />
                        </div>
                        <div class="col-md-6"><label>Số Điện Thoại: </label>
                            <div class="mb-1">
                                <input type="text" placeholder="" class="form-control"
                                    v-model="registerData.phone" />
                            </div>
                        </div>
                        <div class="col-md-6"> <label>Ngày Sinh: </label>
                            <div class="mb-1">
                                <input type="date" placeholder="" class="form-control"
                                    v-model="registerData.dateofbirth" />
                            </div>
                        </div>
                        <label>Password: </label>
                        <div class="mb-1">
                            <input type="password" placeholder="Password" class="form-control"
                                v-model="registerData.password" />
                        </div>


                    </div>
                    <div class="modal-footer d-flex bg-white" style="padding-top: 20px;padding-bottom: 20px;">
                        <button type="button" v-on:click="register()"
                            style="width: 80%; margin: auto; background-color: #42b72a; color: #fff;" class="btn"
                            data-bs-dismiss="modal">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/assets/app-assets/vendors/js/vendors.min.js"></script>
    <script src="/assets/app-assets/vendors/js/vendors.min.js"></script>

    <script src="/assets/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/authentication.js"></script>
    <script src="/assets/app-assets/js/scripts/pages/auth-login.js"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>
