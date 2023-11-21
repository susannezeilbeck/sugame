const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    proxy: {
      "/api": {
        target: "http://php:80/test",
        secure: false,
        changeOrigin: true
      }
    }
  }
})
