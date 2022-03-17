<template>
    <div>
        <h4 class="text-center">Add Note</h4>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addNote">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="note.name">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" v-model="note.content">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Note</button>
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
    methods: {
        addNote() {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.post('/api/notes/add', this.note)
                    .then(response => {
                        this.$router.push({name: 'notes'})
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