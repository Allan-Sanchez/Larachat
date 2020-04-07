<template>
    <b-row class=" d-flex " :class="flexColumn">
        <b-col>
        </b-col>
        <b-col md="8" class="d-flex flex-column" style="max-width: 70%">
            <div>
                <span class=" float-right"> <slot name="time-message"></slot></span>
            </div>
            <b-alert show :variant="colorMessage">
                <slot name="message"></slot>
            </b-alert>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        name: "message",
        props:{
            messageEmisor : Boolean
        },
        data() {
            return {
                    flexColumn : 'flex-column',
                    colorMessage: 'danger'
            }
        },
        mounted() {
            if (!this.messageEmisor) {
                this.flexColumn = '';
                this.colorMessage ='info';
            }
        },
        
    }
</script>

<style scoped>

</style>
