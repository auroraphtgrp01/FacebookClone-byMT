$(document).ready(function () {
    new Vue({
        el: '#appHeader',
        data: {
            userInfo: {},
        },
        created() {
            console.log('ssdsddsdssd');
            this.loadHeader();
        },
        methods: {
            loadHeader() {
                axios
                    .post('/api/header/header-data',)
                    .then((res) => {
                        this.userInfo = res.data.data;
                        console.log(this.userInfo);
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            }, logOut() {
                axios
                    .post('/api/newfeed/log-out',)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            setTimeout(() => {
                                window.location.href = res.data.redirect;
                            }, 1000);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
        },
    });
});
