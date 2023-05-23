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
            </select>
            <label for="impact">impact:</label>
            <input v-model="actionForm.impact" id="impact" class="swal2-input" />
            <label for="impact">due DAte:</label>
            <input v-model="actionForm.due_date" type="date" id="due_date" class="swal2-input" />
            <label for="impact">Dmaic:</label>
                <input
                    v-model="actionForm.is_complex"
                    id="is_complex"
                    type="checkbox"
                    class=" swal1-input"
                    true-value="1"
                    false-value="0"
                />
               
          
            <!-- <input v-model="actionForm.is_complex" id="is_complex"  type="checkbox" class="swal2-input" true-value="1" false-value="0" /> -->
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
                due_date:"",
                start_date:"",
                impact:"",
                is_complex: 0,
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
                    due_date:"",
                    start_date:"",
                    impact:"",
                    is_complex: "",
                    project_id: this.project_id,
                };
                window.location.href = "/dmaicProjects/create"
                // this.$router.push('/dmaicProjects/create');
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
