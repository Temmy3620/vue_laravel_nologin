<template>
    <div>
    <button type="button" class="btn btn-secondary mt-3" @click="addSearchForm">+ add search word</button>
    <div v-for="(searchForm, index) in searchForms" :key="index">
        <!-- ここに各inputフォームのマークアップを追加 -->
        <!--<input type="text" class="mt-2" v-model="searchForm.value" placeholder="Search term">-->
        <div class="input-group mt-3">
            <input type="text" class="form-control" v-model="searchForm.value" placeholder="Search word" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" @click="removeSearchForm(index)">Delete</button>
        </div>
    </div>
  </div>
</template>

<script setup>
    import { ref } from 'vue';

    const searchForms = ref([]);

    const addSearchForm = () => {
      searchForms.value.push({ value: '' });
    };

    const removeSearchForm = (index) => {
      searchForms.value.splice(index, 1);
    };
</script>