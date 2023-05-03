<template>
    <div class="card">
        <div class="card-header bg-gradient-success">
            <h5 class="text-white">Create Group</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Group Name :</label>
                    <input class="form-control" type="text" v-model="name" placeholder="Group Name">
                </div>
                <div class="form-group">
                    <label>Select User :</label>
                    <select class="form-select" v-model="users" multiple id="friends">
                        <option v-for="user in initialUsers" :value="user.id">
                            {{ user.name }}
                        </option>
                    </select>
                </div>
            </form>
        </div>
        <div class="card-footer text-center pt-0">
            <button type="submit" @click.prevent="createGroup" class="btn btn-primary">Create Group</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['initialUsers'],

        data() {
            return {
                name: '',
                users: []
            }
        },

        methods: {
            createGroup() {
                console.log(this.users)
                axios.post('/groups', {name: this.name, users: this.users})
                .then((response) => {
                    this.name = '';
                    this.users = [];
                    this.$emit('groupCreated', response.data);
                });
            }
        }
    }
</script>