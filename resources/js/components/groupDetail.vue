<template>
    <!-- Button trigger modal -->
<button type="button" class="btn m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa fa-users"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ group.name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item" v-for="user in userList">
                <i class="fa fa-user"></i> 
                {{ user.name }}
                <i class="fa fa-minus float-end cursor-pointer" @click.prevent="remove_user(user.id)"></i>
            </li>
            <!-- <li @click.prevent="add_user()">
                Add User
            </li> -->
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
 export default {
        props: ['groupId'],

        data() {
            return{
                group:{},
                userList:[]
            }
        },
        mounted() {
            axios.get('/groups/'+this.groupId)
                .then((response) => {
                    this.userList = response.data.users
                    this.group = response.data
                    // console.log(this.userList)
                });
        },
        methods:{
            remove_user(user){
                axios.put('/groups/'+this.groupId, {user_id:user})
                .then((response) => {
                    this.userList = response.data.users
                    this.group = response.data
                })
            },
            add_user(){
                axios.get('/groups/'+this.groupId+'/edit')
                .then((response) => {
                    console.log(response)
                })
            }
        }
    }
</script>