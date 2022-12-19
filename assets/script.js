new Vue({
    el: '#app',
	data: {
        albums: [],
        generi:[],
        urlApi: "http://localhost:8888/php-ajax-dischi/API.php",
        urlGeneri:"http://localhost:8888/php-ajax-dischi/db/generi.php",
        genere:'all',
    },
    created(){
        axios.get(this.urlApi)
            .then(axiosResponse =>{
                console.log(axiosResponse);
                this.albums = axiosResponse.data
            });
        axios.get(this.urlGeneri)
            .then(axiosResponse =>{
                console.log(axiosResponse);
                this.generi = axiosResponse.data
            });
    },
    methods: {
        getList() {
            axios.get()
        }
    }
})