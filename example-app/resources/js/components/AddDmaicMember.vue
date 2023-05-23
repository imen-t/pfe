<template>
     <div>
    <a class="btn btn-primary" @click="toggleForm()"> Add Member</a>
    <div v-if="showForm">
        <form action="" @submit.prevent="submitForm()">
            <!-- <label for="title" class="form-label">Title</label>
            <input v-model="actionForm.title" id="title" class="swal2-input" /> -->
            <label for="country">Users:</label>
            <select
                v-model="UsersForm.user_id"
                class="swal2-input"
                name="user_id"
                id="user_id"
            >
                <option v-for="user in users" :value="user.id">
                    {{ user.name }}
                </option>
            </select>
            <button class="btn btn-primary" type="submit">submit</button>
        </form>
    </div>
</div>
</template>

<script>
import axios from "axios";
export default {
    props: ["dmaic_project_id"],
    data() {
        return {
            users: [],
            showForm: false,
            UsersForm: {
                user_id: "",
                dmaic_project_id: this.dmaic_project_id,                
            },
        };
    },
    mounted() {
        axios.get("/api/users").then((response) => {
            this.users = response.data;
        });
    },
    methods: {
        toggleForm() {
            this.showForm = !this.showForm;
        },
        submitForm() {
            // console.log("submit");
            axios.post("/api/addDmaicMember", this.UsersForm).then((response) => {
                this.showForm = false;
                this.actionForm = {
                    user_id: "",
                    dmaic_project_id: this.dmaic_project_id,
                };
            });
        },
    },
};
</script>
