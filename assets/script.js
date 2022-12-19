new Vue({
    el: '#app',
    data: {
        genres: [],
        discs: [],
        genre: 'all',
        urlApi: "http://localhost:8888/php-ajax-dischi/API.php",
        urlGeneri:"http://localhost:8888/php-ajax-dischi/db/generi.php",
    },
    created() {
        axios.get(this.urlDiscs)
            .then(axiosResponse => this.discs = axiosResponse.data);
        axios.get(this.urlGenres)
            .then(axiosResponse => this.genres = axiosResponse.data);
    },
    methods: {
        getList() {
            axios.get(this.urlDiscs, {
                params: {
                    genre: this.genre
                }
                })
                .then(axiosResponse => this.discs = axiosResponse.data)
        }
    }
})