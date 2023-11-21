<template>
  <div class="landing-page">
    <div class="header">
      <a href="/"><h1 class="title">Sugame</h1></a>
      <h1 class="title">></h1>
      <h1 class="title">Romantic</h1>

    </div>
    <div class="description">
      <pre class="text" v-for="content in contents"
        :key="content.id"><b class="role">{{ content.role }}:</b> {{ content.text }}</pre>
    </div>
    <div class="buttons">
      <InputOrganism :addMessage="addMessage" />
    </div>
  </div>
</template>
  
<script>
import InputOrganism from '@/components/organisms/InputOrganism.vue';

export default {
  name: 'RomanticTemplate',
  data() {
    return {
      contents: [
        {
          text: `In this romantic novel, you find yourself in a quaint, picturesque village nestled in the lush, rolling hills of the French countryside. It's early summer, and the air is fragrant with the scent of blooming flowers and freshly baked pastries from the local boulangerie. Cobblestone streets are lined with charming houses adorned with vibrant shutters and cascading flower boxes.

You've just arrived at a cozy, ivy-covered inn, your home for the next few days. As you step out, the warm sunlight gently caresses your face, and a soft breeze carries the distant sound of a violin playing a melodious tune. The village square, a short stroll away, is alive with activity: artists painting, couples strolling, and a small farmers' market offering local delicacies.

As the game master, I ask: What would you like to do next in this idyllic setting? Perhaps explore the village square, visit the local patisserie for a taste of the famous pastries, or maybe strike up a conversation with one of the intriguing locals? The choice is yours!`
          ,
          role: "assistant",
          id: 1
        }]
    }
  },
  methods: {
    addMessage(message) {
      this.contents.push(message)
    }
  },
  components: {
    InputOrganism,
  }
};
</script>
  
<style scoped>
/* Add your custom styles here */
a {
  text-decoration: none;
  color: #42b983;
}

a:hover {
  color: gray;
}

.header {
  display: flex;
  flex-direction: row;
  width:100%;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.landing-page {
  text-align: center;
  display: flex;
  flex-direction: column;
  height: calc(100vH - 60px);
}

.title {
  font-size: 24px;
  font-weight: bold;
}

.description {
  margin-top: 20px;
  font-size: 16px;
  padding: 20px;
  color: black;
  text-align: left;
  height: calc(100vH - 240px);
  overflow-y: auto;
  background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.5)),
  url('@/assets/romantic.png');
  background-size: cover;
  background-position: bottom;
}

.text {
  white-space: pre-line;

}

::-webkit-scrollbar {
  width: 20px;
}

::-webkit-scrollbar-track {
  background-color: transparent;
}

::-webkit-scrollbar-thumb {
  background-color: #d6dee1;
  border-radius: 20px;
  border: 6px solid transparent;
  background-clip: content-box;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #a8bbbf;
}

.buttons {
  margin-top: auto;
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

.role {
  color: gray;
}
</style>
  