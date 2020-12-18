<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const SecondaryAction = {
        name: "SecondaryAction",
        props: {
            secondaryAction: Object,
        },
        template: `
        <button class="secondary-action">
          <span>{{ secondaryAction.symbol }}</span>
          <span>{{ secondaryAction.label }}</span>
        </button>
`
    }
</script>
