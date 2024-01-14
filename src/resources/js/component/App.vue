<template>
  <div>
    <button type="button" class="btn btn-secondary" @click="addSearchForm">+ add search words</button>
    <div v-for="(searchForm, index) in searchForms" :key="index">
        <div class="input-group mt-3">
          <input type="text" class="form-control" v-model="searchForm.value" placeholder="Search word" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2" @click="removeSearchForm(index)">Delete</button>
        </div>
    </div>
  </div>
</template>

<script setup>
    import { ref } from 'vue';
    import axios from 'axios';

    const searchForms = ref([]);

    const props = defineProps([
      'inputs: Array'
    ]);

    const addSearchForm = () => {
      searchForms.value.push({ value: '' });
    };

    const removeSearchForm = (index) => {
      searchForms.value.splice(index, 1);
    };

    const submitData = async () => {
      try {
        const response = await axios.post('thread/search', { searchForms: searchForms.value });
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    };
</script>