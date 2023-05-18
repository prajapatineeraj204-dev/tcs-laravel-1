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
            <li class="list-group-item cursor-pointer" >
                <div @click.prevent="add_user()">
                  Add User <i class="fa fa-chevron-up float-end " v-if="addUserBox"></i>
                  <i class="fa fa-chevron-down float-end " v-else></i>
                </div>
                <div class="form-group" v-if="addUserBox">
                  <select class="form-select" v-model="newUsers" multiple id="friends">
                    <option v-for="user in otherUser" :value="user.id">
                      {{ user.name }}
                    </option>
                  </select>
                  <div class="text-center">
                    <button type="button" @click.prevent="add_group_user()" class="btn btn-primary mt-2 mb-0">Save</button>
                  </div>
                </div>
            </li>
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
                userList:[],
                addUserBox:false,
                otherUser:[],
                newUsers:[]
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
                axios.put('/groups/'+this.groupId, {user_id:user,action:"remove"})
                .then((response) => {
                    this.userList = response.data.users
                    this.group = response.data
                    this.add_user();
                })
            },
            add_user(){
                this.addUserBox=!this.addUserBox;
                axios.get('/groups/'+this.groupId+'/edit')
                .then((response) => {
                  const ids = this.userList.map(x => x.id);
                  this.otherUser=response.data.filter(x=>!ids.includes(x.id));
                })
            },
            add_group_user(){
              console.log(this.newUsers)
              axios.put('/groups/'+this.groupId, {user_id:this.newUsers,action:"add"})
                .then((response) => {
                    this.userList = response.data.users
                    this.group = response.data
                    this.add_user();
                })
            }
        }
    }
</script>