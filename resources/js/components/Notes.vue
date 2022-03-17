    <template>
    <div>
        <h4 class="text-center">All notes</h4><br/>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="note in notes" :key="note.id">
                <td>{{ note.id }}</td>
                <td>{{ note.title }}</td>
                <td>{{ note.content }}</td>
                <td>{{ note.created_at }}</td>
                <td>{{ note.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editnote', params: { id: note.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteNote(note.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-info" @click="this.$router.push('/notes/add')">Add Note</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            notes: []
        }
    },
    created() {
        this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/api/notes')
                .then(response => {
                    this.notes = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
    methods: {
        deleteNote(id) {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.delete(`/api/notes/delete/${id}`)
                    .then(response => {
                        let i = this.note.map(item => item.id).indexOf(id); // find index of your object
                        this.note.splice(i, 1)
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