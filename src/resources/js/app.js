import './bootstrap';
import '../css/app.css';

import { createApp } from "vue";
import App from "./component/App.vue";

// App.vue をルートコンポーネントとして使用してアプリケーションを作成
const app = createApp(App);


app.mount("#app");
