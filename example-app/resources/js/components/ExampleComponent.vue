<template>
    <a class="btn btn-primary" @click="handle()"> Add </a>
</template>

<script>
import axios from "axios";
export default {
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        async handle() {
            // console.log('clicked')
            // this.$swal('Hello Vue world!!!');
            const { value: formValues } = await this.$swal.fire({
                title: "Multiple inputs",
                html:
                    '<input id="title" class="swal2-input">' +
                    '<input id="swal-input2" class="swal2-input">',
                focusConfirm: false,
                preConfirm: () => {
                    return [
                        {
                            title: document.getElementById("title").value,
                            autre: document.getElementById("swal-input2").value,
                        },
                    ];
                },
            });

            if (formValues) {
                this.$swal.fire(JSON.stringify(formValues));
                // console.log(formValues[0].title)
                axios.post("/api/storeAction", {
                    title: formValues[0].title,
                    user_id: 1,
                    project_id: 6,
                });
            }
        },
    },
};
</script>
