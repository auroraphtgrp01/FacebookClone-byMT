$('document').ready(function () {
    toastr.options.showMethod = 'slideDown';
    toastr.options.progressBar = true;
    new Vue({
        el: '#app',
        data: {
            loginData: {},
            registerData: {},
        },
        created() {

        },
        methods: {
            login() {
                console.log(this.loginData);
                axios
                    .post('/api/authentication/login', this.loginData)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            setTimeout(() => {
                                window.location.href = res.data.redirect;
                            }, 1000);
                        } else {
                            toastr.error(res.data.message, 'Thất Bại !')
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            register() {
                console.log(this.registerData);
                axios
                    .post('/api/authentication/register', this.registerData)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                        } else {
                            toastr.error(res.data.message, 'Thất Bại !')
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            }
        },
    });
});
