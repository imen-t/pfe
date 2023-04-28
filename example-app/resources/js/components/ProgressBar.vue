<template lang="">
    <div>
        <div class="progress">
            <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                aria-valuenow="75"
                aria-valuemin="0"
                aria-valuemax="100"
                v-bind:style="{width: progressValue}"
            ></div>
        
        </div>
    </div>
</template>
<script>
export default {
    props: ["date"],
    computed:{
        progressValue(){
            switch (this.date) {
                case "2023-04-18":
                    return '80%'
                    break;
            
                default:
                    break;
            }
        }
    }

};
</script>
<style lang=""></style>
