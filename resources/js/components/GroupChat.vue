<template>
    <div class="accordion">
        <div class="accordion-item">
            
            <div class="accordion-header" :id="'accordion'+group.id">
                <button @click.prevent="fetch_con()" class="accordion-button" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapseOne-'+group.id" aria-expanded="true" aria-controls="collapseOne">
                    <span class="glyphicon glyphicon-comment"></span> {{ group.name }}
                    
                </button>
            </div>
            <div class="accordion-collapse collapse" :id="'collapseOne-' + group.id">
                <div class="accordion-body">
                    <ul class="chat">
                        <li v-for="conversation in conversations">
                        <!-- <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span> -->
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">{{ conversation.user.name }}</strong>
                                </div>
                                <p>
                                    {{ conversation.message }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." v-model="message" @keyup.enter="store()" autofocus />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat" @click.prevent="store()">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['group'],

        data() {
            return {
                conversations: [],
                message: '',
                group_id: this.group.id
            }
        },

        mounted() {
            console.log("Hiii message")
            this.listenForNewMessage();
        },

        methods: {
            fetch_con(){
                axios.get('/conversations/'+this.group.id)
                .then((response) => {
                    
                    this.conversations=response.data;
                });
            },
            store() {
                axios.post('/conversations', {message: this.message, group_id: this.group.id})
                .then((response) => {
                    this.message = '';
                    this.conversations.push(response.data);
                    // this.listenForNewMessage()
                });
            },

            listenForNewMessage() {
                console.log("new message")
                Echo.private('groups.' + this.group.id)
                    .listen('.NewMessage', (e) => {
                        // console.log(e);
                        console.log("new message")
                        this.conversations.push(e);
                    });
            }
        }
    }
</script>