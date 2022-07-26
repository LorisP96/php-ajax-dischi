var app = new Vue({
    el: '#app',
    data: {
      dataBase: []
    },
    methods: {
        axiosCall() {
            axios.get('http://localhost:8888/php-ajax-dischi/Milestone-2/api.php') 
            .then((response) => {
                this.dataBase = response.data;
            });
        }
    },
    mounted() {
        this.axiosCall();
    }
}) 