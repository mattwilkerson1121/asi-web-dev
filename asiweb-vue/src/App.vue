<template>
  <div id="app">
    <img src="./assets/logo.png">
    <router-link :to="{ name: 'Hello' }">Home</router-link>
    <router-link to="/about-us">About</router-link>
    <router-view></router-view>
  </div>
</template>