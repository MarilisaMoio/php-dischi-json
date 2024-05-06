const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
            singleElement: {},
            popupIsVisible: false
        };
    },
    methods: {
        getCDFromApi(){
            axios.get("server.php")
            .then((response) => {
                this.discs = response.data;
            })
        },
        getSingleDisc(index){
            param = {
                discIndex: index
            };

            axios.get("server.php", { params: param })
            .then((response) => {
                this.singleElement = response.data;
            })

            this.popupIsVisible = true;
        },
        clearPopup(){
            this.popupIsVisible = false;
            this.singleElement = {};
        }
    },
    mounted() {
        this.getCDFromApi()
    }
}).mount('#app');