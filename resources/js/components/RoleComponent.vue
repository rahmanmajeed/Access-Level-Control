<template>
 <div class="container">
   <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">List Component <button class="btn btn-primary float-right"> Create</button></div>

                    <div class="card-body">
                       <table class="table table-bordered">
                        <thead>
                        <th>Sl. no.</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Role</th>
                        <th>Action</th>

                        </thead>
                        <tbody>
                          <tr v-for="(value,key) in users">
                             <td>{{++key}}</td>
                             <td>{{value.name}}</td>
                             <td>{{value.email}}</td>
                             <td>{{value.name}}</td>
                             <td><button class="btn btn-info" @click="update(value.id)" >Edit</button> <button class="btn btn-danger" @click="destroy">Delete</button></td>

                          </tr>
                        </tbody>
                       </table>
                    </div>
                </div>
        </div>
   </div>
 </div>
</template>
<script>
export default{
    data(){
        return{
            users:[],
            counter:0,
        }
    },
    methods:{
        read:function(){
            axios.get('/user/list')
            .then(response=>{
                this.users=response.data;
                console.log(response.data);
            })
            .catch(err=>{
                console.log(err);
            })

        },
       update:function(id){
           alert("Waiting for update...".id);
       },
       destroy:function(){
           alert("Dhustu are you sure ??");
       },
       count:function(key){
          
       }
    },
    computed:{
       
    },
    mounted(){
        console.log('Component Loaded');
        this.read();
    }
}
</script>