$(document).ready(function () {
    new Vue({
        el: '#user-profile',
        data: {
            userInfo: {},
            listFriend: {},
            statusAdd: 0,
            pictureOfUser: {},
            detailPicture: {},
            listNewFeed: {},
            file: '',
            filePath: '',
            newStatus: {},
            deleteStatus: {},
            detailPicture: {},
            userLogin: '',
        },
        created() {
            this.loadData();
        },
        methods: {
            // --------------------------------------------------------------------------------------------------------------
            // STATUS ACTION
            uploadStatus() {
                this.newStatus.picture = this.filePath;
                this.newStatus.id_user = this.userInfo.id;
                axios
                    .post('/api/newfeed/upload-status', this.newStatus)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.loadNewFeed();
                        } else {
                            toastr.error(res.data.message, 'Error');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            cancelStatus() {
                payload = {
                    'file': this.filePath,
                };
                axios
                    .post('/api/newfeed/cancel-status', payload)
                    .then((res) => {
                        if (res.data.status) {
                            this.file = '';
                            this.filePath = '';
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
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
                        this.pictureOfUser = res.data.picture;
                        this.listNewFeed = res.data.newfeed;
                        this.userLogin = res.data.userLogin;
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            changeReact(payload) {
                axios
                    .post('/api/newfeed/change-react', payload)
                    .then((res) => {
                        this.loadData();
                    });
            },
            deleteNewFeed(payload) {
                axios
                    .post('/api/newfeed/delete-status', payload)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.loadNewFeed();
                        } else {
                            toastr.error(res.data.message, 'Thất Bại !');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            // END STATUS ACTION
            // --------------------------------------------------------------------------------------------------------------
            // FRIEND ACTION
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
            },
            acceptFriend() {
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
            },
            // END FRIEND ACTION
            // --------------------------------------------------------------------------------------------------------------
            // FUNCTION EXTEND
            handleFileChange(event) {
                this.file = this.$refs.fileInput.files[0];
                var formData = new FormData();
                formData.append('file', this.file);
                axios
                    .post('/api/newfeed/upload-file', formData, {
                        header: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then((res) => {
                        this.filePath = res.data.path;


                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });

            },
            showUploader() {
                this.$refs.fileInput.click();
            },
            testClicks() {
                toastr.success('Dang click');
            },
            deleteNewFeed(payload) {
                axios
                    .post('/api/newfeed/delete-status', payload)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.loadData();
                        } else {
                            toastr.error(res.data.message, 'Thất Bại !');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function (k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            formatDate(dateTimeString) {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                const dateTime = new Date(dateTimeString);
                const formattedDate = dateTime.toLocaleDateString('vi-VN', options);
                return formattedDate;
            },
            // END FUNCTION EXTEND
            // --------------------------------------------------------------------------------------------------------------
        },
    });
});
