$(document).ready(function () {
    new Vue({
        el: '#user-profile',
        data: {

        },
        created() {
            console.log('sdsdsd');
        },
        methods: {
            testClicks() {
                toastr.success('Dang click');
                console.log('sdsd');
            }
        },
    });
});
