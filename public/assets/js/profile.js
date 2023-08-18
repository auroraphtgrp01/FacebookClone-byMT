$(document).ready(function () {
    new Vue({
        el: '#user-profile',
        data: {
            userInfo: {},
            listFriend: {},
            statusAdd: 0,
        },
        created() {
            this.loadData();
        },
        methods: {
            testClicks() {
                toastr.success('Dang click');
            },
            loadData() {
                var currentURL = window.location.href;
                var parts = currentURL.split('/');
                var username = parts[parts.length - 1];
                let payload = {
                    'username': username
                }
                axios
                    .post('/api/profile/get-profile', payload)
                    .then((res) => {
                        this.userInfo = res.data.user;
                        this.listFriend = res.data.friend;
                        this.statusAdd = res.data.status_friend;
                        console.log(this.statusAdd);
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            addFriend() {
                axios
                    .post('/api/profile/add-friend', this.userInfo)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.statusAdd = 2;
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            cancelFriendRequest() {
                axios
                    .post('/api/profile/cancel-request', this.userInfo)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.statusAdd = 3;
                        } else {

                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            removeFriend() {
                axios
                    .post('/api/profile/remove-friend', this.userInfo)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.statusAdd = 3;
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            }, acceptFriend() {
                axios
                    .post('/api/profile/accept-friend', this.userInfo)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.statusAdd = 1;
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
