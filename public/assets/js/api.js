$(document).ready(function () {
    toastr.options.showMethod = 'slideDown';
    toastr.options.progressBar = true;
    // CKEDITOR.replace('editor');
    new Vue({
        el: '#appNewFeed1',
        data: {
            listNewFeed: {},
            imgNewFeed: {},
            img: '',
            listUser: {},
            listRequest: {},
            selectedFileName: '',
            userInfo: {},
            userChat: {},
            profileInfo: {},
            friendInfo: {},
            file: '',
            filePath: '',
            newStatus: {},
            deleteStatus: {},
            detailPicture: {}
        },
        created() {
            this.loadNewFeed();
        },
        methods: {
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
            loadImg(arr) {
                return arr.length;
            },
            testClick() {
                toastr.success('Dang Click');
            },
            deleteNewFeed(payload) {
                console.log(payload);
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
            }
            ,
            openChat(value) {
                $("#chatBox").show();
                this.userChat = value;
                console.log(this.userChat);
            },
            createImageObject(arrayObject) {
                this.imgNewFeed = {};

                let obj = {}, arr = [];
                for (let i = 0; i < arrayObject.length; i++) {
                    const splitLinks = arrayObject[i].hinh_anh.split(';');
                    if (splitLinks[0])
                        obj = {
                            link: splitLinks,
                            id: arrayObject[i].id
                        }
                    arr.push(obj);
                } return arr;
            },

            loadNewFeed() {
                axios
                    .post('/api/newfeed/data')
                    .then((res) => {
                        this.listNewFeed = res.data.data;
                        this.userInfo = res.data.user;
                        // this.imgNewFeed = this.createImageObject(this.listNewFeed);
                        // console.log(this.imgNewFeed);
                        this.getListRequest();
                        this.loadUserData();
                        console.log(this.listNewFeed);

                    })
                    .catch((res) => {
                        // $.each(res.response.data.errors, function (k, v) {
                        //     toastr.error(v[0], 'Error');
                        // });
                    });
            },
            formatDate(dateTimeString) {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                const dateTime = new Date(dateTimeString);
                const formattedDate = dateTime.toLocaleDateString('vi-VN', options);
                return formattedDate;
            },
            loadUserData() {
                axios
                    .post('/api/newfeed/data-user',)
                    .then((res) => {
                        this.listUser = res.data.data;
                    });
            },
            changeReact(payload) {
                axios
                    .post('/api/newfeed/change-react', payload)
                    .then((res) => {
                        this.loadNewFeed();
                    });
            },
            getListRequest() {
                axios
                    .post('/api/newfeed/get-list-request',)
                    .then((res) => {
                        this.listRequest = res.data.data;
                    });
            },
            acceptFriend(payload) {
                axios
                    .post('/api/newfeed/accept-friend', payload)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success(res.data.message, 'Thành Công !');
                            this.loadNewFeed();
                        }
                    });
            },
            refuseFriend(payload) {
                axios
                    .post('/api/newfeed/refuse-friend', payload)
                    .then((res) => {

                        if (res.data.status) {
                            toastr.error(res.data.message, 'Thành Công !');
                            this.loadNewFeed();
                        } else {
                            toastr.error(res.data.message, 'Thất Bại');
                        }
                    });
            },
            showUploader() {
                this.$refs.fileInput.click();
            },
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
            uploadStatus() {
                this.newStatus.picture = this.filePath;
                this.newStatus.id_user = this.userInfo.id;
                console.log(this.newStatus);
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
            logOut() {
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
            loadProfile(id) {
                axios
                    .post('/api/profile/get-profile', id)
                    .then((res) => {
                        if (res.data.status) {
                            this.profileInfo = res.data.user;
                            this.friendInfo = res.data.friend;
                            window.location.href = res.data.redirect;
                            console.log(this.profileInfo);
                        } else {
                            toastr.error(res.data.message, 'Error !')
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
    // Show / Hide Box Chat
    $("#showChat").click(function () {
        $("#chatBox").show();
    });

    $("#hideChat").click(function () {
        $("#chatBox").hide();
    });
});


