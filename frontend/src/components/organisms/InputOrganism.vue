<template>
    <div class="wrapper">
        <input type="text" v-model="inputValue" @input="handleChange" class="inputs" />
        <button @click="sendInput" class="buttons">Submit</button>
    </div>
</template>

<script>

export default {
    name: 'InputOrganism',
    props: {
        addMessage: {
            type: Function,
        },
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
            this.addMessage({
                text: this.inputValue,
                role: "user",
                id: 3
            })

            try {
                const response = await fetch('/api/endpoint');
                console.log(response.data);
            } catch (error) {
                console.error(error);
            }
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
