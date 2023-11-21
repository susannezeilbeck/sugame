<template>
    <div class="wrapper">
        <input ref="input" type="text" v-model="inputValue" class="inputs" :disabled="loading"/>
        <button @click="sendInput" class="buttons" v-if="!loading">Submit</button>
        <button class="buttons" v-if="loading" disabled>Loading...</button>
    </div>
</template>

<script>

export default {
    name: 'InputOrganism',
    props: {
        addMessage: {
            type: Function,
        },
        loading: Boolean,
    },
    data() {
        return {
            inputValue: '',
        };
    },
    methods: {
        async sendInput() {
            // Send the input to the backend
            // You can use axios or any other HTTP library for this
            // Example using axios:
            await this.addMessage({
                content: this.inputValue,
                role: "user"
            });
            this.inputValue = '';
        },
        handleChange(event) {
            this.inputValue = event.target.value;
            // Additional logic or event handling can be added here
        }
    },
};
</script>

<style scoped>
.wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.inputs {
    flex: 1;
    margin-right: 10px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: white;
    color: gray;
    border: 1px solid gray;
    border-radius: 5px;
}

.buttons {
    margin-right: 10px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #42b983;
    color: white;
    border: 1px solid gray;
    border-radius: 5px;
    cursor: pointer;
}
</style>
