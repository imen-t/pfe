<style>
 
        /* 64ac15 */
*,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
}
h4 {
  color: #f0a500;
}
input,textarea,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #bd8200;
}
input:focus + .input-icon i {
  color: #f0a500;
}
input:focus + .input-icon:after {
  border-right-color: #f0a500;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #f0a500;
  color: #fff;
  border-color: #bd8200;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #f0a500;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 38em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}
.image img {
    margin-top: 1%;
    margin-left: 1%;
  width: 170px;
  border-radius: 12px;
}


/* CSS */
.button-42 {
  background-color: initial;
  background-image: linear-gradient(-180deg, #FF7E31, #E62C03);
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
  height: 40px;
  line-height: 40px;
  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  white-space: nowrap;
  width: 100%;
  z-index: 9;
  border: 0;
  transition: box-shadow .2s;
}

.button-42:hover {
  box-shadow: rgba(253, 76, 0, 0.5) 0 3px 8px;
}



/* CSS */
.button-39 {
  background-color: #FFFFFF;
  border: 1px solid rgb(209,213,219);
  border-radius: .5rem;
  box-sizing: border-box;
  color: #111827;
  font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: .875rem;
  font-weight: 600;
  line-height: 1.25rem;
  padding: .75rem 1rem;
  text-align: center;
  text-decoration: none #D1D5DB solid;
  text-decoration-thickness: auto;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  cursor: pointer;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-39:hover {
  background-color: rgb(249,250,251);
}

.button-39:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.button-39:focus-visible {
  box-shadow: none;
}

</style>
<template>
  
 <span class="image">
        <img src="logo.png" alt="">
      </span>
<div class="LeftBox1">
    <h2>{{title}}</h2>
    <button class="btn" @click="showForm">Open Form</button>
<div class="container">
     <form v-if="showForm" @submit.prevent="submitForm">
        <div class="row">
            <h3>  1- Project/Problem  Background/Description</h3>
            <div class="input-group input-group-icon">
                <textarea rows="8" cols="70" name="text" placeholder=" Project/Problem  Background/Description ..."  v-model="problem"></textarea>
                <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-half">
                <h4>date of problem occuring</h4>
                <div class="input-group">
                    <div class="col-third"><input v-model="DD" type="text" placeholder="DD" /></div>
                    <div class="col-third"><input v-model="MM" type="text" placeholder="MM" /></div>
                    <div class="col-third"><input v-model="YYYY" type="text" plsaceholder="YYYY" /></div>
                </div>
            </div>
           
        </div>
       
         <div class="col-half">
                <h4>choose a tool </h4>
                <button class="button-39" role="button">5WHY's</button>
                <button class="button-39" role="button">Fishbone</button>
                <br>
                <br>
                <h4>import a file or an image </h4>
         </div>
         <br>
         
         
        <div class="row">
            
             <input type="file" id="attachment" v-on:change="onFileChange">
            <br>
            
        </div>
        <br>
        <div class="row">
            <h4>feel free to leave a comment or a question for fellow members</h4>
            <div class="input-group input-group-icon"><input type="text" placeholder="Comment / question.." v-model="commentaireBackground"/>
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
        </div>
        <br>
        <div class="col-half">
             <button type="submit" class="button-42" role="button" style="margin-left: 120px;">Submit</button>
        </div>
        <br>
        <br>
        
    </form>
</div>
<div v-if="formData">{{formData}}</div>
<!-- <p>Input 1: {{ formData.description }}</p>
      <p>Input 2: {{ formData.commentaireBackground }}</p>
      <p v-if="formData.file">File: <a :href="'/uploads/' + formData.attachment">Download</a></p>-->

</div>
</template>
<script>
import axios from 'axios';

export default {
  props: {
    title: String,
    boxId: String,
  },
  data() {
    return {
      showForm: false,
      formData: null,
      box_id:"",
      problem:"",
      commentaireBackground:"",
      attachment:"",
    };
  },
  methods: {
    showForm() {
      this.showForm = true;
    },
    onFileChange(event) {
      this.form.attachment = event.target.files[0];
    },
    submitForm() {
      let formData = new FormData();
      formData.append('box_id', this.boxId);
      formData.append('problem', this.form.problem);
      formData.append('commentaireBackground', this.form.commentaireBackground);
      if (this.form.attachment) {
        formData.append('attachment', this.form.attachment);
      }
      

      axios.post('/submit-form', formData).then(response => {
    this.formData = response.data;
      })
      .then(response => {
        console.log("sucess")
      })
      .catch(error => {
        console.log("error")
      });
    },
  },
};
</script>
<script>
//dynamically generate the current date and populate it into a form field when the page loads
var today = new Date();
var day = today.getDate();
var month = today.getMonth() + 1; // January is 0
var year = today.getFullYear();

// Format the date as "YYYY-MM-DD"
var formattedDate = year + "-" + month.toString().padStart(2, "0") + "-" + day.toString().padStart(2, "0");

// Set the value of a form field with id "opening_date" to the current date
document.getElementById("opening_date").value = formattedDate;
</script>