<style>
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
  height: 50px;
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
  width: 200px;
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
.progress {
  position: relative;
  width: 210px;
  height: 30px;
  background: #9cbab4;
  border-radius: 5px;
  overflow: hidden;
}

.progress__fill {
  width: 0%;
  height: 100%;
  background: #009579;
  transition: all 0.2s;
}

.progress__text {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  font: bold 14px "Quicksand", sans-serif;
  color: #ffffff;
}
</style>
<template>
    <div class=" RightBox1">
    <h2>{{ title }}</h2>
    <table>
      <thead>
        <tr>
          <th>Root Cause</th>
          <th>Action</th>
          <th>Impact</th>
          <th>Owner</th>
          <th>Start Date</th>
          <th>Due Date</th>
          <th>Methodology</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(formData, index) in formDatas" :key="formData.id">
          <td>{{ formData.title }}</td>
          <td>{{ formData.impact }}</td>
          <td>{{ formData.owner }}</td>
          <td>{{ formData.start_date }}</td>
          <td>{{ formData.due_date }}</td>
          <td>{{ formData.is_complex }}</td>
          <td> 
            <button v-on:click="editFormData(index)">Edit</button>
            <button v-on:click="editFormData(index)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    <button class="btn" @click="showForm">Open Form</button>
    <form v-if="show" v-on:submit.prevent="submitForm()">
    <h2>3-ActionPlan</h2>
      <h3>write you're cause and it's first action</h3>
        <div class="row">
        <label for="parentInput">RootCauses:</label>
        <input type="text" id="parentInput" name="parentInput" v-model="formInput1">
      
        <fieldset>
          <legend>ActionPlan:</legend>
          <label for="childInput1">Action:</label>
          <input type="text" id="childInput1" name="childInput1" v-model="formInput2">
      
          <label for="childInput2">impact:</label>
          <input type="text" id="childInput2" name="childInput2" v-model="formInput3">

          
          <label for="childInput2">owner :</label>
          <input type="text" id="childInput3" name="childInput2" v-model="formInput3">
          
          <label for="childInput2">start date:</label>
          <input type="date" id="childInput4" name="childInput2" v-model="formInput4"> 
 
          <label for="childInput2">due date:</label>
          <input type="date" id="childInput4" name="childInput2" v-model="formInput5">
         <br>
         <br>
         <div class="row" style="display: inline-block ;"  name="is_complexe" >
         <div>
          <input type="checkbox" id="checkbox1" v-model="formInput6">
          <label for="checkbox1">DMAIC</label>
        </div>
        <div>
          <input type="checkbox" id="checkbox2" v-model="formInput7">
          <label for="checkbox2">just do it</label>
        </div>
        </div>
        <br> <br>
          <div class="progress" >
            <div class="progress__fill"></div>
            <span class="progress__text">0%</span>
          </div>
        </fieldset>
        <br>
        <div class="row">
          <div class="col-half" >
              <a href="Untitled-1.html" class="button-42" style="text-decoration:none;padding-top: 5px;">Close without saving</a>
         </div>
         <div class="col-half" >
      <button id="close" class="button-42" role="button" style="margin-left: 20px;">Submit</button>
         </div>
 
      </div>
    </div>
     </form>
     <div v-if="formData">
        
    </div>
    </div>
</template>
<script "allowjs":true>
export default {
    props: {
        title: String,
        boxId: String,
      },
  data() {
    return {
      title: 'Title and team mates',
      box_id:'',
      formDatas: [],
        show: false,
        formInput2: '',
        formInput3: '',
        formInput4: '',
        formInput5: '',
        formInput6: false,
        formInput7: false,
        currentFormDataIndex: null,
      };
    },
  
  mounted() {
      this.getFormData();
    },
  
  methods: {
    showForm() {
        this.showForm = true; 
    },
    getFormData() {
        axios.get('/api/form-data')
          .then(response => {
            this.formDatas = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      },
      submitForm() {
        if (this.currentFormDataIndex === null) {
          axios.post('/api/form-data', {
            action: this.formInput2,
            impact: this.formInput3,
            owner: this.formInput4,
            startDate: this.formInput5,
            dueDate: this.formInput6,
            dmaic: this.formInput7,
            justDoIt: this.formInput8,
          })
          .then(response => {
            this.formDatas.push(response.data);
            this.formInput2 = '';
            this.formInput3 = '';
            this.formInput4 = '';
            this.formInput5 = '';
            this.formInput6 = false;
            this.formInput7 = false;
            this.show = false;
          })
          .catch(error => {
            console.log(error);
          }); 
        } else {
          const formDataId = this.formDatas[this.currentFormDataIndex].id;
          axios.put(`/api/form-data/${formDataId}`, {
            title: this.formInput2,
            impact: this.formInput3,
            owner: this.formInput4,
            start_date: this.formInput5,
            due_date: this.formInput6,
            dmaic: this.formInput7,
            justDoIt: this.formInput8,
          })
          .then(response => {
            this.formDatas.splice(this.currentFormDataIndex, 1, response.data);
            this.formInput2 = '';
            this.formInput3 = '';
            this.formInput4 = '';
            this.formInput5 = '';
            this.formInput6 = false;
            this.formInput7 = false;
            this.show = false;
            this.currentFormDataIndex = null;
          })
          .catch(error => {
            console.log(error);
          });
        }
      },
      editFormData(index) {
        const formData = this.formDatas[index];
        this.formInput2 = formData.title;
        this.formInput3 = formData.impact;
        this.formInput4 = formData.owner;
        this.formInput5 = formData.start_date;
        this.formInput6 = formData.due_date;
        this.formInput7 = formData.dmaic;
        this.formInput8 = formData.justDoIt;
        this.show = true;
        this.currentFormDataIndex = index;
      },
      deleteFormData(index) {
        const formDataId = this.formDatas[index].id;
        axios.delete(`/api/form-data/${formDataId}`)
          .then(response => {
            this.formDatas.splice(index, 1);
          })
          .catch(error => {
            console.log(error);
          });
      },
    },
  
};
</script>