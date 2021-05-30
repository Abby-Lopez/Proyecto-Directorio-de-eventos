const app = Vue.createApp({
    data(){
        return{
            
        }
    },
    methods:{
        showEventDetails(index){
            this.selectedEvent = index; 
        }
    }
});