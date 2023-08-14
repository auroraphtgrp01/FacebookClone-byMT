$(document).ready(function () {
    new Vue({
        el: '#app',
        data: {
            listNewFeed: {},
            imgNewFeed: {},
            img: '',
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

                    })
                    .catch((res) => {
                        // $.each(res.response.data.errors, function (k, v) {
                        //     toastr.error(v[0], 'Error');
                        // });
                    });
            }
        },
    });
});
