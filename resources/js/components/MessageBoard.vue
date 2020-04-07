<template>
    <div>
        <info-message>
            <template slot="image"></template>
            <template slot="name">Allan Sanchez </template>
            <template slot="state">Online</template>
        </info-message>

        <b-row class="mt-2 mx-2" style="height: 70%">
            <b-col md="12" class=" scroll_text scroll_message"  >

                <message v-for="data in dataMessageCopie" :key="data.id" :message-emisor="data.written_by_me" >
                    <template slot="time-message">{{ data.created_at}}</template>
                    <template slot="message">{{ data.content}}</template>
                </message>

            </b-col>

        </b-row>
        <form-message v-on:new-message="newMessage"></form-message>
    </div>
</template>

<script>
import formMessage from "./FormMessage.vue";
import { format } from 'timeago.js';
            // render(nodes, 'en_US');

    export default {
        components:{
            formMessage
        },
        name: "MessageBoard",
        data() {
            return {
                dataMessageCopie: [],
            }
        },
        mounted() {

            this.getMessages();
        },
        methods: {
            getMessages(){
                axios.get('/api/messages')
                .then((response) =>{
                //   console.log(response.data);
                  this.dataMessageCopie = response.data.map((obj,index) =>{
                        obj.created_at = format(obj.created_at);
                            return obj;        
                  })
                // console.log(this.dataMessageCopie)
                });
            },
            newMessage(message){
                if (message.success) {
                    this.getMessages();
                }
            }
        },
    }
</script>

<style scoped>

</style>
