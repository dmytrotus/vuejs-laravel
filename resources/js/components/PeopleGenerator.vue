<template>
    <div class="container text-center">
        <img width="150" class="mt-5 img-fluid" v-bind:src="picture" alt="">
        <h1>{{ firstName }}</h1>
        <h3>{{ email }}</h3>

        <button v-on:click="changeUserAsync()"
        :class="`btn btn-primary `+gender">Get Random User</button>

        <button v-on:click="showModal()">Show Modal</button>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ modal.title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        
    </div>
</template>

<script>
    export default {
        mounted() {
            //console.log('Component mounted.')
        },
        data() {
            return{
                firstName: 'Jon Doe',
                email: 'email@email.com',
                gender: 'female',
                picture: 'https://avataaars.io/?avatar',
                modal: {
                    title: 'Jakis tekst'
                }

            }
        },
        methods: {
            changeUser() {
                console.log(this.firstName)
                this.firstName = 'Vasia Pupkin'
                this.picture = 'https://randomuser.me/api/portraits/men/10.jpg'
            },
            async changeUserAsync(){
                const res = await fetch('https://randomuser.me/api')
                const { results } = await res.json();
                this.firstName = results[0].name.first
                this.showModal('Jakis inny tekst')

            },
            showModal(tekst){
                if(tekst && tekst.length){
                    this.modal.title = tekst;
                }
                $('#myModal').modal('show')
            }
        }
    }
</script>
