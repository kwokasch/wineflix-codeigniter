<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const PrimaryAction = {
        name: "PrimaryAction",
        props: {
            primaryAction: Object,
        },
        template: `
        <button class="primary-action">
          <span>{{ primaryAction.symbol }}</span>
          <span>{{ primaryAction.label }}</span>
        </button>
`
    }
</script>
