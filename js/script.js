const { createApp } = Vue;

createApp({
    data() {
        return {
            param: {
                discIndex: null
            },
            discs: [],
        };
    },
    methods: {
        getCDFromApi(){
            axios.get("server.php", { params: this.param })
            .then((response) => {
                this.discs = response.data;
            })
        }
    },
    mounted() {
        this.getCDFromApi()
    }
}).mount('#app');