new Vue({
    el: '#app',
	data: {
        albums: [],
        urlApi: "http://localhost:8888/php-ajax-dischi/API.php",
    },
    created(){
        axios.get(this.urlApi)
            .then(axiosResponse =>{
                console.log(axiosResponse);
                this.albums = axiosResponse.data
            });
    }
})