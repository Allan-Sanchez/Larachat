<template>
    <b-row class="mt-3">
            <b-col >
                <b-row>
                    <b-col class="d-flex">
                        <!-- <b-form> -->
                            <div class="d-flex">
                                <div class="btn-icon-style">
                                    <svg width="30"  viewBox="0 0 48 48"><title>ic_attach_file_48px</title>
                                        <g fill="#ccc">
                                            <path d="M33 12v23c0 4.42-3.58 8-8 8s-8-3.58-8-8V10c0-2.76 2.24-5 5-5s5 2.24 5 5v21c0 1.1-.89 2-2 2-1.11 0-2-.9-2-2V12h-3v19c0 2.76 2.24 5 5 5s5-2.24 5-5V10c0-4.42-3.58-8-8-8s-8 3.58-8 8v25c0 6.08 4.93 11 11 11s11-4.92 11-11V12h-3z"></path>
                                        </g>
                                    </svg>
                                </div>

                                <div class="btn-icon-style">
                                    <svg width="30" viewBox="0 0 48 48"><title>ic_insert_emoticon_48px</title>
                                        <g fill="#ccc">
                                            <path d="M23.99 4C12.94 4 4 12.95 4 24s8.94 20 19.99 20C35.04 44 44 35.05 44 24S35.04 4 23.99 4zM24 40c-8.84 0-16-7.16-16-16S15.16 8 24 8s16 7.16 16 16-7.16 16-16 16zm7-18c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-14 0c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm7 13c4.66 0 8.61-2.91 10.21-7H13.79c1.6 4.09 5.55 7 10.21 7z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="mx-2" style="width: 85%">
                                <b-form-input  placeholder="Type your message" autofocus="" v-model="dataMessage" @keypress.enter="SendMessage()" ></b-form-input>
                            </div>

                            <div class="btn-icon-style mx-1" @click="SendMessage()">
                                    <svg  width="30"  viewBox="0 0 64 64"><title>send-2</title>
                                        <g fill="#ccc">
                                            <path d="M61.707,2.293c-0.273-0.275-0.683-0.365-1.048-0.233l-58,21c-0.378,0.137-0.638,0.488-0.658,0.89 c-0.02,0.402,0.203,0.777,0.566,0.952l20.886,10.025l18.866-13.945c0.462-0.341,1.041,0.238,0.699,0.699L29.074,40.547 l10.025,20.886C39.266,61.78,39.617,62,40,62c0.017,0,0.033,0,0.05-0.001c0.402-0.021,0.753-0.28,0.891-0.658l21-58 C62.072,2.976,61.981,2.567,61.707,2.293z"></path>
                                        </g>
                                    </svg>
                            </div>
                        <!-- </b-form> -->
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
</template>

<script>
export default {
    data() {
        return {
            dataMessage: '',
        }
    },
    methods: {
        SendMessage(){
            if(this.dataMessage !== ''){

                const params = {
                    to_id:2,
                    content: this.dataMessage
                }
                axios.post('/api/messages',params)
                .then((response) =>{
                //   console.log(response.data);
                  this.$emit('new-message', response.data);
                  this.dataMessage = '';
                });
            }
        }
    },
}
</script>