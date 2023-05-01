<template>
    <a class="btn btn-primary" @click="toggleForm()"> Add </a>
    <div v-if="showForm">
        <form action="" @submit.prevent="submitForm()">
            <label for="result_title" class="form-label">result</label>
            <input v-model="resultform.result_title" id="result_title" class="swal2-input" />

            <label for="Month" class="form-label">month</label>
            <input type="date" v-model="resultform.Month" id="Month" class="swal2-input" />
            <label for="country">type</label>
            <select
                v-model="resultform.type"
                class="swal2-input"
                name="type"
                id="type"
            >
             <!--<select v-model="selected">-->
                <option disabled value="">Please select one</option>
                <option>Fcst</option>
                <option>Act</option>
                <option>plan</option>
                
                
            </select>
            <label for="country">status</label>
            <select
                v-model="resultform.status"
                class="swal2-input"
                name="status"
                id="status"
            >
             <!--<select v-model="selected">-->
                <option disabled value="">status</option>
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
                    result_title: "",
                    Month:"",
                    type:"",
                    status:"",
                    user_id: "",
                    project_id: this.project_id,
                };
                
            });
        },

    },
};
</script>
