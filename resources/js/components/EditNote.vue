<template>
    <div>
        <h4 class="text-center">Edit Note</h4>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateNote">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="note.title">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" v-model="note.content">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Note</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            note: {}
        }
    },
    created() {
        this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get(`/api/notes/edit/${this.$route.params.id}`)
                .then(response => {
                    this.note = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
    methods: {
        updateNote() {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.post(`/api/Note/update/${this.$route.params.id}`, this.note)
                    .then(response => {
                        this.$router.push({name: 'notes'});
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            })
        }
    },
    beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    }
}
</script>