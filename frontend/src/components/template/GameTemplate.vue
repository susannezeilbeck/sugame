<template>
    <div class="game">
        <h1>{{ title }}</h1>
        <p>{{ output }}</p>
        <input v-model="inputValue" type="text" placeholder="Enter your input">
        <button @click="sendInput">Send</button>
    </div>
</template>

<script>
export default {
    name: 'GameTemplate',
    data() {
        return {
            title: 'Sugame',
            output: 'test',
            inputValue: ''
        }
    },
    methods: {
        async sendInput() {
            // Send the input to the server
            // You can use axios or any other HTTP library for this
            // Example using axios:
            try {
                const response = await fetch('https://jokes-api-by-api-ninja.p.rapidapi.com/v1/jokes');
                const jokes = await response.json();
                console.log(jokes);
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>

<style scoped>
.game {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    margin-bottom: 20px;
}

input {
    padding: 10px;
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    background-color: #42b983;
    color: white;
    border: none;
    cursor: pointer;
}
</style>
