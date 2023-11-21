<template>
  <div class="landing-page">
    <div class="header">
      <h1 class="title">Sugame</h1>
    </div>
    <div class="content">
      <p class="description">Welcome to Sugame, an AI powered game to experience distant worlds in an oldschool text
        adventure style. Please choose your scenario.</p>
      <div class="buttons">
        <a href="fantasy">
          <button class="button">Fantasy</button>
        </a>
        <a href="steampunk">
          <button class="button">Steampunk</button>
        </a>
        <a href="romantic">
          <button class="button">Romantic</button>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LandingPage'
};
</script>

<style scoped>
/* Add your custom styles here */
.landing-page {
  text-align: center;
  display: flex;
  flex-direction: column;
  height: calc(100vH - 60px);
}

.header {
  display: flex;
  flex-direction: row;
  width: 100%;
  align-items: center;
  justify-content: center;
  gap: 10px;
}


.title {
  font-size: 24px;
  font-weight: bold;
  color: #42b983;
}

.description {
  margin-top: 20px;
  font-size: 16px;
  color: gray;
}

.buttons {
  margin-top: 30px;
}

.button {
  margin-right: 10px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #42b983;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
