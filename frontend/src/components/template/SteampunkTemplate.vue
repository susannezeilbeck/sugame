<template>
  <div class="landing-page">
    <div class="header">
      <a href="/"><h1 class="title">Sugame</h1></a>
      <h1 class="title">></h1>
      <h1 class="title">Steampunk</h1>

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
  name: 'SteampunkTemplate',
  data() {
    return {
      contents: [
        {
          text: `In the heart of a bustling steampunk city, you find yourself standing on a cobbled street lined with towering structures of brass and copper. Steam hisses from pipes and gears whirr in the background. Above, airships drift lazily across a smog-filled sky, their propellers churning the air. To your right, a market buzzes with vendors selling clockwork gadgets and exotic spices. To your left, a grand railway station looms, with steam trains arriving and departing, belching clouds of steam.

A mysterious figure in a trench coat and goggles approaches you, holding a sealed envelope. They glance around furtively before handing it to you and disappearing into the crowd. You feel the weight of the envelope in your hands, aware that it could contain anything from a map to a secret invention blueprint, or even an invitation to an underground society.

What would you like to do next?`,
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
  width: 100%;
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
  url('@/assets/steampunk.png');
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
  