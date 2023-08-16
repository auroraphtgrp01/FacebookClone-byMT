$(document).ready(function () {
    toastr.options.showMethod = 'slideDown';
    toastr.options.progressBar = true;
    new Vue({
        el: '#appNewFeed',
        data: {
            listNewFeed: {},
            imgNewFeed: {},
            img: '',
            listUser: {},
            listRequest: {},
            selectedFileName: '',
            userInfo: {},
        },
        created() {
            this.loadNewFeed();

        },
        methods: {
            loadImg(arr) {
                return arr.length;
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
                    f
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
                const selectedFile = event.target.files[0];
                if (selectedFile) {
                    this.selectedFileName = selectedFile.name;
                }
            },
            uploadStatus() {
                if (this.selectedFileName) {
                    let formData = new FormData();
                    formData.append('file', this.selectedFileName);
                    axios
                        .post('/api/newfeed/upload-status', formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
                        .then((res) => { });
                }
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
            }
        },
    });
});
