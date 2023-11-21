<template>
  <currentPage msg="Welcome to Your Vue.js App"/>
</template>

<script>
import { ref } from 'vue'
import LandingPage from './components/template/LandingPage.vue'
import FantasyTempate from './components/template/FantasyTemplate.vue'
import SteampunkTemplate from './components/template/SteampunkTemplate.vue'
import RomanticTemplate from './components/template/RomanticTemplate.vue'

let currentPage = LandingPage

const currentPath = ref(window.location.pathname)

if(currentPath.value == '/fantasy') {
  changeView(FantasyTempate)
} else if(currentPath.value == '/steampunk') {
  changeView(SteampunkTemplate)
} else if(currentPath.value == '/romantic') {
  changeView(RomanticTemplate)
}

function changeView(page) {
  currentPage = page
}

export default {
  name: 'App',
  components: {
    currentPage,
  }
}
</script>

<style>
body {
  display: block;
  box-sizing: border-box;
  padding: 20px;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
