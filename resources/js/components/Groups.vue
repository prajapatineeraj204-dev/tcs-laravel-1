<template>
    <div>
        <group-chat v-for="group in groups" :group="group" :key="group.id"></group-chat>
        
    </div>
</template>

<script>

    export default {
        props: ['initialGroups', 'user'],
        data() {
            return {
                groups: []
            }
        },
        mounted() {
            console.log(this.groups)
            this.groups = this.initialGroups;
            this.$emit('groupCreated', (group) => {
                this.groups.push(group);
            });
            this.listenForNewGroups();
        },
        methods: {
            listenForNewGroups() {
                Echo.private('users.' + this.user.id)
                    .listen('GroupCreated', (e) => {
                        this.groups.push(e.group);
                    });
            }
        }
    }
</script>