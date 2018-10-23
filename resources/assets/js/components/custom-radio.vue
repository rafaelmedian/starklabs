<template lang="html">
  <div id="app">
    <p class="info">Please select a number</p>
      <custom-radio v-model="selectedNumber" :items=numbers> </custom-radio>
      <p class="result">Selected number: {{ this.selectedNumber }}
    </p>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
