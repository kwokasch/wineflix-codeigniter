<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const Category = {
        name: "Category",
        props: {
            wines: Array,
            classLabel: String,
        },
        template: `
        <section class="category">
            <h2>{{ classLabel }}</h2>
            <ul>
                <li v-for="wine in wines" :key="wine.id">
                    <wine :wine="wine" />
                </li>
             </ul>
          </section>
        `
    }
</script>
