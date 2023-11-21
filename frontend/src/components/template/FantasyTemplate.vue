<template>
    <div class="landing-page">
        <div class="header">
            <a href="/">
                <h1 class="title">Sugame</h1>
            </a>
            <h1 class="title">></h1>
            <h1 class="title">Fantasy</h1>

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
    name: 'FantasyTemplate',
    data() {
        return {
            contents: [
                {
                    text: `Welcome to the realm of Eldoria, a land of ancient magic and sprawling landscapes. You find yourself in the bustling city of Meridian, a crossroads of diverse cultures and trade. The city is known for its towering spires, intricate stone pathways, and a grand marketplace filled with exotic goods from all over the world.

As the sun sets, the city's lanterns begin to glow, casting a warm light over the cobblestone streets. The air is filled with the sounds of distant music and the chatter of the city's inhabitants. In the center of the city lies the majestic Palace of Twilight, home to the enigmatic High Sorceress, rumored to possess knowledge of a powerful artifact.

Nearby, the Whispering Woods beckon adventurers with their ancient mysteries, said to hide both peril and fortune in their depths. Legends speak of an old ruin within the woods, where a forgotten magic awaits those brave enough to discover it.

As the game master, I ask: What do you choose to do next in this intriguing world of Eldoria? Will you explore the mysteries of the Whispering Woods, seek an audience with the High Sorceress in the Palace of Twilight, delve into the depths of the bustling marketplace, or embark on an entirely different adventure? The choice is yours.`,
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
    padding: 20px;
    font-size: 16px;
    color: black;
    text-align: left;
    height: calc(100vH - 240px);
    overflow-y: auto;
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.5)),
    url('@/assets/fantasy.png');
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
  