<template>
    <a class="btn btn-primary" @click="toggleForm()"> Add </a>
    <div v-if="showForm">
        <form action="" @submit.prevent="submitForm()">
            <label for="title" class="form-label">Title</label>
            <input v-model="actionForm.title" id="title" class="swal2-input" />
            <label for="country">Owner:</label>
            <select
                v-model="actionForm.user_id"
                class="swal2-input"
                name="user_id"
                id="user_id"
            >
                <option v-for="user in users" :value="user.id">
                    {{ user.name }}
                </option>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
            </select>
            <button class="btn btn-primary" type="submit">submit</button>
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    props: ["project_id"],
    data() {
        return {
            users: [],
            showForm: false,
            actionForm: {
                title: "",
                user_id: "",
                project_id: this.project_id,
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
            axios.post("/api/storeAction", this.actionForm).then((response) => {
                this.showForm = false;
                this.actionForm = {
                    title: "",
                    user_id: "",
                    project_id: this.project_id,
                };
            });
        },
        // async handle() {
        //     const { value: formValues } = await this.$swal.fire({
        //         title: "Multiple inputs",
        //         html:
        //             '<label for="title" class="form-label">Title</label>' +
        //             '<input id="title" class="swal2-input">' +
        //             '<label for="country">Country:</label>' +
        //             '<select class="swal2-input" name="user_id" id="user_id">' +
        //             '<option value="2">Sri Lanka</option>' +
        //             '<option value="3">Australia</option>' +
        //             "</select>",
        //         focusConfirm: false,
        //         preConfirm: () => {
        //             let select = document.getElementById("user_id");
        //             let option = document.createElement("option");
        //             option.value = 1;
        //             option.text = "option 1";
        //             select.add(option);
        //             return [
        //                 {
        //                     title: document.getElementById("title").value,
        //                     user_id: document.getElementById("user_id").value,
        //                 },
        //             ];
        //         },
        //     });

        //     if (formValues) {
        //         this.$swal.fire(JSON.stringify(formValues));
        //         // console.log(formValues[0].title)
        //         axios.post("/api/storeAction", {
        //             title: formValues[0].title,
        //             user_id: formValues[0].user_id,
        //             project_id: this.project_id,
        //         });
        //     }
        // },
    },
};
</script>
