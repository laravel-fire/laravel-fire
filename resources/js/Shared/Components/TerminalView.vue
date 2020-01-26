<template>
  <div class="terminal-view card">
    <div id="terminal"></div>
  </div>
</template>

<script>
  import { Terminal } from 'xterm';

  export default {
    beforeMount() {
      let term = new Terminal();
      term.open(document.getElementById('terminal'));
      term.write('Hello from \x1B[1;3;31mxterm.js\x1B[0m $ ');
    }
  }
</script>

<style scoped>

</style>
