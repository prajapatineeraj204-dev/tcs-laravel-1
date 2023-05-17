<template>
        <div class="accordion-item border p-2 mb-2">
            
            <div class="accordion-header" :id="'accordion'+group.id">
                <button @click.prevent="fetch_con()" class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapseOne-'+group.id" aria-expanded="true" aria-controls="collapseOne">
                     {{ group.name }}
                    
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
                <group-detail :groupId="group.id"></group-detail>
            </div>
            <div class="accordion-collapse collapse" :id="'collapseOne-' + group.id">
                <div class="accordion-body">
                    <ul class="chat p-0">
                        <li class="list-inline" v-for="conversation in conversations">
                        <!-- <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span> -->
                            <div v-if="user_id==conversation.user_id" class="chat-body clearfix send-message">
                                <span class="send-message">
                                    <svg viewBox="0 0 8 13" height="13" width="8" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 8 13" xml:space="preserve"><path opacity="0.13" d="M5.188,1H0v11.193l6.467-8.625 C7.526,2.156,6.958,1,5.188,1z"></path><path fill="currentColor" d="M5.188,0H0v11.193l6.467-8.625C7.526,1.156,6.958,0,5.188,0z"></path></svg>
                                </span>
                                <div class="header">
                                    <strong class="primary-font">{{ conversation.user.name }}</strong>
                                </div>
                                <p class="m-0">
                                    {{ conversation.message }}
                                </p>
                                <small>{{ getFormattedDate(conversation.created_at,"hh:mm A") }}</small>
                            </div>
                            <div v-else class="chat-body clearfix recived-message">
                                <span class="recived-message">
                                    <svg viewBox="0 0 8 13" height="13" width="8" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 8 13" xml:space="preserve"><path opacity="0.13" fill="#0000000" d="M1.533,3.568L8,12.193V1H2.812 C1.042,1,0.474,2.156,1.533,3.568z"></path><path fill="currentColor" d="M1.533,2.568L8,11.193V0L2.812,0C1.042,0,0.474,1.156,1.533,2.568z"></path></svg>
                                </span>
                                <div class="header">
                                    <strong class="primary-font">{{ conversation.user.name }}</strong>
                                </div>
                                <p class="m-0">
                                    {{ conversation.message }}
                                </p>
                                <small>{{ getFormattedDate(conversation.created_at,"hh:mm A") }}</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control border-primary" placeholder="Type your message here..." v-model="message" @keyup.enter="store()" autofocus />
                        <button class="btn btn-outline-primary mb-0" id="btn-chat" @click.prevent="store()">
                                Send</button>
                       
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    import moment from 'moment';
    export default {
        props: ['group'],

        data() {
            return {
                conversations: [],
                message: '',
                group_id: this.group.id,
                user_id:0,
            }
        },

        mounted() {
            this.listenForNewMessage();
        },

        methods: {
            getFormattedDate(date,format) {
                return moment(date).format(format)
            },
            fetch_con(){
                axios.get('/conversations/'+this.group.id)
                .then((response) => {
                    this.user_id=response.data.user_id;
                    this.conversations=response.data.data;
                });
            },
            store() {
                axios.post('/conversations', {message: this.message, group_id: this.group.id})
                .then((response) => {
                    this.message = '';
                    console.log(response.data)
                    this.conversations.push(response.data);
                    // this.listenForNewMessage()
                });
            },

            listenForNewMessage() {
                Echo.private('groups.' + this.group.id)
                    .listen('NewMessage', (e) => {
                        this.conversations.push(e.conversation);
                    });
            }
        }
    }
</script>