var app = new Vue ({
    el: "#root",
    data: {
        dischi: [

        ]
    },
    mounted(){
        axios.get("src/js/app.js")
        .then(response => {
            console.log(response);
        });
    }







})