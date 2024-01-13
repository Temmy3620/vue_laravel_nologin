import './bootstrap';
import '../css/app.css';

import { createApp } from "vue";
import App from "./component/App.vue";


const app = createApp(App);


app.mount("#app");

// 編集後
// npm run build
// docker-compose up --build
