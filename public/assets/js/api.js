$(document).ready(function () {
    toastr.options.showMethod = 'slideDown';
    toastr.options.progressBar = true;
    new Vue({
        el: '#app',
        data: {
            listNewFeed: {},
            imgNewFeed: {},
            img: '',
            listUser: {},
            listRequest: {},
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
                        // this.imgNewFeed = this.createImageObject(this.listNewFeed);
                        // console.log(this.imgNewFeed);
                        console.log(this.listNewFeed);
                        this.getListRequest();
                        this.loadUserData();


                    })
                    .catch((res) => {
                        // $.each(res.response.data.errors, function (k, v) {
                        //     toastr.error(v[0], 'Error');
                        // });
                    });
            },
            loadUserData() {
                axios
                    .post('/api/newfeed/data-user',)
                    .then((res) => {
                        this.listUser = res.data.data;
                        console.log(this.listUser);

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
                        console.log(this.listRequest);
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
            }
        },
    });
});
