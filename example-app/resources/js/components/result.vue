<template>
    <a class="btn btn-primary" @click="toggleForm()"> Add </a>
    <div v-if="showForm">
        <form action="" @submit.prevent="submitForm()">
            <label for="result" class="form-label">result</label>
            <input v-model="resultform.result" id="result" class="swal2-input" />

            <label for="Month" class="form-label">month</label>
            <input v-model="resultform.result" id="Month" class="swal2-input" />
            <label for="country">Owner:</label>
            <select
                v-model="resultform.type"
                class="swal2-input"
                name="type"
                id="type"
            >
             <!--<select v-model="selected">-->
                <option disabled value="">Please select one</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                
                
            </select>
            <select
                v-model="resultform.type"
                class="swal2-input"
                name="status"
                id="status"
            >
             <!--<select v-model="selected">-->
                <option disabled value="">Please select one</option>
                <option>ON target</option>
                <option>OFF target</option>
                
                
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
            resultform: {
                result: "",
                Month: "",
                type:"",
                status:"",
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
            axios.post("/api/storeAction", this.resultform).then((response) => {
                this.showForm = false;
                this.resultform = {
                    result: "",
                    Month:"",
                    type:"",
                    status:"",
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
