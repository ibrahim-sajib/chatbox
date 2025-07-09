import './bootstrap';
import { createApp } from 'vue' 
import ChatBox from './components/ChatBox.vue' 
import Alpine from 'alpinejs'


window.Alpine = Alpine
Alpine.start()

createApp({}) 
    .component('chat-box', ChatBox)
    .mount('#app')