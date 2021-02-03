var app = new Vue ({
    el: "#root",
    data: {
        dischi: [

        ]
    },
    mounted(){
        axios.get("api_dischi.php")
        .then(response => {
            this.dischi = response.data;
        });
    }







})