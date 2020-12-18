<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const Wine = {
        name: "Wine",
        props: {
            wine: Object,
        },
        template: `
            <div class="wine">
                <img :src="wine.imageUrl" :alt="wine.label">
                <span v-if="wine.isNew" class="new-badge">New!</span>
                <div v-if="wine.progress" class="amount-consumed">
                    <progress min="0" max="100" :value="wine.progress"></progress>
                </div>
            </div>
        `
    }
</script>
