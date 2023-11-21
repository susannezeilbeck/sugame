<template>
  <div>
    <input type="text" v-model="inputValue" @input="handleChange" class="inputs"/>
  </div>
</template>

<script>
export default {
  name: "InputAtom",
  data() {
    return {
      inputValue: ""
    };
  },
  methods: {
    handleChange(event) {
      this.inputValue = event.target.value;
      // Additional logic or event handling can be added here
    }
  }
};
</script>

<style scoped>
.inputs {
    margin-right: 10px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: white;
    color: #42b983;
    border-radius: 5px;
}
</style>
