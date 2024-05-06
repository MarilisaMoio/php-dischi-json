const { createApp } = Vue;

createApp({
    data() {
        return {
            param: {
                discIndex: null
            }
        };
    },
    methods: {
        getCDFromApi(){
            axios.get("server.php", { params: this.param })
            .then((response) => {
                console.log(response)
            })
        }
    },
    mounted() {
        this.getCDFromApi()
    }
}).mount('#app');