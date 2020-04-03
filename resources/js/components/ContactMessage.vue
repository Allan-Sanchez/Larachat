<template>
    <div class="notice notice-primary alert fade show" role="alert">
        <b-row class=" d-flex">
            <b-col md="3" class="m-0 p-0">
                <b-img src="https://res.cloudinary.com/dx9n8tsyu/image/upload/v1571179377/photo_qcal36.jpg" class="img-thumbnail m-0 p-0"  rounded="circle" alt="Circle image"></b-img>
            </b-col>
            <b-col md="9">
                <div class="d-flex justify-content-between">
                    <span class="d-block"><strong>{{name}}</strong></span>
                    <span class="d-block text-muted">{{lastTime}}</span>
                </div>

                <p class="text-muted" >{{lastMessage}}</p>
            </b-col>
            <!--            <b-col md="2" class="text-muted">{{lastTime}}</b-col>-->

        </b-row>
    </div>
</template>

<script>
    export default {
        name: "ContactMessage",
        data(){
            return {
                name: "Allan Sanchez",
                lastMessage: "Tu: Hasta luego. ",
                lastTime: "1:35 pm"
            }
        }
    }
</script>

<style scoped>

</style>
