require('./bootstrap');
import Vue from 'vue'
import '@iconify/iconify'
import SectionHeader from "./components/SectionHeader";

Vue.component('sectionheader', SectionHeader)

const app = new Vue({
  el: '#app',
  delimiters: ['<%', '%>'],
  data: () => ({
    dialog: false,
    comment_length: 0,
    comment: ''
  }),
  methods: {
      toggleDialog() {
          this.dialog = !this.dialog
      },
      increaseCounter() {
          this.comment_length = this.comment.length
      }
  },
})

const showNavButton = document.querySelector('#show-nav-button');
const mobileNav = document.querySelector('#nav-list')
const closeNav = document.querySelector('#close-nav')

console.log(showNavButton);
closeNav.addEventListener('click', () => {
    mobileNav.classList.add('hidden')
})

showNavButton.addEventListener('click', () => {
    console.log('ok')
    mobileNav.classList.remove('hidden')
})
